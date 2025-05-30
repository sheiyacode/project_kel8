  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                  <a href="{{ route('dashboarduser.index') }}" class="logo">
                      <h1>WORDELLA</h1>
                  </a>
                  <!-- ***** Logo End ***** -->
                  <!-- ***** Search Start ***** -->
                  <div class="search-input">
                    <form id="search" action="{{ route('search') }}">
                      <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" />
                      <i class="fa fa-search"></i>
                    </form>
                  </div>
                  <!-- ***** Search End ***** -->
                  <!-- ***** Menu Start ***** -->
                  <ul class="nav">
                    <li><a href="{{ route('dashboarduser.index') }}">Home</a></li>
                    <li><a href="{{ route('dashboarduser.courses') }}">My Courses</a></li>
                    <li><a href="{{ route('dashboarduser.quiz') }}">Quiz</a></li>
                    <li><a href="{{ route('dashboarduser.certificate') }}">Certificate</a></li>
                    <li><a href="{{ route('dashboarduser.profile') }}">Profile</a></li>
                    <li>
                      <form action="{{ route('dashboarduser.logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-button">Logout</button>
                      </form>
                    </li>
                  </ul>
                  <a class='menu-trigger'>
                      <span>Menu</span>
                  </a>
                  <!-- ***** Menu End ***** -->
              </nav>
          </div>
      </div>
  </div>
</header>
