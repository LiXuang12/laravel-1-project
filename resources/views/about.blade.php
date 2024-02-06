@extends('layout.main-template') 

@section('container')
<link rel="stylesheet" href="css/style.css">
<h1>Halo ini adalah halaman About</h1>
<h2>about me</h2>
<h2>{{ $name }}</h2>
<h2>{{ $email }}</h2>
<img src="img/{{ $img }}" alt="{{ $name }}" style="width: 200px; height: 200px" class="img-thumbnail rounded-circle">

<script src="js/script.js"></script>

@endsection
