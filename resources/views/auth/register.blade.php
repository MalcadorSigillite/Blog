@extends('layouts.main')

@section('content')
    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container mb-4">
                <form class="form-group m-auto w-50 mt-4 mb-4" method="post" action="{{route('register.post')}}">
                    @csrf
                    <h2>Register</h2>
                    <div class="form-group">
                        <input type="name" placeholder="Name" name="name" class="form-control" value="{{old('name')}}">
                        @error('name')
                        <label class="text-danger">{{$message}}</label>
                        @else
                            <label class="text-black-50">Name for Site</label>
                            @enderror
                    </div>

                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email" class="form-control" value="{{old('email')}}">
                        @error('email')
                        <label class="text-danger">{{$message}}</label>
                        @else
                            <label class="text-black-50">Your email</label>
                            @enderror
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" placeholder="Password" name="password" class="form-control" value="{{old('password')}}">
                        @error('password')
                        <label class="text-danger">{{$message}}</label>
                        @else
                            <label class="text-black-50 mb-4">Min 6 characters </label>
                            @enderror
                            <div class="float-right text-black-50">Already have an account?
                                <a href="{{route('login')}}">Login</a>
                            </div>
                    </div>
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-dark text-center m-auto w-50"
                                style="margin-bottom: 120px!important;">
                            Register
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
