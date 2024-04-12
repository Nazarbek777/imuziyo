@extends('layouts.crud')

@section('title','Our time')

@section('content')
    <h1>
        connection edit
    </h1>
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('connection.update',$tame->id)}}" method="POST"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Crm nomini kiriting</label>
                <input name="crm_name" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_name}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Crm telefon raqamini kiriting</label>
                <input name="crm_number" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_number}}">
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Crm manzilini kiriting</label>
                <input name="crm_location" class="form-control form-control-lg" id="formFileLg" type="text" value="{{$tame->crm_location}}">
            </div>

        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
