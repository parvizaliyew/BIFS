@extends('admin.layouts.master')

@section('title')
    Contact
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Əlaqə</h3>
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
            
        <form method="POST" action="{{ route('admin.setting_post') }}">
        @csrf
        <div class="row mb-3">
        <div class="col-md-6">
        <label class="form-label" for="name">Telefon 1</label>
        <input type="text" name="phone_1" value="{{ $setting->phone_1 }}" class="form-control" id="Phone1"  placeholder="055 555 55 55">
        @error('phone1')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        <div class="col-md-6">
        <label class="form-label" for="Phone2">Telefon 2</label>
        <input type="text" name="phone_2" value="{{ $setting->phone_2 }}" class="form-control" id="Phone2"  placeholder="055 555 55 55">
        @error('phone2')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        </div>
       <div class="mb-3">
        <div class="form-group translate">
            <label for="">Ünvan</label>
            <input type="hidden" name="adress" value='{{ $setting->adress }}'>
            <input   value="{{ $setting->translate('adress') }}" class="form-control" />
            @error('adress')
            <span class="text-danger mt-2">{{$message}}</span>
            @enderror
        </div>
       </div>
        <div class="row mb-3">
        <div class="col-md-6">
        <label class="form-label" for="inputEmail4">Email</label>
        <input type="email" name="email" value="{{ $setting->email }}"  class="form-control" id="inputEmail4" placeholder="Email">
        @error('email')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        <div class="col-md-6">
        <label class="form-label" for="newpassword"> Facebook </label>
        <input type="text" name="fb" value="{{ $setting->fb }}" class="form-control" id="newpassword" placeholder="facebook">
        @error('fb')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
            </div>
        </div>
        
      <div class="mb-3">
        <div class="col-md-6">
            <label class="form-label" for="ins"> Instagram </label>
            <input type="text" name="ins" value="{{ $setting->ins }}" class="form-control" id="ins" placeholder="instagram">
            @error('ins')
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