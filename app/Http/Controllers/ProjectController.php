<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Project;
use App\Customer;
use App\Project_Expense;
use DB;


class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $projects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as project_id', 'cus.*')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();

      // $projects = Project::latest()->get();
      return view('project.projects', ['projects'=>$projects]);
    }


    public function completedProjects()
    {
      $projects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.*')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      // $projects = Project::latest()->get();
      return view('project.completedProjects', ['projects'=>$projects]);
    }


    public function addProject()
    {
      $customers = Customer::where('customer_type', 1)->latest()->get();
      return view('project.addProject', compact('customers'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'customer_id'=>'required|max: 40',
            'project_type'=>'required|max: 40',
            'location'=>'required',
            'space'=>'required',
            'start_date'=>'required',
            'end_date'=>'required|after:start_date',

    ]);
      Project::create([
          'user_id' => Auth::user()->id,
          'date' => request('date'),
          'customer_id' => request('customer_id'),
          'project_type' => request('project_type'),
          'location' => request('location'),
          'space' => request('space'),
          'start_date' => request('start_date'),
          'end_date' => request('end_date'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'عملیات موافقانه اجرا شد ');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }

      public function projectExpense($id) {
       $projectExpenses = Project_Expense::where('project_id', $id)->latest()->get();
       $project = DB::select('select * from projects where id = ?',[$id]);
       return view('project.projectExpens',['project'=>$project, 'projectExpenses'=>$projectExpenses]);
    }


        public function show($id) {
          $project = DB::table('projects as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->select('pro.*', 'pro.id as id', 'cus.*')
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.id', $id)
              ->get();

          $customers = Customer::where('customer_type', 1)->latest()->get();
        //  $project = DB::select('select * from projects where id = ?',[$id]);
         return view('project.editProject',['project'=>$project, 'customers'=>$customers]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $customer_id = $request->input('customer_id');
          $project_type = $request->input('project_type');
          $location = $request->input('location');
          $space = $request->input('space');
          $start_date = $request->input('start_date');
          $end_date = $request->input('end_date');

          DB::update('update projects set customer_id = ? where id = ?',[$customer_id, $id]);
          DB::update('update projects set project_type = ? where id = ?',[$project_type, $id]);
          DB::update('update projects set location = ? where id = ?',[$location, $id]);
          DB::update('update projects set space = ? where id = ?',[$space, $id]);
          DB::update('update projects set start_date = ? where id = ?',[$start_date, $id]);
          DB::update('update projects set end_date = ? where id = ?',[$end_date, $id]);
          return redirect('/projects');
       }

       public function completed(Request $request, $id) {
        $status = 2;
        try {
          DB::update('update projects set status = ? where id = ?',[$status, $id]);
          return back()->with('success', 'عملیات موفقانه اجرا شد.');
        } catch (Exception $e) {
          return back()->whit('failed', 'خطا رخ داده لطفا دوباره کوشش کنید');
        }
        return redirect('back')->with();
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from projects where id = ?',[$id]);
     return back();
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
