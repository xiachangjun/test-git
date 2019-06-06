<?php
/**
 * Created by PhpStorm.
 * User: xia
 * Date: 2019-05-31
 * Time: 20:12
 */

namespace App\Http\Controllers;


class XcxController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
//        $arr=array(1,1,1);
        return view('xcx.index');
    }
    public  function test(){
        return 12345;
    }
}