@extends('layouts.layout')


@section('content')
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"></a>


        @include('layouts.header')
        @include('layouts.breadcrum')
        <div class="gentechtreethemes-contain">
            <div class="site-content-contain">
                <div id="content" class="site-content">
                    <div class="gentechtreethemes-contain-area">
                        <div id="primary" class="content-area">
                            <main id="main" class="site-main">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <br>
                                            <div class="elementor-row">
                                                <div
                                                    class="elementor-column elementor-col-66 elementor-inner-column elementor-element elementor-element-4517e0c"
                                                    data-id="4517e0c" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-db7ec61 elementor-widget elementor-widget-heading"
                                                                data-id="db7ec61" data-element_type="widget"
                                                                data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h4 class="elementor-heading-title elementor-size-default">
                                                                        @if(str_contains(url()->current(),'freebeats'))
                                                                            All Free Beats
                                                                        @else
                                                                            {{urldecode(Str::after(url()->current(),'bytype/'))}} Type Beats
                                                                        @endif

                                                                    </h4></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-31ca221 elementor-hidden-phone"
                                                    data-id="31ca221" data-element_type="column">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div
                                                                class="elementor-element elementor-element-9703f0f elementor-widget elementor-widget-Button"
                                                                data-id="9703f0f" data-element_type="widget"
                                                                data-widget_type="Button.default">
                                                                <div class="elementor-widget-container">


                                                                    <div class="gen-btn-container">

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                @foreach($videos as $vd)
                                                    <div class="col-xl-3 col-lg-4 col-md-6">
                                                        <article
                                                            class="post-2508 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-fantasy tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                            <div class="gen-carousel-movies-style-3 movie-grid style-3">
                                                                <div class="gen-movie-contain">
                                                                    <div class="gen-movie-img"
                                                                         onclick="window.location.assign('{{url('detail/'.$vd->id)}}')">
                                                                        <img src="{{url('/thumbnail/'.$vd->thumbnail)}}">

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
                                                                            <h3 style="font-weight: bold;font-size:19px;margin-bottom: 2px;"><a href="{{url('detail/'.$vd->id)}}">{{$vd->title}}</a></h3>


                                                                            <h3 style="font-size:15px;text-indent: 20px;"><a href="{{url('detail/'.$vd->id)}}">{!! Str::limit($vd->description,20) !!}</a></h3>



                                                                        </div>
                                                                        <div class="gen-movie-meta-holder float-right">
                                                                            <ul>
                                                                                <li>
                                                                                    @if($vd->sorforn == 'sold')
                                                                                        <span class="badge bg-danger" style="font-size:91%;line-height: 2 !important;">Sold Out</span>

                                                                                    @elseif($vd->sorforn =='free')
                                                                                        <span class="badge bg-success" style="font-size:122%;">{{$vd->sorforn}}</span>

                                                                                    @else
                                                                                        <span class="badge bg-primary" style="font-size:91%;line-height: 2 !important;">For Sold</span>

                                                                                @endif
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


            @include('layouts.footer')
            <!-- Footer stop-->

            </div><!-- .site-content-contain -->
        </div> <!-- Peaceful themes -->
    </div><!-- #page -->
@endsection


