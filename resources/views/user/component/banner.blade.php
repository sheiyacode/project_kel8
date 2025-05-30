<div class="main-banner" id="top" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1" style="background-image: none;">
              <div class="header-text">
                <h2>Hello, {{ Auth::user()->full_name }}!</h2>
                <div class="buttons">
                  <div class="main-button">
                    <a href="user/courses">Choose a Course</a>
                  </div>
                  <div class="icon-button">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>