@extends('admin.layouts.master')

@section('title')
    Partner Add
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Partnyor əlavə et</h3>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="{{ route('admin.partner.store') }}">
        @csrf
        <div class="row mb-3">
        <div class="col-md-6">
            <div class="mb-3">
                <input name="img" class="form-control" type="file" id="formFile">
            </div>
        @error('img')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        </div>     
        <a href="{{ route('admin.partner') }}" class="btn btn-success">Geri</a>
        <button type="submit" class="btn btn-primary">Əlavə Et</button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
</div>

@endsection