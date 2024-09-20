<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Project_Expense;
use DB;


class ProjectExpenseController extends Controller
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
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate(request(),[
            'project_id'=>'required|max: 40',
            'date'=>'required|max: 40',
            'item'=>'required',
            'cost'=>'required',

    ]);
      Project_Expense::create([
          'user_id' => Auth::user()->id,
          'project_id' => request('project_id'),
          'date' => request('date'),
          'item' => request('item'),
          'cost' => request('cost'),
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

      public function printProjectExpense($id) {
        $project = DB::select('select * from project__expenses where id = ?',[$id]);
        return view('project.projectExpens',['project'=>$project]);
    }


        public function show($id) {
         $expense = DB::select('select * from project__expenses where id = ?',[$id]);
         return view('project.editProjectExpense',['expense'=>$expense]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $project_id = $request->input('project_id');
          $date = $request->input('date');
          $item = $request->input('item');
          $cost = $request->input('cost');

          DB::update('update project__expenses set project_id = ? where id = ?',[$project_id, $id]);
          DB::update('update project__expenses set date = ? where id = ?',[$date, $id]);
          DB::update('update project__expenses set item = ? where id = ?',[$item, $id]);
          DB::update('update project__expenses set cost = ? where id = ?',[$cost, $id]);
          return redirect('/projects');
       }


       public function print(Request $request,$id)
          {
            $expenses = DB::table('project__expenses as exp')
                ->leftJoin('projects as pjt', 'exp.project_id', '=', 'pjt.id')
                ->select('exp.*', 'pjt.*')
                ->orderByRaw('(exp.created_at)desc')
                ->where('exp.project_id', $id)
                ->get();


            // $expenses = DB::select('select * from project__expenses where project_id = ?',[$id]);
            return view('project.print', compact('expenses'));
          }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from project__expenses where id = ?',[$id]);
     return back();
    }
}
