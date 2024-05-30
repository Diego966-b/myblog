@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

    <p>Pantalla principal</p>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="/auth">login</a></li>
        <li><a href="/logout">logout</a></li>
        <li><a href="{{ route('category') }}">list category</a></li>
        <li><a href="{{ route('categoryShow', ['id' => 5]) }}">show category</a></li>
        <li><a href="{{ route('categoryCreate') }}">create category</a></li>
        <li><a href="{{ route('categoryEdit', ['id' => 5]) }}">edit category</a></li>
    </ul>
@endsection
