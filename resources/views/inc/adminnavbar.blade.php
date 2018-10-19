<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
  </div>
  <!-- /.navbar-header -->



  <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Right Side Of Navbar -->
      <ul class="nav navbar-nav navbar-right">
          <!-- Authentication Links -->
          @if (Auth::guest())
              <li><a href="{{ url('/login') }}">Login</a></li>
              <li><a href="{{ url('/register') }}">Register</a></li>
          @else
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <ul class="dropdown-menu" role="menu">
                      <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                  </ul>
              </li>
          @endif
      </ul>
  </div>
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                  <div class="input-group custom-search-form">
                      <input type="text" class="form-control" placeholder="Search...">
                          <span class="input-group-btn">
                              <button class="btn btn-default" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                  </div>
                  <!-- /input-group -->
              </li>
              <li>
                  <a href="/admin"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
              </li>

              <li>
                  <a href="#"><i class="fa fa-wrench fa-fw"></i>Users<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="{{route('admin.users.index')}}">All Users</a>
                      </li>

                      <li>
                          <a href="{{route('admin.users.create')}}">Create User</a>
                      </li>

                  </ul>
                  <!-- /.nav-second-level -->
              </li>

              <li>
                  <a href="#"><i class="fa fa-wrench fa-fw"></i> Posts<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="{{route('admin.posts.index')}}">All Posts</a>
                      </li>

                      <li>
                          <a href="{{route('admin.posts.create')}}">Create Post</a>
                      </li>

                      <li>
                          <a href="{{route('admin.comments.index')}}">All Comments</a>
                      </li>

                  </ul>
                  <!-- /.nav-second-level -->
              </li>


              <li>
                  <a href="#"><i class="fa fa-wrench fa-fw"></i>Categories<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="{{route('admin.categories.index')}}">All Categories</a>
                      </li>



                  </ul>
                  <!-- /.nav-second-level -->
              </li>


              <li>
                  <a href="#"><i class="fa fa-wrench fa-fw"></i>Media<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="{{route('admin.media.index')}}">All Media</a>
                      </li>

                      <li>
                          <a href="{{route('admin.media.create')}}">Upload Media</a>
                      </li>

                  </ul>
                  <!-- /.nav-second-level -->
              </li>

              
          </ul>


      </div>
      <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>