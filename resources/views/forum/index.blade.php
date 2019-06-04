@extends('layouts.app')
@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1>Hello, world!<a class="btn btn-primary btn-lg pull-right" href="#" role="button"> 发布 »</a></h1>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-9" role="main">

            @foreach($pro as $p)
                <div class="media">
                    <div class="media-left">
                        <a href="#">
                            <img width="64px" class="media-object img-circle" alt="64x64" src="{{$p->user->avatar}}"  >
                        </a>
                    </div>
                    <div class="media-body">
                        <a href="/project/{{$p->id}}"> <h4 class="media-heading">{{$p->title}}</h4></a>
                        {{$p->user->name}}
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    @stop