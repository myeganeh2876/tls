@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="services">
                <div class="services__head">
                    <h3 class="services__title">
                        Services
                    </h3>
                    <div class="services__navigation">
                        <div class="services-swiper-button-prev  swiper-button-prev">
                            <i class="icon-arrow__left"></i>
                        </div>
                        <div class="services-swiper-button-next  swiper-button-next">
                            <i class="icon-arrow__right"></i>
                        </div>
                    </div>
                </div>
                <div class="services__slider">
                    <div class="swiper services__swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach($services as $service)
                                <div class="swiper-slide">
                                    <div class="services__box">
                                        <figure class="services__box--img">
                                            <a href="{{route('services.single', $service)}}">
                                                <img src="{{ Storage::url($service->images[0]) }}"/>
                                            </a>

                                        </figure>
                                        <div class="services__box--title">
                                            {{$service->title}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach



                        </div>
                    </div>
                </div>
            </section>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>
@endsection
