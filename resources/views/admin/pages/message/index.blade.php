@extends('admin.layouts.master')

@section('title')
    Messages
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
        <h3 class="m-0">Mesajlar</h3>
        </div>
        </div>
        </div>
        <div class="white_card_body">
        <div class="QA_section">
        <div class="white_box_tittle list_header">  
        </div>
        </div>
        <div class="QA_table mb_30">

        <table class="table lms_table_active ">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Ad</th>
        <th scope="col">Email</th>
        <th scope="col">Başlıq</th>
        <th scope="col">Tarix</th>
        <th scope="col">Prosesler</th>

        </tr>
        </thead>
        <tbody>

        @foreach ($messages as $m)
        <tr>
            <td >{{ $loop->index+1 }}</td>
            <td>{{ $m->name }}</td>
            <td>{{ $m->email }}</td>
            <td>{{ Str::limit($m->title, 6, '...') }}</td>
            <td>
                @if ($m->seen_message===null)
                    <button class="btn btn-success">Yeni</button>
                @else
                    {{ $m->seen_message->addHours(-4)->diffForHumans() }} 
                @endif
              </td>
            <td style="font-size: 20px">
                <a href="{{ route('admin.message.edit',$m->id) }}"><i class="ti-eye"></i></a>
                <a  href="{{ route('admin.message.destroy',$m->id) }}"><i class="ti-trash delete"></i></a>
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


