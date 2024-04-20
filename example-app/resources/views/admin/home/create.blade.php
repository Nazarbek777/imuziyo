@extends('layouts.crud')

@section('title','Our time create')

@section('content')
    <div class="mt-5">

        <form method="POST" action="{{route('home.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Asosiy sahifaning sarlavhasini kiritin</label>
                    <input name="name" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label"> Asosiy sahifanining short_content ni kiriting</label>
                    <input name="content" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                    <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
