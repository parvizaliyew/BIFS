@extends('admin.layouts.master')

@section('title')
    Brends
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
        <div class="row justify-content-center">
        <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
        <div class="white_card_header">
        <div class="box_header m-0">
        <div class="main-title">
        <h3 class="m-0">Brendlər</h3>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="QA_section">
        <div class="white_box_tittle list_header">
        <h4>Table</h4>

        <div class="add_button ms-2">
        <a href="{{ route('admin.brend.create') }}"  class="btn_1">Əlavə et</a>
        </div>
        </div>
        </div>
        <div class="QA_table mb_30">

        <table class="table lms_table_active ">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Şəkil</th>
        <th scope="col">Prosesler</th>

        </tr>
        </thead>
        <tbody>
            @foreach ($brends as $b)
        <tr>
        <td >{{ $loop->index+1 }}</td>
        <td><img src="{{ asset($b->img) }}" style="width:50px" alt=""></td>
        <td style="font-size: 20px">
            <a href="{{ route('admin.brend.edit',$b->id) }}"><i class="ti-pencil"></i></a>
            <a href="{{ route('admin.brend.destroy',$b->id) }}"><i class="ti-trash"></i></a>
        </td>

        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        <div class="col-12">
        </div>
        </div>
        </div>
        </div>

@endsection
