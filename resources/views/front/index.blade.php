@extends('front.layouts.master')


@section('lang')
    <div class="lang">
        <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
        <span>/</span>
        <a href="{{ route(str_replace(app()->getLocale(), 'en',$current)) }}">EN</a>
    </div>
@endsection

@section('title')
{{__('lang.esas_sehife')}}
@endsection

@section('content')
<div role="main" class="main">

    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-style-diamond nav-with-transparency nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplay': false, 'autoplayTimeout': 7000}" data-dynamic-height="['700px','700px','600px','500px','410px']" style="height: 700px;">
        <div class="owl-stage-outer">
            <div class="owl-stage">
                <!-- Carousel Slide 1 -->
                <div class="owl-item position-relative">
                    <div class="background-image-wrapper position-absolute top-0 left-0 right-0 bottom-0" data-appear-animation="kenBurnsToRight" data-appear-animation-duration="30s" data-plugin-options="{'minWindowWidth': 0}" data-carousel-onchange-show style="background-image: url({{ asset('front') }}/img/background-1.jpg); background-size: cover; background-position: center;"></div>
                    <div class="container position-relative z-index-1 h-100">
                        <div class="row align-items-center h-100">
                            <div class="col-lg-9 col-xl-8 position-relative mx-auto mt-5 pt-5">
                                <h1 class="position-relative text-color-light font-weight-bold custom-big-text-style-1 text-start text-lg-end pt-4 mt-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500">
                                    <span class="position-absolute bottom-100 left-0 transform3dy-p50 w-100 pt-4 ms-0">
                                        <span class="d-inline-flex custom-outline-text-style-1 text-2 text-center appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1300">BUILDING</span>
                                    </span>
                                    BUILDING<br> DREAMS
                                    <span class="position-absolute top-100 left-0 transform3dy-n50 w-100 pt-4 ms-0">
                                        <span class="d-inline-flex custom-outline-text-style-1 text-2 text-center appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1300">DREAMS</span>
                                    </span>
                                </h1>
                            </div>
                        </div>
                        <div class="position-absolute left-100pct bottom-0 transform3dx-n50 w-75 ms-5">
                            <img src="{{ asset('front') }}/img/background-2.jpg" class="img-fluid mw-100 w-auto appear-animation" alt="Engineer Image" data-appear-animation="fadeIn" data-appear-animation-delay="100" />
                        </div>
                        <p class="position-absolute bottom-15 right-0 text-color-light font-weight-bold text-5-5 line-height-3 text-end pb-0 pb-lg-5 mb-0 d-none d-sm-block">
                            <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 mb-5-5 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1900">#1 Fastest-Growing Company</span>
                            <span class="custom-svg-position-1">
                                <svg class="svg-fill-color-primary mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1200" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
                                    <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>

                <!-- Carousel Slide 2 -->
                <div class="owl-item position-relative" style="background-image: url({{ asset('front') }}/img/background.jpg); background-size: cover; background-position: center;">
                    <div class="container position-relative z-index-1 h-100">
                        <div class="row align-items-center h-100 pt-5">
                            <div class="col-xl-8 position-relative ms-auto mt-5 pt-5">
                                <h2 class="position-relative text-color-light font-weight-bold custom-big-text-style-1 custom-big-text-style-1-variation text-center text-lg-end pt-4 mt-5 appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1000">
                                    <span class="d-block position-absolute bottom-100 left-0 transform3dy-p50 w-100 pt-5 ps-5">
                                        <span class="d-inline-flex custom-outline-text-style-1 text-2 text-center appear-animation" data-appear-animation="fadeInRightShortePlus" data-appear-animation-delay="2000">
                                            <span class="d-block pt-5">MODERNITY</span></span>
                                    </span>
                                    MODERNITY
                                </h2>
                            </div>
                        </div>
                        <p class="position-absolute bottom-15 right-0 text-color-light font-weight-bold text-5-5 line-height-3 text-end pb-0 pb-lg-5 mb-0 d-none d-sm-block">
                            <span class="d-block line-height-1 position-relative z-index-1 pb-5 ps-lg-3 mb-5-5 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="2200">Modern Building Design</span>
                            <span class="custom-svg-position-1">
                                <svg class="svg-fill-color-dark appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1600" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
                                    <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="owl-nav mt-5">
            <button type="button" role="presentation" class="owl-prev"></button>
            <button type="button" role="presentation" class="owl-next"></button>
        </div>
    </div>

    <div class="container py-5 my-3">
        <div class="row justify-content-between align-items-center flex-lg-nowrap gy-3">
            <div class="col-lg-4">
                <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2000">{{ __('lang.biz_kimik') }}</h2>
                <p class="text-4 font-weight-light mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2200">{{ __('lang.desc_left') }} </p>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg width="145" height="147" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 145.42 147.12" xml:space="preserve" stroke-miter-limit="10" stroke-dasharray="7" data-appear-animation-svg="true">
                    <line stroke="#a2a2a2" stroke-dasharray="8" x1="14.75" y1="132.9" x2="133.81" y2="12.05" class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2400" data-appear-animation-duration="100ms" />
                    <line stroke="#FFF" stroke-dasharray="8" stroke-width="2" x1="14.75" y1="132.9" x2="133.81" y2="12.05" class="appear-animation" data-appear-animation="customLineDividerAnim" data-appear-animation-delay="2400" data-appear-animation-duration="2.2s" />
                </svg>
            </div>
            <div class="col-lg-6">
                <p class="font-weight-medium text-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3200">{{ __('lang.desc_right') }} </p>
                <a href="demo-construction-company.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3400">
                    {{ __('lang.etrafli') }}
                    <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                </a>
            </div>
        </div>
    </div>

    <section class="section position-relative overflow-hidden border-0 m-0">
        <div class="container pt-5-5 pb-5 mb-3">
            <div class="row mb-5-5">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300">{{ __('lang.mehsullar') }}</h2>
                    <p class="text-4 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500">{{ __('lang.mesullar_desc') }}. </p>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $prod)
                        <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1150">
                    <div class="d-flex">
                        <img class="flex-0-0-auto" width="60" height="60" src="{{ asset($prod->logo) }}" alt="" />
                        <div class="ps-4">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">{{ $prod->translate('title') }}</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">{{ $prod->translate('short_desc') }} </p>
                            <a href="demo-construction-services-detail.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none">
                                {{ __('lang.etrafli') }}
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            
            </div>
        </div>
        <div class="position-absolute transform3dy-n50 right-0 pe-5 me-4">
            <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1700" data-appear-animation-duration="750ms">
                <div class="custom-square-1 bg-primary mb-5"></div>
            </div>
        </div>
        <div class="position-absolute transform3dy-n50 right-15 pe-5 me-5">
            <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="750ms">
                <div class="custom-square-1 bg-dark pe-5 me-5 mt-4 mb-5"></div>
            </div>
        </div>
    </section>

    <div class="container py-5 my-5-5">
        <div class="row">
            <div class="col">
                <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5">{{ __('lang.brendler') }}</h2>
                <p class="text-4 font-weight-light">{{ __('lang.brendler_desc') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="swiper mySwiper1">
                <div class="swiper-wrapper">
                    @foreach($brends as $b)
                        <div class="swiper-slide">
                            <img src="{{ asset($b->img) }}" alt class="img-fluid" style="max-width: 90px;" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-lg-6">
                <p class="text-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="600">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis <span class="highlight highlight-primary highlight-bg-opacity highlight-animated" data-appear-animation="highlight-animated-start" data-appear-animation-delay="1100" data-plugin-options="{'flagClassOnly': true}">ultrices non hendrerit</span> vehicula leo, vel efficitur felis ultrices non.</p>
                <a href="demo-construction-projects.html" class="custom-view-more d-inline-flex align-items-center btn btn-primary font-weight-semibold rounded-0 text-3-5 btn-px-4 btn-py-2 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="800">
                    View Projects
                    <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light ms-2'}" />
                </a>
            </div>
        </div>
    </div>
    <section style="position: relative;overflow: hidden;height: 680px;max-height: 300px;display: flex;align-items: center;" class="section parallax border-0 pt-5 py-0 m-0" data-plugin-parallax data-plugin-options="{'spped': '1.5', 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="{{ asset('front') }}/img/background-img.jpg">
        <div class="container">
            <div class="row gy-5">
                
                <div class="row justify-content-center counters gy-4 gy-md-0 my-5-5">
                    <div class="col-md-auto mt-0">
                        <div class="counter">
                            <strong class="text-color-primary text-13" data-to="{{ $counter->experince }}" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                            <span class="text-color-primary font-weight-bold text-4">{{ __('lang.tecrubemiz') }}</span>
                        </div>
                    </div>
                    <div class="col-md-auto mx-md-5">
                        <div class="counter">
                            <strong class="text-color-primary text-13" data-to="{{ $counter->count }}" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                            <span class="text-color-primary font-weight-bold text-4">{{ __('lang.layihelerin_sayi') }}</span>
                        </div>
                    </div>
                    <div class="col-md-auto mx-md-5">
                        <div class="counter">
                            <strong class="text-color-primary text-13" data-to="{{ $counter->partners }}" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                            <span class="text-color-primary font-weight-bold text-4">{{ __('lang.mehsul_cesidi') }}</span>
                        </div>
                    </div>
                    <div class="col-md-auto">
                        <div class="counter">
                            <strong class="text-color-primary text-13" data-to="{{ $counter->product }}" data-append="+" data-plugin-options="{'accY': -200}">0</strong>
                            <span class="text-color-primary font-weight-bold text-4">{{ __('lang.tecrubemiz') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container mt-3" style="display: flex; align-items:center" >
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach($partners as $p)
                    <div class="swiper-slide">
                        <img src="{{ asset($p->img) }}" alt class="img-fluid" style="max-width: 90px;" />
                    </div>
                @endforeach
            </div>
        </div>
        <div class="row align-items-center text-center py-5 my-3">



        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col px-0">
                <hr class="my-0">
            </div>
        </div>
    </div>

        <div class="container mt-5 pt-4 mb-5 mb-lg-4 mb-xl-0 pb-3 pb-xl-0">
            <div class="row">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">{{ __('lang.projects') }}</h2>
                    <p class="text-4 font-weight-light mb-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">{{ __('lang.projects_desc') }} </p>
                </div>
            </div>
            <div class="row row-gutter-sm justify-content-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                @foreach($projects as $pro)
                    <div class="col-sm-9 col-md-6 col-lg-4">
                        <a href="" class="text-decoration-none" data-cursor-effect-hover="plus">
                            <div class="card border-0">
                                <div class="card-img-top position-relative overlay">
                                    <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                    
                                    </div>
                                    <img src="{{ asset($pro->img) }}" class="img-fluid" alt="Lorem Ipsum Dolor" />
                                </div>
                                <div class="card-body py-4 px-0">
                                    <h3 class="text-transform-none font-weight-bold text-5 text-color-hover-primary mb-2">{{ $pro->translate('title') }}</h3>
                                    <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                    {{ __('lang.etrafli') }}
                                    <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
                                </span>
                                </div>
                            </div>
                        </a>
                    </div>

                @endforeach
            </div>
        </div>

    <div class="position-relative pb-5 d-sm-none d-xl-block">
        <div class="position-absolute transform3dy-n50 left-0">
            <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
                <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
            </div>
        </div>
    </div>

</div>

    @push('css')
        <link   rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    @endpush

    @push('js')
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 6,
                spaceBetween: 10,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                autoplay: {
                    delay: 2000,
                },
                loop:true,
            });
        </script>

<script>
    var swiper = new Swiper(".mySwiper1", {
        slidesPerView: 4,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 2000,
        },
        loop:true,
    });
</script>
    @endpush
@endsection
