@extends('front.layouts.master')

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
                <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2000">Who We Are</h2>
                <p class="text-4 font-weight-light mb-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="2200">Cras a elit sit amet leo accumsan volutsudisse hendrerit vehicula leo, vel efficitur felis ultrices non nteger. </p>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg width="145" height="147" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 145.42 147.12" xml:space="preserve" stroke-miter-limit="10" stroke-dasharray="7" data-appear-animation-svg="true">
                    <line stroke="#a2a2a2" stroke-dasharray="8" x1="14.75" y1="132.9" x2="133.81" y2="12.05" class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="2400" data-appear-animation-duration="100ms" />
                    <line stroke="#FFF" stroke-dasharray="8" stroke-width="2" x1="14.75" y1="132.9" x2="133.81" y2="12.05" class="appear-animation" data-appear-animation="customLineDividerAnim" data-appear-animation-delay="2400" data-appear-animation-duration="2.2s" />
                </svg>
            </div>
            <div class="col-lg-6">
                <p class="font-weight-medium text-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3200">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendrerit vehicula leo, vel efficitur felis <span class="highlight highlight-primary highlight-bg-opacity highlight-animated" data-appear-animation="highlight-animated-start" data-appear-animation-delay="4000" data-plugin-options="{'flagClassOnly': true}">ultrices non hendrerit</span> vehicula leo, vel efficitur felis ultrices non.</p>
                <a href="demo-construction-company.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="3400">
                    View More
                    <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                </a>
            </div>
        </div>
    </div>

    <section class="section position-relative overflow-hidden border-0 m-0">
        <div class="container pt-5-5 pb-5 mb-3">
            <div class="row mb-5-5">
                <div class="col">
                    <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="300">Services</h2>
                    <p class="text-4 font-weight-light appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="500">Cras a elit sit amet leo accumsan volutsudisse. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="550">
                    <div class="d-flex">
                        <img class="flex-0-0-auto" width="60" height="60" src="{{ asset('front') }}/img/demos/construction/icons/faucet.svg" alt="" data-icon data-plugin-options="{'animated': true, 'delay': 300, 'accY': 400, 'strokeBased': true, 'extraClass': 'svg-stroke-color-dark'}" />
                        <div class="ps-4">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Plumbing</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia. </p>
                            <a href="demo-construction-services-detail.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="750">
                    <div class="d-flex">
                        <img class="flex-0-0-auto" width="70" height="70" src="{{ asset('front') }}/img/demos/construction/icons/winch.svg" alt="" data-icon data-plugin-options="{'animated': true, 'delay': 600, 'accY': 400, 'strokeBased': true, 'extraClass': 'svg-stroke-color-dark'}" />
                        <div class="ps-3">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">General Construction</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia. </p>
                            <a href="demo-construction-services-detail.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-5 mb-md-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="950">
                    <div class="d-flex">
                        <img class="flex-0-0-auto" width="60" height="60" src="{{ asset('front') }}/img/demos/construction/icons/paint-brush.svg" alt="" data-icon data-plugin-options="{'animated': true, 'delay': 900, 'strokeBased': true, 'extraClass': 'svg-stroke-color-dark'}" />
                        <div class="ps-4">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Painting</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia. </p>
                            <a href="demo-construction-services-detail.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1150">
                    <div class="d-flex">
                        <img class="flex-0-0-auto" width="60" height="60" src="{{ asset('front') }}/img/demos/construction/icons/pushcart.svg" alt="" data-icon data-plugin-options="{'animated': true, 'delay': 1200, 'strokeBased': true, 'extraClass': 'svg-stroke-color-dark'}" />
                        <div class="ps-4">
                            <h3 class="text-color-dark font-weight-bold text-transform-none text-5 mb-2">Pre-Construction</h3>
                            <p class="font-weight-light text-3-5 mb-3-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia. </p>
                            <a href="demo-construction-services-detail.html" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                            </a>
                        </div>
                    </div>
                </div>
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
                <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5">Projects</h2>
                <p class="text-4 font-weight-light">Cras a elit sit amet leo accumsan volutsudisse. </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="position-relative">

                    <svg class="diamonds-svg-line position-absolute bottom-0 left-15 mb-4 ms-5 d-none d-xl-block" width="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1145.86 508.13" xml:space="preserve" data-appear-animation-svg="true">
                        <g>
                            <path d="M13.87,32.36c1.07,0.55,2.37-0.28,2.4-1.49c0.04-1.58,0.27-2.87,0.5-3.82c0.56-2.35,1.48-4.1,2.65-6.33
                                c1.7-3.25,1.95-2.85,2.46-4.35c1.47-4.3-0.36-8.19-0.47-8.41c-0.36-0.74-1.54-3.15-4.06-4.44c-3.71-1.9-8.87-0.94-11.91,2.46
                                c-2.64,2.95-3.08,7.05-2.08,9.92c0.25,0.71,1.6,2.01,3.64,4.75c3.62,4.87,3.42,4.53,4.11,6.02c1.3,2.83,1.07,4.78,2.74,5.67
                                C13.85,32.35,13.86,32.36,13.87,32.36z"/>
                            <circle fill="#FFF" cx="12.65" cy="12.54" r="6.34"/>
                            <circle cx="12.65" cy="12.54" r="4.29"/>
                            <circle fill="#FFF" cx="12.65" cy="12.54" r="2.44"/>
                        </g>
                        <g>
                            <path d="M1121.72,505.34c0.44,1.12,1.97,1.35,2.79,0.47c1.08-1.16,2.1-1.98,2.9-2.54c1.98-1.4,3.82-2.11,6.17-3.01 c3.43-1.32,3.35-0.86,4.71-1.64c3.94-2.26,5.13-6.39,5.19-6.63c0.22-0.79,0.92-3.38-0.12-6.02c-1.53-3.87-6.04-6.56-10.57-6.01 c-3.93,0.47-6.97,3.27-8.11,6.08c-0.28,0.69-0.12,2.56-0.4,5.97c-0.49,6.05-0.42,5.66-0.89,7.24c-0.89,2.98-2.35,4.3-1.68,6.07
                            C1121.71,505.32,1121.71,505.33,1121.72,505.34z" />
                            <circle fill="#FFF" cx="1133.88" cy="489.64" r="6.34"/>
                            <circle cx="1133.88" cy="489.64" r="4.29"/>
                            <circle fill="#FFF" cx="1133.88" cy="489.64" r="2.44"/>
                        </g>
                        <g>
                            <g>
                                <path class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300" data-appear-animation-duration="100ms" fill="none" stroke="#bfbfbf" stroke-miter-limit="10" stroke-dasharray="8.9374,8.9374" d="M22.48,46.84c12.43,19.8,37.11,58.25,65.34,90.46c6.24,7.12,38.23,43.11,89.76,77.67
                                    c27.53,18.47,93.42,58.51,184.44,74.83c63.3,11.35,123.7,8.54,152.88,7.18c18.43-0.86,20.79-1.63,44.6-2.65
                                    c25.38-1.08,74.44-3.04,134.17,1.51c27.49,2.09,68.09,5.34,120,16.82c38.84,8.59,89.79,20.21,149.48,50.83
                                    c17.94,9.21,51.96,27.97,87.87,57.83c28.32,23.54,43.15,41.79,52.16,54.24c5.04,6.97,9.21,13.45,12.57,19.04"/>
                                <path class="appear-animation" data-appear-animation="customDiamondsLineAnim" data-appear-animation-delay="300" data-appear-animation-duration="10s" fill="none" stroke="#FFF" stroke-width="2" stroke-miter-limit="10" stroke-dasharray="8.9374,8.9374" d="M22.48,46.84c12.43,19.8,37.11,58.25,65.34,90.46c6.24,7.12,38.23,43.11,89.76,77.67
                                    c27.53,18.47,93.42,58.51,184.44,74.83c63.3,11.35,123.7,8.54,152.88,7.18c18.43-0.86,20.79-1.63,44.6-2.65
                                    c25.38-1.08,74.44-3.04,134.17,1.51c27.49,2.09,68.09,5.34,120,16.82c38.84,8.59,89.79,20.21,149.48,50.83
                                    c17.94,9.21,51.96,27.97,87.87,57.83c28.32,23.54,43.15,41.79,52.16,54.24c5.04,6.97,9.21,13.45,12.57,19.04"/>
                            </g>
                        </g>
                    </svg>

                    <div class="diamonds-wrapper">
                        <ul class="diamonds mb-0">
                            <li>
                                <a href="img/demos/construction/generic/generic-1-medium.jpg" class="diamond lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-1.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 4000, 'imagesListURL': ['img/demos/construction/generic/generic-4.jpg', 'img/demos/construction/generic/generic-3.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-9-medium.jpg', 'img/demos/construction/generic/generic-3-medium.jpg', 'img/demos/construction/generic/generic-1-medium.jpg'], 'animateIn': 'blurIn', 'accY': -400}" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/demos/construction/generic/generic-2-big.jpg" class="diamond lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-2.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 4200, 'imagesListURL': ['img/demos/construction/generic/generic-3.jpg', 'img/demos/construction/generic/generic-4.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-3-medium.jpg', 'img/demos/construction/generic/generic-9-medium.jpg', 'img/demos/construction/generic/generic-2-big.jpg'], 'animateIn': 'blurIn', 'accY': -400}" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/demos/construction/generic/generic-9-medium.jpg" class="diamond lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-4.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 4400, 'imagesListURL': ['img/demos/construction/generic/generic-1.jpg', 'img/demos/construction/generic/generic-2.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-1-medium.jpg', 'img/demos/construction/generic/generic-2-medium.jpg', 'img/demos/construction/generic/generic-9-medium.jpg'], 'animateIn': 'blurIn', 'accY': -400}" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/demos/construction/generic/generic-5-wide.jpg" class="diamond diamond-sm lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-5-small.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 4600, 'imagesListURL': ['img/demos/construction/generic/generic-6-small.jpg', 'img/demos/construction/generic/generic-10-small-diamond.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-6-medium.jpg', 'img/demos/construction/generic/generic-10-medium.jpg', 'img/demos/construction/generic/generic-5-wide.jpg'], 'animateIn': 'blurIn', 'accY': -400}" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/demos/construction/generic/generic-3-medium.jpg" class="diamond lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-3.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 4800, 'imagesListURL': ['img/demos/construction/generic/generic-2.jpg', 'img/demos/construction/generic/generic-1.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-2-big.jpg', 'img/demos/construction/generic/generic-1-medium.jpg', 'img/demos/construction/generic/generic-3-medium.jpg'], 'animateIn': 'blurIn', 'accY': -100}" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/demos/construction/generic/generic-6-medium.jpg" class="diamond diamond-sm lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-6-small.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 5000, 'imagesListURL': ['img/demos/construction/generic/generic-5-small.jpg', 'img/demos/construction/generic/generic-7-small.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-5-wide.jpg', 'img/demos/construction/generic/generic-10-medium.jpg', 'img/demos/construction/generic/generic-6-medium.jpg'], 'animateIn': 'blurIn', 'accY': -100}" />
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="img/demos/construction/generic/generic-10-medium.jpg" class="diamond diamond-sm lightbox" data-plugin-options="{'type':'image'}">
                                    <div class="content">
                                        <img src="{{ asset('front') }}/img/demos/construction/generic/generic-7-small.jpg" class="img-fluid plugin-random-images" alt="" data-plugin-random-images data-plugin-options="{'minWindowWidth': 1200, 'random': false, 'delay': 5200, 'imagesListURL': ['img/demos/construction/generic/generic-10-small-diamond.jpg', 'img/demos/construction/generic/generic-6-small.jpg'], 'lightboxImagesListURL': ['img/demos/construction/generic/generic-10-medium.jpg', 'img/demos/construction/generic/generic-6-medium.jpg', 'img/demos/construction/generic/generic-10-medium.jpg'], 'animateIn': 'blurIn', 'accY': -100}" />
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

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

    <section class="section parallax border-0 pt-5 py-0 m-0" data-plugin-parallax data-plugin-options="{'spped': '1.5', 'parallaxHeight': '125%', 'fadeIn': true}" data-image-src="{{ asset('front') }}/img/demos/construction/backgrounds/background-1.jpg">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6 text-center order-2 order-lg-1">
                    <img src="{{ asset('front') }}/img/demos/construction/authors/author-1-big.png" class="img-fluid" alt="Woman testimonial from Porto Magazine company" />
                </div>
                <div class="col-lg-6 align-self-center pb-lg-5 order-1 order-lg-2 ps-5 ps-lg-0">
                    <div class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote testimonial-quotes-dark custom-testimonial-quote-position-1 mb-0">
                        <blockquote>
                            <p class="alternative-font-4 font-weight-medium text-start text-4 px-2 mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationName': 'typeWriter', 'animationSpeed': 25}">Cras a elit sit amet leo accumsan volutpat. Suspendisse hendreriast ehicula leo, vel efficitur felis ultrices non cras a elit sit amet leo acun volutpat. Suspendisse hendrerit vehicula leo, vel efficitur fel.</p>
                        </blockquote>
                        <div class="testimonial-author text-start ps-3 ms-1">
                            <strong class="text-4-5 negative-ls-1">Anne Doe Smith</strong>
                            <p class="text-color-default text-start mb-0">Porto Magazine</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row align-items-center text-center py-5 my-3">
            <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                <img src="{{ asset('front') }}/img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;" />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                <img src="{{ asset('front') }}/img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;" />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                <img src="{{ asset('front') }}/img/logos/logo-10.png" alt class="img-fluid" style="max-width: 140px;" />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
                <img src="{{ asset('front') }}/img/logos/logo-11.png" alt class="img-fluid" style="max-width: 140px;" />
            </div>
            <div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
                <img src="{{ asset('front') }}/img/logos/logo-12.png" alt class="img-fluid" style="max-width: 100px;" />
            </div>
            <div class="col-sm-4 col-xl-2">
                <img src="{{ asset('front') }}/img/logos/logo-13.png" alt class="img-fluid" style="max-width: 100px;" />
            </div>
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
                <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-3-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="200">Blog</h2>
                <p class="text-4 font-weight-light mb-5-5 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="400">Cras a elit sit amet leo accumsan volutsudisse. </p>
            </div>
        </div>
        <div class="row row-gutter-sm justify-content-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
            <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="demo-construction-blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
                    <div class="card border-0">
                        <div class="card-img-top position-relative overlay">
                            <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                <span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                    <span class="position-relative z-index-2">
                                        18
                                        <span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
                                    </span>
                                </span>
                            </div>
                            <img src="{{ asset('front') }}/img/demos/construction/blog/blog-thumb-1.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="card-body py-4 px-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">BY ADMIN</span>
                            <h3 class="text-transform-none font-weight-bold text-5 text-color-hover-primary mb-2">Two-thirds of construction firms report strong Q4 turnover</h3>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quidem similique... </p>
                            <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
                <a href="demo-construction-blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
                    <div class="card border-0">
                        <div class="card-img-top position-relative overlay">
                            <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                <span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                    <span class="position-relative z-index-2">
                                        15
                                        <span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
                                    </span>
                                </span>
                            </div>
                            <img src="{{ asset('front') }}/img/demos/construction/blog/blog-thumb-2.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="card-body py-4 px-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">BY ADMIN</span>
                            <h3 class="text-transform-none font-weight-bold text-5 text-color-hover-primary mb-2">Creating buildings is great and we want more people involved</h3>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quidem similique... </p>
                            <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
                            </span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-4">
                <a href="demo-construction-blog-post.html" class="text-decoration-none" data-cursor-effect-hover="plus">
                    <div class="card border-0">
                        <div class="card-img-top position-relative overlay">
                            <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                <span class="text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                    <span class="position-relative z-index-2">
                                        12
                                        <span class="d-block custom-font-size-1 positive-ls-2 px-1">FEB</span>
                                    </span>
                                </span>
                            </div>
                            <img src="{{ asset('front') }}/img/demos/construction/blog/blog-thumb-3.jpg" class="img-fluid" alt="Lorem Ipsum Dolor" />
                        </div>
                        <div class="card-body py-4 px-0">
                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2">BY ADMIN</span>
                            <h3 class="text-transform-none font-weight-bold text-5 text-color-hover-primary mb-2">Construction is offering greater choice for daylight provision</h3>
                            <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quidem similique... </p>
                            <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                View More
                                <img width="27" height="27" src="{{ asset('front') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" style="width: 27px;" />
                            </span>
                        </div>
                    </div>
                </a>
            </div>
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

@endsection
