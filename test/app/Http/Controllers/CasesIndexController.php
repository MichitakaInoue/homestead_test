<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasesIndexController extends Controller
{
    //
    public function index(){
       
        return view('ebina.caseIndex');
    }
}
