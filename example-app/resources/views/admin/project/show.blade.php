@extends('layouts.crud')

@section('title','Project show ')

@section('content')
    <div class="mt-5 col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <div class="member-img">
                <img src="{{asset($show->image)}}" class="img-fluid" alt="" style="height: 100%;">
                <div class="social">
                    <a href="{{$show->project_url}}"><i class="bi bi-telegram"></i></a>
                </div>
            </div>
            <div class="member-info">
                <a href="#"><h4>{{$show->project_type}}</h4></a>
                @if(is_array($show->show_image))
                    @foreach($show->show_image as $img)
                        <img src="{{ asset($img) }}" alt="Image" width="100">
                    @endforeach
                @else
                    <img src="{{ asset($show->show_image) }}" alt="Image" width="100">
                @endif

            </div>
        </div>
    </div
@endsection
