@extends('layouts.app')
 
@section('title', 'Welcome')
 
@section('sidebar')
    @parent
 
    <p>This is appended to the master sidebar.</p>
@endsection
 
@section('content')
<p>Pantalla principal</p>
  <ul>
    <li><a href="/">Home</a></li>
    <li><a href="/auth">login</a></li>
    <li><a href="/logout">logout</a></li>
    <li><a href="/category">list category</a></li>
    <li><a href="/category/show/5">show category</a></li>
    <li><a href="/category/create">create category</a></li>
    <li><a href="/category/edit/5">edit category</a></li>
  </ul>
@endsection