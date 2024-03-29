@extends('dashboard.layouts.main')


@section('container')
<div class="container">
    <div class="row my-3">
      <div class="col-lg-8">
        <h1 class="mb-3">{{ $post->title }}</h1>

        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="file" class="align-text-bottom"></span>Back To All My Post</a>
        <a href="" class="btn btn-warning"><span data-feather="file" class="align-text-bottom"></span>Edit</a>

        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger" onclick="return confirm('Are You Sure?')"><span data-feather="file">Delete</span></button>
        </form>
        @if ($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        @endif
        
        <article class="my-3 fs-5">
          {!! $post->body !!}
        </article>

      </div>
    </div>
  </div>
@endsection