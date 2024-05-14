@extends('layouts.crud')

@section('title','Our time create')

@section('content')
    <div class="mt-5">
        <h1>
            connection create
        </h1>

        <form method="POST" action="{{route('connection.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm telefon raqamini kiriting</label>
                    <input name="crm_number" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Crm nomini kiriting</label>
                    <input name="crm_name_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Crm nomini kiriting</label>
                    <input name="crm_name_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Crm nomini kiriting</label>
                    <input name="crm_name_en" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Crm manzilini kiriting</label>
                    <input name="crm_location_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Crm manzilini kiriting</label>
                    <input name="crm_location_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Crm manzilini kiriting</label>
                    <input name="crm_location_en" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>


            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
