@extends('index')

@section('content')

    <main>
        <div class="container">
            <section class="topMain">
                <p class="topMain__text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                    the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                    of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged. It was
                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of
                    Lorem Ipsum.

                </p>
                <figure class="topMain__img">
                    <img src="./assets/image/UnionBig.svg" alt="">
                </figure>
            </section>
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
                            <div class="swiper-slide">
                                <div class="services__box">
                                    <figure class="services__box--img">
                                        <a href="#">
                                            <img src="./assets/image/serviceImg.jpg" alt="">
                                        </a>

                                    </figure>
                                    <div class="services__box--title">
                                        Service name
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__box">
                                    <figure class="services__box--img">
                                        <a href="#">
                                            <img src="./assets/image/serviceImg.jpg" alt="">
                                        </a>

                                    </figure>
                                    <div class="services__box--title">
                                        Service name
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__box">
                                    <figure class="services__box--img">
                                        <a href="#">
                                            <img src="./assets/image/serviceImg.jpg" alt="">
                                        </a>

                                    </figure>
                                    <div class="services__box--title">
                                        Service name
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__box">
                                    <figure class="services__box--img">
                                        <a href="#">
                                            <img src="./assets/image/serviceImg.jpg" alt="">
                                        </a>

                                    </figure>
                                    <div class="services__box--title">
                                        Service name
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__box">
                                    <figure class="services__box--img">
                                        <a href="#">
                                            <img src="./assets/image/serviceImg.jpg" alt="">
                                        </a>

                                    </figure>
                                    <div class="services__box--title">
                                        Service name
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="services__box">
                                    <figure class="services__box--img">
                                        <a href="#">
                                            <img src="./assets/image/serviceImg.jpg" alt="">
                                        </a>

                                    </figure>
                                    <div class="services__box--title">
                                        Service name
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <section class="featuredProjects">
                <div class="featuredProjects__head">
                    <div class="featuredProjects__title">
                        Featured Projects
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
                            <div class="swiper-slide">
                                <div class="featuredProjectsBox">
                                    <figure class="featuredProjectsBox__img">
                                        <img src="./assets/image/Featured-Projects.jpg" alt="">
                                    </figure>
                                    <div class="featuredProjectsBox__content">
                                        <div class="featuredProjectsBox__title">
                                            Project Name
                                        </div>
                                        <div class="featuredProjectsBox__location">
                                            <i class="icon-map"></i>
                                            <span>location</span>
                                        </div>
                                        <div class="featuredProjectsBox__text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                        </div>

                                        <a href="# " class="featuredProjectsBox__more">
                                            <i class="icon-arrow__right"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featuredProjectsBox">
                                    <figure class="featuredProjectsBox__img">
                                        <img src="./assets/image/Featured-Projects.jpg" alt="">
                                    </figure>
                                    <div class="featuredProjectsBox__content">
                                        <div class="featuredProjectsBox__title">
                                            Project Name
                                        </div>
                                        <div class="featuredProjectsBox__location">
                                            <i class="icon-map"></i>
                                            <span>location</span>
                                        </div>
                                        <div class="featuredProjectsBox__text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                        </div>

                                        <a href="# " class="featuredProjectsBox__more">
                                            <i class="icon-arrow__right"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featuredProjectsBox">
                                    <figure class="featuredProjectsBox__img">
                                        <img src="./assets/image/Featured-Projects.jpg" alt="">
                                    </figure>
                                    <div class="featuredProjectsBox__content">
                                        <div class="featuredProjectsBox__title">
                                            Project Name
                                        </div>
                                        <div class="featuredProjectsBox__location">
                                            <i class="icon-map"></i>
                                            <span>location</span>
                                        </div>
                                        <div class="featuredProjectsBox__text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                        </div>

                                        <a href="# " class="featuredProjectsBox__more">
                                            <i class="icon-arrow__right"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featuredProjectsBox">
                                    <figure class="featuredProjectsBox__img">
                                        <img src="./assets/image/Featured-Projects.jpg" alt="">
                                    </figure>
                                    <div class="featuredProjectsBox__content">
                                        <div class="featuredProjectsBox__title">
                                            Project Name
                                        </div>
                                        <div class="featuredProjectsBox__location">
                                            <i class="icon-map"></i>
                                            <span>location</span>
                                        </div>
                                        <div class="featuredProjectsBox__text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                        </div>

                                        <a href="# " class="featuredProjectsBox__more">
                                            <i class="icon-arrow__right"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="featuredProjectsBox">
                                    <figure class="featuredProjectsBox__img">
                                        <img src="./assets/image/Featured-Projects.jpg" alt="">
                                    </figure>
                                    <div class="featuredProjectsBox__content">
                                        <div class="featuredProjectsBox__title">
                                            Project Name
                                        </div>
                                        <div class="featuredProjectsBox__location">
                                            <i class="icon-map"></i>
                                            <span>location</span>
                                        </div>
                                        <div class="featuredProjectsBox__text">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard dummy text ever since the
                                            1500s, when an unknown printer
                                        </div>

                                        <a href="# " class="featuredProjectsBox__more">
                                            <i class="icon-arrow__right"></i>
                                            <span>Read more</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="commentUser">
                <div class="commentUser__head">
                    <div class="commentUser__title">
                        What our clients say about us
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
                            <div class="swiper-slide">
                                <div class="commentUserBox">
                                    <div class="commentUserBox__icon">
                                        <i class="icon-message"></i>
                                    </div>
                                    <div class="commentUserBox__title">
                                        Project Name
                                    </div>
                                    <div class="commentUserBox__text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                    </div>
                                    <div class="commentUserBox__nameAndCompany">
                                        <span>John Doe</span>
                                        <span>-</span>
                                        <span>Company Name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="commentUserBox">
                                    <div class="commentUserBox__icon">
                                        <i class="icon-message"></i>
                                    </div>
                                    <div class="commentUserBox__title">
                                        Project Name
                                    </div>
                                    <div class="commentUserBox__text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                    </div>
                                    <div class="commentUserBox__nameAndCompany">
                                        <span>John Doe</span>
                                        <span>-</span>
                                        <span>Company Name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="commentUserBox">
                                    <div class="commentUserBox__icon">
                                        <i class="icon-message"></i>
                                    </div>
                                    <div class="commentUserBox__title">
                                        Project Name
                                    </div>
                                    <div class="commentUserBox__text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                    </div>
                                    <div class="commentUserBox__nameAndCompany">
                                        <span>John Doe</span>
                                        <span>-</span>
                                        <span>Company Name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="commentUserBox">
                                    <div class="commentUserBox__icon">
                                        <i class="icon-message"></i>
                                    </div>
                                    <div class="commentUserBox__title">
                                        Project Name
                                    </div>
                                    <div class="commentUserBox__text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                    </div>
                                    <div class="commentUserBox__nameAndCompany">
                                        <span>John Doe</span>
                                        <span>-</span>
                                        <span>Company Name</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="commentUserBox">
                                    <div class="commentUserBox__icon">
                                        <i class="icon-message"></i>
                                    </div>
                                    <div class="commentUserBox__title">
                                        Project Name
                                    </div>
                                    <div class="commentUserBox__text">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer
                                    </div>
                                    <div class="commentUserBox__nameAndCompany">
                                        <span>John Doe</span>
                                        <span>-</span>
                                        <span>Company Name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bookMeeting">
                <div class="bookMeeting__wr">
                    <div class="bookMeeting__title">
                        Book a meeting with us
                    </div>
                    <div class="bookMeeting__text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                        but also the leap into
                    </div>
                </div>
                <div class="bookMeeting__more">
                    <a href="#" class="bookMeeting__btn btnAnimation">
                        Book a Meeting
                    </a>
                </div>
            </section>
        </div>
    </main>
@endsection
