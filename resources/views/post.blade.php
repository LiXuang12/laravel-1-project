@extends('layout.main-template')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>

<button><a href="/blog">back</a></button>
    
@endsection