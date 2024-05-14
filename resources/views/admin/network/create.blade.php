@extends('layouts.crud')

@section('title','Our time create')

@section('content')

    <div class="mt-5">
        <form method="POST" action="{{route('network.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Crm iqtibosini  kiriting</label>
                    <input name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Crm iqtibosini  kiriting</label>
                    <input name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Crm iqtibosini  kiriting</label>
                    <input name="name_en" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm telegram(url) kiriting</label>
                    <input name="telegram" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm instagram(url) kiriting</label>
                    <input name="instagram" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm facebook(url) kiriting</label>
                    <input name="facebook" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
