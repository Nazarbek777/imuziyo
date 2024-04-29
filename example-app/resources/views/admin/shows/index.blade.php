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
          <a href="{{route('shows.create')}}" class="btn btn-primary">add</a>
      </div>

          <table class="table  table-bordered mt-3">
              <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Maktab sarlavhasi</th>
                  <th  scope="col"></th>
              </tr>
              </thead>
              <tbody>
              @foreach($project as $item)
              <tr>
                  <th scope="row">{{$item->id}}</th>
                  <td>{{$item->content_uz}}</td>

                  <td class="text-end  d-flex">
                      <form action="{{route('shows.destroy',$item->id)}}" method="POST" >
                          @csrf
                          @method('DELETE')
                          <button class="btn-del" type="submit"><img width="20px"   src="{{asset('images/delete.png')}}" alt=""></button>
                      </form>
                      <a href="{{route('shows.edit',$item->id)}}"> <img width="20px" class="mx-2" src="{{asset('images/edit.png')}}" alt=""></a>
                      <a href="{{route('shows.show', $item->id)}}"><img width="20px" src="{{asset('images/eye.png')}}" alt=""></a>
                  </td>
              </tr>
              @endforeach
              </tbody>
          </table>


  </div>
@endsection
