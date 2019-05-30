<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Mail;

class UsersController extends Controller
{
    //
    //注册
    public  function register(){
        return view('users.register');
    }

    public  function  store(UserRegisterRequest $request){
//        dd($request->all());
        User::create(array_merge($request->all(),['avatar'=>'/images/mo.png']));

        return redirect('/');

    }

    //
    public function send(Request $request) {
//        $data=[
//            'errCode' => 0,
//            'errMsg' => 'success',
//            'data' => 'zhangsan'
//        ];
        return response()->json($request);
    }



}
