@extends('layouts.app')

@section('content')
<section class="page-title page-title-blank-2 bg-white" id="page-title">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="d-none">{{ $singlePost->title }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('blog') }}">blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $singlePost->title }}</li>
                    </ol>
                </div>

            </div>

        </div>

    </div>

</section>


<section class="blog blog-single" id="blog">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-8">
                <div class="entry-title text-center">
                    <h4>{{ $singlePost->title }}</h4>
                </div>

                <div class="blog-entry">

                    <div class="entry-img"><img src="{{ asset('storage/'.$singlePost->featured_image) }}" alt="{{ $singlePost->title }}" />
                        {{-- <div class="entry-meta">
                            @if (!empty($singlePost->categories))
                            <div class="entry-category">
                                @foreach ( $singlePost->categories as $category )
                                    <a href="#">{{ $category->name}}</a>
                                @endforeach

                            </div>
                            @endif


                        </div> --}}

                    </div>
                    <div class="entry-content">

                        <div class="entry-bio">
                            {!! $singlePost->detail_description !!}
                        </div>
                        <div class="entry-holder">
                            @if (!empty($singlePost->tags))
                            <div class="entry-tags"><span>tags: </span>
                                @foreach ( $singlePost->tags as $tag )
                                <a href="#">{{ $tag->name }}</a>
                                @endforeach
                                </div>
                                @endif

                            <div class="entry-share"><span>share this article</span>
                                <div><a class="share-facebook" href="javascript:void(0)"><i
                                            class="fab fa-facebook-f"></i></a><a class="share-instagram"
                                        href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a
                                        class="share-twitter" href="javascript:void(0)"><i
                                            class="fab fa-linkedin-in"></i></a></div>
                            </div>

                        </div>
                    </div>



                </div>

            </div>

            <div class="col-12 col-lg-4">

                <div class="sidebar sidebar-blog">

                    <div class="widget widget-search">
                        <div class="widget-title">
                            <h5>search</h5>
                        </div>
                        <div class="widget-content">
                            <form class="form-search">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search ..." /><span
                                        class="input-group-btn">
                                        <button class="btn" type="button"><i
                                                class="energia-search-Icon"></i></button></span>
                                </div>

                            </form>
                        </div>
                    </div>


                    <div class="widget widget-recent-posts">
                        <div class="widget-title">
                            <h5>recent posts</h5>
                        </div>
                        <div class="widget-content">
                            @foreach ($recentPost as $post )


                            <div class="post">
                                <div class="post-img"><img src="{{ asset('storage/'.$post->featured_image) }}"
                                        alt="{{ $post->title }}_recent" /></div>
                                <div class="post-content">

                                    <div class="post-title"><a href="{{ route('single-blog',[$post->id,$post->slug]) }}">{{ $post->title }}</a></div>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>


                    <div class="widget widget-categories">
                        <div class="widget-title">
                            <h5>categories</h5>
                        </div>
                        <div class="widget-content">
                            <ul class="list-unstyled">
                                @foreach ($categories as $category )


                                <li><a href="#">{{ $category->name }}</li>
                                @endforeach

                            </ul>
                        </div>
                    </div>


                    <div class="widget widget-tags">
                        <div class="widget-title">
                            <h5>Tags</h5>
                        </div>
                        <div class="widget-content">
                            @foreach ($tags as $tag )
                            <a href="#">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
