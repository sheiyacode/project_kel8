@extends('user.layout.main')

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
            <form id="contact-form" action="" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="username" name="username" id="username" placeholder="User Name..." autocomplete="on" required>
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
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="full_name" name="full_name" id="full_name" placeholder="Your Full Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <select name="gender" id="gender" class="form-control" required>
                      <option value="">Select Gender</option>
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
                    <input type="date" name="birth_date" id="birth_date" required>
                  </fieldset>
                </div>
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
