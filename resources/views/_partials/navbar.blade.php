<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li><a href="{{route('home.content')}}"><i class="fa fa-book"></i> <span>Home</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Post</span></a></li>
        <li><a href="{{route('about.content')}}"><i class="fa fa-book"></i> <span>About</span></a></li>
        <li><a href="{{route('contact.content')}}"><i class="fa fa-book"></i> <span>Contact Me</span></a></li>
        <li><a href="#"><i class="fa fa-book"></i> <span>Contact Request</span></a></li>
      </ul>
    </section>