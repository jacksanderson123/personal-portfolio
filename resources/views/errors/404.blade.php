@extends('layouts.app')

@section('content')
    <h1 class="text-center">Can't find this page</h1>
    <h2>{{ $exception->getMessage() }}</h2>

@stop