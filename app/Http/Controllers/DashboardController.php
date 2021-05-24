<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\Projects;
use App\ProjectAssignment;


class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }

    public function userdashboard()
    {
        $data =array();
        $data['myprojects'] = ProjectAssignment::where('user_id',Auth::id())->where('status','accept')->count();
        return view('frontEnd.userdashboard',$data);
    }

    public function mynotification()
    {
        $data =array();
        $data['notifications'] = ProjectAssignment::with(['author','project'])->where('user_id',Auth::id())->where('status','pending')->get();
        return view('frontEnd.my-notification',$data);
    }

     
}
