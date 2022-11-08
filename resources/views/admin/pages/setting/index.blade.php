@extends('admin.layouts.master')

@section('title')
    Setting
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Ayarlar</h3>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="card-body">
        <form method="POST" action="{{ route('admin.profil_store') }}">
        @csrf
        <div class="row mb-3">
        <div class="col-md-6">
        <label class="form-label" for="name">Telefon 1</label>
        <input type="text" name="name" class="form-control" id="Phone1"  placeholder="055 555 55 55">
        @error('phone1')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        <div class="col-md-6">
        <label class="form-label" for="Phone2">Telefon 2</label>
        <input type="text" name="lname" class="form-control" id="Phone2"  placeholder="055 555 55 55">
        @error('phone2')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        </div>

        <div class="row mb-3">
        <div class="col-md-6">
        <label class="form-label" for="inputEmail4">Email</label>
        <input type="email" name="email"  class="form-control" id="inputEmail4" placeholder="Email">
        @error('email')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
        </div>
        <div class="col-md-6">
        <label class="form-label" for="newpassword"> Şifrə</label>
        <input type="password" name="password" class="form-control" id="newpassword" placeholder="****">
        @error('password')
        <span class="text-danger mt-2">{{ $message }}</span> <br>
        @enderror
            </div>
        </div>
        
        <div class="row mb-3">
          
            <div class=" col-md-6">
                <label class="form-label" for="inputState">Role</label>
                <select id="inputState" name="role" class="form-control">
                <option value="" >Rolu Seçin</option>
                <option value="admin">Admin</option>
                <option value="content">Content</option>
                <option value="user">User</option>
                </select>
                @error('role')
                <span class="text-danger mt-2">{{ $message }}</span> <br>
                @enderror
                </div>
        </div>
        <button type="submit" class="btn btn-primary">Əlavə Et</button>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>
    
@endsection