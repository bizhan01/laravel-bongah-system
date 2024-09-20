<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Customer;
use DB;


class CustomerController extends Controller
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
      $customers = Customer::where('status', 1)->latest()->get();
      return view('customer.customers', compact('customers'));
    }

    public function archivedCustomers()
    {
      $customers = Customer::where('status', 2)->latest()->get();
      return view('customer.archivedCustomers', compact('customers'));
    }


    public function addCustomer()
    {
      return view('customer.addCustomer');
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
            'customer_type'=>'required|max: 40',
            'prefix'=>'required|max: 40',
            'name'=>'required|max: 40',
            'father_name'=>'required',
            'national_code'=>'nullable',
            'phone'=>'required|unique:customers',
            'address'=>'required',
    ]);
      Customer::create([
          'user_id' => Auth::user()->id,
          'customer_type' => request('customer_type'),
          'prefix' => request('prefix'),
          'name' => request('name'),
          'father_name' => request('father_name'),
          'national_code' => request('national_code'),
          'phone' => request('phone'),
          'address' => request('address'),
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


        public function show($id) {
         $customer = DB::select('select * from customers where id = ?',[$id]);
         return view('customer.editCustomer',['customer'=>$customer]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $user_id = $request->input('user_id');
          $customer_type = $request->input('customer_type');
          $prefix = $request->input('prefix');
          $name = $request->input('name');
          $father_name = $request->input('father_name');
          $national_code = $request->input('national_code');
          $phone = $request->input('phone');
          $address = $request->input('address');

          DB::update('update customers set user_id = ? where id = ?',[$user_id, $id]);
          DB::update('update customers set customer_type = ? where id = ?',[$customer_type, $id]);
          DB::update('update customers set prefix = ? where id = ?',[$prefix, $id]);
          DB::update('update customers set name = ? where id = ?',[$name, $id]);
          DB::update('update customers set father_name = ? where id = ?',[$father_name, $id]);
          DB::update('update customers set national_code = ? where id = ?',[$national_code, $id]);
          DB::update('update customers set phone = ? where id = ?',[$phone, $id]);
          DB::update('update customers set address = ? where id = ?',[$address, $id]);
          return redirect('/customers');
       }



       public function archive(Request $request, $id) {
        $status = 2;
        try {
          DB::update('update customers set status = ? where id = ?',[$status, $id]);
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
     DB::delete('delete from customers where id = ?',[$id]);
     return back();
    }
}
