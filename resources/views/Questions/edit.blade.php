@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h1>Edit Question</h1>
                    
                   <div class="ml-auto">
                   <a href="{{route('question.index')}}" class="btn btn-outline-primary"><strong>Back to All Question</strong> </a>
                   </div>

                </div>
            </div>

                <div class="card-body">
                <form action="{{route('question.update',$question->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="question-title"><strong>Title :</strong> </label>
                        <input type="text" id="question-title" name="title" value="{{old('title',$question->title)}}" class="form-control
                        {{$errors->has('title') ? 'is-invalid' : ''}}">
                       @if($errors->has('title'))
                            <div class="invalid-feedback">
                               <strong>{{$errors->first('title')}}</strong> 
                            </div>
                       @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body"><strong>Explain your Question :</strong></label>
                            
                        <textarea name="body" id="question-body" rows="10" class="form-control
                        {{$errors->has('body') ? 'is-invalid' : ''}}"> {{old('body',$question->body)}}</textarea>
                        @if($errors->has('body'))
                        <div class="invalid-feedback">
                           <strong>{{$errors->first('body')}}</strong> 
                        </div>
                   @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Update Question</button>
                        </div>
                       
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
