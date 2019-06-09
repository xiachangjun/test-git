<?php
/**
 * Created by PhpStorm.
 * User: xia
 * Date: 2019-06-08
 * Time: 17:19
 */

namespace App\Api\Controllers;


use App\User;
use App\Wxuser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use JWTAuth;



class WxapiController extends BaseController
{


    //注册or登陆 传入openid
    public function register(Request $request){
        $openid=$request->get('openid');

        $islogin=User::where('openid',$openid)->first();
//        return $islogin;

        if($islogin){


//            $credentials =$request->only('email', 'password');
            $credentials =[
                'email'=>$request->get('email'),
                'password'=>$request->get('password'),

            ];

            try {
                // attempt to verify the credentials and create a token for the user
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 401);
                }
            } catch (JWTException $e) {
                // something went wrong whilst attempting to encode the token
                return response()->json(['error' => 'could_not_create_token'], 500);
            }


        }else{

            $newUser=[
                'name'=>$request->get('openid'),
                'openid'=>$request->get('openid'),
                'email'=>$request->get('openid'),
                'password'=>Hash::make($request->get('openid'))

            ];

            $user = User::create($newUser);
            $token = JWTAuth::fromUser($user);

        }



        return response()->json(compact('token'));


    }
}