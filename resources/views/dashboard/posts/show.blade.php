@extends('layouts/main')

@section('container')
<div class="container">
    <div class="row">
          @foreach ($posts->skip(1) as $post)
          
          <div class="col-md-4 mb-3">
                
                <div class="card">
                            <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0,0.7)"><a href="/posts?category={{ $post->category->slug }}"class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>
                            <small class="text-muted">By.<a href="/posts?authors={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}  </small>
                            </p><p>{{ $posts[0]->excerpt }}
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
          </div>
          @endforeach
    </div>
    </div>
@endsection