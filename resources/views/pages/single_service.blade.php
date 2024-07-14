@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="serviceName">
                <div class="serviceName__wrapper">
                    {!! $service->content !!}
                </div>

                <section class="single-page__slider">
                    <div class="swiper single-page__swiper">
                        <div class="swiper-wrapper">
                            @foreach($service->images as $media)
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

                <div class="serviceName__wrFeature">
                    <div class="serviceName__feature--title">
                        Featured Projects
                    </div>
                    <div class="row">

                        @foreach($service->projects as $project)

                            <div class="col-md-6">
                                <div class="serviceName__featureBox">
                                    <figure class="serviceName__featureBox--img">
                                        <a href="{{route('projects.single', $project)}}">
                                            <img src="{{ Storage::url($project->images[0]) }}"/>
                                        </a>
                                    </figure>
                                    <div class="serviceName__featureBox--content">
                                        <div class="serviceName__featureBox--wr">
                                            <div class="serviceName__featureBox--title">
                                                {{$project->title}}
                                            </div>
                                            <div class="serviceName__featureBox--location">
                                                <i class="icon-map"></i>
                                                <span>{{$project->location}}</span>
                                            </div>
                                        </div>
                                        <a href="{{route('projects.single', $project)}}" class="serviceName__featureBox--more">
                                            <i class="icon-arrow__right"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach




                    </div>
                </div>
            </section>
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
        </div>
    </main>
@endsection
