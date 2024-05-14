@extends('layouts.app')

@section('title','Project show ')

@section('content')
    <div class="mt-5 col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div>
            <h1>Maktab sahifasidagi rasmlar</h1>
            @foreach($show_images as $image)

                <img src="{{ asset($image) }}" alt="Image" width="200" class="p-2 border m-3">

            @endforeach
            <div class="card">
                <h1><b>Sarlavhasi</b></h1>
                <p class="p-2">{{$show->content}}</p>
            </div>
            <div class="card">
                <h1><b>Description</b></h1>
                <p class="p-2">{{$show->description}}</p>
            </div>
            <div class="card">
                <h1><b>Title</b></h1>
                <p class="p-2">{{$show->title}}</p>
            </div>

        </div>


    </div
@endsection
