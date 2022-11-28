@extends('admin.layouts.master')

@section('title')
Project Edit
@endsection
@section('content')
<div class="main_content_iner ">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h3 class="m-0">Layihəni Yenilə</h3>
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
                <form method="POST" enctype="multipart/form-data" action="{{ route('admin.project.update',$project->id) }}">
                    @csrf
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="form-group translate">
                                <label for="">Başlıq</label>
                                <input type="hidden" name="title" value='{{ $project->title }}'>
                                <input name="" value="{{ $project->translate('title') }}" class="form-control">
                            </div>
                            @error('title')
                            <span class="text-danger mt-2">{{ $message }}</span> <br>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group translate">
                            <label for="">Mətn</label>
                            <input type="hidden" name="desc" value='{{ $project->desc }}'>
                            <textarea name="" id="editor" class="form-control">{{ $project->translate('desc') }}</textarea>
                        </div>
                        @error('desc')
                        <span class="text-danger mt-2">{{ $message }}</span> <br>
                        @enderror
                    </div>
                    <div class="row mb-3">

                        <div class="col-md-6">
                            <label for="">Şəkil</label>
                            <div>
                                <img src="{{ asset($project->img) }}" width="100px" alt="">
                            </div>
                            <br>
                            <div class="mb-3">
                                <input name="img" class="form-control" type="file" id="formFile">
                            </div>
                            @error('img')
                            <span class="text-danger mt-2">{{ $message }}</span> <br>
                            @enderror
                        </div>


                        @php
                        $image=\App\Models\Project::where('id',$project->id)->first();
                        $images=explode('|',$image->images);
                        @endphp
                        <div class="col-md-12">
                            <label for="">Şəkillər</label> <br>
                            @foreach ($images as $key => $image)
                            <div>
                                <img width="100px" src="{{ asset($image) }}" alt="">
                                <i class="fa fa-times"></i>
                                <input type="hidden" name="image_ids[]" value="{{ $key }}">
                            </div>
                            @endforeach
                            <div class="mb-3">
                                <br>
                                <input name="images[]" multiple class="form-control" type="file" id="formFile">
                            </div>
                            @error('images')
                            <span class="text-danger mt-2">{{ $message }}</span> <br>
                            @enderror

                            <a href="{{ route('admin.project') }}" class="btn btn-success">Geri</a>
                            <button type="submit" class="btn btn-primary">Yenilə</button>
                        </div>

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
<script src="{{ asset('manager/vendors/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('manager/js/cketditor.js') }}"></script>
<script>
    let close = $('.fa-times');
    close.on('click',function(){
        $(this).parent().remove();
    });
</script>
@endpush
