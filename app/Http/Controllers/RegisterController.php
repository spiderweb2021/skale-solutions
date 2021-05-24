<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Validator;
use DB;
use Session;
use Illuminate\Foundation\Auth\RegistersUsers;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Mail;
class RegisterController extends Controller
{
    public function userRegister(Request $request) { 
        //*********************validation start************************//
        $validator      = \Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email|unique:users',
            //'mobile'    => 'required|unique:users,phone|regex:/[6789]\d{9}/',
            'mobile'    => 'required',
            'password'  => 'required',          
        ]);

            if ($validator->fails())
            {
                return response()->json(['errors'   =>  $validator->errors()->all()]);
            }
             DB::beginTransaction();
        try {
            $code               = str_random(30);
            $new_user           = new User();
            $new_user->name     = $request['name'];
            $new_user->email    = $request['email'];
            $new_user->phone    = $request['mobile'];
            $new_user->password = bcrypt($request['password']);
            $new_user->code = $code;
            //$new_user->email_verified = '1'; // email working
            // $new_user->usertype =$request['usertype'];
            if($request['usertype'] ==  'client')
            {
                $roletype='2';
            }
            else
            {
                $roletype='3';
            }
            $new_user->save();
            $lastId = $new_user->id;
            $user   =User::find($new_user->id);
            $this->syncPermissions($roletype, $user);
            $this->emailActivationHtmlSend($request['name'], $request['email'], $code);
            //Auth::loginUsingId($lastId, true);
          
           } catch (\Throwable  $e) {
            DB::rollback();
            // something went wrong
             return response()->json(['error'=>'Somthing went wrong!!']);
             
            // throw $e;

        }
        DB::commit();
         return response()->json(['success'=>'You have successfully registered ! An Activation link has been sent to your Email id']);
    }


    private function syncPermissions($roles, $user)
    {
        // Get the submitted roles       
        $permissions = array();
        // Get the roles
        $roles = Role::find($roles);
        // check for current role changes
        if( ! $user->hasAllRoles( $roles ) ) {
            // reset all direct permissions for user
            $user->permissions()->sync([]);
        } else {
            // handle permissions
            $user->syncPermissions($permissions);
        }

        $user->syncRoles($roles);
        return $user;
    }


     public  function emailActivationHtmlSend($name, $toEmail, $code) {
        $emailHtml = getEmailTemplateById(1, 'template');
        $subject = getEmailTemplateById(1, 'subject');
        $emailHtml = str_replace('[#NAME#]', $name, $emailHtml);
        $emailHtml = str_replace('[#CONFIRMATIONCODE#]', $code, $emailHtml);
        $emailHtml = str_replace('[#ACTIVATIONURL#]', url('confirmemail'), $emailHtml);
        $sendtext      =   $emailHtml;        
        $emailDetail   =   array($toEmail);
         Mail::send(['html'  =>  'emails.send_email'], ['content' => $sendtext], function ($message) use($emailDetail, $subject){
            $message->from('noreply@skale-solutions.com', 'skalesystem');
            $message->to($emailDetail);
            $message->subject($subject);            
        });
        return true;
    }

    public function userLogin(Request $request)
    {
        //*********************validation start************************//
        $validator      = \Validator::make($request->all(), [
            'email'     => 'required',
           // 'email'   => 'required|email',
            'password'  => 'required',
          
        ],['email.required'=>'You cant leave Email/mobile field empty']);
        if ($validator->fails())
        {
            return response()->json(['errors'=>$validator->errors()->all()]);
        }
        $user_detail = User::where('phone', '=', $request['email'])->orWhere('email', '=', $request['email'])->first();
        
        if(count($user_detail)>0)
        {
            $userid = $user_detail->id;  
           if($user_detail->email_verified=='0')
            
            {
                return response()->json(['error'=>'You account is not verified']);
            }
            else
            {        
            if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']], 0) || Auth::attempt(['phone' => $request['email'], 'password' => $request['password']], 0)) 
            {
               
                    return response()->json(['success'  =>  'You have successfully Logged in','type'=>$user_detail->roles->pluck(['id'])->first()]);
            }  
            else
            {
                return response()->json(['error'   =>  'Wrong Credentials']);
            }
            }           
         }
         else
         {
            return response()->json(['error'   =>  'Wrong Credentials']);
         }  
    }

       public function confirmemail($code) {
        if (!$code) {
            return redirect()->route('home')->with([
                        'email_varify' => 'Invalid Confirmation Code',
                        'type' => 'error',
                        'title' => 'Error'
            ]);
        }
        $user = User::where('code', $code)->first();
        if (!$user) {
            return redirect()->route('home')->with([
                        'email_varify' => 'There is some error while verfying your account. Please contact to administrator',
                        'type' => 'error',
                        'title' => 'Error'
            ]);
        }
        $user->email_verified = '1';
        $user->email_verified_at = \Carbon\Carbon::now();
        $user->status = 'active';
        $user->code = null;
        $user->save();
        
        return redirect()->route('home')->with([
                        'email_varify' => 'Email Confirmed successfully. Login to your account !',
                        'type' => 'success',
                        'title' => 'Success'
            ]);
    }


     public function changePassword(Request $request) {
         $this->validate($request, [
        'password' => 'required|confirmed|min:6',
      
        
      ]);
        $user = User::find(\Auth::user()->id);
        $user->password = bcrypt($request['password']);
        $user->save();
         return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function logout() {
        if (Auth::guest()) {
            return redirect()->route('home');
        } else {
            Auth::logout();
            return redirect()->route('home')->with([
                        'message' => 'Logged out successfully !'
            ]);
        }
    }

   
     
}