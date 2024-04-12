@extends('layouts.crud')

@section('title','Our show time')

@section('content')
    <div class="mt-5 col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <div class="member-img">
                <img src="{{asset($show->image)}}" class="img-fluid" alt="" style="height: 100%;">
                <div class="social">
                    <a href="{{$show->twitter}}"><i class="bi bi-telegram"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="member-info">
                <a href="#"><h4>{{$show->name}}</h4></a>
                <span>{{$show->position}}</span>
                <!-- <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut. Ipsum exercitationem iure minima enim corporis et voluptate.</p> -->
            </div>
        </div>
    </div
@endsection
