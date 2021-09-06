@extends('layouts.layout')


@section('content')
    <div id="app" class="site">
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
                                            <article id="post-5049"
                                                     class="post-5049 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                <div class="tv-show-back-data"
                                                     data-url="../../wp-content/uploads/2019/03/12.jpg"></div>
                                                <div class="gen-tv-show-wrapper style-1">
                                                    <div class="gen-tv-show-top">
                                                        <div class="row">
                                                            <div class="col-lg-6">

                                                                <video-component
                                                                    data="{{ asset('storage/'.$video->file_link) }}"
                                                                    image="{{asset('storage/'.$video->thumbnail) }}"></video-component>

                                                            </div>

                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="gen-single-tv-show-info">
                                                                    <h4 class="gen-title"
                                                                        style="text-align: center;">{{$video->title}}
                                                                    </h4>
                                                                    <div class="gen-single-meta-holder">
                                                                        <ul>
                                                                            <li>{{$video->type}}</li>
                                                                            <li>{{\Carbon\Carbon::createFromDate($video->uploaddatetime)->toDateString()}}</li>
                                                                            <li>
                                                                                @if($video->sorforn == 'sold')
                                                                                    <h6><span
                                                                                            class="badge rounded-pill bg-danger">Sold Out</span>
                                                                                    </h6>
                                                                                @elseif($video->sorforn =='free')
                                                                                    <h6><span
                                                                                            class="badge rounded-pill bg-success">{{$video->sorforn}}</span>
                                                                                    </h6>
                                                                                @else
                                                                                    <h6><span
                                                                                            class="badge rounded-pill bg-primary">For Sold</span>
                                                                                    </h6>
                                                                                @endif


                                                                            </li>

                                                                        </ul>
                                                                    </div>
                                                                    <div class="gen-excerpt" style="height: 254px;">
                                                                        <h6 style="font-size:17px;text-indent:  22px">{{$video->description}}</h6></div>

{{--                                                                    <div class="gen-socail-share">--}}
{{--                                                                        <h4 class="align-self-center">Social Share--}}
{{--                                                                            :</h4>--}}
{{--                                                                        <ul class="social-inner">--}}
{{--                                                                            <li><a target="_blank"--}}
{{--                                                                                   href="www.facebookd274.html?share=http://streamlab.gentechtree.com/tv-show/love-in-21st/"--}}
{{--                                                                                   class="facebook"><i--}}
{{--                                                                                        class="fab fa-facebook-f"></i></a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li><a target="_blank"--}}
{{--                                                                                   href="#http://streamlab.gentechtree.com/tv-show/love-in-21st/"--}}
{{--                                                                                   class="facebook"><i--}}
{{--                                                                                        class="fab fa-instagram"></i></a>--}}
{{--                                                                            </li>--}}
{{--                                                                            <li><a target="_blank"--}}
{{--                                                                                   href="#http://streamlab.gentechtree.com/tv-show/love-in-21st/"--}}
{{--                                                                                   class="facebook"><i--}}
{{--                                                                                        class="fab fa-twitter"></i></a>--}}
{{--                                                                            </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="pm-inner">
                                                                <div class="gen-more-like">
                                                                    <h5 class="gen-more-title">Similar Beats</h5>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>





                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="gen-season-holder">
                                            <div id="season_1" class="tab-pane ">
                                                <div class="owl-carousel">
                                                    @foreach($sim_videos as $sv)

                                                        <div class="item">
                                                            <div class="gen-episode-contain">
                                                                <div class="gen-episode-img" onclick="window.location.assign('{{url('detail/'.$sv->id)}}')">
                                                                    <img
                                                                        src="{{asset('storage/'.$sv->thumbnail)}} ">

                                                                    <div class="gen-movie-action">
                                                                        <a href="{{url('detail/'.$sv->id)}}"
                                                                           class="gen-button">
                                                                            <i class="fa fa-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="gen-info-contain">
                                                                    <div class="gen-episode-info">


                                                                        <h3>
                                                                            {{$sv->title}}

                                                                        </h3>

                                                                    </div>
                                                                    <div class="gen-single-meta-holder">
                                                                        <ul>

                                                                            <li class="release-date">
                                                                                {{\Carbon\Carbon::createFromDate($sv->uploaddatetime)->toDateString()}}                                                                                    </li>

                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach



                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row float-right">
                                        <button class="btn btn-lg btn-primary ">See All &nbsp;&nbsp; <i class="ion-ios-arrow-right"></i></button>

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
                                                    <img src="../../wp-content/uploads/2021/02/logo-1.png"
                                                         class="gen-footer-logo" alt="gen-footer-logo">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry.</p>

                                                    <ul class="social-link">
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-facebook-f"></i></a></li>
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-instagram"></i></a></li>
                                                        <li><a href="#" class="facebook"><i
                                                                    class="fab fa-skype"></i></a>
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
                                                        <a href="../../index.html">Home</a></li>
                                                    <li id="menu-item-6190"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6190">
                                                        <a href="../../movies/index.html">Movies</a></li>
                                                    <li id="menu-item-6191"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6191">
                                                        <a href="../../tv-shows/index.html">Tv Shows</a></li>
                                                    <li id="menu-item-6192"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6192">
                                                        <a href="../../videos/index.html">Videos</a></li>
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
                                                        <a href="../../contact-us/index.html">Company</a></li>
                                                    <li id="menu-item-6203"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6203">
                                                        <a href="../../contact-us/index.html">Privacy Policy</a></li>
                                                    <li id="menu-item-6204"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6204">
                                                        <a href="../../contact-us/index.html">Terms Of Use</a></li>
                                                    <li id="menu-item-6206"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6206">
                                                        <a href="../../contact-us/index.html">Help Center</a></li>
                                                    <li id="menu-item-6725"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6725">
                                                        <a href="../../contact-us/index.html">contact us</a></li>
                                                    <li id="menu-item-6726"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6726">
                                                        <a href="../../pricing-table/index.html">Subscribe</a></li>
                                                    <li id="menu-item-6727"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6727">
                                                        <a href="#">Our Team</a></li>
                                                    <li id="menu-item-6729"
                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6729">
                                                        <a href="../../contact-us/index.html">Faq</a></li>
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

                                                        <img src="../../wp-content/uploads/2021/01/2.png"
                                                             class="gen-playstore-logo" alt="playstore">
                                                    </a>
                                                    <a href="https://www.apple.com/in/app-store/">
                                                        <img src="../../wp-content/uploads/2021/01/1.png"
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
    </div>
@endsection
