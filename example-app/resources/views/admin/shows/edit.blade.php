@extends('layouts.crud')

@section('title','Project edit')

@section('content')
    <h1 class="mt-5">Edit Product</h1>
    <hr/>
    <form action="{{route('shows.update',$tame->id)}}" method="POST"  >
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-md-6">
                <label for="formFileLg" class="form-label">Loyihaga tegishli(show) bir nechta rasm kiriting </label>
                <input required name="show_image[]" multiple class="form-control form-control-lg" id="formFileLg" type="file" value="{{$tame->show_image}}">
            </div>

            <div class="col-md-6">
                <label for="formFileLg" class="form-label">sarlavhani kiriting</label>
                <textarea name="content" id=""  class="form-control form-control-lg" >{{$tame->content}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label"> description qismini kiriting</label>
                <textarea name="description" id=""   class="form-control form-control-lg" >{{$tame->description}}</textarea>
            </div>
            <div class="col-md-6">
                <label for="formFileLg" class="form-label"> Qo'shimcha ma'lumot bo'lsa qismini kiriting</label>
                <textarea name="title" id=""   class="form-control form-control-lg" >{{$tame->title}}</textarea>
            </div>

        </div>

        <button type="submit" class="mt-3 btn btn-primary">Submit</button>

    </form>
@endsection
