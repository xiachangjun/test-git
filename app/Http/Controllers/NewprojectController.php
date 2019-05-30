<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewprojectController extends Controller
{
    //
   public function Testdb(){
//        $test=DB::select('select * from test');
//        dd($test);
//echo 1;
        return view('photo');
    }
}
