<?php
    $posts = App\Models\Post::get();
?>

@extends('layouts.index')

@section('main')
    <div class="row mt-n5">
        @foreach ($posts as $post)
            <div class="col-md-6 col-lg-4 mt-5 wow fadeInUp" data-wow-delay=".2s"
                style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="blog-grid">
                    <div class="blog-grid-img position-relative"><img alt="img"
                            src="{{ $post->image }}"></div>
                    <div class="blog-grid-text p-4">
                        <h3 class="h5 mb-3"><a href="{{ url($post->id) }}">{{ $post->title }}</a></h3>
                        <p class="display-30">{{ $post->description }}</p>
                        <div class="meta meta-style2">
                            <ul>
                                <li><a href="#!"><i class="fas fa-calendar-alt"></i>
                                    {{ $post->post_date }}
                                    </a></li>
                                <li><a href="#!"><i class="fas fa-user"></i> {{ $post->author }}</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
