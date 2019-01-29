    <!--sidebar menu-->
    {{--@php--}}
    {{--if($sideBarInternalLinks)--}}
    {{--{--}}
        {{--$homeLink--}}
    {{----}}
    {{--}--}}
    {{--@endphp--}}
    <div class="panel panel-menu right">

        <a href="#" class="menu-btn">
            <span></span>
        </a>

        <ul>
            <li class="nav-item active">
                <a data-scroll="" class="nav-link section-scroll" href="{{route('home')}}#home">Home</a>
            </li>
            <li class="nav-item">
                <a data-scroll="" class="nav-link section-scroll" href="{{route('home')}}#about">About</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a data-scroll="" class="nav-link section-scroll" href="#services">Services</a>--}}
            {{--</li>--}}
            <li class="nav-item">
                <a data-scroll="" class="nav-link section-scroll" href="{{route('home')}}#portfolio">Services</a>
            </li>

            <li class="nav-item">
                <a data-scroll="" class="nav-link section-scroll" href="{{route('home')}}#csr">CSR</a>
            </li>
            {{--<li class="nav-item">--}}
                {{--<a data-scroll="" class="nav-link section-scroll" href="#team">Team</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a data-scroll="" class="nav-link section-scroll" href="#blog">Blog</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a data-scroll="" href="{{route('home')}}#testimonials" class="nav-link section-scroll">Testimonials</a>--}}
            {{--</li>--}}
            <li>
                <a data-scroll="" href="{{route('home')}}#contact" class="nav-link section-scroll">Contact</a>
            </li>

            <li class="menu-contact mg-tp-40"><a target="_blank" href="{{config('details.facebook_url')}}">Facebook<i class="social_facebook"></i></a></li>
            <li class="menu-contact"><a target="_blank" href="#">Twitter<i class="social_twitter"></i></a></li>
            <li class="menu-contact"><a target="_blank" href="#">google plus<i class="social_googleplus"></i></a></li>
            <li class="menu-contact"><a target="_blank" href="#">Instagram<i class="social_instagram"></i></a></li>
        </ul>

    </div>