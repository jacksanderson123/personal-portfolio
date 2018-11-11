@extends('layouts.admin')

@section('content')
    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store']) !!}

        <div class="form-group">
            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Name:']) !!}
        </div>

        <div class="form-group">
            {!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Email:']) !!}
        </div>

        <div class="form-group">
            {!! Form::select('role_id', ['Admin','Subscriber'], 'Select', ['class'=>"form-control"]); !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}


@endsection