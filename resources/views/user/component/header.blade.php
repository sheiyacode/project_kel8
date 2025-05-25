  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{asset ('scholar')}}/index.html" class="logo">
                        <h1>WORDELLA</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="{{ url('/#services') }}">Services</a></li>
                      <li><a href="{{ url('/#courses') }}">Courses</a></li>
                      <li><a href="{{ url('/#team') }}">Team</a></li>
                      <li><a href="{{ url('/#contact') }}">Contact</a></li>
                      <li><a href="{{ route('register') }}">Join Now!</a></li>
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