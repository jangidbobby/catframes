@include('layouts.header')
<div class="video-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="video">
                    <div class="welcomevideo">
                        <video autoplay muted loop>
                            <source src="front/image/nasted.mp4" type="video/mp4">
                            <source src="front/image/nasted.ogg" type="video/ogg">
                        </video>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<section class="">
    <div class="resources ps-207 pb-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-dark title pb-lg-4">

                        <span>Our</span> Clients
                    </h2>
                </div>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($clients as $item)
                    <div class="swiper-slide">
                        <img src="{{ asset('public/backend/images/clients/' . $item->image) }}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<section class="b-dark text-white py-lg-5 py-3 pb-0 position-relative overflow-hidden">
    <div class="whoweare">
        <div class="catleg d-lg-block d-none">
            <img class="img-fluid" src="front/image/cat.svg" alt="">
        </div>
        <div class="container">
            @foreach ($what_we_ares as $item)
                <div class="row row-cols-lg-2 gy-3 py-lg-0 py-4">
                    <div class="col-lg mt-0">
                        <div class="whoweare-text position-relative" data-aos="fade-up">
                            <h2 class="title m-0"><span>{{ $item->name }}</h2>
                            <span>{{ $item->title }}</span>
                            <p class="text-justify pb-40">{{ $item->descpriton }}</p>
                            <a class="text-decoration-underline text-uppercase btn-links"
                                href="{{ $item->link }}">Learn more</a>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div class="whoweare-image text-center" data-aos="fade-up">
                            <img class="img-fluid" src="{{ asset('public/backend/images/what_we_are/' . $item->image) }}"
                                alt="">

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

<section>
    <div class="whatweare">
        <!--    <div class="container">
             <div class="row">
                <h2 class="title">How we function</h2>
            </div>
        </div> -->
        <div class="container-xxxl px-lgs-0">

            <div class="row g-0 row-cols-xl-5 row-cols-lg-3 row-cols-md-3 row-cols-1">
                <div class="col">
                    <div class="card-feature b-dark justify-content-center justify-content-lg-start text-md-start text-center height-auto"
                        data-aos="fade-right" data-aos-duration="850" data-aos-easing="ease-in-sine">
                        <div class="ps-md-4">
                            <h2 class="text-uppercase text-white"><span>How</span> we function</h2>
                            <img class="animation d-md-block d-none" src="front/image/arrow-right.svg" alt="">
                            <p>A versatile ensemble of production experts!</p>
                        </div>
                        
                    </div>
                </div>
                <div class="col">
                    <div class="card-feature" data-aos="fade-right" data-aos-duration="800"
                        data-aos-easing="ease-in-sine">
                        <div class="text-top">
                            <div class="border-text"></div>
                            <span>Step 1</span>
                        </div>
                        <div class="img-middle">
                            <img src="front/image/f4.png" alt="">
                            <div>
                                <img src="front/image/f4-h.png" alt="">
                            </div>
                        </div>
                        <div class="text-bottom col-9 m-auto">
                            <h3>Creative brief discussion</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-feature" data-aos="fade-right" data-aos-duration="750"
                        data-aos-easing="ease-in-sine">
                        <div class="text-top">
                            <div class="border-text"></div>
                            <span>Step 2</span>
                        </div>
                        <div class="img-middle">
                            <img src="front/image/f2.png" alt="">
                            <div>
                                <img src="front/image/f2-h.png" alt="">
                            </div>
                        </div>
                        <div class="text-bottom col-9 m-auto">
                            <h3>Ideation & Conceptualization</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-feature" data-aos="fade-right" data-aos-duration="600"
                        data-aos-easing="ease-in-sine">
                        <div class="text-top">
                            <div class="border-text"></div>
                            <span>Step 3</span>
                        </div>
                        <div class="img-middle">
                            <img src="front/image/f1.png" alt="">
                            <div>
                                <img src="front/image/f1-h.png" alt="">
                            </div>
                        </div>
                        <div class="text-bottom col-9 m-auto">
                            <h3>Shoot & Direction</h3>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-feature" data-aos="fade-right" data-aos-duration="550"
                        data-aos-easing="ease-in-sine">
                        <div class="text-top">
                            <div class="border-text"></div>
                            <span>Step 4</span>
                        </div>
                        <div class="img-middle">
                            <img src="front/image/f3.png" alt="">
                            <div>
                                <img src="front/image/f3-h.png" alt="">
                            </div>

                        </div>
                        <div class="text-bottom col-9 m-auto">
                            <h3>Edits & Post Production</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<section class="py-5">-->
<!--    <div class="blog-section">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-8 col-md-12 m-lg-0 m-auto text-lg-start text-center">-->
<!--                    <h2 class="title pb-4">Our Work & <span>Blogs</span>-->
<!--                    </h2>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row gy-3">-->
<!--                <div class="col-lg-6">-->
<!--                    <div class="project-links">-->
<!--                        <a href="http://catframes.in/">-->
<!--                            <img class="img-fluid" src="front/image/poject-link.jpg">-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-6">-->
<!--                    <div class="blog-inner">-->
<!--                        <div class="row gy-4">-->
<!--                            @foreach ($our_works as $item)-->
<!--                            <div class="col-lg-6 col-6">-->
<!--                                <div class="card-blog">-->
<!--                                    <a href="{{$item->link}}">-->
<!--                                        <div class="blog-image pb-3">-->
<!--                                            <img class="img-fluid" src="{{ asset('public/backend/images/our_work/' . $item->image) }}" alt="">-->
<!--                                        </div>-->
<!--                                    </a>-->
<!--                                    <div class="blog-text">-->
<!--                                        <span class="text-uppercase">{{$item->title}}</span>-->
<!--                                        <p class="mb-1">{{$item->descpriton}}</p>-->
<!--                                        <div>-->
<!--                                            <span class="d-block text-uppercase">BY {{$item->name}}</span>-->
<!--                                            <span>{{ date('Y-m-d') }}</span>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>   -->
<!--                            @endforeach-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--</section>-->


@include('layouts.footer')
