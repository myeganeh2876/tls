@extends('index')

@section('content')
    <main>
        <div class="container">
            <section class="profileItems">
                <div class="profilerRegister__wrBack">
                    <a href="#" class="profilerRegister__back">
                        <span>بازگشت</span>
                        <i class="icon-close"></i>
                    </a>
                </div>
                <div class="profilerRegister">
                    <div class="profilerRegister__wrapper">
                        <form action="" class="profilerRegister__form">
                            <div class="profilerRegister__upload">
                                <form id="myForm">
                                    <div class="holder">
                                        <img id="imgPreview" src="./assets/image/userImgProfileDefult.svg" alt="pic" />
                                        <label for="photo">
                                            <span>
                                                آپلود عکس
                                            </span>
                                        </label>
                                    </div>
                                    <input type="file" name="photograph" id="photo" required="true" accept=".jpg" />
                                    <!-- <input type="button" id="formBtn" value="Upload Image"> -->
                                </form>
                            </div>
                            <div class="profilerRegister__wrForm">
                                <div class="boxInput">
                                    <label for="userNameRegister">
                                        نام شما
                                    </label>
                                    <div class="boxInput__wrInput">
                                        <input type="text" class="inputRegister" id="userNameRegister"
                                               onfocus="setFocus(true)" onblur="setFocus(false)">
                                        <i class="icon-userWrite"></i>
                                    </div>
                                    <span class="errorHandering"></span>
                                </div>
                                <div class="boxInput">
                                    <label for="">
                                        نام خانوادگی
                                    </label>
                                    <div class="boxInput__wrInput">
                                        <input type="text" class="inputRegister" id="lastNameUserRegister"
                                               onfocus="setFocus(true)" onblur="setFocus(false)">
                                        <i class="icon-userWrite"></i>
                                    </div>
                                    <span class="errorHandering"></span>

                                </div>
                                <div class="boxInput">
                                    <label for="codeMeliUserRegister">
                                        کد ملی
                                    </label>
                                    <div class="boxInput__wrInput">
                                        <input type="tel" class="inputRegister" id="codeMeliUserRegister"
                                               onfocus="setFocus(true)" onblur="setFocus(false)"
                                               onkeypress="validationMobile(this,event)">
                                        <i class="icon-confirmation"></i>
                                    </div>
                                    <span class="errorHandering"></span>

                                </div>
                                <div class="boxInput">
                                    <label for="">
                                        نام پدر
                                    </label>
                                    <div class="boxInput__wrInput">
                                        <input type="text" class="inputRegister" id="fatherUserRegister"
                                               onfocus="setFocus(true)" onblur="setFocus(false)">
                                        <i class="icon-userWrite"></i>
                                    </div>
                                    <span class="errorHandering"></span>

                                </div>
                                <div class="boxInput">
                                    <label for="dateBirthUserRegister">
                                        تاریخ تولد
                                    </label>
                                    <div class="boxInput__wrInput">
                                        <input type="data" class="inputRegister" id="dateBirthUserRegister"
                                               onfocus="setFocus(true)" onblur="setFocus(false)" data-jdp>
                                        <i class="icon-Cake"></i>
                                    </div>
                                    <span class="errorHandering"></span>

                                </div>
                                <div class="boxInput">
                                    <label for="">
                                        آدرس محل سکونت
                                    </label>
                                    <div class="boxInput__wrInput">
                                        <textarea name="" class="inputRegister" id="addressUserRegister" cols="30"
                                                  rows="10" onfocus="setFocus(true)" onblur="setFocus(false)"></textarea>
                                        <i class="icon-telegram"></i>
                                    </div>
                                    <span class="errorHandering"></span>
                                </div>
                            </div>
                            <button type="submit" class="login__NumberUser--btn" id="profilerRegisterBtnSubmit">
                                تایید تغییرات
                            </button>
                        </form>
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
    </main>
@endsection
