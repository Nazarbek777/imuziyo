@extends('layouts.crud')

@section('title','Our time create')

@section('content')
    <div class="mt-5">

        <form method="POST" action="{{route('our-tame.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Jamoa a'zosining ismini kiriting</label>
                    <input name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Jamoa a'zosining ismini kiriting</label>
                    <input name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Jamoa a'zosining ismini kiriting</label>
                    <input name="name_en" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Jamoa a'zosining  lavozimini kiriting</label>
                        <input name="position_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Jamoa a'zosining  lavozimini kiriting</label>
                    <input name="position_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Jamoa a'zosining  lavozimini kiriting</label>
                    <input name="position_en" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                    <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining telegram(url) kiriting</label>
                    <input name="twitter" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining instagram(url) kiriting</label>
                    <input name="instagram" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining facebook(url) kiriting</label>
                    <input name="facebook" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining linkedin(url) kiriting</label>
                    <input name="linkedin" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
