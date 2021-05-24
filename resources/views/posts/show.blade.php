@extends('layouts.app')
@section('title',$post->title)
@section('konten')
<div class="container">
    <h1>{{ $post->title }}</h1>
    <h4>
        {{ $post->body }}
    </h4>
</div>
@endsection