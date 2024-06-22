@extends('index')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <section class="profileItems">
                    <div class="profileItems__wrapper">
                        <div class="notificationErorr">
                            <p class="notificationErorr__text">
                                برای استفاده از امکانات جیم پل نیاز احراز هویت شما در سامانه جیم پل هست برای فعال سازی
                                حساب اطلاعات پروفایل خود را تکمیل کنید.
                            </p>
                            <div class="notificationErorr__wrBtn">
                                <a href="#" class="notificationErorr__btn">
                                    فعال سازی حساب
                                </a>
                            </div>
                        </div>
                        <div class="profileUser">
                            <figure class="profileUser__img">
                                <img src="./assets/image/userImgProfileDefult.svg" alt="">
                            </figure>
                            <div class="profileUser__wrapper">
                                <span class="profileUser__name">
                                    ایمان انصاری فر
                                </span>
                                <div class="profileUser__state">
                                    در انتظار تایید
                                </div>
                            </div>
                        </div>
                        <div class="packagesActive">
                            <div class="packagesActive__title">
                                بسته‌های فعال
                            </div>
                            <div class="packagesActive__box">
                                <figure class="packagesActive__img">
                                    <img src="./assets/image/icon/yellowIcon.svg" alt="">
                                </figure>
                                <div class="packagesActive__wrapper">
                                    <div class="packagesActive__numebr">
                                        <span>
                                            12
                                        </span>
                                        جم گلد قابل استفاده دارید
                                    </div>
                                    <div class="packagesActive__timeLeft">
                                        <i class="icon-time"></i>
                                        <span>28</span>
                                        <span>روز تا پایان اعتبار</span>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="packagesActive__buySubscription">
                                خرید اشتراک
                            </a>
                        </div>
                        <div class="informationAccount">
                            <a href="#" class="informationAccount__link">
                                <i class="icon-userWrite"></i>
                                <span>
                                    اطلاعات حساب
                                </span>
                            </a>
                        </div>
                        <div class="quickMenu">
                            <ul>
                                <li><a href="#">سوالات متداول</a></li>
                                <li><a href="#">پشتیبانی</a></li>
                            </ul>
                        </div>
                        <div class="signOutAccount">
                            <a href="#" class="signOutAccount__link">
                                خروج از حساب
                            </a>
                        </div>
                    </div>
                    <footer>
                        <div class="SupportJimPaul">
                            <div class="SupportJimPaul__right">
                                <div class="SupportJimPaul__title">
                                    پشتیبانی جیم پل
                                </div>
                                <a href="#" class="SupportJimPaul__phone">
                                    ۰۲۱-۲۸۴۲۳۴
                                </a>
                            </div>
                            <figure class="SupportJimPaul__img">
                                <img src="./assets/image/icon/Chat-1.png" alt="">
                            </figure>
                        </div>
                        <div class="permissionsJimPaul">
                            <div class="permissionsJimPaul__title">
                                مجوزها
                            </div>
                            <div class="permissionsJimPaul__slide">
                                <div class="swiper permissionsJimPaul__swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="./assets/image/imgGym.png" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="./assets/image/imgGym.png" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="./assets/image/imgGym.png" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="./assets/image/imgGym.png" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="socialmedia">
                            <ul class="socialmedia__list">
                                <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                                <li><a href="#"><i class="icon-youtube"></i></a></li>
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyRight">
                            Copyright © 2023 - 2024 gympall.com - Design and Development by Karo Studio
                        </div>
                    </footer>
                </section>
            </div>
        </div>
    </main>
@endsection
