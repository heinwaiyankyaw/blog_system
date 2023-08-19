@extends('layout')
@section('title')
{{ $blog->title }}
@endsection
@section('content')
<div>
    <h1>{{ $blog->title; }}</h1>
    <small>Published Date :{{ $blog->date; }} </small>
    <p>{!! $blog->body; !!}</p>
</div>
<a href="/">Go Back</a>
@endsection
