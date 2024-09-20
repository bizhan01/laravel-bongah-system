<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\CompanyInfo;
use App\Task;
use DB;


class CompanyInfoController extends Controller
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
        $infos = CompanyInfo::latest()
        ->orderByRaw('(id)desc LIMIT 1')
        ->get();
      return view('companyInfo.info', compact('infos'));
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
             'company_name'=>'nullable',
             'company_cell_phone'=>'nullable',
             'company_phone'=>'required',
             'company_email'=>'nullable',
             'company_website'=>'nullable',
             'company_address'=>'nullable',
             'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
         ]);

         if($image = $request->file('logo')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move(public_path("UploadedImages/about"), $new_name);
         }
         else {
           $new_name = 'logo.png';
         }
           CompanyInfo::create([
               'company_name' => request('company_name'),
               'company_cell_phone' => request('company_cell_phone'),
               'company_phone' => request('company_phone'),
               'company_email' => request('company_email'),
               'company_website' => request('company_website'),
               'company_address' => request('company_address'),
               'logo' => $new_name,
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
       public function edit(Request $request, $id) {
          $company_name = $request->input('company_name');
          $company_cell_phone = $request->input('company_cell_phone');
          $company_phone = $request->input('company_phone');
          $company_email = $request->input('company_email');
          $company_website = $request->input('company_website');
          $company_address = $request->input('company_address');

          if($image = $request->file('logo')){
            $new_name =rand() . '.' . $image-> getClientOriginalExtension();
            $image -> move("UploadedImages/about/", $new_name);
          }
          else {
            $new_name = $request->input('logo');
          };

          DB::update('update company_infos set company_name = ? where id = ?',[$company_name, $id]);
          DB::update('update company_infos set company_cell_phone = ? where id = ?',[$company_cell_phone, $id]);
          DB::update('update company_infos set company_phone = ? where id = ?',[$company_phone, $id]);
          DB::update('update company_infos set company_email = ? where id = ?',[$company_email, $id]);
          DB::update('update company_infos set company_website = ? where id = ?',[$company_website, $id]);
          DB::update('update company_infos set company_address = ? where id = ?',[$company_address, $id]);
          DB::update('update company_infos set logo = ? where id = ?',[$new_name, $id]);

          try {
           session()->flash('success', 'عملیات موافقانه اجرا شد ');
           return back();
           } catch(Exception $ex) {
           session()->flash('failed', 'خطا! دوباره کوشش کنید');
           return back();
         }
       }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
     public function destroy($id) {
     DB::delete('delete from company_infos where id = ?',[$id]);

     try {
      session()->flash('success', 'عملیات موافقانه اجرا شد ');
      return back();
      } catch(Exception $ex) {
      session()->flash('failed', 'خطا! دوباره کوشش کنید');
      return back();
    }
    }
}
