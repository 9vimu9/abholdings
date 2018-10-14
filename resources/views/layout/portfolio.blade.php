<section id="portfolio">

    <div class="container-page padd-80">

        <div class="row row-mag">

            <div class="row-centered">
                <div class="col-centered col-lg-7 col-md-7">

                    <h2 class="title-h2">Our Services </h2>

                </div>

                <div class="project-holder">


                    {{--<div class="filter-tab">--}}

                        {{--<button class="btn active filter-btn" data-filter="all">All</button>--}}
                        {{--<button class="btn  filter-btn" data-filter="branding">Branding</button>--}}
                        {{--<button class="btn   filter-btn" data-filter="Web-design">Web design</button>--}}
                        {{--<button class="btn    filter-btn" data-filter="Graphic-design">Graphic Design</button>--}}
                        {{--<button class="btn   filter-btn" data-filter="other">Others</button>--}}
                    {{--</div>--}}

                    <div class="projetc-inner">

                        <div class="row">

                            @include('layout.serviceblock',['name'=>'AB AUTOMART','url'=>route('services.abautomart'),'folder'=>'abautomart','title'=>'VEHICLE TRADE'])
                            @include('layout.serviceblock',['name'=>'Spicy Kade','url'=>route('services.abautomart'),'folder'=>'spicyKade','title'=>'SPICY TRADE'])
                            @include('layout.serviceblock',['name'=>'AB AUTOMART','url'=>route('services.abautomart'),'folder'=>'abautomart','title'=>'VEHICLE TRADE'])

                        </div>

                    </div>

                </div>
            </div>
        </div>


    </div>



</section>