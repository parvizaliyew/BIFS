@extends('admin.layouts.master')

@section('title')
    Counter
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Counter</h3>
        </div>
        <div class="page-header">
            <nav aria-label="breadcrumb">
                <div class="lang">
                    <a href="az" class="btn btn-success active">Az</a>
                    <a href="en" class="btn btn-success">En</a>
                </div>
            </nav>
        </div>
        </div>
        
        </div>
        
        <div class="white_card_body">
        <div class="card-body">
            
        <form method="POST" action="{{ route('admin.counter.update',$counter->id) }}">
        @csrf
        <div class="row mb-3">
        <div class="col-md-6">
        <label class="form-label" for="name">BU SAHƏDƏ TƏCRÜBƏMİZ</label>
        <input type="text" name="experince" value="{{ $counter->experince }}" class="form-control" id="Phone1" >
        @error('experince')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        <div class="col-md-6">
        <label class="form-label" for="Phone2">LAYİHƏLƏRİMİZİN SAYI</label>
        <input type="text" name="count" value="{{ $counter->count }}" class="form-control" id="Phone2" >
        @error('count')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
            <label class="form-label" for="name">PARTNYORLARIMIZIN SAYI</label>
            <input type="text" name="partners" value="{{ $counter->partners }}" class="form-control" id="Phone1" >
            @error('partners')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
            </div>  
            <div class="col-md-6">
            <label class="form-label" for="Phone2">MƏHSUL ÇEŞİDİ</label>
            <input type="text" name="product" value="{{ $counter->product }}" class="form-control" id="Phone2" >
            @error('product')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Yenilə</button>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
    
@endsection

@push('js')
    <script src="{{ asset('manager/js/translate.js') }}"></script>
@endpush