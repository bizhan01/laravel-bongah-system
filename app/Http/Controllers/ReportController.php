<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Customer;
use App\Contract;
use DB;


class ReportController extends Controller
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

    public function customerReport()
    {
      $customers = Customer::where('status', 1)->latest()->get();
      $archivedCustomers = Customer::where('status', 2)->latest()->get();
      return view('report.customer.customers', compact('customers', 'archivedCustomers'));
    }

    public function printCustomerReport()
    {
      $company_info = DB::table('company_infos')->latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();
      $customers = Customer::where('status', 1)->latest()->get();
      $archivedCustomers = Customer::where('status', 2)->latest()->get();
      return view('report.customer.print', compact('customers', 'archivedCustomers', 'company_info'));
    }

    public function fileReport()
    {
      $files = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();

      $archivedFiles = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      return view('report.file.files', compact('files', 'archivedFiles'));
    }


    public function printFileReport()
    {
      $company_info = DB::table('company_infos')->latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();

      $files = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();

      $archivedFiles = DB::table('files as pro')
          ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      return view('report.file.print', compact('files', 'archivedFiles', 'company_info'));
    }

    public function contractReport(){
        $contracts = DB::table('contracts as pro')
            ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
            ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
            ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();

      $archivedContracts = DB::table('contracts as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      return view('report.contract.contracts', compact('contracts', 'archivedContracts'));
    }



    public function printContractReport()
    {
      $company_info = DB::table('company_infos')->latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();

      $company_info = DB::table('company_infos')->latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();

        $contracts = DB::table('contracts as pro')
            ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
            ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
            ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();

      $archivedContracts = DB::table('contracts as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      return view('report.contract.print', compact('contracts', 'archivedContracts', 'company_info'));
    }


    public function contractss($from='', $to=''){
      if ($from=='' && $to=='') {
        $contracts = DB::table('contracts as pro')
            ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
            ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
            ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
            ->whereDate('pro.date', Carbon::today())
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();
        } else {
          $contracts = DB::table('contracts as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
              ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
              ->whereBetween('pro.date',[$from, $to])
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.status', 1)
              ->get();
          }

      $archivedContracts = DB::table('contracts as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

      return view('report.contract.contracts', compact('contracts', 'archivedContracts'));
    }



    public function projectReport()
    {
      $projects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();

      $archivedProjects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();
      return view('report.project.projects', compact('projects', 'archivedProjects'));
    }

    public function projectDateSearch($from='', $to=''){
      if ($from=='' && $to=='') {
        $projects = DB::table('projects as pro')
            ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
            ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
            ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();
        } else {
          $projects = DB::table('projects as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
              ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
              ->whereBetween('pro.date',[$from, $to])
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.status', 1)
              ->get();
          }
          $archivedProjects = DB::table('projects as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
              ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.status', 2)
              ->get();

      return view('report.project.projects', compact('projects', 'archivedProjects'));
    }

    public function printProjectReport()
    {
      $company_info = DB::table('company_infos')->latest()
      ->orderByRaw('(id)desc LIMIT 1')
      ->get();

      $projects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 1)
          ->get();

      $archivedProjects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.*', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();
      return view('report.project.print', compact('projects', 'archivedProjects', 'company_info'));
    }



    public function projectss($from='', $to=''){
      if ($from=='' && $to=='') {
        $projects = DB::table('projects as pro')
            ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
            ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
            ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
            ->whereDate('pro.date', Carbon::today())
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();
        } else {
          $projects = DB::table('projects as pro')
              ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
              ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
              ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
              ->whereBetween('pro.date',[$from, $to])
              ->orderByRaw('(pro.created_at)desc')
              ->where('pro.status', 1)
              ->get();
          }

      $archivedProjects = DB::table('projects as pro')
          ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
          ->leftJoin('users as ur', 'pro.user_id', '=', 'ur.id')
          ->select('pro.*', 'pro.id as id', 'cus.name as customer_name', 'ur.id as user_id', 'ur.name as user_name')
          ->orderByRaw('(pro.created_at)desc')
          ->where('pro.status', 2)
          ->get();

        return view('report.project.projects', compact('projects', 'archivedProjects'));
    }



}
