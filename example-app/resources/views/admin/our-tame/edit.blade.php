@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('our-tame.update',$tame->id)}}" method="POST"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining ismini kiriting</label>
                <input name="name" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->name}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining  lavozimini kiriting</label>
                <input name="position" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->position}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining rasmini kiriting</label>
                <input name="image" class="form-control form-control-lg" id="formFileLg" type="file" value="{{$tame->image}}" required>
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining telegram(url) kiriting</label>
                <input name="twitter" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->twitter}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining instagram(url) kiriting</label>
                <input name="instagram" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->instagram}}">
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining facebook(url) kiriting</label>
                <input name="facebook" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->facebook}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Jamoa a'zosining linkedin(url) kiriting</label>
                <input name="linkedin" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->linkedin}}">
            </div>
        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
