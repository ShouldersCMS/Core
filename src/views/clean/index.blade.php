@extends('shoulderscms::clean.layouts.master')

@section('header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('packages/shoulderscms/shoulderscms/img/home-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('main')

    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach( $posts as $post )
                <div class="post-preview">
                    <a href="/blog/{{ $post->slug }}">
                        <h2 class="post-title">
                            {{ $post->title }}
                        </h2>
                        <h3 class="post-subtitle">
                            {{ $post->description }}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">{{ $post->user_id }}</a> on {{ date('F d, Y', strtotime($post->created_at)) }}</p>
                </div>
                <hr>
                @endforeach

                <!-- Pager -->
                {{ $posts->links('pagination::simple') }}
            </div>

@stop
