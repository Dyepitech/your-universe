<head>
    <link rel="stylesheet" href="../../css/blog.css">
</head>
@extends('layouts.app-master')

@section('content')
<div class="blog-content">
                <div class="d-flex mb-3 mt-5 flex-column">
                    <img src="{{ $article->image }}" />
                    <h2 class="text-dark fs-2 me-5 fw-bold mt-5">{{ $article->title }}</h2>
                    <div class="blog-subcontent d-flex ">
                        <p class="text-dark me-5 fw-bold mt-3">
                            {{ $article->content }}.
                        <div class="author">
                            <div class="article-infos">
                                <p class="text-dark fw-bold">{{ $article->author }}</p>
                                <p class="text-dark fw-bold">{{ $article->created_at }}</p>
                                <p class="text-dark fw-bold">{{ $article->comments }} commentaires</p>
                                <button class="btn d-flex btn-warning fw-bold">Read More</button>
                            </div>
                            <div class="article-image">
                                <img src="https://html.nkdev.info/goodgames/assets/images/avatar-1.jpg" alt="Hitman" class="rounded-circle" width="60">
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>
@endsection