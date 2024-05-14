@extends('layouts.crud')

@section('title','Project ')

@section('content')

  <div class="mt-5">
      @if(session()->has("success"))
          <div class="alert alert-success">
              {{session()->get("success")}}
          </div>
      @endif
      <div class="">
          <a href="{{route('project.create')}}" class="btn btn-primary">add</a>
      </div>

          <table class="table  table-bordered mt-3">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name(select)</th>
                  <th scope="col">UZ Loyihalar nomi</th>
                  <th scope="col">Loyiha uchun(tashqi) rasm</th>
                  <th>
                  </th>
              </tr>
              </thead>
              <tbody>
              @foreach($project as $item)
              <tr>
                  <th scope="row">{{$item->id}}</th>
                  <th scope="row">{{$item->project_type}}</th>
                  <td>{{$item->name_uz}}</td>
                  <td>{{$item->image}}</td>

                  <td class="text-end w-13 d-flex">
                      <form action="{{route('project.destroy',$item->id)}}" method="POST" onsubmit="return confirmDelete()">
                          @csrf
                          @method('DELETE')
                          <button class="btn-del" type="submit"><img width="20px"   src="{{asset('images/delete.png')}}" alt=""></button>
                      </form>
                      <a href="{{route('project.edit',$item->id)}}"> <img width="20px" class="mx-2" src="{{asset('images/edit.png')}}" alt=""></a>
                      <a href="{{route('project.show', $item->id)}}"><img width="20px" src="{{asset('images/eye.png')}}" alt=""></a>
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>


  </div>
@endsection
