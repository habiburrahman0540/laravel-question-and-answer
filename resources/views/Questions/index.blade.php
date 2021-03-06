@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h1>All Questions</h1>
                    
                   <div class="ml-auto">
                   <a href="{{route('question.create')}}" class="btn btn-outline-primary"><strong>Ask Question</strong> </a>
                   </div>
                   

                </div>
            </div>

                <div class="card-body">
                    @include('layouts._message')
                    @foreach($questions as $question)
                        <div class="media">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{$question->votes}}</strong> {{str_plural('vote'),$question->votes}}
                                </div>
                            <div class="status {{$question->Status}}">
                                    <strong>{{$question->answers}}</strong> {{str_plural('answer',$question->answers)}}
                                    </div>
                                    <div class="view">
                                    {{$question->views." ".str_plural('view'),$question->views}}
                                    </div>
                            </div>
                            
                                
                           
                            <div class="media-body">
                                <div class="d-flex align-items-center">
                                    <h1 class="mt-0"><a href="{{$question->url}}">{{$question->title}}</a> </h1>
                                    <div class="ml-auto">
                                    <a href="{{route('question.edit',$question->id)}}" class="btn btn-sm btn-outline-info">Edit</a>
                                    </div>
                                    
                                </div>
                           
                            <p class="lead">
                                Asked by
                            <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                            <small class="text-muted">{{$question->created_date}}</small>
                            </p>
                            {{str_limit($question->body,250)}}
                            </div>
                        </div>
                        <hr>
                    @endforeach
                        {{$questions->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
