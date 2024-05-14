@extends('layouts.crud')

@section("title","Login")

@section("content")
   <div class="mt-5">
       <form action="{{ route('password.update', $user->id) }}" method="POST">
           @csrf
           @method('PUT')
           <div class="form-group">
               <div class="col-md-4">
                   <label for="password" class="">Yangi Parol</label>
                   <input type="text" name="password" id="password" class="form-control my-2">
               </div>
               @error('password')
               <div class="text-danger">{{ $message }}</div>
               @enderror
           </div>
           <button type="submit" class="btn btn-primary">Saqlash</button>
       </form>
   </div>
@endsection





