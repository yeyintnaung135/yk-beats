<header id="gen-header" class="gen-header-style-1 gen-has-sticky">
    <div class="gen-bottom-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="../index.html">
                            <img class="img-fluid logo" src="{{url('photos/logo.png')}}" alt="streamlab">
                        </a>
                        @if(str_contains(url()->current(),'bytype'))
                            <?php
                            $home = '';
                            $beat = 'blue';
                            $freebeat = '';
                            $contactinfo = '';
                            ?>
                        @endif
                        @if(str_contains(url()->current(),'freebeats'))
                            <?php
                            $home = '';
                            $beat = '';
                            $freebeat = 'current-menu-ancestor';
                            $contactinfo = '';
                            ?>
                        @endif
                        @if(str_contains(url()->current(),'detail'))
                            @if(str_contains(url()->previous(),'freebeats'))
                                <?php
                                $home = '';
                                $beat = '';
                                $freebeat = 'current-menu-ancestor';
                                $contactinfo = '';
                                ?>
                            @else
                                <?php
                                $home = '';
                                $beat = 'blue';
                                $freebeat = '';
                                $contactinfo = '';
                                ?>
                            @endif
                        @endif
                        @if(str_contains(url()->current(),'contact'))
                            <?php
                            $home = '';
                            $beat = '';
                            $freebeat = '';
                            $contactinfo = 'current-menu-ancestor';
                            ?>
                        @endif
                        @if(url()->current()==url()->to('/'))
                            <?php
                            $home = 'current-menu-ancestor';
                            $beat = '';
                            $freebeat = '';
                            $contactinfo = '';
                            ?>
                        @endif


                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div id="gen-menu-contain" class="gen-menu-contain">
                                <ul id="gen-main-menu" class="navbar-nav ml-auto">
                                    <li id="menu-item-5993"
                                        class="menu-item menu-item-type-post_type menu-item-object-page {{$home}} menu-item-home menu-item-has-children dropdown menu-item-5993">
                                        <a href="{{url('/')}}">Home</a>
                                    </li>

                                    <li id="nav-item dropdown"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-7578  {{$beat}}">
                                        <a href="#">Beats</a><i class="fa fa-chevron-down gen-submenu-icon"></i>
                                        <ul class="sub-menu ">
                                            @foreach($types as $t)
                                                <li id="menu-item-5550"
                                                    class="menu-item navbar-nav menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5550">
                                                    <a href="{{url('/bytype/'.$t->type)}}">{{$t->type}}</a><i
                                                        class="gen-submenu-icon"></i>
                                                </li>
                                            @endforeach

                                        </ul>
                                    </li>
                                    <li id="menu-item-5993"
                                        class="menu-item menu-item-type-post_type {{$freebeat}} menu-item-object-page menu-item-home menu-item-has-children dropdown menu-item-5993">
                                        <a href="{{url('/freebeats')}}">Free Beats</a>
                                    </li>
                                    <li id="menu-item-5993"
                                        class="menu-item menu-item-type-post_type {{$contactinfo}} menu-item-object-page menu-item-home menu-item-has-children dropdown menu-item-5993">
                                        <a href="{{url('/contact')}}">Contact Info</a>
                                    </li>
{{--                                    <li id="menu-item-7578"--}}
{{--                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children dropdown menu-item-7578">--}}
{{--                                        <a href="#">Pages</a><i class="fa fa-chevron-down gen-submenu-icon"></i>--}}
{{--                                        <ul class="sub-menu">--}}
{{--                                            <li id="menu-item-5849"--}}
{{--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5849">--}}
{{--                                                <a href="#">Blog</a><i--}}
{{--                                                    class="fa fa-chevron-down gen-submenu-icon"></i>--}}
{{--                                                <ul class="sub-menu">--}}
{{--                                                    <li id="menu-item-5858"--}}
{{--                                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-5858">--}}
{{--                                                        <a href="#">Blog With Sidebar</a><i--}}
{{--                                                            class="fa fa-chevron-down gen-submenu-icon"></i>--}}
{{--                                                        <ul class="sub-menu">--}}
{{--                                                            <li id="menu-item-5860"--}}
{{--                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5860">--}}
{{--                                                                <a href="../blog-left-sidebar/index.html">blog left--}}
{{--                                                                    sidebar</a></li>--}}
{{--                                                            <li id="menu-item-5859"--}}
{{--                                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5859">--}}
{{--                                                                <a href="../blog-right-sidebar/index.html">blog--}}
{{--                                                                    right sidebar</a></li>--}}
{{--                                                        </ul>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li id="menu-item-7581"--}}
{{--                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-7581">--}}
{{--                                                <a href="#">Pricing</a><i--}}
{{--                                                    class="fa fa-chevron-down gen-submenu-icon"></i>--}}
{{--                                                <ul class="sub-menu">--}}
{{--                                                    <li id="menu-item-7580"--}}
{{--                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7580">--}}
{{--                                                        <a href="../pricing-table/index.html">Style 1</a></li>--}}
{{--                                                    <li id="menu-item-7579"--}}
{{--                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7579">--}}
{{--                                                        <a href="../pricing-plan/index.html">Style 2</a></li>--}}
{{--                                                </ul>--}}
{{--                                            </li>--}}
{{--                                            <li id="menu-item-6440"--}}
{{--                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6440">--}}
{{--                                                <a href="../contact-us/index.html">Contact Us</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                </ul>
                            </div>
                        </div>


                        <div class="gen-header-info-box">
{{--                            <div class="gen-menu-search-block">--}}
{{--                                <a href="javascript:void(0)" id="gen-seacrh-btn"><i class="fa fa-search"></i></a>--}}
{{--                                <div class="gen-search-form">--}}

{{--                                    <form role="search" method="get" class="search-form"--}}
{{--                                          action="http://streamlab.gentechtree.com/">--}}
{{--                                        <label>--}}
{{--                                            <span class="screen-reader-text">Search for:</span>--}}
{{--                                            <input type="search" class="search-field" placeholder="Search .."--}}
{{--                                                   value="" name="s">--}}
{{--                                        </label>--}}
{{--                                        <button type="submit" class="search-submit"><span--}}
{{--                                                class="screen-reader-text">Search</span></button>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="gen-account-holder">
                                <a href="javascript:void(0)" id="gen-user-btn"><i class="fa fa-user"></i></a>
                                <div class="gen-account-menu">
                                    <ul class="gen-account-menu">
                                        <!-- Pms Menu -->
                                        <li>
                                            <a href="../login/index.html"><i class="fa fa-sign-in"></i>
                                                login </a>
                                        </li>
                                        <li>
                                            <a href="../register/index.html"><i class="fa fa-user"></i>
                                                Register </a>
                                        </li>

                                        <!-- Library Menu -->


                                    </ul>


                                </div>
                            </div>
                            <div class="gen-btn-container">

                                <a href="https://www.youtube.com/channel/UCoW_uxPnP6V9h3ydHKc0kvw" class="gen-button">
                                    <div class="gen-button-block">
                                        <span class="gen-button-line-left"></span>
                                        <span class="gen-button-text">Subscribe</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
