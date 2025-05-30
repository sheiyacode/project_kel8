
@extends('user.layout.main')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="contact-us section d-flex align-items-center justify-content-center" id="contact" style="min-height:100vh">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6  text-center">
          <div class="section-heading mb-4">
            <h1>Hello Tuton!</h3>
            <h3>Login Here </h3>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="{{ route('login.user') }}" method="post">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="User Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="password" name="password" id="password" placeholder="Your Password..." autocomplete="on" required>
                    @error('password')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Login</button>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection