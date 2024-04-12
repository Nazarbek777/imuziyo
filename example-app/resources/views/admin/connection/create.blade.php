@extends('layouts.crud')

@section('title','Our time create')

@section('content')
    <div class="mt-5">
        <h1>
            connection create
        </h1>

        <form method="POST" action="{{route('connection.store')}}" enctype="multipart/form-data" class="form-control">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm nomini kiriting</label>
                    <input name="crm_name" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm telefon raqamini kiriting</label>
                    <input name="crm_number" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>
                <div class="col-md-6">
                    <label for="formFileLg" class="form-label">Crm manzilini kiriting</label>
                    <input name="crm_location" class="form-control form-control-lg" id="formFileLg" type="text">
                </div>


            <button type="submit" class="mt-3 btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
