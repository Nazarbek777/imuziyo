@extends('layouts.default')

@section("title","Register")

@section("content")
    <div class="container mt-5 ">
        <div class="col-md-4">
            @if(session()->has("success"))
                <div class="alert alert-success">
                    {{session()->get("success")}}
                </div>
            @endif
            @if(session()->has("error"))
                    <div class="alert alert-success">
                        {{session()->get("error")}}
                    </div>
            @endif
        </div>
        <div class="card w-25 p-2 mx-auto">
            <h2 class="text-center card p-2">Register</h2>
            <form method="POST" action="{{route("register.post")}}" class=" w-100 mx-auto">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Fullname</label>
                    <input type="text" class="form-control"  placeholder="Fullname" id="name" name="fullname"  autofocus>
                    @if($errors->has('fullname'))
                        <span class="text-danger">
                        {{$errors->first('fullname')}}
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="text" class="form-control"  placeholder="Email" id="email" name="email" required autofocus>
                    @if($errors->has('email'))
                        <span class="text-danger">
                        {{$errors->first('email')}}
                    </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    @if($errors->has('password'))
                        <span class="text-danger">
                        {{$errors->first('password')}}
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-dark w-100">Signup</button>
            </form>
        </div>
    </div>
@endsection
