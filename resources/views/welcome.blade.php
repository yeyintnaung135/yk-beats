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
                                                    class="post-6406 tv_show type-tv_show status-publish has-post-thumbnail hentry tv_show_genre-adventure">
                                                    <div class="gen-carousel-movies-style-1 movie-grid style-1">
                                                        <div class="gen-movie-contain">
                                                            <div class="gen-movie-img">
                                                                <img
                                                                    src="{{asset('storage/'.$vd->thumbnail)}}">
                                                                <div class="gen-movie-add">


                                                                    <div class="wpulike wpulike-heart ">
                                                                        <div class="wp_ulike_general_class">
                                                                            <a href="../tv-show/ghost-of-sky/index.html?action=streamlab_core_process_simple_like&amp;post_id=6406&amp;nonce=d5a1e1d2c3&amp;is_comment=0&amp;disabled=true"
                                                                               class="sl-button sl-button-6406"
                                                                               data-nonce="d5a1e1d2c3"
                                                                               data-post-id="6406" data-iscomment="0"
                                                                               title="Like"><i class="far fa-heart"></i></a>
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
                                                                           href="../tv-show/ghost-of-sky/index.html"
                                                                           data-toggle="dropdown">+ Playlist</a>
                                                                        <div class="dropdown-menu">
                                                                            <a class="login-link"
                                                                               href="../library/tv-show-playlists/index.html">Sign
                                                                                in to add this tv show to a
                                                                                playlist.</a></div>
                                                                    </div>

                                                                </div>
                                                                <div class="gen-movie-action">
                                                                    <a href="../tv-show/ghost-of-sky/index.html"
                                                                       class="gen-button">
                                                                        <i class="fa fa-play"></i>
                                                                    </a>
                                                                </div>

                                                            </div>
                                                            <div class="gen-info-contain">
                                                                <div class="gen-movie-info">
                                                                    <h3><a href="../tv-show/ghost-of-sky/index.html">Ghost
                                                                            of Sky</a></h3>


                                                                </div>
                                                                <div class="gen-movie-meta-holder">
                                                                    <ul>
                                                                        <li>1 Season</li>


                                                                        <li>
                                                                            <a href="../tv-show-genre/adventure/index.html"><span>Adventure</span></a>

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


