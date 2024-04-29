@extends('layouts.crud')

@section('title','Project edit')

@section('content')
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('project.update',$tame->id)}}" method="POST"  enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Loyiha sarlavha yani nomini (masalan:Qarshi Xalqaro Unversteti) kiriting</label>
                <input required name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text"  value="{{$tame->name_uz}}" >
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Loyiha sarlavha yani nomini (masalan:Qarshi Xalqaro Unversteti) kiriting</label>
                <input required name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text"  value="{{$tame->name_ru}}" >
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Loyiha sarlavha yani nomini (masalan:Qarshi Xalqaro Unversteti) kiriting</label>
                <input required name="name_en" class="form-control form-control-lg" id="formFileLg" type="text"  value="{{$tame->name_en}}" >
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Ichki qismi uchun sarlavhani kiriting</label>
                <textarea name="content_uz" id=""  class="form-control form-control-lg" >{{$tame->content_uz}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Ichki qismi uchun sarlavhani kiriting</label>
                <textarea name="content_ru" id=""  class="form-control form-control-lg" >{{$tame->content_ru}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Ichki qismi uchun sarlavhani kiriting</label>
                <textarea name="content_en" id=""  class="form-control form-control-lg" >{{$tame->content_en}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Ichki qismi uchun description qismini kiriting</label>
                <textarea name="description_uz" id=""   class="form-control form-control-lg" >{{$tame->description_uz}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Ichki qismi uchun description qismini kiriting</label>
                <textarea name="description_ru" id=""   class="form-control form-control-lg" >{{$tame->description_ru}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Ichki qismi uchun description qismini kiriting</label>
                <textarea name="description_en" id=""   class="form-control form-control-lg" >{{$tame->description_en}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Loyihaning nomini kiriting</label>
                <select name="project_type" class="form-control form-select" >
                    <option value="texnikum">Tibbiyot texnikumlari </option>
                    <option value="maktab">Xususiy maktablar </option>
                    <option value="universitet">Universitetlar</option>
                    <option value="markaz">O'quv markazlari</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Loyiha uchun(asosiy) 1 ta rasm kiriting</label>
                <input  name="image" class="form-control form-control-lg" id="formFileLg" type="file">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Loyihaga tegishli(show) bir nechta rasm kiriting </label>
                <input  name="show_image[]" multiple class="form-control form-control-lg" id="formFileLg" type="file">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Loyihaga tegishli (url) kiriting</label>
                <input  name="project_url" class="form-control form-control-lg" id="formFileLg" type="text">
            </div>






        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
