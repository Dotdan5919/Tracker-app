@extends('layouts.app')

@section('content')
<div class="container">
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="px-5 ms-xl-4">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <img src="{{asset('assets/images/logo/logo.png')}}" alt="logo" style="width:170px">
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" method="POST" action="{{ route('admin-login') }}">
                    @csrf
                  <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email"   id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                    <label class="form-label" for="form2Example18">{{ __('Email Address') }}</label>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
                </div>
      
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password"   id="password" type="password" class="form-control  form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/>
                    <label class="form-label" for="form2Example28">Password</label>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
      
                  <div class="pt-1 mb-4">
                    <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-success btn-lg btn-block" type="button">Login</button>
                  
                  
                </div>
                  
                  <div class="row d-flex mb-3 justify-content-start ">
                    <div class="col-md-6  ">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>
                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
                
                </form>
      
              </div>
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="https://img.freepik.com/free-photo/delivery-concept-portrait-happy-african-american-delivery-man-red-cloth-holding-box-package-isolated-grey-studio-background-copy-space_1258-1216.jpg?t=st=1745942101~exp=1745945701~hmac=3696ab28ff88b6724172108104afcd99a4d3b3317ab07a8e4506631a0a6ba1f8&w=1060"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: center;">
            </div>
          </div>
        </div>
      </section>




</div>
@endsection
