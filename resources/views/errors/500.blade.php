@extends('index')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <section class="notFound notFoundErorr">
                    <figure igure class="notFound__img">
                        <img src="./assets/image/iconNotFound.svg" alt="">
                    </figure>
                    <div class="notFound__title">
                        خطای ۵۰۰
                    </div>
                    <span class="notFound__text">
                        یه مشکلی پیش اومده، زود درستش میکنیم
                    </span>
                    <div class="notFound__wrBtn">
                        <a href="#" class="notFound__backToHome">
                            بازگشت به صفحه اصلی
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
