@extends('layout.template')

@section('content')
<h1 align="center">Edit The Post Here</h1>
<hr class="border border-gray border-2 opacity-50">
<br>

<form action="{{ route('blog.update',$blog->id) }}" method="post">
  @method('put')

  @csrf

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Title</label>
    <input type="text" class="form-control" value="{{ $blog->title }}" placeholder="title please" name="title">

    @error('title')
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
    @enderror

  </div>

  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Subtitle</label>
    <input type="text" class="form-control" value="{{ $blog->subtitle }}" placeholder="subtitle please" name="subtitle">

    @error('subtitle')
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
    @enderror

  </div>

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
    <textarea class="form-control" id="editor" rows="3" name="content">{{ $blog->content }}</textarea>

    @error('content')
    <div class="alert alert-danger" role="alert">
      {{ $message }}
    </div>
    @enderror

  </div>

  <div class="mb-3">
    <input type="submit" class="btn btn-outline-success" value="Edit Me">
    <input type="reset" class="btn btn-outline-danger" value="Reset Me">
  </div>

</form>

@endsection