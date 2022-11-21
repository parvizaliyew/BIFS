@extends('front.layouts.master')


@section('lang')
    <div class="lang">
        <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
        <span>/</span>
        <a href="{{ route(str_replace(app()->getLocale(), 'en',$current)) }}">EN</a>
    </div>
@endsection

@section('title')
{{__('lang.haqqimizda')}}
@endsection

@section('content')
<div role="main" class="main">

    <section class="section section-height-3 border-0 m-0">
        <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
            <div class="row justify-content-end pt-1 mt-lg-5">
                <div class="col-7 col-md-5 position-relative">
                    <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                        <li><a href="demo-construction.html">{{ __('lang.esas_sehife') }}</a></li>
                        <li class="active">{{ __('lang.haqqimizda') }}</li>
                    </ul>
                    <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                        <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">{{ __('lang.haqqimizda') }}</span>
                        <span class="custom-svg-position-1 custom-svg-position-1-variation">
                            <svg class="svg-fill-color-dark mt-1 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve" preserveAspectRatio="none">
                                <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 "/>
                            </svg>
                        </span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container custom-margin-1">
        <div class="row gy-5 gy-lg-0">
            <div class="col-lg-12 order-lg-2 mt-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
                <div id="who-we-are" class="row">
                    <div class="col">									
                        <h2 class="text-color-dark font-weight-bold text-7 line-height-1 mb-4">{{ __('lang.biz_kimik') }}</h2>
                        <img src="{{ asset('front/img/about/about.jpg') }}" class="img-fluid mb-4 image_about" alt="Engineer Man" />
                        <p class="font-weight-medium text-4">{{ __('lang.about_text_1') }}</p>
                        <p class="font-weight-light text-3-5 mb-0">{{ __('lang.about_text_2') }} </p>
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
              
            </div>

        </div>
    </div>

</div>
@endsection