@extends('layouts.crud')

@section('title','Project create')

@section('content')
  shows create
    <div class="mt-5">
        <a href="{{route('shows.index')}}" class="btn btn-primary">back</a>
        <form method="POST" action="{{route('shows.store')}}" enctype="multipart/form-data" class="mt-3 form-control">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Loyihaga tegishli(show) bir nechta rasm kiriting </label>
                    <input required name="show_image[]" multiple class="form-control form-control-lg" id="" type="file">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ sarlavhani kiriting</label>
                    <textarea name="content_uz" id=""  class="form-control form-control-lg" ></textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label"> RU sarlavhani kiriting</label>
                    <textarea name="content_ru" id=""  class="form-control form-control-lg" ></textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label"> EN sarlavhani kiriting</label>
                    <textarea name="content_en" id=""  class="form-control form-control-lg" ></textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ description qismini kiriting</label>
                    <textarea name="description_uz" id=""   class="form-control form-control-lg" ></textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU description qismini kiriting</label>
                    <textarea name="description_ru" id=""   class="form-control form-control-lg" ></textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN description qismini kiriting</label>
                    <textarea name="description_en" id=""   class="form-control form-control-lg" ></textarea>
                </div>

            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
