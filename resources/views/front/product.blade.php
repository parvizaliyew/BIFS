@extends('front.layouts.master')

@section('lang')
    <div class="lang">
        <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
        <span>/</span>
        <a href="{{ route(str_replace(app()->getLocale(), 'en',$current)) }}">EN</a>
    </div>
@endsection

@section('title')
{{ __('lang.mehsullar') }}
@endsection

@section('content')
<div role="main" class="main">

    <section class="section section-height-3 border-0 m-0">
        <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
            <div class="row justify-content-end pt-1 mt-lg-5">
                <div class="col-7 col-md-5 position-relative">
                    <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                        <li><a href="{{ route('product.'.app()->getLocale()) }}">{{ __('lang.esas_sehife') }}</a></li>
                        <li class="active">{{ __('lang.mehsullar') }}</li>
                    </ul>
                    <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                        <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">{{ __('lang.mehsullar') }}</span>
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
        <div class="row gy-5 gy-lg-0 pt-3 pt-lg-0 mt-5 mt-lg-0">
            <div class="col-lg-12 order-lg-2 mt-0 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1200">
                <div class="row gy-5">
                    @foreach ($products as $p)
                    <div class="col-6 appear-animation" data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1400">
                        <div class="d-flex flex-column flex-sm-row align-items-center align-items-sm-start">
                            <a class="product_link" href="{{ route('product_details.'.app()->getLocale(),$p->slug[app()->getLocale()]) }}">
                                <img class="flex-0-0-auto" width="85" height="85" src="{{ asset($p->logo) }}" alt=""  />
                                <div class="text-center text-sm-start">
                                    <h3 class="text-color-dark font-weight-bold text-transform-none text-5-5 mb-3-5">{{ $p->translate('title') }}</h3>
                                    <p class="font-weight-light text-3-5 mb-4-5 product_height">{{ $p->translate('short_desc') }} </p>
                                    <a href="{{ route('product_details.'.app()->getLocale(),$p->slug[app()->getLocale()]) }}" class="custom-view-more d-inline-flex font-weight-medium text-color-primary text-decoration-none">
                                        {{ __('lang.etrafli') }}
                                        <img width="27" height="27" src="{{ asset('front/') }}/img/demos/construction/icons/arrow-right.svg" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary ms-2'}" />
                                    </a>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                 

                    
                </div>
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
