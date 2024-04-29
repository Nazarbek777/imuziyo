@extends('layouts.crud')

@section('title','Our time create')

@section('content')
    <div class="mt-5">

        <form method="POST" action="{{route('home.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Asosiy sahifaning sarlavhasini kiritin</label>
                    <textarea name="name_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Asosiy sahifaning sarlavhasini kiritin</label>
                    <textarea name="name_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Asosiy sahifaning sarlavhasini kiritin</label>
                    <textarea name="name_en" class="form-control form-control-lg" id="formFileLg" type="text">
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">UZ Asosiy sahifanining short_content ni kiriting</label>
                    <textarea name="content_uz" class="form-control form-control-lg" id="formFileLg" type="text">
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">RU Asosiy sahifanining short_content ni kiriting</label>
                    <textarea name="content_ru" class="form-control form-control-lg" id="formFileLg" type="text">
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">EN Asosiy sahifanining short_content ni kiriting</label>
                    <textarea name="content_en" class="form-control form-control-lg" id="formFileLg" type="text">
                    </textarea>
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                    <input required name="image" class="form-control form-control-lg" id="formFileLg" type="file">
                </div>

            </div>

            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
