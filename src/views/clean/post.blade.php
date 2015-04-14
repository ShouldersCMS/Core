@extends('shoulderscms::clean.layouts.master')

@section('header')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{ asset('packages/shoulderscms/shoulderscms/img/post-bg.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{ $post->title }}</h1>
                        <span class="meta">Posted by <a href="#">{{ $post->user_id }}</a> on {{ date('F d, Y', strtotime($post->created_at)) }}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('main')
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {{ $post->content }}
                </div>
            </div>
        </div>
    </article>

@stop
