<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ Route('admin.index')}}" class="brand-link">
        <img src="{{ asset('img/logo/prj_logo.png') }}" alt="Product Demo" class="brand-image bg-white img-rounded elevation-3" style="opacity: .8">
        <h4 class="brand-text font-weight-light">Admin</h4>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Admin</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class with fontawesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    
                        <i class="nav-icon fas fa-user-friends"></i>
                        <p>Passengers<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Passengers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> . . .</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Airports -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <img src="{{asset('img/airport-icon.jpg')}}" alt="" width="24" height="22" style="border-radius: 50%; padding-left:2px; opacity:0.8;">
                        <p>&nbsp; Airports<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('admin.airports.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Airports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('admin.airports.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Airport</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <!-- Routes -->
                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    
                    <img src="{{asset('img/route-icon.jpg')}}" alt="" width="24" height="22" style="border-radius: 50%; padding-left:2px; opacity:0.8;">
                        <p>&nbsp; Routes<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('admin.routes.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Routes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('admin.routes.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Route</p>
                            </a>
                        </li>
                    </ul>
                </li>
                 <!-- Aircrafts -->
                 <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    
                    <img src="{{asset('img/aircraft-icon.jpg')}}" alt="" width="25" height="23" style="border-radius: 50%; opacity:0.8;">
                        <p>&nbsp; Aircrafts<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{Route('admin.aircrafts.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Routes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{Route('admin.aircrafts.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Route</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>