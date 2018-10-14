<!DOCTYPE html>
<html lang="en">

    @include('layout.head')



<body data-spy="scroll" data-target=".navbar-default" data-offset="100">

    {{--@include('layout.loader')--}}


    <div class="warpper clearfix">



        <div class="panel-overlay"></div>

        @include('layout.navbar')
       @yield("content")
        @include('layout.sidebarmenu')

    </div>

    @include('layout.footer.master')
    @include('layout.script')

    @yield("script")

</body>
</html>