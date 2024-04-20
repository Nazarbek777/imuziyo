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
                    <input required name="show_image[]" multiple class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">sarlavhani kiriting</label>
                    <textarea name="content" id=""  class="form-control form-control-lg" ></textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label"> description qismini kiriting</label>
                    <textarea name="description" id=""   class="form-control form-control-lg" ></textarea>
                </div>

            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
