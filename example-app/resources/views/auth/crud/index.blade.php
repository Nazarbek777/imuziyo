@extends('layouts.crud')

@section("title","Login")

@section("content")

   <section>
       @if(session()->has("success"))
           <div class="alert alert-success">
               {{session()->get("success")}}
           </div>
       @endif
       <table class="table table-bordered ">
           <thead>
           <tr class="align-items-center">
               <th scope="col">#</th>
               <th class="w-25"> <a href="{{route('main.create')}}" class=" w-100 btn btn-primary">create</a></th>
           </tr>
           </thead>
           <tbody>
           @foreach($main as $item)
               <tr>
                   <th scope="row" class="w-25">1</th>
                   <td> <img src="{{ asset($item->image) }}" class="img-fluid" width="100"></td>
                   <td class="w-25">
                       <form action="{{route('main.destroy' , $item->id)}}" method="POST" class="d-inline">
                           @csrf
                           @method('DELETE')
                           <button type="submit" class="btn btn-danger">Delete</button>
                       </form>
                   </td>
               </tr>
           @endforeach

           </tbody>
       </table>
   </section>
@endsection
