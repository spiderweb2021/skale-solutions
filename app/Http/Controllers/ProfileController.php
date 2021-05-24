<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProfessionalIndustry;
use App\ProfessionalQuality;
use App\ProfessionalType;
use DB;

class ProfileController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $userdata = User::find(\Auth::user()->id);
       $industries=ProfessionalIndustry::where('status','0')->get();
        $qualities=ProfessionalQuality::where('status','0')->get();
         $parentTypes=ProfessionalType::where('status','0')->where('parent_id','0')->get();
        // $parentTypes=ProfessionalType::where('status','0')->get();
        return view('frontEnd.my-profile',compact('userdata','industries','parentTypes','qualities'));
        
    }

    public function postProfile(Request $request,$id)
    {
        $this->validate($request, [
                       'name'      => 'required',
           'email' => 'required|email|unique:users,email,'.$id,
            'phone'    => 'required|regex:/[6789]\d{9}/|unique:users,phone,'.$id,
               
        ]);
        DB::beginTransaction();
        try {
           
       $insertData=  User::find($id);
      
       $insertData->name                =$request->name;  
       $insertData->email         =$request->email;  
       $insertData->phone         =$request->phone;  
       $insertData->pincode         =$request->postalcode;  
       $insertData->language        =$request->language;  
       $insertData->business_name =$request->business_name;  
       $insertData->professional_industry           =$request->professional_industry;  
       $insertData->expertise           =$request->expertise;  
       if($request->password)
       {
         $insertData->password = bcrypt($request->password);
       }
       $insertData->save();
        
        if(!empty($request->attachment)) {
             $projectAttach = 'provider-' . $id.$request->file('attachment')->getClientOriginalExtension();
            $request->file('attachment')->move(public_path()."/attachment/", $projectAttach);
            
         }
       
        $detail = User::where('id',$id)->first();
        $detail->attachment = $projectAttach;
        $detail->save();

        } catch (\Throwable  $e) {
            DB::rollback();
            // something went wrong
             return redirect()->back()->with('error', 'Somthing went wrong!!');
             //throw $e;

        }
        DB::commit();
       return redirect()->back()->with('success', 'Updated Successfully');

        
    }
}
