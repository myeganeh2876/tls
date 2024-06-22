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
                        خطای ۴۰۴
                    </div>
                    <span class="notFound__text">
                        این صفحه در حال حاضر وجود نداره
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
