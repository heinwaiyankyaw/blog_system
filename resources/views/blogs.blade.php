@extends('layout')
@section('title')
All Blog
@endsection
@section('content')
@foreach ($blogs as $blog)
<div>
    <h1><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}</a></h1>
    <p>Category : <a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
    <h3>Author is <a href="/users/{{ $blog->user->slug }}">{{ $blog->user->user_name }}</a></h3>

    <small>Published Date : {{ $blog->created_at->diffForHumans() }}</small>
    <p>{{ $blog->intro }}</p>

</div>
@endforeach
@endsection
