@extends('layouts.layout')


@section('content')
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"></a>



@include('layouts.header')
@include('layouts.slider')
    <div class="gentechtreethemes-contain">
        <div class="site-content-contain">
            <div id="content" class="site-content">
                <div class="gentechtreethemes-contain-area">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            @foreach($videos as $vd)
                                            <div class="col-xl-3 col-lg-4 col-md-6">
                                                <article
                                                    class="post-2508 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-fantasy tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                    <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                        <div class="gen-movie-contain">
                                                            <div class="gen-movie-img" onclick="window.location.assign('{{url('detail/'.$vd->id)}}')">
                                                                <img src="{{asset('storage/'.$vd->thumbnail)}}">

                                                                <div class="gen-movie-add">


{{--                                                                    <div class="wpulike wpulike-heart ">--}}
{{--                                                                        <div class="wp_ulike_general_class">--}}
{{--                                                                            <a href="{{url('detail/}.$vd->id}?action=streamlab_core_process_simple_like&amp;post_id=2508&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"--}}
{{--                                                                               class="sl-button sl-button-2508"--}}
{{--                                                                               data-nonce="d5a1e1d2c3"--}}
{{--                                                                               data-post-id="2508" data-iscomment="0"--}}
{{--                                                                               title="Like"><i class="far fa-heart"></i></a>--}}
{{--                                                                        </div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <ul class="menu bottomRight">--}}
{{--                                                                        <li class="share top">--}}
{{--                                                                            <i class="fa fa-share-alt"></i>--}}
{{--                                                                            <ul class="submenu">--}}
{{--                                                                                <li>--}}
{{--                                                                                    <a href="www.facebookfc41.html?share=http://streamlab.gentechtree.com/tv-show/dream-of-dargons/"--}}
{{--                                                                                       class="facebook"><i--}}
{{--                                                                                            class="fab fa-facebook-f"></i></a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li>--}}
{{--                                                                                    <a href="#http://streamlab.gentechtree.com/tv-show/dream-of-dargons/"--}}
{{--                                                                                       class="facebook"><i--}}
{{--                                                                                            class="fab fa-instagram"></i></a>--}}
{{--                                                                                </li>--}}
{{--                                                                                <li>--}}
{{--                                                                                    <a href="#http://streamlab.gentechtree.com/tv-show/dream-of-dargons/"--}}
{{--                                                                                       class="facebook"><i--}}
{{--                                                                                            class="fab fa-twitter"></i></a>--}}
{{--                                                                                </li>--}}
{{--                                                                            </ul>--}}
{{--                                                                        </li>--}}
{{--                                                                    </ul>--}}

                                                                </div>
                                                                <div class="gen-movie-action">
                                                                    <a href="{{url('detail/'.$vd->id)}}"
                                                                       class="gen-button">
                                                                        <i class="fa fa-play"></i>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="gen-info-contain">
                                                                <div class="gen-movie-info">
                                                                    <h3 style="font-weight: bold;margin-bottom: 2px;"><a href="{{url('detail/'.$vd->id)}}">{{$vd->title}}</a></h3>

                                                                    <h3 style="font-size:19px;text-indent: 20px;"><a href="{{url('detail/'.$vd->id)}}">{{Str::limit($vd->description,40)}}</a></h3>



                                                                </div>
                                                                <div class="gen-movie-meta-holder float-right">
                                                                    <ul>
                                                                        <li>{{\Carbon\Carbon::createFromDate($vd->uploaddatetime)->toDateString()}}</li>


                                                                        <li>
                                                                            <span>{{$vd->type}}</span>

                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </article><!-- #post-## -->

                                            </div>
                                            @endforeach
                                        </div>
                                        {{ $videos->links('vendor.pagination.custom') }}
                                    </div>

                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div><!-- #content -->
            <!-- Footer start -->


@include('layouts.footer')            <!-- Footer stop-->

        </div><!-- .site-content-contain -->
    </div> <!-- Peaceful themes -->
</div><!-- #page -->
@endsection


