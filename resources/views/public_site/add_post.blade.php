@extends('layouts.public.master')
@section('content')
<div class="container">
<div class="row">
    <div class="col-md-8">
<h1>Add Post </h1>
        <form action="{{route('addPost.store')}}" method="post" role="form" component="profile/edit/form">
            @csrf

            <div class="form-group">
                <label for="fullname">Post Titile</label>
                <input class="form-control" type="text" id="post_title" name="post_title" placeholder="Add post title " value="">
            </div>


            <div class="form-group">
                <label for="location">Categories</label>
                <input class="form-control" type="text" id="location" name="location" placeholder="Select Categories" value="">
            </div>


            <div class="form-group">
                <label for="birthday">Discussion body</label>
                <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
            </div>


            <div id="editOnOperaAuth" class="control-group">
                To change your email or password please go to <a href="https://auth.opera.com/account/edit-profile" target="_blank">your Opera account</a>
            </div>

            <input type="submit" name="submit" value="save Post">

        </form>

    </div>
</div>
</div>
<script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection
