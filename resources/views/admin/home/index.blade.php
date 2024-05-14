@extends('layouts.crud')

@section('title','Our time')

@section('content')

  <div class="mt-5">
      <h2>Bunga bittadan ortiq  ma'lumot kiritilmaydi!</h2>
      @if(session()->has("success"))
          <div class="alert alert-success">
              {{session()->get("success")}}
          </div>
      @endif
      <div class="">
          <a href="{{route('home.create')}}" class="btn btn-primary">add</a>
      </div>

          <table class="table  table-bordered mt-3">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Sarlavha UZ</th>
                  <th scope="col">Short_content UZ</th>
                   <th scope="col">image</th>
                  <th></th>
              </tr>
              </thead>
              <tbody>
              @foreach($team as $item)
              <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->name_uz}}</td>
                  <td>{{$item->content_uz}}</td>
                  <td>{{$item->image}}</td>

                  <td class="text-end w-13 d-flex">
                      <form action="{{route('home.destroy',$item->id)}}" method="POST" onsubmit="return confirmDelete()">
                          @csrf
                          @method('DELETE')
                          <button class="btn-del" type="submit"><img width="20px"   src="{{asset('images/delete.png')}}" alt=""></button>
                      </form>
                      <a href="{{route('home.edit',$item->id)}}"> <img width="20px" class="mx-2" src="{{asset('images/edit.png')}}" alt=""></a>
                      <a href="{{route('home.show', $item->id)}}"><img width="20px" src="{{asset('images/eye.png')}}" alt=""></a>
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>


  </div>
@endsection
