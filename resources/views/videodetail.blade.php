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
                                                                @if($video->file_link != '')
                                                                    <video-component
                                                                        data="{{ asset('storage/'.$video->file_link) }}"
                                                                        image="{{asset('storage/'.$video->thumbnail) }}"></video-component>
                                                                @else
                                                                    <iframe width="560" id="ykyt" height="315"
                                                                            src="{{$video->youtubelink.'?autoplay=1'}}"
                                                                            title="YouTube video player" frameborder="0"
                                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                                            allowfullscreen></iframe>
                                                                @endif
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
                                                                        <div style="font-size:17px;text-indent:  22px">{!! $video->description !!}</div>
                                                                    </div>

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
                                                                    @if($video->sorforn !='free')
                                                                        <h5 class="gen-more-title">Similar Beats</h5>

                                                                    @else
                                                                        <h5 class="gen-more-title">Free Beats</h5>

                                                                    @endif


                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                            </article>
                                        </div>
                                    </div>
                                    <div class="myowl">
                                        <div class="gen-season-holder">
                                            <div id="season_1" class="tab-pane ">
                                                <div class="owl-carousel">
                                                    @foreach($sim_videos as $sv)

                                                        <div class="item">
                                                            <div class="gen-episode-contain" style="z-index: 8 !important;">
                                                                <div class="gen-episode-img">
                                                                    <img
                                                                        src="{{asset('/thumbnail/'.$sv->thumbnail)}} ">

                                                                    <div class="gen-movie-action">
                                                                        <a href="{{url('detail/'.$sv->id)}}"
                                                                           class="gen-button" style="opacity:1 !important;">
                                                                            <i class="fa fa-play"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="gen-info-contain" style="z-index: 8 !important;">
                                                                    <div class="gen-episode-info">


                                                                        <h3>
                                                                            {{$sv->title}}

                                                                        </h3>

                                                                    </div>
                                                                    <div class="gen-single-meta-holder">
                                                                        <ul>

                                                                            <li class="release-date">
                                                                                {{$sv->type}}                                                                                    </li>

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
                                        @if($video->sorforn !='free')
                                            <a href="{{url('bytype/'.$video->type)}}" class="btn btn-lg btn-primary ">See
                                                All &nbsp;&nbsp; <i class="ion-ios-arrow-right"></i></a>
                                        @else
                                            <a href="{{url('bytype/'.'free')}}" class="btn btn-lg btn-primary ">See All
                                                &nbsp;&nbsp; <i class="ion-ios-arrow-right"></i></a>
                                        @endif
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
    </div>
@endsection
