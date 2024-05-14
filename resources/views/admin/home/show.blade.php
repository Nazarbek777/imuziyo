@extends('layouts.crud')

@section('title','Our show time')

@section('content')
    <div class="mt-5 col-lg-12 col-md-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
            <div class="member-img">
                <img src="{{asset($show->image)}}" class="img-fluid" alt="" style="height: 100%;">
            </div>
            <div class="mt-2">
                
                <h2>{{$show->name_uz}}</h2>
            </div>
            <div class="mt-5">
                <h4>{{$show->content_uz}}</h4>
            </div>

        </div>
    </div
@endsection
