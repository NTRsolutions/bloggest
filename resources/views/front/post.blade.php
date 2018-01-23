@extends('layouts.main-layout')
@section('title', 'Poost')
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{asset('img/post-bg.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <h2 class="subheading">{{ $post->description }}</h2>
                        <span class="meta">
                            <a href="#">{{ $post->user_name }}</a>
                            on {{ date('F d, Y', strtotime($post->created_at)) }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </article>
@endsection