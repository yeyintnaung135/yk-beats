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
{{--                                                                <div class="gentech-tv-show-img-holder">--}}

{{--                                                                    <video width="620" id="video1a" poster="{{asset('storage/'.$video->thumbnail)}}" controls autoplay controlsList="nodownload">--}}
{{--                                                                        <source src="{{asset('storage/'.$video->file_link)}}"  type="video/mp4">--}}
{{--                                                                        Your browser does not support the video tag.--}}
{{--                                                                    </video>--}}
{{--                                                                    <button id="vbplay" class="own-button-place" style="display:block;" >--}}
{{--                                                                        <i  class="own-button-circle">--}}
{{--                                                                            <span class="fa fa-play"></span>--}}
{{--                                                                        </i>--}}

{{--                                                                    </button>--}}

{{--                                                                </div>--}}
                                                                <video-component data="{{ asset('storage/'.$video->file_link) }}" image="{{asset('storage/'.$video->thumbnail) }}"></video-component>

                                                            </div>

                                                            <div class="col-lg-6 align-self-center">
                                                                <div class="gen-single-tv-show-info">
                                                                    <h2 class="gen-title">{{$video->title}}</h2>
                                                                    <div class="gen-single-meta-holder">
                                                                        <ul>
                                                                            <li>2 Seasons</li>
                                                                            <li>9 Episodes</li>
                                                                            <li>2015 to 2016</li>


                                                                            <li>
                                                                                <a href="../../tv-show-genre/action/index.html"><span>Action</span></a>

                                                                            </li>
                                                                            <li>
                                                                                <i class="fas fa-eye">

                                                                                </i>
                                                                                <span>6.2K Views</span>
                                                                            </li>
                                                                        </ul>

                                                                    </div>
                                                                    <div class="gen-excerpt">
                                                                        <p>Streamlab is a long established fact that a
                                                                            reader will be distracted by the readable
                                                                            content of a page when Streamlab at its
                                                                            layout.
                                                                            The point of using Lorem Streamlab is that
                                                                            it
                                                                            has a more-or-less normal distribution of
                                                                            Streamlab as opposed Streamlab.</p></div>

                                                                    <div class="gen-socail-share">
                                                                        <h4 class="align-self-center">Social Share
                                                                            :</h4>
                                                                        <ul class="social-inner">
                                                                            <li><a target="_blank"
                                                                                   href="www.facebookd274.html?share=http://streamlab.gentechtree.com/tv-show/love-in-21st/"
                                                                                   class="facebook"><i
                                                                                        class="fab fa-facebook-f"></i></a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                   href="#http://streamlab.gentechtree.com/tv-show/love-in-21st/"
                                                                                   class="facebook"><i
                                                                                        class="fab fa-instagram"></i></a>
                                                                            </li>
                                                                            <li><a target="_blank"
                                                                                   href="#http://streamlab.gentechtree.com/tv-show/love-in-21st/"
                                                                                   class="facebook"><i
                                                                                        class="fab fa-twitter"></i></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="gen-season-holder">
                                                        <ul class="nav">
                                                            <li class="nav-item">
                                                                <a class="nav-link show active" data-toggle="tab"
                                                                   href="#season_0">Season 1</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link " data-toggle="tab" href="#season_1">Season
                                                                    2</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">

                                                            <div id="season_0" class="tab-pane active show">
                                                                <div class="owl-carousel" data-dots="false"
                                                                     data-nav="true"
                                                                     data-desk_num="4" data-lap_num="3" data-tab_num="2"
                                                                     data-mob_num="1" data-mob_sm="1"
                                                                     data-autoplay="false"
                                                                     data-loop="false" data-margin="30"
                                                                     data-rewing="false">

                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/love-in-21st/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E01 <span>-</span>
                                                                                        <a href="../../episode/love-in-21st/index.html">

                                                                                            Love In 21st
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 7, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/day-i-met-her/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E02 <span>-</span>
                                                                                        <a href="../../episode/day-i-met-her/index.html">

                                                                                            Day I Met Her
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 8, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/first-date/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E03 <span>-</span>
                                                                                        <a href="../../episode/first-date/index.html">

                                                                                            First date
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 9, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/first-fight/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E04 <span>-</span>
                                                                                        <a href="../../episode/first-fight/index.html">

                                                                                            First Fight
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 9, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/looking-her/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E05 <span>-</span>
                                                                                        <a href="../../episode/looking-her/index.html">

                                                                                            Looking her
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 10, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div id="season_1" class="tab-pane ">
                                                                <div class="owl-carousel" data-dots="false"
                                                                     data-nav="true"
                                                                     data-desk_num="4" data-lap_num="3" data-tab_num="2"
                                                                     data-mob_num="1" data-mob_sm="1"
                                                                     data-autoplay="false"
                                                                     data-loop="false" data-margin="30"
                                                                     data-rewing="false">

                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/love-in-21st/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E01 <span>-</span>
                                                                                        <a href="../../episode/love-in-21st/index.html">

                                                                                            Love In 21st
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 7, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/day-i-met-her/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E02 <span>-</span>
                                                                                        <a href="../../episode/day-i-met-her/index.html">

                                                                                            Day I Met Her
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 8, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/first-fight/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E04 <span>-</span>
                                                                                        <a href="../../episode/first-fight/index.html">

                                                                                            First Fight
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 9, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>


                                                                    <div class="item">
                                                                        <div class="gen-episode-contain">
                                                                            <div class="gen-episode-img">
                                                                                <img
                                                                                    src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                <div class="gen-movie-action">
                                                                                    <a href="../../episode/looking-her/index.html"
                                                                                       class="gen-button">
                                                                                        <i class="fa fa-play"></i>
                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="gen-info-contain">
                                                                                <div class="gen-episode-info">


                                                                                    <h3>
                                                                                        S01E05 <span>-</span>
                                                                                        <a href="../../episode/looking-her/index.html">

                                                                                            Looking her
                                                                                        </a>
                                                                                    </h3>

                                                                                </div>
                                                                                <div class="gen-single-meta-holder">
                                                                                    <ul>

                                                                                        <li class="run-time">40min</li>
                                                                                        <li class="release-date">
                                                                                            September 10, 2018
                                                                                        </li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="pm-inner">
                                                                <div class="gen-more-like">
                                                                    <h5 class="gen-more-title">More Like This</h5>
                                                                    <div class="row post-loadmore-wrapper">
                                                                        <div class="post-loadmore-data"
                                                                             data-box_style="1"
                                                                             data-query="{&quot;post_type&quot;:&quot;tv_show&quot;,&quot;post_status&quot;:&quot;publish&quot;,&quot;error&quot;:&quot;&quot;,&quot;m&quot;:&quot;&quot;,&quot;p&quot;:0,&quot;post_parent&quot;:&quot;&quot;,&quot;subpost&quot;:&quot;&quot;,&quot;subpost_id&quot;:&quot;&quot;,&quot;attachment&quot;:&quot;&quot;,&quot;attachment_id&quot;:0,&quot;name&quot;:&quot;&quot;,&quot;pagename&quot;:&quot;&quot;,&quot;page_id&quot;:0,&quot;second&quot;:&quot;&quot;,&quot;minute&quot;:&quot;&quot;,&quot;hour&quot;:&quot;&quot;,&quot;day&quot;:0,&quot;monthnum&quot;:0,&quot;year&quot;:0,&quot;w&quot;:0,&quot;category_name&quot;:&quot;&quot;,&quot;tag&quot;:&quot;&quot;,&quot;cat&quot;:&quot;&quot;,&quot;tag_id&quot;:&quot;&quot;,&quot;author&quot;:&quot;&quot;,&quot;author_name&quot;:&quot;&quot;,&quot;feed&quot;:&quot;&quot;,&quot;tb&quot;:&quot;&quot;,&quot;paged&quot;:0,&quot;meta_key&quot;:&quot;&quot;,&quot;meta_value&quot;:&quot;&quot;,&quot;preview&quot;:&quot;&quot;,&quot;s&quot;:&quot;&quot;,&quot;sentence&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;fields&quot;:&quot;&quot;,&quot;menu_order&quot;:&quot;&quot;,&quot;embed&quot;:&quot;&quot;,&quot;category__in&quot;:[],&quot;category__not_in&quot;:[],&quot;category__and&quot;:[],&quot;post__in&quot;:[],&quot;post__not_in&quot;:[],&quot;post_name__in&quot;:[],&quot;tag__in&quot;:[],&quot;tag__not_in&quot;:[],&quot;tag__and&quot;:[],&quot;tag_slug__in&quot;:[],&quot;tag_slug__and&quot;:[],&quot;post_parent__in&quot;:[],&quot;post_parent__not_in&quot;:[],&quot;author__in&quot;:[],&quot;author__not_in&quot;:[],&quot;ignore_sticky_posts&quot;:false,&quot;suppress_filters&quot;:false,&quot;cache_results&quot;:true,&quot;update_post_term_cache&quot;:true,&quot;lazy_load_term_meta&quot;:true,&quot;update_post_meta_cache&quot;:true,&quot;posts_per_page&quot;:10,&quot;nopaging&quot;:false,&quot;comments_per_page&quot;:&quot;50&quot;,&quot;no_found_rows&quot;:false,&quot;order&quot;:&quot;DESC&quot;}"
                                                                             data-paged="0" data-max="2"
                                                                             data-nonce="ffc58265ba"
                                                                             data-post_type="tv_show"></div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-6406 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-adventure">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/19-1-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../ghost-of-sky/index.html?action=streamlab_core_process_simple_like&amp;post_id=6406&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-6406"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="6406"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook6018.html?share=http://streamlab.gentechtree.com/tv-show/ghost-of-sky/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/ghost-of-sky/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/ghost-of-sky/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../ghost-of-sky/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../ghost-of-sky/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../ghost-of-sky/index.html">Ghost
                                                                                                        of Sky</a></h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/adventure/index.html"><span>Adventure</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-5049 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/03/12-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="index.html?action=streamlab_core_process_simple_like&amp;post_id=5049&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-5049"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="5049"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebookd274.html?share=http://streamlab.gentechtree.com/tv-show/love-in-21st/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/love-in-21st/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/love-in-21st/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="index.html">Love
                                                                                                        In 21st</a></h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>2 Seasons</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/action/index.html"><span>Action</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2560 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-comedy tv_show_genre-drama tv_show_tag-4k-ultra tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/34-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../family-love/index.html?action=streamlab_core_process_simple_like&amp;post_id=2560&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2560"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2560"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook0454.html?share=http://streamlab.gentechtree.com/tv-show/family-love/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/family-love/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/family-love/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../family-love/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../family-love/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../family-love/index.html">Family
                                                                                                        Love</a></h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>0 Seasons</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/action/index.html"><span>Action</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2547 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-comedy tv_show_genre-drama tv_show_tag-4k-ultra tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-king tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/26-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../dance-nation-dance/index.html?action=streamlab_core_process_simple_like&amp;post_id=2547&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2547"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2547"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook9f22.html?share=http://streamlab.gentechtree.com/tv-show/dance-nation-dance/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/dance-nation-dance/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/dance-nation-dance/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../dance-nation-dance/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../dance-nation-dance/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../dance-nation-dance/index.html">Dance
                                                                                                        nation Dance</a>
                                                                                                </h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>0 Seasons</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/comedy/index.html"><span>Comedy</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2534 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-action tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-king tv_show_tag-premieres tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/New-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../vacation-life/index.html?action=streamlab_core_process_simple_like&amp;post_id=2534&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2534"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2534"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook39cf.html?share=http://streamlab.gentechtree.com/tv-show/vacation-life/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/vacation-life/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/vacation-life/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../vacation-life/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../vacation-life/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../vacation-life/index.html">Vacation
                                                                                                        Life</a></h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/action/index.html"><span>Action</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2508 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-fantasy tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/7-1-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../dream-of-dargons/index.html?action=streamlab_core_process_simple_like&amp;post_id=2508&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2508"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2508"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebookfc41.html?share=http://streamlab.gentechtree.com/tv-show/dream-of-dargons/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/dream-of-dargons/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/dream-of-dargons/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../dream-of-dargons/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../dream-of-dargons/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../dream-of-dargons/index.html">Dream
                                                                                                        Of Dargons</a>
                                                                                                </h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/drama/index.html"><span>Drama</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2482 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-comedy tv_show_genre-crime tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-original tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/32-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../command-in-your-hand/index.html?action=streamlab_core_process_simple_like&amp;post_id=2482&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2482"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2482"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook06d1.html?share=http://streamlab.gentechtree.com/tv-show/command-in-your-hand/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/command-in-your-hand/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/command-in-your-hand/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../command-in-your-hand/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../command-in-your-hand/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../command-in-your-hand/index.html">Command
                                                                                                        In Your Hand</a>
                                                                                                </h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/comedy/index.html"><span>Comedy</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2469 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-biography tv_show_genre-crime tv_show_genre-drama tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/29-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../stories-of-the-dark/index.html?action=streamlab_core_process_simple_like&amp;post_id=2469&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2469"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2469"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook54d7.html?share=http://streamlab.gentechtree.com/tv-show/stories-of-the-dark/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/stories-of-the-dark/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/stories-of-the-dark/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../stories-of-the-dark/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../stories-of-the-dark/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../stories-of-the-dark/index.html">Stories
                                                                                                        Of the Dark</a>
                                                                                                </h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/biography/index.html"><span>Biography</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2430 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-mystrey tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-king tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/03/13-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../friend-of-jin/index.html?action=streamlab_core_process_simple_like&amp;post_id=2430&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2430"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2430"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook0560.html?share=http://streamlab.gentechtree.com/tv-show/friend-of-jin/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/friend-of-jin/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/friend-of-jin/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../friend-of-jin/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../friend-of-jin/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../friend-of-jin/index.html">Friend
                                                                                                        Of Jin</a></h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/drama/index.html"><span>Drama</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>
                                                                        <div class="col-xl-3 col-lg-4 col-md-6">
                                                                            <article
                                                                                class="post-2417 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-drama tv_show_genre-sci-fi tv_show_tag-brother tv_show_tag-brother-relationship tv_show_tag-kings tv_show_tag-vikings">
                                                                                <div
                                                                                    class="gen-carousel-movies-style-1 movie-grid style-1">
                                                                                    <div class="gen-movie-contain">
                                                                                        <div class="gen-movie-img">
                                                                                            <img
                                                                                                src="../../wp-content/uploads/2019/02/24-500x400.jpg">
                                                                                            <div class="gen-movie-add">


                                                                                                <div
                                                                                                    class="wpulike wpulike-heart ">
                                                                                                    <div
                                                                                                        class="wp_ulike_general_class">
                                                                                                        <a href="../3-hackertbg/index.html?action=streamlab_core_process_simple_like&amp;post_id=2417&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                                                           class="sl-button sl-button-2417"
                                                                                                           data-nonce="d5a1e1d2c3"
                                                                                                           data-post-id="2417"
                                                                                                           data-iscomment="0"
                                                                                                           title="Like"><i
                                                                                                                class="far fa-heart"></i></a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <ul class="menu bottomRight">
                                                                                                    <li class="share top">
                                                                                                        <i class="fa fa-share-alt"></i>
                                                                                                        <ul class="submenu">
                                                                                                            <li>
                                                                                                                <a href="www.facebook7a84.html?share=http://streamlab.gentechtree.com/tv-show/3-hackertbg/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-facebook-f"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/3-hackertbg/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-instagram"></i></a>
                                                                                                            </li>
                                                                                                            <li>
                                                                                                                <a href="#http://streamlab.gentechtree.com/tv-show/3-hackertbg/"
                                                                                                                   class="facebook"><i
                                                                                                                        class="fab fa-twitter"></i></a>
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </li>
                                                                                                </ul>
                                                                                                <div
                                                                                                    class="tv-show-actions--link_add-to-playlist dropdown">
                                                                                                    <a class="dropdown-toggle"
                                                                                                       href="../3-hackertbg/index.html"
                                                                                                       data-toggle="dropdown">+
                                                                                                        Playlist</a>
                                                                                                    <div
                                                                                                        class="dropdown-menu">
                                                                                                        <a class="login-link"
                                                                                                           href="../../library/tv-show-playlists/index.html">Sign
                                                                                                            in to add
                                                                                                            this
                                                                                                            tv show to a
                                                                                                            playlist.</a>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-action">
                                                                                                <a href="../3-hackertbg/index.html"
                                                                                                   class="gen-button">
                                                                                                    <i class="fa fa-play"></i>
                                                                                                </a>
                                                                                            </div>

                                                                                        </div>
                                                                                        <div class="gen-info-contain">
                                                                                            <div class="gen-movie-info">
                                                                                                <h3>
                                                                                                    <a href="../3-hackertbg/index.html">3
                                                                                                        Hacker:TBG</a>
                                                                                                </h3>


                                                                                            </div>
                                                                                            <div
                                                                                                class="gen-movie-meta-holder">
                                                                                                <ul>
                                                                                                    <li>1 Season</li>


                                                                                                    <li>
                                                                                                        <a href="../../tv-show-genre/drama/index.html"><span>Drama</span></a>

                                                                                                    </li>
                                                                                                </ul>

                                                                                            </div>
                                                                                        </div>

                                                                                    </div>
                                                                                </div>

                                                                            </article><!-- #post-## -->
                                                                        </div>

                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="gen-load-more-button">
                                                                                <div class="gen-btn-container">
                                                                                    <a class="gen-button gen-button-loadmore gen-button-flat"
                                                                                       href="#">
                                                                                        <span class="button-text">Load More</span>
                                                                                        <span class="loadmore-icon"><i
                                                                                                class="fa fa-spinner fa-spin"></i></span>

                                                                                    </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>


                                                                        <div class="post-loadmore-data"
                                                                             data-query="{&quot;page&quot;:0,&quot;tv_show&quot;:&quot;love-in-21st&quot;,&quot;post_type&quot;:&quot;tv_show&quot;,&quot;name&quot;:&quot;love-in-21st&quot;,&quot;error&quot;:&quot;&quot;,&quot;m&quot;:&quot;&quot;,&quot;p&quot;:0,&quot;post_parent&quot;:&quot;&quot;,&quot;subpost&quot;:&quot;&quot;,&quot;subpost_id&quot;:&quot;&quot;,&quot;attachment&quot;:&quot;&quot;,&quot;attachment_id&quot;:0,&quot;pagename&quot;:&quot;&quot;,&quot;page_id&quot;:0,&quot;second&quot;:&quot;&quot;,&quot;minute&quot;:&quot;&quot;,&quot;hour&quot;:&quot;&quot;,&quot;day&quot;:0,&quot;monthnum&quot;:0,&quot;year&quot;:0,&quot;w&quot;:0,&quot;category_name&quot;:&quot;&quot;,&quot;tag&quot;:&quot;&quot;,&quot;cat&quot;:&quot;&quot;,&quot;tag_id&quot;:&quot;&quot;,&quot;author&quot;:&quot;&quot;,&quot;author_name&quot;:&quot;&quot;,&quot;feed&quot;:&quot;&quot;,&quot;tb&quot;:&quot;&quot;,&quot;paged&quot;:0,&quot;meta_key&quot;:&quot;&quot;,&quot;meta_value&quot;:&quot;&quot;,&quot;preview&quot;:&quot;&quot;,&quot;s&quot;:&quot;&quot;,&quot;sentence&quot;:&quot;&quot;,&quot;title&quot;:&quot;&quot;,&quot;fields&quot;:&quot;&quot;,&quot;menu_order&quot;:&quot;&quot;,&quot;embed&quot;:&quot;&quot;,&quot;category__in&quot;:[],&quot;category__not_in&quot;:[],&quot;category__and&quot;:[],&quot;post__in&quot;:[],&quot;post__not_in&quot;:[],&quot;post_name__in&quot;:[],&quot;tag__in&quot;:[],&quot;tag__not_in&quot;:[],&quot;tag__and&quot;:[],&quot;tag_slug__in&quot;:[],&quot;tag_slug__and&quot;:[],&quot;post_parent__in&quot;:[],&quot;post_parent__not_in&quot;:[],&quot;author__in&quot;:[],&quot;author__not_in&quot;:[],&quot;ignore_sticky_posts&quot;:false,&quot;suppress_filters&quot;:false,&quot;cache_results&quot;:true,&quot;update_post_term_cache&quot;:true,&quot;lazy_load_term_meta&quot;:true,&quot;update_post_meta_cache&quot;:true,&quot;posts_per_page&quot;:10,&quot;nopaging&quot;:false,&quot;comments_per_page&quot;:&quot;50&quot;,&quot;no_found_rows&quot;:false,&quot;order&quot;:&quot;DESC&quot;}"
                                                                             data-box_style="1" data-paged="1"
                                                                             data-max="0"
                                                                             data-nonce="ffc58265ba"
                                                                             data-post_type="tv_show"></div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </article>
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
