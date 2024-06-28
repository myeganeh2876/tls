<!-- ========================= HEADER ================================ -->
<div class="culoader" id="culoader">
    <figure>
        <img src="{{asset('assets/image/logoMini.svg')}}" alt="">
    </figure>
</div>
<header>
    <div class="container">
        <div class="header__wrapper">
            <div class="humbergerMenu" id="menuHamberger">
                <i class="icon-hambergerMenu"></i>
            </div>
            <a href="#" class="Account">
                <div class="Account__profile">
                    <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                </div>
                <div class="Account__name">
                    حساب کاربری
                </div>
            </a>
            <div class="header__search">
                <form action="">
                    <button><i class="icon-search"></i></button>
                    <input class="header__search--input" type="text" placeholder="جستجو" onfocus="setFocus(true)"
                           onblur="setFocus(false)">
                </form>
            </div>
            <div class="header__left">
                <a href="#" class="BuySubscription">
                    <i class="icon-tiket"></i>
                    <span>
                            خرید اشتراک
                        </span>
                </a>
                <a href="#" class="logo">
                    <figure class="logo__text">
                        <img src="{{asset('assets/image/GymPall.svg')}}" alt="">
                    </figure>
                    <figure class="logo__icon">
                        <img src="{{asset('assets/image/logoMini.svg')}}" alt="">
                    </figure>
                </a>
            </div>
        </div>
        @if(1==2)
        <div class="boxSubscription">
            <div class="boxSubscription__right">
                <figure class="boxSubscription__img">
                    <img src="{{asset('assets/image/cardEshtrak.png')}}" alt="">
                </figure>
                <span class="boxSubscription__text">
                        با یک اشتراک عضویت ورود به ۱۷۸ مجموعه ورزشی داشته باشید
                    </span>

            </div>
            <div class="boxSubscription__left">
                <a href="#" class="boxSubscription__abutUs">
                    درباره جیم پل
                </a>
                <a href="#" class="boxSubscription__BuySubscription">
                    خرید اشتراک
                </a>
            </div>
        </div>
        @endif
    </div>
</header>
<div id="ResponsiveMenuMobile" class="ResponsiveMenuMobile">
    <div class="ResponsiveMenuMobile_close-2" id="ResponsiveMenuMobile_close-2">
    </div>
    <div class="ResponsiveMenuMobile_menu">

        <div class="ResponsiveMenuMobile_close" id="ResponsiveMenuMobile_close">
            <i class="icon-close"></i>
        </div>
        <a href="#" class="logo">
            <figure class="logo__text">
                <img src="{{asset('assets/image/GymPall.svg')}}" alt="">
            </figure>
            <figure class="logo__icon">
                <img src="{{asset('assets/image/logoMini.svg')}}" alt="">
            </figure>
        </a>
        <div class="header__search">
            <form action="">
                <button><i class="icon-search"></i></button>
                <input class="header__search--input" type="text" placeholder="جستجو" onfocus="setFocus(true)"
                       onblur="setFocus(false)">
            </form>
        </div>
        <div class="header__account--wr text-center">
            <a href="#" class="Account">
                <div class="Account__profile">
                    <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                </div>
                <div class="Account__name">
                    حساب کاربری
                </div>
            </a>
        </div>
        <nav>
            <ul>

                <li>
                    <a href="#">
                        <span>خانه</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span>باشگاه ها</span>
                        <i class="icon-arrowDown"></i>
                    </a>
                    <ul class="toggleDropmenu">
                        <li>
                            <a href="#">
                                <span>باشگاه کامبیز و برادران بجز مجتبی</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>باشگاه فرهادی</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span>باشگاه احمدی</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="#">
                        <span>خرید اشتراک</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span> سوالات متداول</span>
                    </a>
                </li>

            </ul>
        </nav>


    </div>
</div>
<div id="bg-overly">

</div>
<!-- ======================= END HEADER ============================== -->
