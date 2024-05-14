@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1 class="mt-5">Asosiy sahifani ma'lumotlarini o'zgartirish</h1>
    <hr/>
    <form action="{{route('home.update',$tame->id)}}" method="POST" enctype="multipart/form-data"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Asosiy sahifaning sarlavhasini kiritin</label>
                <textarea name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text" >
                    {{$tame->name_uz}}
                </textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Asosiy sahifaning sarlavhasini kiritin</label>
                <textarea name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text" >
                    {{$tame->name_ru}}
                </textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Asosiy sahifaning sarlavhasini kiritin</label>
                <textarea name="name_en" class="form-control form-control-lg" id="formFileLg" type="text" >
                    {{$tame->name_en}}
                </textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Asosiy sahifanining short_content ni kiriting</label>
                <textarea name="content_uz" class="form-control form-control-lg" id="formFileLg" type="text" >
                    {{$tame->content_uz}}
                </textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Asosiy sahifanining short_content ni kiriting</label>
                <textarea name="content_ru" class="form-control form-control-lg" id="formFileLg" type="text" >
                    {{$tame->content_ru}}
                </textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Asosiy sahifanining short_content ni kiriting</label>
                <textarea name="content_en" class="form-control form-control-lg" id="formFileLg" type="text" >
                    {{$tame->content_en}}
                </textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
            </div>

        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
