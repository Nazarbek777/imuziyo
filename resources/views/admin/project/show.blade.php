@extends('layouts.crud')

@section('title','Project show ')

@section('content')
    <div class="mt-5 col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <div class="member-img">
                <img src="{{asset($show->image)}}" class="img-fluid" alt="" style="height: 100%;">
                <div class="social">
                    <a href="{{$show->name_uz}}"><i class="bi bi-telegram"></i></a>
                    <a href="{{$show->name_ru}}"><i class="bi bi-telegram"></i></a>
                </div>
            </div>
            <div class="member-info">
                <a href="#"><h4>{{$show->project_type}}</h4></a>

                @foreach($show_images as $image)
                    <img src="{{ asset($image) }}" alt="Image" width="200">
                @endforeach


            </div>
        </div>
    </div
@endsection
