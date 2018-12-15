@extends('layouts.admin')

@section('content')
    <h1>Edit Post: {{$post->title}}</h1>


    {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update' , $post->id], 'files'=>true]) !!}
    <div class="col-sm-3">
        <img src="{{$post->photo ? $post->photo->path : 'http://placehold.it/256x256php '}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">
        <div class="form-group">
            {!! Form::text('title', null, ['class'=>'form-control', 'placeholder'=>'Name:']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id',  $categories , null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary']) !!}
        </div>

        @include('includes.form-error')

    </div>
    {!! Form::close() !!}

    {!! Form::model($post, ['method'=>'DELETE', 'action'=>['AdminPostsController@destroy' , $post->id], 'class'=>'pull-right']) !!}
    <div class="form-group">
        {!! Form::submit('Delete Post', ['class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}



@endsection