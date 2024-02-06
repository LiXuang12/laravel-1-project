

@extends('layout.main-template') 

@section('container')

<link rel="stylesheet" href="css/style.css">
@foreach ($posts as $post)
<article class="mb-5">
    <h2>
        <a href="/posts/{{ $post["slug"] }}">Judul : {{ $post["title"] }}</a>
    </h2>
    <h5>author: {{ $post["author"] }}</h5>
    <h5>text  : {{ $post["body"] }}</h5>
</article>
    @endforeach

@endsection
