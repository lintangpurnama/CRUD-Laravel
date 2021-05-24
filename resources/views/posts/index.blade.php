@extends('layouts.app',['title'=> 'Post'])

@section('konten')
<div class="container">
    <div class="d-flex justify-content-between">

        <div>
            <h4>All post</h4>
            <hr>
        </div>
        <div>
            <a href="/posts/create" class="btn btn-primary">New Post</a>
        </div>
    </div>
    <div class="row">
        @if ($posts->count())
        @foreach ($posts as $post)
        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    {{ $post->title }}
                </div>
                <div class="card-body">
                    {{ Str::limit($post->body ,100,'')}}
                    <a href="/posts/{{ $post->slug }}">Read more</a>
                </div>
                <div class="card-footer d-flex justify-content-between  ">
                    Publish On {{ $post->created_at->diffForHumans()}}
                    <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="alert alert-info">
            There are no post!
        </div>
        @endif

        <div class="d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
</div>
@stop