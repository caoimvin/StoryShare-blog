@extends('layouts.app')

@section('content')
     <h1>Edit Post</h1>
     {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
          <div class="form-group">
              {{Form::label('title', 'Title')}}
              {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'title'])}}
          </div>

          <div class="form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
          </div>
          <div class="form-group">
               {{ Form::file('cover_image') }}
          </div>
          {{Form::hidden('_method','PUT')}}
          {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
          
          <div class="form-group" style="width: 100px; margin-top: 20px;">
               {{-- {{Form::label('key', 'Safety Key')}} --}}
               {{Form::password('key', ['class' => 'form-control', 'placeholder' => 'Safety Key'])}}
          </div>
     {!! Form::close() !!}
@endsection