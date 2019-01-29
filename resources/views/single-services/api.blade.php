@extends('layout.master')

@section('content')

    <!-- section title -->

    <div class="section-title " >
        <div class="portflio-section-title padd-title" >

            <div class="pd-tp-50 portfolio-hero" style="background-image: url({{url("assets/images/portflio/api/hero.jpg")}});">
                <div class="col-centered col-lg-7"  >

                    <h1 class="title-h2"></h1>

                    <p class="font-p">
                        To make THEIR dreams comes true
                    </p>

                </div>
            </div>

        </div>
    </div>

    <!-- section title -->

    <!-- Portfolio-->
    <section id="projets" class="padd-80">

        <div class="container-page">

            <div class="row">



                <div class="col-lg-6 col-md-6">
                    <p style="font-weight: bold;">
                        With prime aim of serving to the society we AB holdings steps in Corporate Social Responsibility as a facilitator in making an education environment
                    </p>

                    <p style="font-weight: bold;">
                        Sri Lanka needs aids for school education environment to be matched with the modern world
                    </p>

                    <p style="font-weight: bold;">
                        As schools are in a lack of Information technology, scientific and mathematical instruments we hope to carry out the fulfilment as the world must be a fair place to every generation.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <img src="{{url("assets/images/portflio/api/service_icon.jpg")}}" alt="">
                </div>


                {{--<div class="portfolio-caroussel">--}}
                {{--<div class="item">--}}
                {{--<img src="/assets/images/portflio/abautomart/1.jpg" alt="">--}}
                {{--</div>--}}
                {{--<div class="item">--}}
                {{--<img src="/assets/images/portflio/abautomart/2.jpg" alt="">--}}
                {{--</div>--}}

                {{--<div class="item">--}}

                {{--<img src="/assets/images/portflio/abautomart/3.jpg" alt="">--}}
                {{--</div>--}}
                {{--</div>--}}

                {{--</div>--}}

            </div>


        </div>


    </section>

    </div>
    <!-- Page Content --
@endsection