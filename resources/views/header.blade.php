<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo"><b>Application</b> Builder</a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <!-- App Library button -->
                    <a href="#" class="dropdown-toggle" >
                        
                            App Library
                        
                    </a>
                    
                </li><!-- /.messages-menu -->

                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- My Projects Button -->
                    <a href="{{ url('/home') }}" class="dropdown-toggle" >
                      
                            My Projects
                      
                    </a>
                   
                </li>
                
                    <!-- Menu Toggle Button -->
                    
                        
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Account Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{ asset("/bower_components/admin-lte/dist/img/user.png") }}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="{{ asset("/bower_components/admin-lte/dist/img/user.png") }}" class="img-circle" alt="User Image" />
                            <p>
                            {{ Auth::user()->name }}
                                <!-- <small>Member since Nov. 2012</small> -->
                            </p>
                        </li>
                        <!-- Account Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="#">Tab</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Tab</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="#">Tab</a>
                            </div>
                        </li>
                        <!-- Account Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                            <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                           
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>