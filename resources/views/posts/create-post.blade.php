@extends('layouts.master')


@section('top-scripts')

<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.2.0/quill.snow.css" rel="stylesheet">

@stop


@section('title')

Login

@stop

@section('content')

{{-- <p>Create Post</p>
<!-- Create the editor container -->
<div id="editor">
    <p>Hello World!</p>
    <p>Some initial <strong>bold</strong> text</p>
    <p><br></p>
</div>

<br>   
<button class="btn btn-success">Post</button> 
<button class="btn btn-danger">Cancel</button> --}}
    @include('errors.errors')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form method="POST" action="{{ route('posts.store') }}">
                <div class="form-group">
                    <label name="title">Title:</label>
                    <input id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label name="content">Post Content:</label>
                    <textarea id="content" name="content" rows="10" class="form-control"></textarea>
                </div>
                <input type="submit" value="Create Post" class="btn btn-success btn-lg btn-block">
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>﻿

@stop


@section('bottom-scripts')

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.2.0/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor', {
    theme: 'snow'
});
</script>

@stop