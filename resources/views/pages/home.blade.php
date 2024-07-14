@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="topMain">
                <p class="topMain__text">
                    {{__('texts.home_description')}}
                </p>
                <figure class="topMain__img">
                    <img src="{{asset('assets/image/UnionBig.svg')}}" alt="">
                </figure>
            </section>
            <section class="services">
                <div class="services__head">
                    <h3 class="services__title">
                        {{__('texts.services')}}
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
                                                    <div>
                                                        <img src="{{ Storage::url($service->images[0]) }}"/>
                                                    </div>
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
            <section class="featuredProjects">
                <div class="featuredProjects__head">
                    <div class="featuredProjects__title">
                        {{__('texts.Featured Projects')}}
                    </div>
                    <div class="featuredProjects__navigation">
                        <div class="featuredProjects-swiper-button-prev swiper-button-prev">
                            <i class="icon-arrow__left"></i>
                        </div>
                        <div class="featuredProjects-swiper-button-next swiper-button-next">
                            <i class="icon-arrow__right"></i>
                        </div>
                    </div>
                </div>
                <div class="featuredProjects__slider">
                    <div class="swiper featuredProjects__swiper">
                        <div class="swiper-wrapper">

                            @foreach($projects as $project)
                                <div class="swiper-slide">
                                    <div class="featuredProjectsBox">
                                        <figure class="featuredProjectsBox__img">
                                            <img src="{{ Storage::url($project->images[0]) }}"/>
                                        </figure>
                                        <div class="featuredProjectsBox__content">
                                            <div class="featuredProjectsBox__title">
                                                {{$project->title}}
                                            </div>
                                            <div class="featuredProjectsBox__location">
                                                <i class="icon-map"></i>
                                                <span>{{$project->location}}</span>
                                            </div>
                                            <div class="featuredProjectsBox__text">
                                                {{$project->short_description}}
                                            </div>

                                            <a href="{{route('projects.single', $project)}}" class="featuredProjectsBox__more">
                                                <i class="icon-arrow__right"></i>
                                                <span>Read more</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <section class="commentUser">
                <div class="commentUser__head">
                    <div class="commentUser__title">
                        {{__('texts.What our clients say about us')}}
                    </div>
                    <div class="commentUser__navigation">
                        <div class="commentUser-swiper-button-prev swiper-button-prev">
                            <i class="icon-arrow__left"></i>
                        </div>
                        <div class="commentUser-swiper-button-next swiper-button-next">
                            <i class="icon-arrow__right"></i>
                        </div>
                    </div>
                </div>
                <div class="commentUser__slider">
                    <div class="swiper commentUser__swiper">
                        <div class="swiper-wrapper">

                            @foreach($testimonals as $testimonal)
                                <div class="swiper-slide">
                                    <div class="commentUserBox">
                                        <div class="commentUserBox__icon">
                                            <i class="icon-message"></i>
                                        </div>
                                        <div class="commentUserBox__title">
                                            {{$testimonal->project->title}}
                                        </div>
                                        <div class="commentUserBox__text">
                                            {!! $testimonal->comment !!}
                                        </div>
                                        <div class="commentUserBox__nameAndCompany">
                                            <span>{{$testimonal->client_name}}</span>
                                            <span>-</span>
                                            <span>{{$testimonal->client_company}}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
            <section class="bookMeeting">
                <div class="bookMeeting__wr">
                    <div class="bookMeeting__title">
                        {{__('texts.Book a meeting with us')}}
                    </div>
                    <div class="bookMeeting__text">
                        {{__('texts.book_a_meeting_description')}}
                    </div>
                </div>
                <div class="bookMeeting__more">
                    <a href="{{route('page', 'book-a-meeting')}}" class="bookMeeting__btn btnAnimation">
                        {{__('texts.book_a_meeting')}}
                    </a>
                </div>
            </section>
        </div>
    </main>
@endsection
