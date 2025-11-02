@extends('layouts.main')

@section('content')
    <main>
        <section class="edica-landing-section edica-landing-about">
            <div class="container mb-4">
                <form class="form-group m-auto w-50 mt-4 mb-4" action="{{route('login.post')}}" method="post">
                    @csrf
                    <h2>Login</h2>
                    <div class="text-danger">{{session('error_login')}}</div>
                    <div class="form-group">
                        <input type="email" placeholder="Email" name="email" class="form-control"
                        value="{{\Illuminate\Support\Facades\Cookie::get('email') ? \Illuminate\Support\Facades\Cookie::get('email') : ''}}">
                        <label class="text-black-50">Email</label>
                    </div>

                    <div class="form-group mb-4">
                        <input type="password" placeholder="Password" name="password" class="form-control"
                        value="{{\Illuminate\Support\Facades\Cookie::get('password') ? \Illuminate\Support\Facades\Cookie::get('password') : ''}}">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="on" name="remember" id="flexCheckDefault">
                                <label class="form-check-label text-black-50" for="flexCheckDefault">
                                    Remember Me
                                </label>
                                <div class="float-right text-black-50">Don't have an account?
                                    <a href="{{route('register')}}">Register</a>
                                </div>
                            </div>

                    </div>
                    <div class="form-group mb-4">
                        <button type="submit" class="btn btn-dark text-center m-auto w-50" style="margin-bottom: 120px!important;">
                            Login
                        </button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
