@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             @foreach($questions as $question)
              <div class="single-topics">
                <div class="card-header">
                    <h4><a href="{{$question->url}}">{{$question->title}}</a></h4>
                   <p class="lead mb-0">
                       Asked By <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                       <small class="text-muted">{{$question->created_date}}</small>
                   </p>
                </div>
                <div class="card-body">
                   <p>{{str_limit($question->body,200)}}</p>
                </div>
              </div>
              @endforeach
            </div>
            <div class="row">
                <div class="col mx-auto">
                   <div class="pagination mt-3 justify-content-center"> 
                       {{$questions->links()}}
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection