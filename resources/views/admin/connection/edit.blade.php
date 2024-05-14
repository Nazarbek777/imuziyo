@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1>
        connection edit
    </h1>
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('connection.update',$tame->id)}}" method="POST" enctype="multipart/form-data"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Crm telefon raqamini kiriting</label>
                <input name="crm_number" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_number}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Crm nomini kiriting</label>
                <input name="crm_name_uz" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_name_uz}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Crm nomini kiriting</label>
                <input name="crm_name_ru" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_name_ru}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Crm nomini kiriting</label>
                <input name="crm_name_en" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_name_en}}">
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">UZ Crm manzilini kiriting</label>
                <input name="crm_location_uz" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_location_uz}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">RU Crm manzilini kiriting</label>
                <input name="crm_location_ru" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_location_ru}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">EN Crm manzilini kiriting</label>
                <input name="crm_location_en" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_location_en}}">
            </div>
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
