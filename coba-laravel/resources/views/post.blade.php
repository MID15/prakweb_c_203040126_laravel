@extends('layouts.main')

@section('container')
  <article>
    <h2>{{ $post->tittle }}</h2>
    <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"class="text-decoration-none">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a href="/blog">Back to Posts</a>
  </article>
@endsection