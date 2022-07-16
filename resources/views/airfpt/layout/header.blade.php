
<!-- Header -->
<header class="navbar navbar-expand-lg py-2 navbar-light bg-light fixed-top font-weight-bold border-bottom border-secondary" role="navigation">
    <div class="container">
        <a class="navbar-brand" href="{{Route('airfpt.index')}}"><img width="200" src="{{ asset('img/logo/prj_logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header_menu">
            &#9776;
        </button>
        <div class="collapse navbar-collapse" id="header_menu">
            <ul class="headerlink nav navbar-nav text-light">
            <li class="nav-item"><a href="{{Route('airfpt.index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{Route('airfpt.user.pass_info')}}" class="nav-link">Travel Info</a></li>
                <li class="nav-item"><a href="{{Route('airfpt.user.homeNews')}}" class="nav-link">News</a></li>
                <li class="nav-item"><a href="{{Route('airfpt.faqs')}}" class="nav-link">FAQs</a></li>
                @auth 
                <li class="nav-item"><a href="{{Route('airfpt.user.create_comment')}}" class="nav-link">Feedback</a></li>
                @endauth
            </ul>

            <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
            @guest
                <li class="nav-item order-2 order-md-1"><i class="fa fa-user-circle nav-link" style="font-size:24px"></i></li>
                <li class="dropdown order-1">
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Login <span class="caret"></span></button>
                    <div class="dropdown-menu dropdown-menu-right rounded" style="width: 300px;">
                        <form method="POST" action="{{Route('airfpt.mem_postLogin')}}" class="px-3 py-3 bg-light" >
                        {{csrf_field()}}
                            <label for="username">Username</label>
                            <div class="form-group input-group input-group-md">
                                <small class="input-group-prepend">
                                    <span class="input-group-text text-secondary"><i class="fa fa-user"></i></span>
                                </small>
                                <input name="mem_username" id="" type="text" class="form-control" required placeholder="Username">
                            </div>
                            <label for="username">Password</label>
                            <div class="form-group input-group input-group-md">
                                <small class="input-group-prepend">
                                    <span class="input-group-text text-secondary"><i class="fa fa-key"></i></span>
                                </small>
                                <input  name="mem_password" id="" type="password" class="form-control" required placeholder="Password">
                            </div>
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                <label class="form-check-label" for="dropdownCheck">
                                    Remember me
                                </label>
                            </div> -->
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                        <div class="dropdown-divider pb-0 my-0"></div>
                        <a  href="{{Route('airfpt.mem_register')}}" class="dropdown-item alert alert-primary mt-0 mb-1 pt-2 pb-0 d-flex justify-content-between align-items-center">
                            <span class="pb-1">New around here?</span> 
                            <span class="pr-3 alert-link font-weight-bolder py-2 h4">Sign up</span>
                        </a>
                        <a class="dropdown-item alert alert-light my-0 pt-1 pb-0 align-self-stretch" href="#">Forgot password?</a>
                    </div>
                </li>
                @endguest
                @auth
                    <!-- Add icons to the links using the .nav-icon class with font-
                    awesome or any other icon font library -->
                    <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle"> <span class="caret">Member {{Auth::user()->username}}</span></button>
                    <div class="dropdown-menu dropdown-menu-right rounded" >
                        <form class="px-3 py-3 bg-light">
                            <li class="nav-item">
                                <a href="{{Route('airfpt.mem_detail')}}" class="nav-link">
                                    <p>Account Detail<hr></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <p>Booking History<hr></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{Route('logout')}}" class="nav-link">
                                    <p>Log Out</p>
                                </a>
                            </li>
                        </form>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</header>