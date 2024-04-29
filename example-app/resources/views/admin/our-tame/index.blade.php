@extends('layouts.crud')

@section('title','Our time')

@section('content')
  <div class="mt-5">
      @if(session()->has("success"))
          <div class="alert alert-success">
              {{session()->get("success")}}
          </div>
      @endif
      <div class="">
          <a href="{{route('our-tame.create')}}" class="btn btn-primary">add</a>
      </div>

          <table class="table  table-bordered mt-3">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">UZ Ismi</th>
                  <th scope="col">UZ Lavozimi</th>
                  <th scope="col">rasmi</th>
                  <th scope="col">facebook(url)</th>
                  <th>
                  </th>
              </tr>
              </thead>
              <tbody>
              @foreach($team as $item)
              <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->name_uz}}</td>
                  <td>{{$item->position_uz}}</td>
                  <td>{{$item->image}}</td>
                  <td>{{$item->facebook}}</td>

                  <td class="text-end w-13 d-flex">
                      <form action="{{route('our-tame.destroy',$item->id)}}" method="POST" onsubmit="return confirmDelete()">
                          @csrf
                          @method('DELETE')
                          <button class="btn-del" type="submit"><img width="20px"   src="{{asset('images/delete.png')}}" alt=""></button>
                      </form>
                      <a href="{{route('our-tame.edit',$item->id)}}"> <img width="20px" class="mx-2" src="{{asset('images/edit.png')}}" alt=""></a>
                      <a href="{{route('our-tame.show', $item->id)}}"><img width="20px" src="{{asset('images/eye.png')}}" alt=""></a>
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>


  </div>
@endsection
