@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('our-tame.update',$tame->id)}}" method="POST" enctype="multipart/form-data" >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Jamoa a'zosining ismini kiriting</label>
                <input name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name_uz}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Jamoa a'zosining ismini kiriting</label>
                <input name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name_ru}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Jamoa a'zosining ismini kiriting</label>
                <input name="name_en" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name_en}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Jamoa a'zosining  lavozimini kiriting</label>
                <input name="position_uz" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->position_uz}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Jamoa a'zosining  lavozimini kiriting</label>
                <input name="position_ru" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->position_ru}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Jamoa a'zosining  lavozimini kiriting</label>
                <input name="position_ru" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->position_en}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file" value="{{$tame->image}}" >
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining telegram(url) kiriting</label>
                <input name="twitter" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->twitter}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining instagram(url) kiriting</label>
                <input name="instagram" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->instagram}}">
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining facebook(url) kiriting</label>
                <input name="facebook" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->facebook}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining linkedin(url) kiriting</label>
                <input name="linkedin" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->linkedin}}">
            </div>
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
