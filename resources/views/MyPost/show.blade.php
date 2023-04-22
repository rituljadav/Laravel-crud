@extends('layout.template')


@section('content')

<h1 align="center">Selected Post</h1>
<hr class="border border-gray border-2 opacity-50">
<br>

<h2>{{ $blog->title }}</h2>
<h5>{{ $blog->subtitle }}</h5>
<p>{!! $blog->content !!}</p>


<hr class="border border-gray border-2 opacity-50">


@endsection