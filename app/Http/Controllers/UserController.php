<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\User;

use App\State;

use Spatie\Permission\Models\Role;

use Spatie\Permission\Models\Permission;

use DB;

use Hash;

use App\Rules\MatchOldPassword;



class UserController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $data = User::orderBy('id','DESC')->paginate(5);

        return view('users.index',compact('data'))

        ->with('i', ($request->input('page', 1) - 1) * 5);

    }

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $roles = Role::all();

        return view('users.create',compact('roles'));

    }

    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(Request $request)

    {

        $this->validate($request, [

            'name' => 'required',

            // 'uname' => 'required',

            'gender' => 'required',

            'status' => 'required',

            'email' => 'required|email|unique:users,email',

            'phone' => 'required',

            'password' => 'required|same:confirm-password',

            'roles' => 'required'

        ]);

        $input = $request->all();

        $input['password'] = Hash::make($input['password']);
        $input['email_verified'] = '1';

        $user = User::create($input);

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')

        ->with('success','User created successfully');

    }

    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        $user = User::find($id);

        return view('users.show',compact('user'));

    }

    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        $user = User::find($id);

        $states = State::all();

        $roles = Role::all();

        $userRole = $user->roles->pluck('name','name')->all();

        $roleId = $user->roles->pluck(['id']);

        $permission = Permission::get();

        $rolePermissions = DB::table("role_has_permissions")

        ->join('permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')

        ->whereIn("role_has_permissions.role_id",$roleId)

        ->pluck('permissions.name','role_has_permissions.permission_id')

        ->all();

   //print_r( $rolePermissions); die;

        return view('users.edit',compact('user','roles','userRole','rolePermissions','permission','states'));

    }

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, $id)

    {

//print_r($request->all()); die;

        $this->validate($request, [

          'name' => 'required',

          // 'uname' => 'required',

          'gender' => 'required',

          'status' => 'required',

          'email' => 'required|email|unique:users,email,'.$id,

          'phone' => 'required',

          'password' => 'same:confirm-password',

          'roles' => 'required'

      ]);

        $input = $request->all();

        if(!empty($input['password'])){ 

            $input['password'] = Hash::make($input['password']);

        }else{

            $input = array_except($input,array('password'));    

        }
        //$input['email_verified'] = '1';
        $user = User::find($id);

        $user->update($input);

        DB::table('model_has_roles')->where('model_id',$id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')

        ->with('success','User updated successfully');

    }

    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        User::find($id)->delete();

        return redirect()->route('users.index')

        ->with('success','User deleted successfully');

    }

    public function updateOther(Request $request, $id)

    {

//print_r($request->all()); die;

        $this->validate($request, [

          'address' => 'required',

          'city' => 'required',

          'state' => 'required',

          'pincode' => 'required',

      ]);

        $user = User::find($id);

        

        $user->address = $request->address;

        $user->city = $request->city;

        $user->state = $request->state;

        $user->pincode = $request->pincode;

        $user->country = $request->country;

       

        $user->save();

        return redirect()->route('users.index')

        ->with('success','User updated successfully');

    }

    public function getProfile()

    {

       $user = User::find(\Auth::user()->id);

       $states = State::all();

       return view('setting',compact('user','states'));

   }

   public function updateGenral(Request $request, $id)

   {

       $this->validate($request, [

        'name' => 'required',

        // 'uname' => 'required',

        'email' => 'required|email|unique:users,email,'.$id,

        'phone' => 'required',

        'dob' => 'required',

    ]);

       $user = User::find($id);

       $user->name = $request->name;

       // $user->uname = $request->uname;

       $user->email = $request->email;

       $user->phone = $request->phone;

       $user->dob = $request->dob;

       $user->save();

       $last_id = $user->id;

       if (!empty($request['propic'])) {

        $docName = 'user-' . $last_id . '-'.date('m-d-Y-His').'.' . $request->file('propic')->getClientOriginalExtension();

        $request->file('propic')->move(base_path() . '/public/user/', $docName);

    } else {

        $detail = User::select('profile_pic')->where('id', '=', $last_id)->first();

        $docName = $detail->profile_pic;

    }

    $detail = User::find($last_id);

    $detail->profile_pic = $docName;

    $detail->save();

    return redirect()->route('setting')

    ->with('success','User updated successfully');

}

public function updateInfo(Request $request, $id)

{

  $this->validate($request, [

      'address' => 'required',

      'city' => 'required',

      'state' => 'required',

      'pincode' => 'required',

  ]);

  $user = User::find($id);

  $user->address = $request->address;

  $user->city = $request->city;

  $user->state = $request->state;

  $user->pincode = $request->pincode;

  $user->country = $request->country;

  
  $user->save();

  return redirect()->route('setting')

  ->with('success','User updated successfully');

}







public function changePassword(Request $request)

    {

        $request->validate([

            'current_password' => ['required', new MatchOldPassword],

            'new_password' => ['required'],

            'new_confirm_password' => ['same:new_password'],

        ]);

   

        User::find(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);

   

         return redirect()->route('setting')

  ->with('success','User updated successfully');

    }

}