@extends('admin.layouts.master')

@section('title')
    Projects
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
        <h3 class="m-0">Layihələr</h3>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="QA_section">
        <div class="white_box_tittle list_header">
        <h4>Table</h4>

        <div class="add_button ms-2">
        <a href="{{ route('admin.project.create') }}"  class="btn_1">Əlavə et</a>
        </div>
        </div>
        </div>
        <div class="QA_table mb_30">

        <table class="table lms_table_active ">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Şəkil</th>
        <th scope="col">Baslıq</th>
        <th scope="col">Mətn</th>
        <th scope="col">Prosesler</th>

        </tr>
        </thead>
        <tbody>

        @foreach ($projects as $p)
        <tr>
            <td >{{ $loop->index+1 }}</td>
            <td><img src="{{ asset($p->img) }}" style="width:50px" alt=""></td>
            <td>{{ Str::limit($p->translate('title'), 12, '...') }}</td>
            <td>{{ Str::limit($p->translate('desc'), 20, '...') }}</td>
            <td style="font-size: 20px">
                <a href="{{ route('admin.project.edit',$p->id) }}"><i class="ti-pencil"></i></a>
                <a  href="{{ route('admin.project.destroy',$p->id) }}"><i class="ti-trash delete"></i></a>
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
</div>

@endsection


