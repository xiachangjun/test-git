<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public  function index(){
        $pro=project::all();
        return view('forum.index',compact('pro'));
    }

    public  function  show($id){

        $pro=project::findOrFail($id);
        return view('forum.show',compact('pro'));
    }
}
