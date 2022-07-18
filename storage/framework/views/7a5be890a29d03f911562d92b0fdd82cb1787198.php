<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo e(Route('admin.index')); ?>" class="brand-link">
        <img src="<?php echo e(asset('img/logo/prj_logo.png')); ?>" alt="" class="brand-image bg-light img-rounded elevation-3" style="opacity: .9">
        <h4 class="brand-text font-weight-light">Admin</h4>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

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
                            <a href="<?php echo e(Route('admin.passenger.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.member.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.comment.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Feedback</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Revenue</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Discount Rate</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- News -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <img class="align-text-top mt-0 pt-0" src="<?php echo e(asset('img/news-icon.jpg')); ?>"width="26" height="25" alt="" style="border-radius:  5px; padding-left: 1px; opacity:0.9;">
                        <p>&nbsp;
                            News
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.news.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create a News</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?php echo e(route('airfpt.user.homeNews')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Home</p>
                            </a>
                        </li>
                    </ul>

                </li>
                <!-- Flights -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <img src="<?php echo e(asset('img/flight-icon.png')); ?>" alt="" width="25" height="24" style="border-radius: 5px; padding-left: 1px; opacity:0.8;">
                        <p>&nbsp; Flights<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.flights.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Flights</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.flights.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Flight</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Airports -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <img src="<?php echo e(asset('img/airport-icon.jpg')); ?>" alt="" width="24" height="22" style="border-radius: 50%; padding-left:2px; opacity:0.8;">
                        <p>&nbsp; Airports<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.airports.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Airports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.airports.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Airport</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Routes -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">

                        <img src="<?php echo e(asset('img/route-icon.jpg')); ?>" alt="" width="25" height="23" style="border-radius: 50%; padding-left:2px; opacity:0.8;">
                        <p>&nbsp; Routes<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.routes.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Routes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.routes.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Route</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <!-- Aircrafts -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">

                        <img src="<?php echo e(asset('img/aircraft-icon.jpg')); ?>" alt="" width="24" height="22" style="border-radius: 50%; opacity:0.8;">
                        <p>&nbsp; Aircrafts<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.aircrafts.index')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Aircrafts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(Route('admin.aircrafts.create')); ?>" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add New Aircraft</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(Route('logout')); ?>" class="nav-link">
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside><?php /**PATH C:\Myself\xampp\htdocs\airfpt\resources\views/admin/layout/main-sidebar.blade.php ENDPATH**/ ?>