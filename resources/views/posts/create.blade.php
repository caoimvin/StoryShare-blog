@extends('layouts.app')

@section('content')
     <h1>Create Post</h1>
     {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-group">
              {{Form::label('title', 'Title')}}
              {{Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => 'title'])}}
          </div>

          <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
          </div>
          <div class="form-group">
               {{ Form::file('cover_image') }}
          </div>
          {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
          
          <div class="form-group" style="width: 100px; margin-top: 20px;">
               {{-- {{Form::label('key', 'Safety Key')}} --}}
               {{Form::password('key', ['class' => 'form-control', 'placeholder' => 'Safety Key'])}}
          </div>
     {!! Form::close() !!}
@endsection