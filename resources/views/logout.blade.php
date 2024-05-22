@extends('layouts.app')
 
@section('title', 'Logout')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<p>Logout usuario</p>
@endsection