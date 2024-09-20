<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\User;
use App\File;
use DB;

class SearchFileController extends Controller
{
    public function search()
      {
        $files = DB::table('files as pro')
            ->leftJoin('customers as cus', 'pro.owner_id', '=', 'cus.id')
            ->select('pro.*', 'pro.id as id', 'cus.name as name')
            ->orderByRaw('(pro.created_at)desc')
            ->where('pro.status', 1)
            ->get();

        $q = Input::get ( 'q' );
        if($q != ""){
          $user = File::where('file_model', 'LIKE', '%' . $q . '%' )
          ->orWhere('file_type', 'LIKE', '%' . $q . '%' )
          ->orWhere('price', 'LIKE', '%' . $q . '%' )
          ->orWhere('advance_paid', 'LIKE', '%' . $q . '%' )
          ->orWhere('rent', 'LIKE', '%' . $q . '%' )
          ->orWhere('location', 'LIKE', '%' . $q . '%' )
          ->orWhere('address', 'LIKE', '%' . $q . '%' )
          ->get ();

          if (count ( $user ) > 0)
            return view ('file.files', compact('files'))->withDetails ( $user )->withQuery ( $q );
          else
            return view ('file.files', compact('files'))->withMessage( 'No Details found. Try to search again !' );
        }
        return view ('file.files', compact('files'))->withMessage( 'No Details found. Try to search again !' );
      }

}
