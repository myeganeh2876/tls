@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="single-page">
                <div class="single-page__wrapper">
                    {!! $project->content !!}

                </div>

            </section>
            <section class="single-page__slider">
                <div class="swiper single-page__swiper">
                    <div class="swiper-wrapper">
                        @foreach($project->images as $media)
                            <div class="swiper-slide">
                                <figure class="single-page__img">
                                   <img src="{{Storage::url($media)}}">
                                </figure>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="single-page__navigation">
                    <div class="single-page-swiper-button-prev swiper-button-prev"><i class="icon-arrow__left"></i>
                    </div>
                    <div class="single-page-swiper-button-next swiper-button-next"><i class="icon-arrow__right"></i>
                    </div>
                </div>
            </section>
        </div>
    </main>
@endsection
