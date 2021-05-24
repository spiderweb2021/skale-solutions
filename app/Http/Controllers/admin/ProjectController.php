<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
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
        $result=Project::paginate('10');
       return view('admin.projects.index',compact('result'));
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
       

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    	$project= Project::with('assignedUser')->find($id);        
        $assined_users = array();

        foreach($project->assignedUser as $k=>$user){       
			array_push($assined_users,$user->user_id);
		}
		$assined_users_detail = $providers=User::whereIn('id',$assined_users)->get();
                                
       
	   $project=Project::find($id);
       $providers=User::where('expertise',$project->professional_type)->get();
       return view('admin.projects.view',compact('providers','project','assined_users','assined_users_detail'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
    /**
     * Assign project to the user
     *
     * @param  \App\Post  $post
     * @method POST
     * @return http response
     */

    public function project_assign(Request $request)
    {

            $project_id  = $request->input('project_id');
            $total_count = ProjectAssignment::where('project_id',$project_id)->count('id');
            if($total_count >= 3){

                return redirect()->back()->with('error', 'Maximum assignment limit exceeded.');
            }
            $projectAssignment = new ProjectAssignment();
            $projectAssignment->project_id = strip_tags($request->input('project_id'));
            $projectAssignment->user_id = strip_tags($request->input('user_id'));
            $projectAssignment->added_by = Auth::id();

            if($projectAssignment->save()){

                return redirect()->back()->with('success', 'Project assigned Successfully.');

            }else {

                return redirect()->back()->with('error', 'Something went wrong, Please try again.');
           
        }
        }

}
