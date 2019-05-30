@extends('app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!<a class="btn btn-primary btn-lg pull-right" href="#" role="button"> 发布 »</a></h1>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">

                <img src="{{$pro->user->avatar}}" alt="">
                {{$pro->title}}
                {{$pro->body}}

        <button>edit</button>
            </div>

        </div>
    </div>
@stop