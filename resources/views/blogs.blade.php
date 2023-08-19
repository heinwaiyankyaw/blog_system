@extends('layout')
@section('title')
All Blog
@endsection
@section('content')
@foreach ($blogs as $blog)
<div>
    <h1><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>
    <small>Published Date : {{ $blog->date }}</small>
    <p>{{ $blog->intro }}</p>

</div>
@endforeach
@endsection
