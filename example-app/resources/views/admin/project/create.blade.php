@extends('layouts.crud')

@section('title','Project create')

@section('content')

    <div class="mt-5">

        <form method="POST" action="{{route('project.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">
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
                    <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Loyihaga tegishli(show) bir nechta rasm kiriting </label>
                    <input name="show_image[]" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Loyihaga tegishli (url) kiriting</label>
                    <input name="project_url" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
