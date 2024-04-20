@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('home.update',$tame->id)}}" method="POST"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Asosiy sahifaning sarlavhasini kiritin</label>
                <input name="name" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label"> Asosiy sahifanining short_content ni kiriting</label>
                <input name="content" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->content}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file">
            </div>

        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
