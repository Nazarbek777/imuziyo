@extends('layouts.crud')

@section("title","Settings index")

@section("content")
     <div class="container">
         <div class="row mt-5">
             <div class="col-md-12">
                 @if(session()->has("success"))
                     <div class="alert alert-success">
                         {{session()->get("success")}}
                     </div>
                 @endif
                         <table class="table  table-bordered mt-3">
                             <thead>
                             <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Admin ismi</th>
                                 <th scope="col">Admin emaili</th>
                                 <th>
                                 </th>
                             </tr>
                             </thead>
                             <tbody>
                             @foreach($users as $item)
                                 <tr>
                                     <th scope="row">{{$item->id}}</th>
                                     <td>{{$item->name}}</td>
                                     <td>{{$item->email}}</td>

                                     <td class="text-end  d-flex">
                                         <form action="{{route('password.destroy',$item->id)}}" method="POST" >
                                             @csrf
                                             @method('DELETE')
                                             <button class="btn-del" type="submit"><img width="20px"   src="{{asset('images/delete.png')}}" alt=""></button>
                                         </form>
                                         <a href="{{route('password.edit',$item->id)}}"> <img width="20px" class="mx-2" src="{{asset('images/edit.png')}}" alt=""></a>

                                     </td>
                                 </tr>

                             @endforeach
                             <tr class="text-end">
                                 <td>
                                     <div class="btn btn-primary">
                                         <a href="{{route('register')}}" class="text-white">admin add</a>
                                     </div>
                                 </td>
                             </tr>
                             </tbody>
                         </table>
             </div>
         </div>

     </div>
@endsection
