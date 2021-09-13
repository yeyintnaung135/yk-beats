<div class="own-div" >
    <div class="yk-slide own-brad" style="">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <div class="gen-breadcrumb-title">
                            <h1>
                                @if(str_contains(url()->current(),'freebeats'))
                                    All Free Beats
                                @else
                                    {{urldecode(Str::after(url()->current(),'bytype/'))}} Type Beats
                                @endif

                            </h1>
                        </div>

                    </nav>
                </div>

            </div>
        </div>    </div>






</div>
