@extends('layouts.app')
 
@section('title', 'Edit')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<p>Editar post con id</p>
@endsection