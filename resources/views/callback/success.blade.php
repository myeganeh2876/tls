@extends('index')

@section('content')
    <main>
        <div class="container">
            <div class="row">
                <section class="notFound notFoundErorr">
                    <figure class="notFound__img">
                        <img src="./assets/image/pardakht.svg" alt="">
                    </figure>
                    <div class="notFound__title success">
                        پرداخت موفق
                    </div>
                    <span class="notFound__text">
                        پرداخت با موفقیت انجام شد
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
