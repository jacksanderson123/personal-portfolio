@extends('layouts.admin')

@section('content')
    <h1>Edit Users: {{$user->name}}</h1>


    {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update' , $user->id], 'files'=>true]) !!}
    <div class="col-sm-3">
        <img src="{{$user->photo ? $user->photo->path : 'http://placehold.it/32x32'}}" alt="" class="img-responsive img-rounded">
    </div>

    <div class="col-sm-9">
        <div class="form-group">
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name:']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email:']) !!}
        </div>

        <div class="form-group">
            {!! Form::select('role_id', [''=>'Choose User Role'] + $roles, null, ['class'=>"form-control"]); !!}
        </div>

        <div class="form-group">
            {!! Form::select('is_active', [ 1=>'Active', 0=>'Inactive'], null, ['class'=>"form-control"]);  !!}
        </div>

        <div class="form-group">
            {!! Form::file('photo_id', null,['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password:']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Update User', ['class'=>'btn btn-primary']) !!}
        </div>

        @include('includes.form-error')

    </div>
    {!! Form::close() !!}

    {!! Form::model($user, ['method'=>'DELETE', 'action'=>['AdminUsersController@destroy' , $user->id], 'class'=>'pull-right']) !!}
    <div class="form-group">
        {!! Form::submit('Delete User', ['class'=>'btn btn-danger']) !!}
    </div>
    {!! Form::close() !!}



@endsection