<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Task;
use DB;


class TaskController extends Controller
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
      if (Auth::check()){
        $userid = Auth::user()->id;
      }

      $tasks = Task::where('user_id', $userid)->latest()->get();
      return view('task.tasks', compact('tasks'));
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
            'title'=>'required',
            'description'=>'nullable',
    ]);
      Task::create([
          'user_id' => Auth::user()->id,
          'title' => request('title'),
          'description' => request('description'),
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


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $user_id = $request->input('user_id');
          $title = $request->input('title');
          $description = $request->input('description');

          DB::update('update tasks set user_id = ? where id = ?',[$user_id, $id]);
          DB::update('update tasks set title = ? where id = ?',[$title, $id]);
          DB::update('update tasks set description = ? where id = ?',[$description, $id]);

          try {
           session()->flash('success', 'عملیات موافقانه اجرا شد ');
           return back();
           } catch(Exception $ex) {
           session()->flash('failed', 'خطا! دوباره کوشش کنید');
           return back();
         }
       }


       public function changeStatus(Request $req,$id) {
        $status = $req->status;
        try {
          DB::update('update tasks set status = ? where id = ?',[$status, $id]);
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
     DB::delete('delete from tasks where id = ?',[$id]);

     try {
      session()->flash('success', 'عملیات موافقانه اجرا شد ');
      return back();
      } catch(Exception $ex) {
      session()->flash('failed', 'خطا! دوباره کوشش کنید');
      return back();
    }
    }
}
