<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/dashboard') }}">IQAC Admin Panel</a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li>
                    <a href="#">
                        <div>
                            <strong>John Smith</strong>
                            <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                        </div>
                        <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend{{ asset('/admin/') }}.</div>
                    </a>
                </li>

                <li class="divider"></li>
                <li>
                    <a class="text-center" href="#">
                        <strong>Read All Messages</strong>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>
            </ul>
            <!-- /.dropdown-messages -->
        </li>

        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                        Logout
                    </a>
                    <form action="{{ route('logout') }}" method="post" id="logout-form">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

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
                    <a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-home fa-fw"></i> Home<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Slider<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/home/slider/add-slider') }}">Add Slider Image</a>
                                </li>
                                <li>
                                    <a href="{{ url('/home/slider/manage-slider') }}">Manage Slider Image</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Content<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/home/content/add-content') }}">Add Content</a>
                                </li>
                                <li>
                                    <a href="{{ url('/home/content/manage-content') }}">Manage Content</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa  fa-graduation-cap fa-fw"></i> Department<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/department/add-department') }}">Add Department</a>
                        </li>
                        <li>
                            <a href="{{ url('/department/manage-department') }}">Manage Department</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa  fa-tencent-weibo fa-fw"></i> Events<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/events/add-events') }}">Add Events</a>
                        </li>
                        <li>
                            <a href="{{ url('/events/manage-events') }}">Manage Events</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Activities<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/activities/add-activities') }}">Add Activities</a>
                        </li>
                        <li>
                            <a href="{{ url('/activities/manage-activities') }}">Manage Activities</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Notice Board<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/notice-board/add-notice-board') }}">Add Notice</a>
                        </li>
                        <li>
                            <a href="{{ url('/notice-board/manage-notice-board') }}">Manage Notice</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-fw"></i> Committee<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">SAC Members<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/committee/sac/add-sac-member') }}">Add SAC Members</a>
                                </li>
                                <li>
                                    <a href="{{ url('/committee/sac/manage-sac-member') }}">Manage SAC Members</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">QAC Members<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/committee/qac/add-qac-member') }}">Add QAC Members</a>
                                </li>
                                <li>
                                    <a href="{{ url('/committee/qac/manage-qac-member') }}">Manage QAC Members</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user fa-fw"></i> Staff<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Executive Staff<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/staff/executive/add-executive-staff') }}">Add Executive Staff</a>
                                </li>
                                <li>
                                    <a href="{{ url('/staff/executive/manage-executive-staff') }}">Manage Executive Staff</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Office Staff<span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="{{ url('/staff/office/add-office-staff') }}">Add Office Staff</a>
                                </li>
                                <li>
                                    <a href="{{ url('/staff/office/manage-office-staff') }}">Manage Office Staff</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-download fa-fw"></i> Download<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/download/add-file') }}">Add File</a>
                        </li>
                        <li>
                            <a href="{{ url('/download/manage-file') }}">Manage File</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-image fa-fw"></i> Gallery<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{ url('/gallery/add-gallery-file') }}">Add Picture</a>
                        </li>
                        <li>
                            <a href="{{ url('/gallery/manage-gallery-file') }}">Manage Picture</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>