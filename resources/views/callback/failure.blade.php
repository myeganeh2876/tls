@extends('index')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <section class="notFound notFoundErorr">
                    <figure class="notFound__img">
                        <img src="./assets/image/pardakhtErore.svg" alt="">
                    </figure>
                    <div class="notFound__title">
                        پرداخت ناموفق
                    </div>
                    <span class="notFound__text">
                        مشکلی در پرداخت به وجود آمده مجدد تلاش کنید
                    </span>
                    <div class="notFound__wrBtn">
                        <a href="#" class="notFound__backToHome">
                            تلاش مجدد برای پرداخت
                        </a>
                    </div>
                </section>
            </div>
        </div>
    </main>

@endsection
