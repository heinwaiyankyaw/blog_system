@extends('layout')
@section('title')
All Blog
@endsection
@section('content')
@foreach ($blogs as $blog)
<div>
    <h1><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>
    <p>Category : <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
    <small>Published Date : {{ $blog->created_at->diffForHumans() }}</small>
    <p>{{ $blog->intro }}</p>

</div>
@endforeach
@endsection
