<?php

namespace App\Http\Controllers;

use App\Authorizable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;
use DB;
use App\ProfessionalIndustry;
use App\ProfessionalQuality;
use App\ProfessionalType;
use App\Project;
use App\ProjectAssignment;
use App\User;
class ProjectController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $industries=ProfessionalIndustry::where('status','0')->get();
        $qualities=ProfessionalQuality::where('status','0')->get();
        $parentTypes=ProfessionalType::where('status','0')->where('parent_id','0')->get();
        return view('frontEnd.post-project',compact('industries','qualities','parentTypes'));
    }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // echo public_path()."/images/projectimage/"; die;
        //print_r($request->all()); die;
       $this->validate($request, [
        'name'                => 'required',
        'address'                => 'required',
        'professional_type'                => 'required',
        'professional_industry'                => 'required',
        'clients_type'                => 'required',
        'budget'                => 'required',
        'payout_option'                => 'required',
        'professional_quality'                => 'required',
        'time_duration'                => 'required',
        'description'                => 'required',
      
       
       
      ]);
       
        DB::beginTransaction();
        try {
           
       $insertData= new Project();
      
       $insertData->name                =$request->name;  
       $insertData->address         =$request->address;  
       $insertData->professional_type         =$request->professional_type;  
       $insertData->professional_industry         =$request->professional_industry;  
       $insertData->clients_type        =$request->clients_type;  
       $insertData->budget =$request->budget;  
       $insertData->payout_option           =$request->payout_option;  
       $insertData->professional_quality         = implode(',',$request->professional_quality);  
       $insertData->time_duration         =$request->time_duration;  
       $insertData->description         =$request->description;  
       $insertData->added_by              =\Auth::user()->id;
       $insertData->save();
          $last_id = $insertData->id;
      
        if(!empty($request->attachment)) {
            $projectAttach = 'plan-' . $last_id.$request->file('attachment')->getClientOriginalExtension();
            $request->file('attachment')->move(public_path()."/images/projectimage/", $projectAttach);
            $detail = Project::where('id',$last_id)->first();
            $detail->attachment = $projectAttach;
            $detail->save();
            
         }
       
        

        } catch (\Throwable  $e) {
            DB::rollback();
            // something went wrong
             return redirect()->back()->with('error', 'Somthing went wrong!!');
             //throw $e;

        }
        DB::commit();
       return redirect()->back()->with('success', 'Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item=  Project::find($id);
        $industries=ProfessionalIndustry::where('status','0')->get();
        $qualities=ProfessionalQuality::where('status','0')->get();
        $parentTypes=ProfessionalType::where('status','0')->where('parent_id','0')->get();
        return view('frontEnd.edit-post-project',compact('item','industries','qualities','parentTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name'                => 'required',
        'address'                => 'required',
        'professional_type'                => 'required',
        'professional_industry'                => 'required',
        'clients_type'                => 'required',
        'budget'                => 'required',
        'payout_option'                => 'required',
        'professional_quality'                => 'required',
        'time_duration'                => 'required',
        'description'                => 'required',
      
       
       
      ]);
       
        DB::beginTransaction();
        try {
           
       $insertData=  Project::find($id);
      
       $insertData->name                =$request->name;  
       $insertData->address         =$request->address;  
       $insertData->professional_type         =$request->professional_type;  
       $insertData->professional_industry         =$request->professional_industry;  
       $insertData->clients_type        =$request->clients_type;  
       $insertData->budget =$request->budget;  
       $insertData->payout_option           =$request->payout_option;  
       $insertData->professional_quality         = implode(',',$request->professional_quality);  
       $insertData->time_duration         =$request->time_duration;  
       $insertData->description         =$request->description;  
       $insertData->added_by              =\Auth::user()->id;
       $insertData->save();
          $last_id = $insertData->id;
      
        if(!empty($request->attachment)) {
        $projectAttach = 'plan-' . $last_id.$request->file('attachment')->getClientOriginalExtension();
        $request->file('attachment')->move(public_path()."/images/projectimage/", $projectAttach);
        $detail = Project::where('id',$last_id)->first();
        $detail->attachment = $projectAttach;
        $detail->save();
            
         }
       
        

        } catch (\Throwable  $e) {
            DB::rollback();
            // something went wrong
             return redirect()->back()->with('error', 'Somthing went wrong!!');
             //throw $e;

        }
        DB::commit();
       return redirect()->back()->with('success', 'updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( Project::findOrFail($id)->delete() ) {
            return redirect()->back()->with('success', 'deleted Successfully');
            
        } else {
            return redirect()->back()->with('success', 'Not deleted');;
           
        }

        
    }


    public function ongoingProject()
    {
      $result=Project::where('status','inprocess')->paginate('10');
        return view('frontEnd.ongoing-projects',compact('result'));
    }
    
   public function pastProject()
    {
         $result=Project::where('status','completed')->paginate('10');
        return view('frontEnd.past-projects',compact('result'));
    } 
    public function myProject()
    {
        $result=Project::where('added_by', Auth::id())->paginate('10');
        return view('frontEnd.my-projects',compact('result'));
    }
    public function userProject()
    {
        $result = ProjectAssignment::where('user_id', Auth::id())->where('status','accept')->paginate('10');
        return view('frontEnd.user-projects',compact('result'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy_assignment($id)
    {
        if( ProjectAssignment::where('id',$id)->update(['status'=>'reject']) ) {

            return redirect()->back()->with('success', 'Rejected Successfully');
            
        } else {
            return redirect()->back()->with('success', 'Not deleted');;
           
        }

        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function accept_assignment(Request $request)
    {
        $id = $request->input('project_id');
        $notification = ProjectAssignment::find($id);

        
        if( ProjectAssignment::where('id',$id)->where('user_id',Auth::id())->update(['status'=>'accept']) ) {

            /*Deduct Credit after accept project request*/

            User::where('id',Auth::id())
            ->update([
              'account_credits'=> DB::raw('account_credits -1')
            ]);


            return response()->json(['status' => 'success', 'message' => 'Accepted','redirect_url'=>route('project.user.details',['id'=>$notification->project_id])]);
            
        } else {
            return response()->json(['status' => 'failed', 'message' => 'Pleas try again.']);
           
        }

        
    }

    public function project_details(Request $request,$id)
    {
         $project=  Project::with(['assignedUser'])->find($id);
         $industries=ProfessionalIndustry::where('status','0')->get();
         $qualities=ProfessionalQuality::where('status','0')->get();
         $parentTypes=ProfessionalType::where('status','0')->where('parent_id','0')->get();
         $assined_users = array();
        // print_r($project->assignedUser); die;

        foreach($project->assignedUser as $k=>$user){
       
        array_push($assined_users,$user->user_id);
      }
      $assined_users_detail = $providers=User::whereIn('id',$assined_users)->get();
        return view('frontEnd.project-details',compact('project','industries','qualities','parentTypes','assined_users_detail'));
    }

    static function getPendingProjectCount()
    {

         return ProjectAssignment::where('user_id',Auth::id())->where('status','pending')->count();
    }
    


}
