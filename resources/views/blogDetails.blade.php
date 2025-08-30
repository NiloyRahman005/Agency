@extends('app')
@section('title', $blogDetails->slug ?? '')
<meta name="title" content="{{ $blogDetails->meta_title ?? ($seo['title'] ?? '') }}">
<meta name="description" content="{{ $blogDetails->meta_description ?? ($seo['description'] ?? '') }}">
<meta name="keywords" content="{{ $blogDetails->meta_keywords ?? ($seo['keywords'] ?? '') }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="article">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="{{ $blogDetails->meta_title ?? ($seo['title'] ?? '') }}">
<meta property="og:description" content="{{ $blogDetails->meta_description ?? ($seo['description'] ?? '') }}">
<meta property="og:image"
    content="{{ $blogDetails->image ? asset($blogDetails->image) : $seo['image'] ?? asset('assets/imgs/logo/favicon.png') }}">
<meta property="og:site_name" content="{{ config('app.name') }}">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="{{ $blogDetails->meta_title ?? ($seo['title'] ?? '') }}">
<meta name="twitter:description" content="{{ $blogDetails->meta_description ?? ($seo['description'] ?? '') }}">
<meta name="twitter:image"
    content="{{ $blogDetails->image ? asset($blogDetails->image) : $seo['image'] ?? asset('assets/imgs/logo/favicon.png') }}">
@section('content')
    <section class="blog__detail">
        <div class="container g-0 line pt-140">
            <span class="line-3"></span>
            <div class="row">
                <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
                    <div class="blog__detail-top">
                        <h2 class="blog__detail-date animation__word_come"><span>
                                {{ $blogDetails->created_at->format('d M Y') }}
                            </span></h2>
                        <h3 class="blog__detail-title animation__word_come">
                            {{ $blogDetails->title }}
                        </h3>

                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="blog__detail-thumb">
                        @if (isset($blogDetails->image) && public_path(file_exists($blogDetails->image)))
                            <img src="{{ asset($blogDetails->image) }}" alt="Blog Thumbnail" data-speed="0.5">
                        @endif

                    </div>
                </div>
                <div class="col-xxl-8 col-xl-10 offset-xxl-2 offset-xl-1">
                    <div class="blog__detail-content">
                        {!! $blogDetails->content !!}
                    </div>
                    <!-- <div class="blog__detail-tags">
                                                                                                    <p class="sub-title-anim">tags: <a href="tag.html">design</a>, <a
                                                                                                            href="tag.html">figma</a>,
                                                                                                        <a href="tag.html">update</a>
                                                                                                    </p>
                                                                                                </div> -->
                </div>
            </div>
        </div>
    </section>
    <style>
        .dark .blog__detail-content,
        .dark .blog__detail-content * {
            color: #fff !important;
        }
    </style>
@endsection
