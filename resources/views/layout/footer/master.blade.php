<footer class="footer">

    <div class="footer-warpper">

        <div class="footer-top">
            <div class="container-page">


                <div class="footer-top  clearfix">


                    <div class="footer-bottom-content clearfix">

                        <div class="row">

                            <div class="col-lg-4 col-md-4">



                                <div class="logo-footer">
                                    <img src="/assets/images/logos/holdings.png" alt="">

                                </div>
                                {{--<div class="text-footer">--}}
                                    {{--<p>--}}
                                        {{--Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.--}}
                                    {{--</p>--}}
                                {{--</div>--}}


                                <ul class="list-social list-inline" style="padding-left: 25px;">
                                    <li>
                                        <a href="{{config('details.facebook_url')}}"   class="btn btn-circle btn-facebook">
                                            <i class="social_facebook "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"   class="btn btn-circle btn-twitter">
                                            <i class="social_twitter "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"   class="btn btn-circle btn-google-plus">
                                            <i class="social_googleplus "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#"   class="btn btn-circle btn-instgram">
                                            <i class="social_instagram"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>


                            <div class="col-lg-1 col-md-1"></div>
                            <div class="col-lg-3 col-md-3">
                                @include('layout.footer.menu')
                            </div>


                            <div class="col-lg-4 col-md-4">

                                <h5>Contact </h5>

                                <ul class="list-contact">

                                    <li>
                                       {{config('details.address')}}
                                    </li>
                                    <li> {{config('details.telephone')}}</li>

                                    <li> {{config('details.email')}}</li>


                                </ul>

                            </div>

                            {{--<div class="col-lg-3 col-md-3">--}}

                                {{--@include('layout.subscribeNewsLetter')--}}

                            {{--</div>--}}





                        </div>
                    </div>

                </div>



            </div>
        </div>

       @include('layout.footer.bottom')
    </div>

</footer>
