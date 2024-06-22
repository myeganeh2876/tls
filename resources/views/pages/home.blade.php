@extends('index')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <section class="filter">
                        <div class="filter__top">
                            <div class="filter__category">
                                <div class="filter__category--title">
                                    دسته بندی
                                </div>
                                <div class="filter__category--wr">
                                    <select class="selectBox__category" name="filter__category">
                                        <option value="AL">بدن سازی</option>
                                        <option value="AL">بدن سازی</option>
                                        <option value="AL">بدن سازی</option>
                                        <option value="AL">بدن سازی</option>
                                        <option value="WY">تکواند</option>
                                        <option value="WY">تکواند</option>
                                        <option value="WY">تکواند</option>
                                    </select>
                                </div>
                            </div>
                            <div class="filter__top--left">
                                <a href="#" class="filter__location">
                                    <i class="icon-Location"></i>
                                    <span>
                                        باشگاه‌های نزدیک من
                                    </span>
                                </a>
                                <div class="filter__city">
                                    <div class="filter__city--wr">
                                        <select class="selectBox__city" name="filter__city">
                                            <option value="1">تهران</option>
                                            <option value="2">گیلان</option>
                                            <option value="3">آذربایجان شرقی</option>
                                            <option value="4">خوزستان</option>
                                            <option value="5">فارس</option>
                                            <option value="6">اصفهان</option>
                                            <option value="7">خراسان رضوی</option>
                                            <option value="8">قزوین</option>
                                            <option value="9">سمنان</option>
                                            <option value="10">قم</option>
                                            <option value="11">مرکزی</option>
                                            <option value="12">زنجان</option>
                                            <option value="13">مازندران</option>
                                            <option value="14">گلستان</option>
                                            <option value="15">اردبیل</option>
                                            <option value="16">آذربایجان غربی</option>
                                            <option value="17">همدان</option>
                                            <option value="18">کردستان</option>
                                            <option value="19">کرمانشاه</option>
                                            <option value="20">لرستان</option>
                                            <option value="21">بوشهر</option>
                                            <option value="22">کرمان</option>
                                            <option value="23">هرمزگان</option>
                                            <option value="24">چهارمحال و بختیاری</option>
                                            <option value="25">یزد</option>
                                            <option value="26">سیستان و بلوچستان</option>
                                            <option value="27">ایلام</option>
                                            <option value="28">کهگلویه و بویراحمد</option>
                                            <option value="29">خراسان شمالی</option>
                                            <option value="30">خراسان جنوبی</option>
                                            <option value="31">البرز</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="filter__down">
                            <div class="filter__gender">
                                <div class="filter__gender--wr filter__gender--man ">
                                    <label for="man">
                                        <i class="icon-Bodybuilding"></i>
                                        <span>ویژه آقایان</span>
                                        <input type="checkbox" id="man" checked>
                                    </label>
                                </div>
                                <div class="filter__gender--wr filter__gender--woman">
                                    <label for="woman">
                                        <i class="icon-woman"></i>
                                        <span>
                                            ویژه بانوان
                                        </span>
                                        <input type="checkbox" id="woman">
                                    </label>
                                </div>
                            </div>
                            <div class="filter__typeJim">
                                <div class="filter__typeJim--title">
                                    نوع باشگاه
                                </div>
                                <ul class="filter__typeJim--list">
                                    <li>
                                        <label for="jimPurple" class="jimPurple ">
                                            <figure class="filter__typeJim--itemImg">
                                                <img src="{{asset('assets/image/icon/Purple.svg')}}" alt="">
                                            </figure>
                                            <input type="checkbox" id="jimPurple" checked>
                                        </label>
                                    </li>
                                    <li>
                                        <label for="jimRed" class="jimRed ">
                                            <figure class="filter__typeJim--itemImg">
                                                <img src="{{asset('assets/image/icon/redIcon.svg')}}" alt="">
                                            </figure>
                                            <input type="checkbox" id="jimRed">
                                        </label>
                                    </li>
                                    <li>
                                        <label for="jimGold" class="jimGold ">
                                            <figure class="filter__typeJim--itemImg">
                                                <img src="{{asset('assets/image/icon/yellowIcon.svg')}}" alt="">
                                            </figure>
                                            <input type="checkbox" id="jimGold">
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                    <section class="filterResult">
                        <div class="filterResult__head">
                            <span class="filterResult__textSeactFix">
                                لیست بر اساس باشگاه‌های نزدیک محدوده
                            </span>
                            <div class="filterResult__location">
                                <i class="icon-pen"></i>
                                <span>
                                    سعادت آباد
                                </span>
                            </div>
                        </div>
                        <div class="filterResult__wrapper">
                            <div class="fitnsCard yellowCard">
                                <div class="fitnsCard__wrapper">
                                    <div class="fitnsCard__head">
                                        <h3 class="fitnsCard__title">
                                            <a href="#">
                                                <figure class="fitnsCard__titleImg">
                                                    <img src="{{asset('assets/image/icon/iconCardJim1.svg')}}" alt="">
                                                </figure>
                                                <span>
                                                    باشگاه بدنسازی R8 فیتس
                                                </span>
                                            </a>
                                        </h3>
                                        <p class="fitnsCard__text">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </p>
                                    </div>
                                    <div class="fitnsCard__footer">
                                        <div class="fitnsCard__typeGym">
                                            <i class="icon-Bodybuilding"></i>
                                            <span>ویژه آقایان</span>
                                        </div>

                                        <div class="fitnsCard__rate">
                                            <i class="icon-star"></i>
                                            <div>
                                                <span>4</span>
                                                <span>از</span>
                                                <span>5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="fitnsCard__img">
                                    <a href="#">
                                        <img src="{{asset('assets/image/imgGym.png')}}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="fitnsCard redCard">
                                <div class="fitnsCard__wrapper">
                                    <div class="fitnsCard__head">
                                        <h3 class="fitnsCard__title">
                                            <a href="#">
                                                <figure class="fitnsCard__titleImg">
                                                    <img src="{{asset('assets/image/icon/iconCardJim2.svg')}}" alt="">
                                                </figure>
                                                <span>
                                                    باشگاه بدنسازی R8 فیتس
                                                </span>
                                            </a>
                                        </h3>
                                        <p class="fitnsCard__text">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </p>
                                    </div>
                                    <div class="fitnsCard__footer">
                                        <div class="fitnsCard__typeGym">
                                            <i class="icon-Bodybuilding"></i>
                                            <span>ویژه آقایان</span>
                                        </div>

                                        <div class="fitnsCard__rate">
                                            <i class="icon-star"></i>
                                            <div>
                                                <span>4</span>
                                                <span>از</span>
                                                <span>5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="fitnsCard__img">
                                    <a href="#">
                                        <img src="{{asset('assets/image/imgGym.png')}}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <div class="fitnsCard purpleCard">
                                <div class="fitnsCard__wrapper">
                                    <div class="fitnsCard__head">
                                        <h3 class="fitnsCard__title">
                                            <a href="#">
                                                <figure class="fitnsCard__titleImg">
                                                    <img src="{{asset('assets/image/icon/iconCardJim3.svg')}}" alt="">
                                                </figure>
                                                <span>
                                                    باشگاه بدنسازی R8 فیتس
                                                </span>
                                            </a>
                                        </h3>
                                        <p class="fitnsCard__text">
                                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از
                                            طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که
                                            لازم است
                                        </p>
                                    </div>
                                    <div class="fitnsCard__footer">
                                        <div class="fitnsCard__typeGym">
                                            <i class="icon-Bodybuilding"></i>
                                            <span>ویژه آقایان</span>
                                        </div>

                                        <div class="fitnsCard__rate">
                                            <i class="icon-star"></i>
                                            <div>
                                                <span>4</span>
                                                <span>از</span>
                                                <span>5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <figure class="fitnsCard__img">
                                    <a href="#">
                                        <img src="{{asset('assets/image/imgGym.png')}}" alt="">
                                    </a>
                                </figure>
                            </div>

                        </div>
                        <div class="filterResult__wrBtnMore">
                            <a class="filterResult__more">
                                <span>
                                    نمایش بیشتر
                                </span>
                                <div class="stage">
                                    <div class="dot-falling"></div>
                                </div>
                            </a>
                        </div>
                    </section>
                </div>
                <div class="col-lg-6">
                    <section class="mainSlider">
                        <div class="swiper mainSlider__swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <figure class="mainSlider__img">
                                        <a href="#">
                                            <img src="{{asset('assets/image/slider-1.png')}}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="mainSlider__img">
                                        <a href="#">
                                            <img src="{{asset('assets/image/slider-1.png')}}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="mainSlider__img">
                                        <a href="#">
                                            <img src="{{asset('assets/image/slider-1.png')}}" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="swiper-slide">
                                    <figure class="mainSlider__img">
                                        <a href="#">
                                            <img src="{{asset('assets/image/slider-1.png')}}" alt="">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination swiperPaginationMainSlider"></div>
                    </section>
                    <section class="JimPaul">
                        <h3 class="JimPaul__title">
                            جیم پل چیست؟
                        </h3>
                        <p class="JimPaul__text">
                            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.
                            چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای لورم ایپسوم متن
                            ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است
                        </p>
                        <div class="JimPaul__wrBtn">
                            <a href="#" class="JimPaul__btn">
                                سوالات متداول
                            </a>
                        </div>
                    </section>
                    <section class="registerUser">
                        <div class="registerUser__wrapper">
                            <div class="registerUser__head">
                                <div class="registerUser__profile">
                                    <img src="{{asset('assets/image/userImgProfileDefult.svg')}}" alt="">
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
                                                <input type="tel" id="numberPhoneUser"
                                                       onkeypress="validationMobile(this,event)" placeholder="+98">
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
                                                <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)"
                                                       onkeypress="validateNumber(this,event)">
                                                <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)"
                                                       onkeypress="validateNumber(this,event)">
                                                <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)"
                                                       onkeypress="validateNumber(this,event)">
                                                <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)"
                                                       onkeypress="validateNumber(this,event)">
                                                <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)"
                                                       onkeypress="validateNumber(this,event)">
                                                <input type="tel" maxlength="1" onkeyup="moveToNext(this,event)"
                                                       onkeypress="validateNumber(this,event)">
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
                    <section class="commentsUser">

                        <div class="commentsUser__head">
                            <div class="commentsUser__right">
                                <div class="commentsUser__title">
                                    <i class="icon-health"></i>
                                    <span>
                                        نظرات کاربران
                                    </span>
                                </div>
                            </div>
                            <div class="commentsUser__left">
                                <div class="commentsUser__navigator">
                                    <div class="commentsUser-swiper-button-prev">
                                        <i class="icon-arrowUp"></i>
                                    </div>
                                    <div class="commentsUser-swiper-button-next">
                                        <i class="icon-arrowUp"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="commentsUser__wrapper">
                            <div class="swiper commentsUser__swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است

                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        1
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="boxCommentsUser">
                                            <div class="boxCommentsUser__wrappperMain">

                                                <div class="boxCommentsUser__img">
                                                    <figure class="boxCommentsUser__profile">
                                                        <img src="{{asset('assets/image/icon/profile.svg')}}" alt="">
                                                    </figure>
                                                </div>
                                                <div class="boxCommentsUser__wrapper">
                                                    <div class="boxCommentsUser__head">
                                                        <div class="boxCommentsUser__name">
                                                            <div class="boxCommentsUser__nameuser">محمد</div>
                                                            <div class="boxCommentsUser__namestatic">میگه</div>
                                                            <div class="boxCommentsUser__namejim">باشگاه بدنسازی R8 فیتس
                                                            </div>
                                                        </div>
                                                        <div class="boxCommentsUser__rate">
                                                            <div class="boxCommentsUser__rate--text">
                                                                <span>3</span>
                                                                <span>از</span>
                                                                <span>5</span>
                                                            </div>
                                                            <i class="icon-startFull"></i>
                                                        </div>
                                                    </div>
                                                    <p class="boxCommentsUser__text">
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با
                                                        استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله
                                                        در ستون و سطرآنچنان که لازم است
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </section>
                    <section class="profileActive">
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
                        <div class="profileUser vertical">
                            <figure class="profileUser__img">
                                <img src="{{asset('assets/image/userImgProfileDefult.svg')}}" alt="">
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
                        <div class="profileDetails">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="profileDetails__icon">
                                            <i class="icon-userWrite"></i>
                                        </div>
                                        <div class="profileDetails__title">
                                            اطلاعات حساب
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="profileDetails__icon">
                                            <i class="icon-chat"></i>
                                        </div>
                                        <div class="profileDetails__title">
                                            نظرات من
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="profileDetails__icon">
                                            <i class="icon-wayArrow"></i>
                                        </div>
                                        <div class="profileDetails__title">
                                            باشگاه‌هایی که رفتم
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="registerUser__panelJim">
                            <div class="registerUser__panelJim--title">
                                بسته‌های فعال
                            </div>
                            <div class="JimCard package">
                                <div class="JimCard__img">
                                    <img src="{{asset('assets/image/icon/iconCardJim1.svg')}}" alt="">
                                </div>
                                <div class="JimCard__wrapper">
                                    <div class="JimCard__right">

                                        <div class="JimCard__title">
                                            <span>
                                                جیم گلد
                                            </span>
                                            <i class="icon-info"></i>
                                        </div>
                                        <div class="JimCard__text">
                                            <i class="icon-time"></i>
                                            <span>28</span>
                                            <span> روز تا پایان اعتبار</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="disable registerUser__panelJim--btn">
                                در حال حاضر بسته فعال ندارید
                            </a>
                        </div>
                        <div class="buyJimCard">
                            <div class="buyJimCard__title">
                                <span>خرید جیم کارت جدید</span>
                                <i class="icon-info"></i>
                            </div>
                            <div class="buyJimCard__text">
                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                            </div>
                            <div class="buyJimCard__wrapper">
                                <div class="JimCard">
                                    <div class="JimCard__radio dark">
                                        <label>
                                            <input type="radio" name="dark" checked>
                                            <span class="design"></span>
                                        </label>
                                    </div>
                                    <div class="JimCard__img">
                                        <img src="{{asset('assets/image/icon/iconCardJim1.svg')}}" alt="">
                                    </div>
                                    <div class="JimCard__wrapper">
                                        <div class="JimCard__right">

                                            <div class="JimCard__title">
                                                <span>
                                                    جیم گلد
                                                </span>
                                                <i class="icon-info"></i>
                                            </div>
                                            <div class="JimCard__text">
                                                بسته ۱۲ عددی
                                            </div>
                                        </div>
                                        <div class="JimCard__time">
                                            <i class="icon-time"></i>
                                            <div class="JimCard__time--text">
                                                <span>اعتبار</span>
                                                <span>30</span>
                                                <span>روز</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="JimCard">
                                    <div class="JimCard__radio dark">
                                        <label>
                                            <input type="radio" name="dark">
                                            <span class="design"></span>
                                        </label>
                                    </div>
                                    <div class="JimCard__img">
                                        <img src="{{asset('assets/image/icon/iconCardJim2.svg')}}" alt="">
                                    </div>
                                    <div class="JimCard__wrapper">
                                        <div class="JimCard__right">

                                            <div class="JimCard__title">
                                                <span>
                                                    جیم گلد
                                                </span>
                                                <i class="icon-info"></i>
                                            </div>
                                            <div class="JimCard__text">
                                                بسته ۱۲ عددی
                                            </div>
                                        </div>
                                        <div class="JimCard__time">
                                            <i class="icon-time"></i>
                                            <div class="JimCard__time--text">
                                                <span>اعتبار</span>
                                                <span>30</span>
                                                <span>روز</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="JimCard">
                                    <div class="JimCard__radio dark">
                                        <label>
                                            <input type="radio" name="dark">
                                            <span class="design"></span>
                                        </label>

                                    </div>
                                    <div class="JimCard__img">
                                        <img src="{{asset('assets/image/icon/iconCardJim3.svg')}}" alt="">
                                    </div>
                                    <div class="JimCard__wrapper">
                                        <div class="JimCard__right">

                                            <div class="JimCard__title">
                                                <span>
                                                    جیم گلد
                                                </span>
                                                <i class="icon-info"></i>
                                            </div>
                                            <div class="JimCard__text">
                                                بسته ۱۲ عددی
                                            </div>
                                        </div>
                                        <div class="JimCard__time">
                                            <i class="icon-time"></i>
                                            <div class="JimCard__time--text">
                                                <span>اعتبار</span>
                                                <span>30</span>
                                                <span>روز</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="buyJimCard__btn">
                                پرداخت
                            </a>
                        </div>
                    </section>
                    <footer>
                        <div class="footer__application">
                            <a href="#" class="footer__application-app">
                                <i class="icon-android"></i>
                                <span>
                                    اپلیکیشن اندروید
                                </span>
                            </a>
                            <a href="#" class="footer__application-app">
                                <i class="icon-apple"></i>
                                <span>
                                    اپلیکیشن iOS
                                </span>
                            </a>
                        </div>
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
                                <img src="{{asset('assets/image/icon/Chat-1.png')}}" alt="">
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
                                                    <img src="{{asset('assets/image/imgGym.png')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="{{asset('assets/image/imgGym.png')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="{{asset('assets/image/imgGym.png')}}" alt="">
                                                </a>
                                            </figure>
                                        </div>
                                        <div class="swiper-slide">
                                            <figure class="permissionsJimPaul__img">
                                                <a href="#">
                                                    <img src="{{asset('assets/image/imgGym.png')}}" alt="">
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
            </div>
        </div>
    </main>
@endsection
