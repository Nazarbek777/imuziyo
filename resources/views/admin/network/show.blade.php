@extends('layouts.crud')

@section('title','Our show time')

@section('content')
    <h1>
         show
    </h1>

    <div class="mt-5 col-lg-6 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
       <div class="row">
           <div class="col-md-6">
               <div class="card">
                   {{$show->name}}
               </div>
           </div>
           <div class="col-md-6">
               <div class="card">
                   {{$show->telegram}}
               </div>
           </div>
           <div class="col-md-6">
               <div class="card">
                   {{$show->instagram}}
               </div>
           </div> <div class="col-md-6">
               <div class="card">
                   {{$show->facebook}}
               </div>
           </div>

       </div>
    </div
@endsection
