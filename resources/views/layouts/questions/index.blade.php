@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
             @foreach($questions as $question)
             <div class="single-topics d-flex">
              <div class="topics-response">
                <span class="votes text-center"><strong>{{$question->votes}}</strong> {{str_plural('Vote',$question->votes)}}</span>
                <span class="views text-center">{{$question->views}} {{str_plural('View',$question->views)}}</span>
                <span class="answers answered text-center">{{$question->answers}} {{str_plural('Answer',$question->answers)}}</span>
              </div>
              <div class="topics-content">
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