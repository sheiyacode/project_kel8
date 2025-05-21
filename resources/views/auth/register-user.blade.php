<div class="register section" id="register">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 align-self-center">
        <div class="section-heading">
          <h6>Register</h6>
          <h2>Create your account</h2>
          <p>Join Wordella now! Choose your plan and start learning English today.</p>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="register-content">
          <form id="register-form" action="/register" method="post">
            <!-- csrf token untuk Laravel -->
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="name" id="name" placeholder="Your Full Name..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="email" name="email" id="email" placeholder="Your E-mail..." required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password" id="password" placeholder="Password" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <select name="subscription" required>
                    <option value="" disabled selected>Select subscription plan</option>
                    <option value="free">Free</option>
                    <option value="trial">Trial</option>
                    <option value="premium">Premium</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <input type="text" name="phone" id="phone" placeholder="Phone Number (optional)">
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <textarea name="address" id="address" placeholder="Your Address (optional)"></textarea>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="orange-button">Register Now</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
