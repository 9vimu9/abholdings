<!DOCTYPE html>
<html lang="en">

    @include('layout.head')

    <body data-spy="scroll" data-target=".navbar-default" data-offset="100">

        {{--@include('layout.loader')--}}

        <div class="warpper clearfix">

            @include('layout.sidebarmenu')

            <div class="panel-overlay"></div>

            @include('layout.navbar')
            @include('layout.home')
            @include('layout.about')
            @include('layout.portfolio')
            {{--@include('layout.about-p')--}}
            @include('layout.video-features')
            {{--@include('layout.services')--}}
            {{--@include('layout.numbers')--}}
            {{--@include('layout.team')--}}
            @include('layout.testimonials')
            @include('layout.contact')
            @include('layout.sponsors')

        </div>

        @include('layout.footer.master')
        @include('layout.script')

    </body>
</html>