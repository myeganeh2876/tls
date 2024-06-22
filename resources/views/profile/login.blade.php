@extends('index')
@section('content')
    <main>
        <div class="container">
            <section class="registerUser">
                <div class="registerUser__wrapper">
                    <div class="registerUser__head">
                        <div class="registerUser__profile">
                            <img src="./assets/image/userImgProfileDefult.svg" alt="">
                        </div>
                        <div class="registerUser__tilte">
                            ثبت نام یا ورود به حساب کاربری
                        </div>
                    </div>
                    <form class="registerUser__form">

                    </form>
                    <div class="login__wrapper">
                        <div class="login__wrapperNumberUser">
                            <form action="" class="login__NumberUser">
                                <div class="contactUs__form--wrapperBox">
                                    <label for="name">شماره تماس</label>
                                    <div class="contactUs__form--wrInput">
                                        <input type="tel" id="numberPhoneUser" onkeypress="validationMobile(this,event)"
                                               placeholder="+98">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <span class="errorHandering"></span>
                                </div>
                                <button type="submit" class="login__NumberUser--btn">
                                    ادامه
                                </button>
                            </form>
                        </div>
                        <div class="login__wrappercodeDigit">
                            <div class="login__codeDigit">
                                <div class="codeDigit__title">
                                    کد ۶ رقمی به شماره
                                    <div class="codeDigit__number">
                                        ۰۹۰۱۹۰۹۹۸۹۸
                                    </div>
                                    ارسال شده را وارد کنید
                                </div>
                                <div class="codeDigit__editNumberUser--wr">
                                    <div class="codeDigit__editNumberUser">
                                        ویرایش شماره
                                    </div>
                                </div>
                                <form action="" class="codeDigit__form">
                                    <div class="codeDigit__form--title">
                                        کد را وارد کنید
                                    </div>

                                    <div class="codeDigit__form--wr">
                                        <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)">
                                        <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)">
                                        <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)">
                                        <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)">
                                        <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)">
                                        <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)">
                                    </div>
                                    <span class="errorHandering"></span>
                                    <button class="login__NumberUser--btn" type="submit">
                                        تایید ورود
                                    </button>
                                </form>
                                <div class="codeDigit__timer">
                                    <span>
                                        02:00
                                    </span>
                                    ثانیه تا پایان اعتبار کد ارسال شده
                                </div>
                                <button class="codeDigit__sendAgain">
                                    ارسال مجدد کد
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="registerUser__panelJim">
                        <a href="#" class="registerUser__panelJim--btn">
                            ورود به پنل باشگاه
                        </a>
                    </div>
                    <div class="quickMenu">
                        <ul>
                            <li><a href="#">سوالات متداول</a></li>
                            <li><a href="#">پشتیبانی</a></li>
                        </ul>
                    </div>
                </div>
            </section>
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
        </div>
    </main>

@endsection
