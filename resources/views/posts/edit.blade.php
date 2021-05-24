@extends('layouts.app',['title'=> 'Update Post'])

@section('konten')
<div class="row">
    <div class="col-md-6">
      @include('alert')
        <div class="card">
            <div class="card-header">Update Post {{ $post->title }}</div>
            <div class="card-body">
                <form action="/posts/{{ $post->slug }}/edit" method="post">
                    @method('patch')
                    @csrf
                    @include('posts.partials.form-control')

                </form>
            </div>
        </div>
    </div>
</div>
@stop