<?php

namespace App\Http\Controllers;

use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\File;
use App\Customer;
use DB;


class FileController extends Controller
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
      $files = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();
      return view('file.files', compact('files'));
    }



    public function file_price($from='', $to=''){
        $files = DB::table('files as pro')
            ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
            ->select('pro.*', 'pro.id as id', 'cus.name as name')
            ->whereBetween('pro.price',[$from, $to])
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();
      return view('file.files', compact('files'));
    }


    public function file_advance_paid($from='', $to=''){
      $files = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->whereBetween('pro.advance_paid',[$from, $to])
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();
      return view('file.files', compact('files'));
    }

    public function file_rent($from='', $to=''){
      $files = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->whereBetween('pro.rent',[$from, $to])
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();
      return view('file.files', compact('files'));
    }


    public function archivedFiles()
    {
      $files = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();
      return view('file.archivedFiles', compact('files'));
    }


    public function addFile()
    {
      $customers = Customer::where('customer_type', 1)->latest()->get();
      return view('file.addFile', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $config = [
              'table' => 'files',
              'length' => 4,
              'prefix' => date('y'),
              'reset_on_prefix_change' => true
          ];
         $file_id = IdGenerator::generate($config);

          $this->validate(request(),[
            'owner_id'=>'required|max: 40',
            'file_model'=>'required',
            'file_type'=>'required|max: 40',
            'price'=>'nullable',
            'advance_paid'=>'nullable',
            'rent'=>'nullable',
            'location'=>'required',
            'space'=>'required',
            'parking'=>'required',
            'lift'=>'required',
            'stage'=>'required',
            'manufacture_date'=>'required',
            'delivery_date'=>'required',
            'address'=>'required',
            'convertible'=>'required',
            'img1' => '|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'img2' => '|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'img3' => '|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
            'img4' => '|mimes:jpeg,jpeg,png,jpg,gif|max:1999',
    ]);

      if($image = $request->file('img1')){
        $new_name1 =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move(public_path("UploadedImages/files"), $new_name1);
      }
      else {
        $new_name1 = 'noImg.png';
      }

      // Second Image
      if($image = $request->file('img2')){
        $new_name2 =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move(public_path("UploadedImages/files"), $new_name2);
      }
      else {
        $new_name2 = 'noImg.png';
      }

      // Third Image
      if($image = $request->file('img3')){
        $new_name3 =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move(public_path("UploadedImages/files"), $new_name3);
      }
      else {
        $new_name3 = 'noImg.png';
      }

      // Forth Image
      if($image = $request->file('img4')){
        $new_name4 =rand() . '.' . $image-> getClientOriginalExtension();
        $image -> move(public_path("UploadedImages/files"), $new_name4);
      }
      else {
        $new_name4 = 'noImg.png';
      }

      File::create([
          'id' =>  $file_id,
          'user_id' => Auth::user()->id,
          'owner_id' => request('owner_id'),
          'file_model' => request('file_model'),
          'file_type' => request('file_type'),
          'price' => request('price'),
          'advance_paid' => request('advance_paid'),
          'rent' => request('rent'),
          'location' => request('location'),
          'space' => request('space'),
          'file_model' => request('file_model'),
          'parking' => request('parking'),
          'lift' => request('lift'),
          'stage' => request('stage'),
          'manufacture_date' => request('manufacture_date'),
          'delivery_date' => request('delivery_date'),
          'address' => request('address'),
          'convertible' => request('convertible'),
          'img1' => $new_name1,
          'img2' => $new_name2,
          'img3' => $new_name3,
          'img4' => $new_name4,
          'created_at'=>carbon::now(),
          'updated_at'=>carbon::now(),
        ]);

        try {
         session()->flash('success', 'عملیات موافقانه اجرا شد ');
         session()->flash('file_id', $file_id);
         return back();
         } catch(Exception $ex) {
         session()->flash('failed', 'خطا! دوباره کوشش کنید');
         return back();
       }
    }

        // print file's address for customer
        public function print(Request $request,$id)
           {
             $company_info = DB::table('company_infos')->latest()
             ->orderByRaw('(id)desc LIMIT 1')
             ->get();

             $files = DB::table('files as pro')
                 ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
                 ->select('pro.*', 'cus.*')
                 ->orderByRaw('(pro.created_at)desc')
                 ->where('pro.id', $id)
                 ->where('pro.status', 1)
                 ->get();
             return view('file.print', compact('files', 'company_info'));
           }


        public function show($id) {
         $customers = Customer::where('customer_type', 1)->latest()->get();

         $file = DB::table('files as pro')
             ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
             ->select('pro.*', 'cus.*')
             ->orderByRaw('(pro.created_at)desc')
             ->where('pro.id', $id)
             ->where('pro.status', 1)
             ->get();

        //  $file = DB::select('select * from files where id = ?',[$id]);
         return view('file.editFile',['file'=>$file, 'customers'=>$customers]);
      }


      /**
       * Show the form for editing the specified resource.
       *
       * @param  \App\Task  $task
       * @return \Illuminate\Http\Response
       */
       public function edit(Request $request,$id) {
          $owner_id = $request->input('owner_id');
          $file_model = $request->input('file_model');
          $file_type = $request->input('file_type');
          $price = $request->input('price');
          $advance_paid = $request->input('advance_paid');
          $rent = $request->input('rent');
          $location = $request->input('location');
          $space = $request->input('space');
          $parking = $request->input('parking');
          $lift = $request->input('lift');
          $stage = $request->input('stage');
          $manufacture_date = $request->input('manufacture_date');
          $delivery_date = $request->input('delivery_date');
          $address = $request->input('address');
          $convertible = $request->input('convertible');

          if($image = $request->file('img1')){
            $new_name1 =rand() . '.' . $image-> getClientOriginalExtension();
            $image -> move("UploadedImages/files/", $new_name1);
          }
          else {
            $new_name1 = $request->input('img1');
          };

          if($image = $request->file('img2')){
            $new_name2 =rand() . '.' . $image-> getClientOriginalExtension();
            $image -> move("UploadedImages/files/", $new_name2);
          }
          else {
            $new_name2 = $request->input('img2');
          };

          if($image = $request->file('img3')){
            $new_name3 =rand() . '.' . $image-> getClientOriginalExtension();
            $image -> move("UploadedImages/files/", $new_name3);
          }
          else {
            $new_name3 = $request->input('img3');
          };

          if($image = $request->file('img4')){
            $new_name4 =rand() . '.' . $image-> getClientOriginalExtension();
            $image -> move("UploadedImages/files/", $new_name4);
          }
          else {
            $new_name4 = $request->input('img4');
          };

          DB::update('update files set owner_id = ? where id = ?',[$owner_id, $id]);
          DB::update('update files set file_model = ? where id = ?',[$file_model, $id]);
          DB::update('update files set file_type = ? where id = ?',[$file_type, $id]);
          DB::update('update files set price = ? where id = ?',[$price, $id]);
          DB::update('update files set advance_paid = ? where id = ?',[$advance_paid, $id]);
          DB::update('update files set rent = ? where id = ?',[$rent, $id]);
          DB::update('update files set location = ? where id = ?',[$location, $id]);
          DB::update('update files set space = ? where id = ?',[$space, $id]);
          DB::update('update files set parking = ? where id = ?',[$parking, $id]);
          DB::update('update files set lift = ? where id = ?',[$lift, $id]);
          DB::update('update files set stage = ? where id = ?',[$stage, $id]);
          DB::update('update files set manufacture_date = ? where id = ?',[$manufacture_date, $id]);
          DB::update('update files set delivery_date = ? where id = ?',[$delivery_date, $id]);
          DB::update('update files set address = ? where id = ?',[$address, $id]);
          DB::update('update files set convertible = ? where id = ?',[$convertible, $id]);
          DB::update('update files set img1 = ? where id = ?',[$new_name1, $id]);
          DB::update('update files set img2 = ? where id = ?',[$new_name2, $id]);
          DB::update('update files set img3 = ? where id = ?',[$new_name3, $id]);
          DB::update('update files set img4 = ? where id = ?',[$new_name4, $id]);
          return redirect('/files');
       }




       public function archive(Request $request, $id) {
        $status = 2;
        try {
          DB::update('update files set status = ? where id = ?',[$status, $id]);
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
     DB::delete('delete from files where id = ?',[$id]);
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
