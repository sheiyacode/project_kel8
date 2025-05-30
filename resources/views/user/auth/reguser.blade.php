@include('user.component.navbar')

@section('content')

<div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 center">
          <div class="section-heading">
            <h6>Join Wordella Now!</h6>
            <h2>Register Now to Start Your Learning Journey</h2>
            <p>Sign up to access free and premium English courses tailored to your goals. Learn Grammar, Vocabulary, Writing, anywhere.</p>
          </div>
        </div>
        <div class="col-lg-6 center">
          <div class="contact-us-content">
            <form id="contact-form" action="{{ route('register.submit') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="full_name" id="full_name" placeholder="Your Name..." value="" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
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
                    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password..." autocomplete="on" required>
                    @error('password')
                      <small class="text-danger">{{ $message }}</small>
                    @enderror
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <select name="gender" id="gender">
                      <option value="">Pilih Gender</option>
                      <option value="pria">Pria</option>
                      <option value="wanita">Wanita</option>
                    </select>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="tel" name="nomor_telepon" id="nomor_telepon" pattern="^08[0-9]{8,11}$" placeholder="Your Number..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" required>
                  </fieldset>
                </div>
                <a href="{{ url('/login') }}" class="orange-button d-block text-center mb-3 text-white">Sudah Punya Akun?</a>
                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Submit</button>
                  </fieldset>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
