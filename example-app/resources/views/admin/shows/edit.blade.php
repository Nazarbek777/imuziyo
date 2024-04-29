@extends('layouts.crud')

@section('title','Project edit')

@section('content')
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('shows.update',$tame->id)}}" method="POST" enctype="multipart/form-data"    >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Loyihaga tegishli(show) bir nechta rasm kiriting </label>
                <input  required name="show_image[]" multiple class="form-control form-control-lg" id="" type="file" value="{{$tame->show_image}}">
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ sarlavhani kiriting</label>
                <textarea name="content_uz" id=""  class="form-control form-control-lg" >{{$tame->content_uz}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU sarlavhani kiriting</label>
                <textarea name="content_ru" id=""  class="form-control form-control-lg" >{{$tame->content_ru}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN sarlavhani kiriting</label>
                <textarea name="content_en" id=""  class="form-control form-control-lg" >{{$tame->content_en}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ description qismini kiriting</label>
                <textarea name="description_uz" id=""   class="form-control form-control-lg" >{{$tame->description_uz}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU description qismini kiriting</label>
                <textarea name="description_ru" id=""   class="form-control form-control-lg" >{{$tame->description_ru}}</textarea>
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN description qismini kiriting</label>
                <textarea name="description_en" id=""   class="form-control form-control-lg" >{{$tame->description_en}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Qo'shimcha ma'lumot bo'lsa qismini kiriting</label>
                <textarea name="title" id=""   class="form-control form-control-lg" >{{$tame->title}}</textarea>
            </div>

        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
