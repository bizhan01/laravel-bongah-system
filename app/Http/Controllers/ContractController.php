<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Contract;
use App\Customer;
use App\File;
use DB;

class ContractController extends Controller
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
    public function index(){
      $contracts = DB::table('contracts as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as customer_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();

        // $contracts = Contract::latest()->get();
        return view('contract.contracts', compact('contracts'));
      }



    public function archivedContracts(){
      $contracts = DB::table('contracts as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as customer_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      // $contracts = Contract::latest()->get();
      return view('contract.archivedContracts', compact('contracts'));
    }

      public function userInfo($id) {
       $user = DB::select('select * from users where id = ?',[$id]);
       return view('contract.userInfo',['user'=>$user]);
    }

      public function customerInfo($id) {
       $customer = DB::select('select * from customers where id = ?',[$id]);
       return view('contract.customerInfo',['customer'=>$customer]);
    }

      public function fileInfo($id) {
       $file = DB::select('select * from files where id = ?',[$id]);
       return view('file.fileInfo',['file'=>$file]);
    }

    public function addContract()
    {
      $contracts= Contract::latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();

      $customers = Customer::where('customer_type', 2)->latest()->get();
      $files = File::where('status', 1)->latest()->get();
      return view('contract.addContract', compact('customers', 'files', 'contracts'));
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
            'date'=>'required',
            'customer_id'=>'required',
            'file_id'=>'required',
            'contract_type'=>'required',
            'price'=>'nullable',
            'advance_paid'=>'nullable',
            'rent'=>'nullable',
            'contract_code'=>'required|unique:contracts',
            'startDate'=>'nullable',
            'endDate'=>'nullable|after:startDate',
            'commission'=>'nullable',
            'contract_scan'=>'required',
            'image' => 'image|mimes:jpeg,jpeg,png,jpg,gif|max:1999'
        ]);
        if($image = $request->file('contract_scan')){
          $new_name =rand() . '.' . $image-> getClientOriginalExtension();
          $image -> move(public_path("UploadedImages/contracts"), $new_name);
        }
        else {
          $new_name = 'noDoc.png';
        }
          Contract::create([
              'user_id' => Auth::user()->id,
              'date' => request('date'),
              'customer_id' => request('customer_id'),
              'file_id' => request('file_id'),
              'contract_type' => request('contract_type'),
              'price' => request('price'),
              'advance_paid' => request('advance_paid'),
              'rent' => request('rent'),
              'contract_code' => request('contract_code'),
              'startDate' => request('startDate'),
              'endDate' => request('endDate'),
              'commission' => request('commission'),
              'contract_scan' => $new_name,
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


      public function archiveFile(Request $request, $id) {
       $status = 2;
       try {
         DB::update('update files set status = ? where id = ?',[$status, $id]);
         return redirect('/contracts');
       } catch (Exception $e) {
         return back()->whit('failed', 'خطا رخ داده لطفا دوباره کوشش کنید');
       }
       return redirect('/contracts')->with();
      }



        public function contractInfo($id) {
          $contract = DB::table('contracts as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->select('pro.*', 'pro.id as id', 'cus.name as customer_name')
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.id', $id)
              ->get();

          // $contract = DB::select('select * from contracts where id = ?',[$id]);
         return view('contract.contractInfo',['contract'=>$contract]);
      }


        public function show($id) {
          $customers = Customer::where('customer_type', 2)->latest()->get();
          $files = File::where('status', 1)->latest()->get();
          $contract = DB::table('contracts as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->select('pro.*', 'pro.id as id', 'cus.name as customer_name')
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.id', $id)
              ->get();
          // $contract = DB::select('select * from contracts where id = ?',[$id]);
         return view('contract.editContract',['contract'=>$contract, 'customers'=>$customers, 'files'=>$files ]);
      }



      public function edit(Request $request, $id) {
         $user_id = $request->input('user_id');
         $date = $request->input('date');
         $customer_id = $request->input('customer_id');
         $file_id = $request->input('file_id');
         $contract_type = $request->input('contract_type');
         $price = $request->input('price');
         $advance_paid = $request->input('advance_paid');
         $rent = $request->input('rent');
         $contract_code = $request->input('contract_code');
         $startDate = $request->input('startDate');
         $endDate = $request->input('endDate');
         $commission = $request->input('commission');


         if($image = $request->file('contract_scan')){
           $new_name =rand() . '.' . $image-> getClientOriginalExtension();
           $image -> move("UploadedImages/contracts/", $new_name);
         }
         else {
           $new_name = $request->input('contract_scan');
         };

         DB::update('update contracts set user_id = ? where id = ?',[$user_id, $id]);
         DB::update('update contracts set date = ? where id = ?',[$date, $id]);
         DB::update('update contracts set customer_id = ? where id = ?',[$customer_id, $id]);
         DB::update('update contracts set file_id = ? where id = ?',[$file_id, $id]);
         DB::update('update contracts set contract_type = ? where id = ?',[$contract_type, $id]);
         DB::update('update contracts set price = ? where id = ?',[$price, $id]);
         DB::update('update contracts set advance_paid = ? where id = ?',[$advance_paid, $id]);
         DB::update('update contracts set rent = ? where id = ?',[$rent, $id]);
         DB::update('update contracts set contract_code = ? where id = ?',[$contract_code, $id]);
         DB::update('update contracts set startDate = ? where id = ?',[$startDate, $id]);
         DB::update('update contracts set endDate = ? where id = ?',[$endDate, $id]);
         DB::update('update contracts set commission = ? where id = ?',[$commission, $id]);
         DB::update('update contracts set contract_scan = ? where id = ?',[$new_name, $id]);
         return redirect('/contracts');
      }


      public function archive(Request $request, $id) {
       $status = 2;
       try {
         DB::update('update contracts set status = ? where id = ?',[$status, $id]);
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
     DB::delete('delete from contracts where id = ?',[$id]);
     return back();
  }
}
