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
          <a href="{{route('connection.create')}}" class="btn btn-primary">add</a>
      </div>

          <table class="table  table-bordered mt-3">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">UZ Crm nomi</th>
                  <th scope="col">Crm tel raqami</th>
                  <th scope="col">UZ Crm manzili</th>
                  <th>
                  </th>
              </tr>
              </thead>
              <tbody>
              @foreach($team as $item)
              <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->crm_name_uz}}</td>
                  <td>{{$item->crm_number}}</td>
                  <td>{{$item->crm_location_uz}}</td>

                  <td class="text-end w-13 d-flex">
                      <form action="{{route('connection.destroy',$item->id)}}" method="POST" onsubmit="return confirmDelete()">
                          @csrf
                          @method('DELETE')
                          <button class="btn-del" type="submit"><img width="20px"   src="{{asset('images/delete.png')}}" alt=""></button>
                      </form>
                      <a href="{{route('connection.edit',$item->id)}}"> <img width="20px" class="mx-2" src="{{asset('images/edit.png')}}" alt=""></a>
                      <a href="{{route('connection.show', $item->id)}}"><img width="20px" src="{{asset('images/eye.png')}}" alt=""></a>
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>


  </div>
@endsection
