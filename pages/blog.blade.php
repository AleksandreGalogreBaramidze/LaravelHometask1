@extends('layouts.app')

@section('title', 'Blog Posts')

@section('content')
        <div class="content">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <div class="col-md-8 offset-md-2">
                Blogs
            </div><br><hr>
            <div class="col-md-8 offset-md-2" class="links">
            <a class = "btn btn-primary" href="{{ route('viewPosts',  'First Blog') }}">First Blog</a><br><hr>
            <a class = "btn btn-primary" href="{{ route('viewPosts', 'Second Blog') }}">Second Blog</a><br><hr>
            <a class = "btn btn-primary" href="{{ route('viewPosts', 'Third Blog') }}">Third Blog</a>
            </div>
        </div>


@endsection