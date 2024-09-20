<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\User;
use DB;

class DairyController extends Controller
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
    $users = DB::table('users')->where('type', '!=', 1)->whereDay('created_at', Carbon::now())->get();

    $projects = DB::table('projects as pro')
        ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
        ->select('pro.*', 'pro.id as id', 'cus.*')
        ->orderByRaw('(pro.created_at)desc')
        ->where('pro.status', 1)
        ->whereDay('pro.created_at', Carbon::now())
        ->get();

    $projectExpenses = DB::table('project__expenses')->whereDay('created_at', Carbon::now())->get();

    $customers = DB::table('customers')->whereDay('created_at', Carbon::now())->get();
    $files = DB::table('files')->whereDay('created_at', Carbon::now())->get();

    $contracts = DB::table('contracts as pro')
        ->leftJoin('customers as cus', 'pro.customer_id', '=', 'cus.id')
        ->select('pro.*', 'pro.id as id', 'cus.name as customer_name')
        ->orderByRaw('(pro.created_at)desc')
        ->whereDay('pro.created_at', Carbon::now())
        ->get();

    // $contracts = DB::table('contracts')->whereDay('created_at', Carbon::now())->get();

    return view('dairy.dairy', compact(
    'users',
    'projects',
    'projectExpenses',
    'customers',
    'files',
    'contracts'
  ));
  }
}
