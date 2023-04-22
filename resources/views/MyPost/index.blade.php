@extends('layout.template')


@section('content')

<h1 align="center">All Post Here</h1>
<hr class="border border-gray border-2 opacity-50">
<br>
<a href="{{ route('blog.create') }}" class="btn btn btn-outline-primary">Post Here</a>
<br>
@foreach ($data as $datum)
<br>
<a href="{{ route('blog.show',$datum->id) }}">
    <h2>{{$datum->title}}</h2>
</a>
<h5>{{$datum->subtitle}}</h5>
<br>
<form action="{{ route('blog.destroy',$datum->id) }}" method="post">
    @csrf
    @method('delete')
    <a href="{{ route('blog.edit',$datum->id) }}" class="btn btn-outline-success">Edit Me</a>
    <input type="submit" value="Delete Me" class="btn btn-outline-danger">
</form>

<div class="text-success">
    <hr>
</div>

@endforeach

@endsection