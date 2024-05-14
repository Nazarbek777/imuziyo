@extends('layouts.crud')


@section('title',"create")

@section('content')
    <div class="container mt-5 pt-5">
        <form method="POST" action="{{route("main.store")}}" enctype="multipart/form-data" class="form-control">
            @csrf

                <label for="formFileLg" class="form-label">Rasimni kiriting</label>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
            <button type="submit" class="btn btn-primary">create</button>
        </form>
    </div>
@endsection
