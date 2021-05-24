@extends('layouts.app')
@section('content')
<section class="row flexbox-container">
    <div class="col-xl-8 col-10">
        <div class="card bg-authentication mb-0">
            <div class="row m-0">
                <!-- register section left -->
                <div class="col-md-6 col-12 px-0">
                    <div class="card disable-rounded-right mb-0 p-2 h-100 d-flex justify-content-center">
                        <div class="card-header pb-1">
                            <div class="card-title">
                                <h4 class="text-center mb-2">Sign Up</h4>
                            </div>
                        </div>
                        <div class="text-center">
                            <p> <small> Please enter your details to sign up and be part of our great community</small>
                            </p>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                             <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group mb-50">
                                    <label for="inputfirstname4">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" required name="name" value="{{ old('name') }}" id="inputfirstname4" placeholder="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-50">
                                    <label class="text-bold-600" for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control @error('name') is-invalid @enderror" required name="email" value="{{ old('email') }}" id="exampleInputEmail1" placeholder="Email address">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required id="exampleInputPassword1"
                                    placeholder="Password">
                                </div>
                                <div class="form-group mb-2">
                                    <label class="text-bold-600" for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required required id="exampleInputPassword1"
                                    placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary glow position-relative w-100">SIGN UP<i
                                    id="icon-arrow" class="bx bx-right-arrow-alt"></i></button>
                                </form>
                                <hr>
                                <div class="text-center"><small class="mr-25">Already have an account?</small><a
                                    href="{{route('login')}}"><small>Sign in</small> </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- image section right -->
                    <div class="col-md-6 d-md-block d-none text-center align-self-center p-3">
                        <img class="img-fluid" src="{{ asset('app-assets/images/pages/register.png')}}" alt="branding logo">
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection