<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
      $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
      if (Auth::check()){
        $userid = Auth::user()->id;
      }

      //Statics data for admin dashboard
        $customersCount = DB::table('customers')->count('id');
        $filesCount = DB::table('files')->count('id');
        $contractsCount = DB::table('contracts')->count('id');
        $projectsCount = DB::table('projects')->count('id');

        // Statics data for accounter dashboard
        $allProjectsCount = DB::table('projects')->count('id');
        $completedProjects = DB::table('projects')->where('status', '=', 1)->count('id');
        $uncompletedProjects = DB::table('projects')->where('status', '=', 2)->count('id');

        // Statics data for advisor dashboard
        $myCustomersCount = DB::table('customers')->where('user_id', $userid)->count('id');
        $myFilesCount = DB::table('files')->where('user_id', $userid)->count('id');
        $myContractsCount = DB::table('contracts')->where('user_id', $userid)->count('id');

        // My tasks
        $tasksCount = DB::table('tasks')->where('status', 1)->where('user_id', $userid)->count('id');
        $tasks = DB::table('tasks')->where('status', 1)->where('user_id', $userid)->latest()->get();

        return view('home',
         compact(
         'customersCount',
         'filesCount',
         'contractsCount',
         'projectsCount',
         'allProjectsCount',
         'completedProjects',
         'uncompletedProjects',
         'myCustomersCount',
         'myFilesCount',
         'myContractsCount',
         'tasksCount',
         'tasks'
          ));
    }

    public function test() {
        return view('test');
    }

    



}


// <!--
// ***********************************************************
// * ******************************************************* *
// * * Author: Rahmatullah Bizhan                          * *
// * * Email: rahmatullahbizhan@gmail.com                  * *
// * * Please Kindly Report any error or bug you may face. * *
// * * Contact me if you have any questions :)             * *
// * ******************************************************* *
// ***********************************************************
// -->
