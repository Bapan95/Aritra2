  <!-- Main Sidebar Container -->
  <style>
	.os-host-overflow {
	 overflow: visible  !important; 
}
[class*="sidebar-dark"] .brand-link {
	display: inline-block;
} 
#list {
    display: none;
}
#list.open {
    display: block;
}
#list1 {
    display: none;
}
#list1.open {
    display: block;
}
  </style>
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="admin" class="brand-link"> 
      <img src={{asset("public/dist/img/school-logo.png")}} alt="Stpsk" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{asset("public/dist/img/user2-160x160.jpg")}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!--<div class="form-inline"> 
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i> 
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <!--<span class="right badge badge-danger">New</span>--> 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('noticeboard') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Notice Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('events') }}" class="nav-link">
              <i class="nav-icon fas fa-calendar"></i>
              <p>
                Upcoming Event
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('managebirthday') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manage Birthday
              </p>
            </a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('celebration') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Event & celebration(2021-2022)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('celebration1') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Event & celebration(2022-2023)
              </p>
            </a>
          </li> --}}
          <li class="nav-item">
            <a href="{{ route('detail') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Event Detail
              </p>
            </a>
          </li>


          <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="#list">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Activity Detail
              </p>
            </a>
          <ul id="list">
          <li class="nav-item">
            <a href="{{ route('activity19') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <p>
               Activity Detail(2019-20)
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('activity0') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <p>
               Activity Detail(2020-21)
              </p>
            </a>
          </li>


          <li class="nav-item">
            <a href="{{ route('activity') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <p>
               Activity Detail(2021-22)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activity22') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <p>
               Activity Detail(2022-23)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activity23') }}" class="nav-link">
              <!-- <i class="nav-icon fas fa-table"></i> -->
              <p>
               Activity Detail(2023-24)
              </p>
            </a>
          </li>
          </ul>
          </li>
          <li class="nav-item">
          <a href="#" class="nav-link" data-toggle="#list1">
              <i class="nav-icon fas fa-table"></i>
              <p>
              primary Activity Detail
              </p>
            </a>
          <ul id="list1">
          <li class="nav-item">
            <a href="{{ route('activity1') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               primary Activity Detail(2019-20)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activity2') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               primary Activity Detail(2020-21)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activity3') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
               primary Activity Detail(2021-22)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activity4') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              primary Activity Detail(2022-23)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('activity5') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
              primary Activity Detail(2023-24)
              </p>
            </a>
          </li>
          </ul>
          </li>
      
          {{-- <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
             Primary & Middle School Activity(2019-20)
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
             Primary & Middle School Activity(2020-21)
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
             Primary & Middle School Activity(2021-22)
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('primaryactivity22') }}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
             Primary & Middle School Activity(2022-23)
              </p>
            </a>
          </li> --}}
          <!--<li class="nav-item">
            <a href="{{-- route('stpskuser') --}}" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                stpskuser
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
          <!--<li class="nav-item">
            <a href="{{-- route('imagemaster') --}}" class="nav-link">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Image Master
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>-->
          <!-- USER -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
				<li class="nav-item">
					<a href="{{-- route('stpskuser') --}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Registered User</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{-- route('user') --}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Subscribed User</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="{{-- route('user') --}}" class="nav-link">
					  <i class="far fa-circle nav-icon"></i>
					  <p>Token Collection</p>
					</a>
				</li>-->
              <!--              
              <li class="nav-item">
                <a href="{{-- route('media') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Media</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{-- route('application_detail') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Table application details</p>
                </a>
              </li>-->
            <!--</ul>
          </li> -->
          <!--<li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Creator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('creator') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creator List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{-- route('video-list') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Video List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('user-list') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>-->
		  <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Ott Media
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('ottmedia-list') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ott Media List</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- BLOG -->
		  <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('blogadd-view') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Blog</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('blog-list') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blog List</p>
                </a>
              </li>
            </ul>
          </li> -->
          <!-- Image Gallery -->
		  <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Image Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('imageadd-view') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Image Gallery</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{-- route('imagegallery-list') --}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Image Gallery List</p>
                </a>
              </li>
            </ul>
          </li>
        </ul> -->
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
  $(function () {
    $('[data-toggle]').on('click', function () {
        var id = $(this).data("toggle"),
            $object = $(id),
            className = "open";

        if ($object) {
            if ($object.hasClass(className)) {
                $object.removeClass(className)
            } else {
                $object.addClass(className)
            }
        }
    });
});

</script>