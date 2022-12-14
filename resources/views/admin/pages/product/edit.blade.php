@extends('admin.layouts.master')

@section('title')
    Product Edit
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Məhsulu Yenilə</h3>
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
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.product.update',$product->id) }}">
        @csrf
        <div class="row mb-3">
         <div class="col-md-12">
            <div class="form-group translate">
                <label for="">Başlıq</label>
                <input type="hidden" name="title" value='{{ $product->title }}'>
                <input name="" value="{{ $product->translate('title') }}" class="form-control">
            </div>
            @error('title')
            <span class="text-danger mt-2">{{ $message }}</span> <br>
            @enderror
         </div>
           </div>
            <div class="row mb-3">
                <div class="form-group translate">
                    <label for="">Qısa Mətn</label>
                    <input type="hidden" name="short_desc" value='{{ $product->short_desc }}'>
                    <textarea name=""    class="form-control">{{ $product->translate('short_desc') }}</textarea>
                </div>
                @error('desc')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
            </div>
       <div class="row mb-3">
        <div class="form-group translate">
            <label for="">Mətn</label>
            <input type="hidden" name="desc" value='{{ $product->desc }}'>
            <textarea name=""    class="form-control">{{ $product->translate('desc') }}</textarea>
        </div>
        @error('desc')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
       </div>
        <div class="row mb-3">
            <div class="col-md-12">
                <label for="">Logo</label>
                <div>
                    <img src="{{ asset($product->logo) }}"  width="100px" alt="">
                </div>
                <br>
                <div class="mb-3">
                    <input name="logo" class="form-control" type="file" id="formFile">
                </div>
                @error('img')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
            </div>
        </div>
            <div class="row mb-3">

        @php
        $image=\App\Models\Product::where('id',$product->id)->first();
        $images=explode('|',$image->images);
        @endphp
        <div class="col-md-12">
            <label for="">Şəkillər</label> <br>
            @foreach ($images as $image)
            <img width="100px" src="{{ asset($image) }}" alt="">
        @endforeach
            <div class="mb-3">
                <br>
                <input name="images[]" multiple class="form-control" type="file" id="formFile">
            </div>
        @error('images')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        </div>
        <a href="{{ route('admin.product') }}" class="btn btn-success">Geri</a>
        <button type="submit" class="btn btn-primary">Yenilə</button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
</div>

@endsection

@push('js')
    <script src="{{ asset('manager/js/translate.js') }}"></script>
@endpush
