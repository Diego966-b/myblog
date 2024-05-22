@extends('layouts.app')
 
@section('title', 'Login')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<p>Login usuario</p>
@endsection