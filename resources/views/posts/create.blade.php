@extends('layouts.app',['title'=> 'New Post'])

@section('konten')
<div class="row">
    <div class="col-md-6">
      @include('alert')
        <div class="card">
            <div class="card-header">New Post</div>
            <div class="card-body">
                <form action="/posts/store" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror ">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="form-control @error('body') is-invalid @enderror"></textarea>
                        @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary mb-3" >Create</button>

                </form>
            </div>
        </div>
    </div>
</div>



@stop