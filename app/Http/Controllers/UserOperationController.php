<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Carbon\Carbon;
use App\User;
use DB;

use Morilog\Jalali\JDate;

class UserOperationController extends Controller {
    public function __construct() {
        $this->middleware('auth');
    }


    public function index() {
    	return view('user.adduser');
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
            'title' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'profileImage'=> 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'

    ]);
        User::create([
          'title' => request('title'),
          'name' => request('name'),
          'lastName' => request('lastName'),
          'phone' => request('phone'),
          'address' => request('address'),
          'email' => request('email'),
          'password' => Hash::make(request('password')),
          'type' =>request('type'),
          'profileImage' =>('user.png'),
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'از شریک ساختن نظریه نیک شما محصل گرامی سپاسگزاریم. ');
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }

    public function usersList()
    {
      $users = DB::table('users')->where('type', '!=', 1)->where('status', 1)->get();
      return view('user.usersList', compact('users'));
    }



    public function blockList()
    {
      $users = DB::table('users')->where('status', 0) ->get();
      return view('user.blockList', compact('users'));
    }



    public function show($id) {
      $user = DB::select('select * from users where id = ?',[$id]);
     return view('user.block',['user'=>$user]);
    }

    public function unBlock($id) {
      $user = DB::select('select * from users where id = ?',[$id]);
     return view('user.unBlock',['user'=>$user]);
    }


    public function showInfo($id) {
      $user = DB::select('select * from users where id = ?',[$id]);
     return view('user.editUser',['user'=>$user]);
   }

        public function edit(Request $request,$id) {
          $name = $request->input('name');
          $lastName = $request->input('lastName');
          $phone = $request->input('phone');
          $address = $request->input('address');
          $email = $request->input('email');
          $password = $request->input('password');
          $type = $request->input('type');
          $phone= $request->input('phone');
          $status= $request->input('status');
          $profileImage= $request->input('profileImage');

          DB::update('update users set name = ? where id = ?',[$name, $id]);
          DB::update('update users set lastName = ? where id = ?',[$lastName, $id]);
          DB::update('update users set phone= ? where id = ?',[$phone, $id]);
          DB::update('update users set address = ? where id = ?',[$address, $id]);
          DB::update('update users set email = ? where id = ?',[$email, $id]);
          DB::update('update users set password = ? where id = ?',[$password, $id]);
          DB::update('update users set type = ? where id = ?',[$type, $id]);
          DB::update('update users set phone = ? where id = ?',[$phone, $id]);
          DB::update('update users set status = ? where id = ?',[$status, $id]);
          DB::update('update users set profileImage = ? where id = ?',[$profileImage, $id]);
          return redirect('/usersList');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
       DB::delete('delete from users where id = ?',[$id]);
       return redirect('/usersList');
    }
}
