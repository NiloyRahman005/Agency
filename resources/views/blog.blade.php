@extends('app')
@section('title', 'Blog List')
@section('content')
    <section class="blog__area-6 blog__animation">
        <div class="container g-0 line pt-110 pb-110">
            <span class="line-3"></span>
            <div class="row pb-130">
                <div class="col-12 text-center">
                    <div class="sec-title-wrapper">
                        <h2 class="sec-title-2 animation__char_come">Blogs</h2>
                    </div>
                </div>

            </div>

            <div class="row reset-grid">
                @forelse($blogs as $blog)
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                        <article class="blog__item">
                            <div class="blog__img-wrapper">
                                <a href="{{ route('blogDetails', $blog->slug) }}">
                                    <div class="img-box">
                                        @if (isset($blog->image) && public_path(file_exists($blog->image)))
                                            <img class="image-box__item" src="{{ asset($blog->image) }}"
                                                alt="Blog Thumbnail">
                                            <img class="image-box__item" src="{{ asset($blog->image) }}"
                                                alt="BLog Thumbnail">
                                        @endif
                                    </div>
                                </a>
                            </div>
                            <h4 class="blog__meta"><a href="{{ route('blogDetails', $blog->slug) }}">
                                    {{ $blog->created_at->format('d M Y') }}</h4>
                            <h5><a href="{{ route('blogDetails', $blog->slug) }}"
                                    class="blog__title">{{ $blog->title ?? '' }}</a></h5>
                            <a href="{{ route('blogDetails', $blog->slug) }}" class="blog__btn">Read More <span><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </article>
                    </div>
                @empty
                @endforelse


            </div>
        </div>
    </section>
    <!-- Blog area end -->

@endsection
