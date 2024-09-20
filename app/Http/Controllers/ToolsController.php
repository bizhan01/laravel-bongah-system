<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToolsController extends Controller
{
    public function tools() {
        return view('toolBox.tools');
    }

    //
    public function calculator() {
        return view('toolBox.calculator');
    }

    //
    public function calendar() {
        return view('toolBox.calendar');
    }

    //
    public function dateConverter() {
        return view('toolBox.dateConverter');
    }

}
