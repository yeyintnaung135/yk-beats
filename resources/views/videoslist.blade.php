@extends('layouts.layout')


@section('content')
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"></a>



        @include('layouts.header')
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
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="gen-pagination">
                                                        <nav aria-label="Page navigation">
                                                            <ul class='page-numbers'>
                                                                <li><span aria-current="page"
                                                                          class="page-numbers current">1</span></li>
                                                                <li><a class="page-numbers"
                                                                       href="index6146.html?paged=2">2</a></li>
                                                                <li><a class="next page-numbers"
                                                                       href="index6146.html?paged=2">Next page</a></li>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div><!-- #content -->
                <!-- Footer start -->


                <footer id="gen-footer">
                    <div class="gen-footer-style-1">
                        <div class="gen-footer-top">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <div class="widget">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <img src="{{url('wp-content/uploads/2021/02/logo-1.png')}}"
                                                         class="gen-footer-logo" alt="gen-footer-logo">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</p>

                                                    <ul class="social-link">
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#" class="facebook"><i class="fab fa-skype"></i></a>
                                                        </li>
                                                        <li><a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
                                                        </li>
                                                    </ul>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-3  col-md-6">
                                        <div class="widget"><h4 class="footer-title">Explore</h4>
                                            <div class="menu-explore-container">
                                                <ul id="menu-explore" class="menu">
                                                    <li id="menu-item-6714"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-6714">
                                                        <a href="../index.html">Home</a></li>
                                                    <li id="menu-item-6190"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6190">
                                                        <a href="../movies/index.html">Movies</a></li>
                                                    <li id="menu-item-6191"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-6191">
                                                        <a href="index.html" aria-current="page">Tv Shows</a></li>
                                                    <li id="menu-item-6192"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6192">
                                                        <a href="../videos/index.html">Videos</a></li>
                                                    <li id="menu-item-7239"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7239">
                                                        <a href="#">Actors</a></li>
                                                    <li id="menu-item-7240"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7240">
                                                        <a href="#">Basketball</a></li>
                                                    <li id="menu-item-7241"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7241">
                                                        <a href="#">Celebrity</a></li>
                                                    <li id="menu-item-7242"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-7242">
                                                        <a href="#">Cross</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3  col-md-6">
                                        <div class="widget"><h4 class="footer-title">Company</h4>
                                            <div class="menu-about-container">
                                                <ul id="menu-about" class="menu">
                                                    <li id="menu-item-6202"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6202">
                                                        <a href="../contact-us/index.html">Company</a></li>
                                                    <li id="menu-item-6203"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6203">
                                                        <a href="../contact-us/index.html">Privacy Policy</a></li>
                                                    <li id="menu-item-6204"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6204">
                                                        <a href="../contact-us/index.html">Terms Of Use</a></li>
                                                    <li id="menu-item-6206"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6206">
                                                        <a href="../contact-us/index.html">Help Center</a></li>
                                                    <li id="menu-item-6725"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6725">
                                                        <a href="../contact-us/index.html">contact us</a></li>
                                                    <li id="menu-item-6726"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6726">
                                                        <a href="../pricing-table/index.html">Subscribe</a></li>
                                                    <li id="menu-item-6727"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6727">
                                                        <a href="#">Our Team</a></li>
                                                    <li id="menu-item-6729"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6729">
                                                        <a href="../contact-us/index.html">Faq</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3  col-md-6">
                                        <div class="widget">
                                            <h4 class="footer-title">Downlaod App</h4>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</p>
                                                    <a href="https://www.apple.com/in/app-store/">

                                                        <img src="{{url('wp-content/uploads/2021/01/2.png')}}"
                                                             class="gen-playstore-logo" alt="playstore">
                                                    </a>
                                                    <a href="https://www.apple.com/in/app-store/">
                                                        <img src="{{url('wp-content/uploads/2021/01/1.png')}}"
                                                             class="gen-appstore-logo" alt="appstore">
                                                    </a>


                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gen-copyright-footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12 align-self-center">
                                        <span class="gen-copyright"><a target="_blank" href="#"> Copyright 2021 stremlab All Rights Reserved.</a></span>

                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                </footer>
                <!-- Footer stop-->

            </div><!-- .site-content-contain -->
        </div> <!-- Peaceful themes -->
    </div><!-- #page -->
@endsection


