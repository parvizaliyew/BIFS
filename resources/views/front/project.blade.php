@extends('front.layouts.master')

@section('css')

    
@endsection
@section('lang')
    <div class="lang">
        <a href="{{ route(str_replace(app()->getLocale(), 'az', $current)) }}">AZ</a>
        <span>/</span>
        <a href="{{ route(str_replace(app()->getLocale(), 'en',$current)) }}">EN</a>
    </div>
@endsection

@section('title')
{{__('lang.layiheler')}}
@endsection

@section('content')
<div role="main" class="main">
    <section class="section section-height-3 border-0 m-0">
        <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
            <div class="row justify-content-end pt-1 mt-lg-5">
                <div class="col-7 col-md-5 position-relative">
                    <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="200">
                        <li><a href="demo-construction.html">{{ route('index.'.app()->getLocale()) }}</a></li>
                        <li class="active">Projects</li>
                    </ul>
                    <h1 class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                        <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="800">Projects</span>
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
@endsection