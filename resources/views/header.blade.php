<section class="sliderMain">
    <figure class="sliderMain__img">
        <img src="{{asset('assets/image/image 2.jpg')}}" alt="">
    </figure>
    <header>
        <div class="container">
            <div class="header__wrapper">

                <div class="header__logo">
                    <a href="{{route('home')}}">
                        <img src="{{asset('assets/image/Union.svg')}}" alt="">
                    </a>
                </div>
                <div class="header__right">
                    <div class="header__menu">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">{{__('texts.home')}}</a></li>
                                <li><a href="{{route('offers')}}">{{__('texts.offers')}}</a></li>
                                <li><a href="{{route('page', 'about-us')}}">{{__('texts.about_us')}}</a></li>
                                <li><a href="{{route('services')}}">{{__('texts.services')}}</a></li>
                                <li><a href="{{route('projects')}}">{{__('texts.projects')}}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__contactUs btnAnimation">
                        <a href="{{route('page', 'contact-us')}}" class="btn-contactus">
                            {{__('texts.contact_us')}}
                        </a>
                    </div>
                </div>
                <div class="header__hambergerMenu" id="menuHamberger">
                    <div class="HamburgerAni">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="sliderMain__title">
        {{__('texts.home_header')}}
    </div>
</section>
<div id="ResponsiveMenuMobile" class="ResponsiveMenuMobile">
    <div class="ResponsiveMenuMobile_head">
        <div class="ResponsiveMenuMobile_logo">
            <figure>
                <a href="{{route('home')}}">
                    <img src="{{asset('assets/image/logoMobile.svg')}}" alt="">
                </a>
            </figure>
        </div>
        <div class="ResponsiveMenuMobile_close" id="ResponsiveMenuMobile_close">
            <i class="icon-close"></i>
        </div>
    </div>
    <div class="ResponsiveMenuMobile_menu">
        <nav>
            <ul>
                <li>
                    <a href="{{route('home')}}">
                        <i class="icon-Polygon"></i>
                        <span>{{__('texts.home')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('offers')}}">
                        <i class="icon-Polygon"></i>
                        <span>{{__('texts.offers')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('page', 'about-us')}}">
                        <i class="icon-Polygon"></i>
                        <span>{{__('texts.about_us')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('services')}}">
                        <i class="icon-Polygon"></i>
                        <span>{{__('texts.services')}}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('projects')}}">
                        <i class="icon-Polygon"></i>
                        <span>{{__('texts.projects')}}</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div class="header__contactUs ">
        <a href="{{route('page', 'contact-us')}}" class="btn-contactus btnAnimation">
            {{__('texts.contact_us')}}
        </a>
    </div>
</div>
<div id="bg-overly">

</div>
