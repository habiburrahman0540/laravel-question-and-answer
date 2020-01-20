@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h1>Create Question</h1>
                    
                   <div class="ml-auto">
                   <a href="{{route('question.index')}}" class="btn btn-outline-primary"><strong>Back to All Question</strong> </a>
                   </div>

                </div>
            </div>

                <div class="card-body">
                <form action="{{route('question.store ')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="question-title"><strong>Title :</strong> </label>
                        <input type="text" id="question-title" name="title" placeholder="Enter question title here." class="form-control{{$errors->has('title') ? 'is-invalid' : ''}}">
                       @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{$errors->first('title')}}
                            </div>
                       @endif
                        </div>
                        <div class="form-group">
                            <label for="question-body"><strong>Explain your Question :</strong></label>
                        <textarea name="body" id="question-body" rows="10" class="form-control{{$errors->has('body') ? 'is-invalid' : ''}}"></textarea>
                       @if($errors->has("body"))
                            <div class="invalid-feedback">
                                {{$errors->first("body")}}
                            </div>
                       @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Submit</button>
                        </div>
                       
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
