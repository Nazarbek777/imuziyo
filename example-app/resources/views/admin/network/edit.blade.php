@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1 class="mt-5">
        Network edit
    </h1>
    <hr/>
    <form action="{{route('network.update',$tame->id)}}" method="POST" enctype="multipart/form-data"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm iqtibosini  kiriting UZ</label>
                    <input name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name_uz}}">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm iqtibosini  kiriting RU</label>
                    <input name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name_ru}}">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm iqtibosini  kiriting EN</label>
                    <input name="name_en" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name_en}}">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm telegram(url) kiriting</label>
                    <input name="telegram" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->telegram}}">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm instagram(url) kiriting</label>
                    <input name="instagram" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->instagram}}">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm facebook(url) kiriting</label>
                    <input name="facebook" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->facebook}}">
                </div>
            </div>

        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
