@extends('front.layouts.master')

@section('css')
@endsection
@section('lang')
    <div class="lang">
        <a href="/layihe/{{ $project->slug['az'] }}">AZ</a>
        <span>/</span>
        <a href="/en/project/{{ $project->slug['en'] }}">EN</a>
    </div>
@endsection

@section('title')
    Layihe
@endsection

@section('content')
    <div role="main" class="main">

        <section class="section section-height-3 border-0 m-0">
            <div class="container position-relative pt-5 pb-5-5 mt-5 mb-5">
                <div class="row justify-content-end pt-1 mt-lg-5">
                    <div class="col-7 col-md-5 position-relative">
                        <ul class="breadcrumb d-block ps-2 appear-animation" data-appear-animation="fadeInLeftShorterPlus"
                            data-appear-animation-delay="200">
                            <li><a href="{{ route('index.' . app()->getLocale()) }}">{{ __('lang.esas_sehife') }}</a></li>
                            <li class="active">{{ $project->translate('title') }}</li>
                        </ul>
                        <h1
                            class="position-absolute top-100 left-0 text-color-light font-weight-bold text-6 line-height-3 text-end mt-5-5">
                            <span class="d-block position-relative z-index-1 pb-5 ps-lg-3 appear-animation"
                                data-appear-animation="fadeInLeftShorterPlus"
                                data-appear-animation-delay="800">{{ $project->translate('title') }}</span>
                            <span class="custom-svg-position-1 custom-svg-position-1-variation">
                                <svg class="svg-fill-color-dark mt-1 appear-animation"
                                    data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="400"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 859.45 88.44" xml:space="preserve"
                                    preserveAspectRatio="none">
                                    <polyline points="7.27,84.78 855.17,84.78 855.17,4.79 84.74,4.79 " />
                                </svg>
                            </span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>

        <div class="container pb-5 pb-sm-0 my-5">
            <div
                class="row align-items-center justify-content-center justify-content-sm-between flex-column flex-sm-row mb-5 mb-sm-0">
                <div class="col-10 text-center text-sm-start mb-4 mb-sm-0">
                    <h2 class="font-weight-bold text-10 line-height-1 text-color-dark mb-0 mb-sm-5-5">{{ $project->translate('title') }}</h2>
                </div>
              
            </div>
            <div class="row">
               
                <div class="col-lg-12">
                    <p class="font-weight-semibold text-4 mb-3">{!! $project->translate('desc') !!}</p>
                    
                    <div class="img-block">
                        @php
                            $image = \App\Models\Project::where('id', $project->id)->first();
                            $images = explode('|', $image->images);
                        @endphp
                        @foreach ($images as $img)
                            <div class="img-div">
                                <a data-fancybox="group" href="{{ asset($img) }}">
                                    <img src="{{ asset($img) }}" class="img-item" alt="">
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="position-relative pb-5 d-sm-none d-xl-block">
            <div class="position-absolute transform3dy-n50 left-0">
                <div class="appear-animation" data-appear-animation="fadeInRightShorterPlus"
                    data-appear-animation-delay="1500" data-appear-animation-duration="1500ms">
                    <div class="custom-square-1 bg-primary mt-0 mb-5"></div>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
        integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
