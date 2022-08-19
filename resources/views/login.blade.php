@extends('layouts.app')

@section('content')
  <div class="container" style="height:500px">
    <div class="row">
      <div class="col-lg-8">
         <form action="{{route('loginuser')}}" method="post" class="fom">
          <h1>
          Login
         </h1>
                  @csrf
                         @if(Session::has('success'));
                            <div class="alert alert-success">{{session::get('success')}}</div>
                        @endif

                           @if(Session::has('fail'));
                            <div class="alert alert-danger">{{session::get('fail')}}</div>
                        @endif
           <div>
            <label for="email">Email</label>
            <input type="email" name='email' class="form-control form" id="email" required>
                      @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
          <div>
            <label for="Password">Password</label>
            <input type="password" name='password' class="form-control form" id="Password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>
            <button type="submit" class="btn btn-dark mt-5">
                                    {{ __('Login') }}
                                </button><br>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                                <a href="signup">New user sign up here</a>
         </form>
      </div>  
    </div> 
  </div>
  @endsection