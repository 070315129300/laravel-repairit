@extends('layouts.app')

@section('content')

<div class="container">
 		<div class="row mb-5">
 			<div class="col-lg-6 col-md-12 mt-5">
 				<img src="images/signup.png" class="mt-5 img-fluid">
 			</div>
 			<div class="col-lg-6 col-md-7" style="padding: 50px;">
 				
	<form method="POST" action="{{route('signupuser')}}" class="form-control form">
	<h4 id="conct">Sign Up</h4>
	
                        @if(Session::has('success'));
                            <div class="alert alert-success">{{session::get('success')}}</div>
                        @endif

                           @if(Session::has('fail'));
                            <div class="alert alert-danger">{{session::get('fail')}}</div>
                        @endif
                        @csrf
		<label>First Name *</label><br>
			<input type="text" name="firstname"  
			value="{{ old('firstname') }}" class="form-control form"><br>
			 @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		<label>Last Name *</label><br>
			<input type="text" name="lastname" id="lname"  
			value="{{ old('lastname') }}" class="form-control form"><br>
			@error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		<label>Email *</label><br>
			<input type="text" name="email" id="mail"  
			value="{{ old('email') }}" class="form-control form"><br>
			@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
		<label>Password *</label><br>
			<input type="password" name="password" id="password" 
			  class="form-control form"><br>
		<label>Phone Number *</label><br>
			<input type="number" name="phone" id="num" 
			value="" class="form-control form"><br>
			@error('phone')
			<span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

		<label>Gender</label>
		<input type="radio" name="gender" value="male"><span>Male</span>
		<input type="radio" name="gender" value="female"><span>Female</span><br>
		<button class="btn btn-outline-warning mb-3 mt-1" name="btnsignup">Sign up</button><br>
		<small>if you have an account please <a href="login">login</a><small>
	</form>	
	
 			</div>
 		</div>
 	</div>

    
@endsection