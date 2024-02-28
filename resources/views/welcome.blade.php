@extends('layouts.main')


@section('container')
<p> Hello </p>

<a href="/post">Demo Page</a>

<a href="{{route('aboutpage')}}">About Page </a>

@endsection()