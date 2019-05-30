<?php

namespace App\Http\Controllers;

use App\Lesson;
use App\Transformer\LessonTransformer;
use http\Env\Response;
use Illuminate\Http\Request;

class LessonsController extends ApiController
{
    protected $lessonTransformer;
    public function __construct(LessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer=$lessonTransformer;
        $this->middleware('auth.basic');
    }

    //

    public function index(){
        $lessons= Lesson::all();

        return $this->response([
            'status'=>'success',
            'data'=>$this->lessonTransformer->transformCollection($lessons->toArray())

        ]);
    }

    public function  show($id){
        $lessons=Lesson::find($id);

        if(!$lessons){
           return $this->responseNotFound();
        }
        return $this->response([
            'status'=>'success',
            'data'=>$this->lessonTransformer->transform($lessons)

            ]);

    }

    public  function  store(Request $request){

//             dd('store');
//        return $request->get('body');
//        die();
        if(! $request->get('title') or !$request->get('body')){
            return $this->setStatusCode(422)->responseError('validate fails');
        }

        Lesson::create($request->all());
        return $this->setStatusCode(201)->response([
            'status'=>'success',
            'message'=>'Lesson create',
        ]);
    }




}
