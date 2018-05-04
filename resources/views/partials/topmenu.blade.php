<div class="slim-header">
    <div class="container">
    <div class="slim-header-left">
        <h2 class="slim-logo"><img src="../img/bvpp.jpg"><a href="index.html"> connect<span>.</span></a></h2>

        <div class="search-box">
            <input type="text" class="form-control" placeholder="Search">
            <button class="btn btn-primary"><i class="fa fa-search"></i></button>
        </div><!-- search-box -->
    </div><!-- slim-header-left -->
    <div class="slim-header-right">
        <div class="dropdown dropdown-a">
            <a href="" class="header-notification" data-toggle="dropdown">
                <i class="icon ion-ios-bolt-outline"></i>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-menu-header">
                    <h6 class="dropdown-menu-title">Activity Logs</h6>
                    <div>
                        <a href="">Filter List</a>
                        <a href="">Settings</a>
                    </div>
                </div><!-- dropdown-menu-header -->
                <div class="dropdown-activity-list">
                    <div class="activity-label">Today, December 13, 2017</div>
                    <div class="activity-item">
                        <div class="row no-gutters">
                            <div class="col-2 tx-right">10:15am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                            <div class="col-8">Purchased christmas sale cloud storage</div>
                        </div><!-- row -->
                    </div><!-- activity-item -->
                    <div class="activity-item">
                        <div class="row no-gutters">
                            <div class="col-2 tx-right">9:48am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-danger"></span></div>
                            <div class="col-8">Login failure</div>
                        </div><!-- row -->
                    </div><!-- activity-item -->
                    <div class="activity-item">
                        <div class="row no-gutters">
                            <div class="col-2 tx-right">7:29am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-warning"></span></div>
                            <div class="col-8">(D:) Storage almost full</div>
                        </div><!-- row -->
                    </div><!-- activity-item -->
                    <div class="activity-item">
                        <div class="row no-gutters">
                            <div class="col-2 tx-right">3:21am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                            <div class="col-8">1 item sold <strong>Christmas bundle</strong></div>
                        </div><!-- row -->
                    </div><!-- activity-item -->
                    <div class="activity-label">Yesterday, December 12, 2017</div>
                    <div class="activity-item">
                        <div class="row no-gutters">
                            <div class="col-2 tx-right">6:57am</div>
                            <div class="col-2 tx-center"><span class="square-10 bg-success"></span></div>
                            <div class="col-8">Earn new badge <strong>Elite Author</strong></div>
                        </div><!-- row -->
                    </div><!-- activity-item -->
                </div><!-- dropdown-activity-list -->
                <div class="dropdown-list-footer">
                    <a href="page-activity.html"><i class="fa fa-angle-down"></i> Show All Activities</a>
                </div>
            </div><!-- dropdown-menu-right -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-b">
            <a href="" class="header-notification" data-toggle="dropdown">
                <i class="icon ion-ios-bell-outline"></i>
                <span class="indicator"></span>
            </a>
            <div class="dropdown-menu">
                <div class="dropdown-menu-header">
                    <h6 class="dropdown-menu-title">Notifications</h6>
                    <div>
                        <a href="">Mark All as Read</a>
                        <a href="">Settings</a>
                    </div>
                </div><!-- dropdown-menu-header -->
                <div class="dropdown-list">
                    <!-- loop starts here -->
                    <a href="" class="dropdown-link">
                        <div class="media">
                            <img src="../img/img8.jpg" alt="">
                            <div class="media-body">
                                <p><strong>Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                                <span>October 03, 2017 8:45am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <!-- loop ends here -->
                    <a href="" class="dropdown-link">
                        <div class="media">
                            <img src="../img/img9.jpg" alt="">
                            <div class="media-body">
                                <p><strong>Mellisa Brown</strong> appreciated your work <strong>The Social Network</strong></p>
                                <span>October 02, 2017 12:44am</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-link read">
                        <div class="media">
                            <img src="../img/img10.jpg" alt="">
                            <div class="media-body">
                                <p>20+ new items added are for sale in your <strong>Sale Group</strong></p>
                                <span>October 01, 2017 10:20pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <a href="" class="dropdown-link read">
                        <div class="media">
                            <img src="../img/img2.jpg" alt="">
                            <div class="media-body">
                                <p><strong>Julius Erving</strong> wants to connect with you on your conversation with <strong>Ronnie Mara</strong></p>
                                <span>October 01, 2017 6:08pm</span>
                            </div>
                        </div><!-- media -->
                    </a>
                    <div class="dropdown-list-footer">
                        <a href="page-notifications.html"><i class="fa fa-angle-down"></i> Show All Notifications</a>
                    </div>
                </div><!-- dropdown-list -->
            </div><!-- dropdown-menu-right -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
                <img src="../img/img1.jpg" alt="">
                <span>Katherine</span>
                <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <nav class="nav">
                    <a href="page-profile.html" class="nav-link"><i class="icon ion-person"></i> View Profile</a>
                    <a href="page-edit-profile.html" class="nav-link"><i class="icon ion-compose"></i> Edit Profile</a>
                    <a href="page-activity.html" class="nav-link"><i class="icon ion-ios-bolt"></i> Activity Log</a>
                    <a href="page-settings.html" class="nav-link"><i class="icon ion-ios-gear"></i> Account Settings</a>
                    <a class="nav-link" class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon ion-forward"></i>
                        Sign Out
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </nav>
            </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
    </div><!-- header-right -->
    </div>
</div>
<div class="slim-navbar">
    <div class="container">
        <ul class="nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="icon ion-ios-home-outline"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item with-sub">
                <a class="nav-link" href="#">
                    <i class="icon ion-ios-filing-outline"></i>
                    <span>Admin</span>
                </a>
                <div class="sub-item">
                    <ul>
                        <li><a href="facility.html">Manage Users</a></li>
                        <li><a href="office.html">Site Manager</a></li>
                        <li><a href="office.html">Contact Manager</a></li>
                        <li><a href="office.html">Analytics</a></li>
                        <li><a href="office.html">API</a></li>
                        <li class="sub-with-sub">
                            <a href="#">Reports</a>
                            <ul>
                                <li><a href="facilities-report.html">Facilities Report</a></li>
                                <li><a href="directory-report.html">Directory Report</a></li>
                                <li><a href="conference-report.html">Conference Report</a></li>
                                <li><a href="office-report.html">Office Report</a></li>
                                <li><a href="parking-report.html">Parking Report</a></li>
                                <li><a href="rewards-report.html">Rewards Report</a></li>
                            </ul>
                        </li>
                    </ul></li>
            <li class="nav-item">
                <a class="nav-link" href="social.html">
                    <i class="icon ion-ios-barcode-outline"></i>
                    <span>Social</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="directory.html">
                    <i class="icon ion-ios-book-outline"></i>
                    <span>Directory</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="rewards.html">
                    <i class="icon ion-ios-star-outline"></i>
                    <span>Rewards</span>
                </a>
            </li>
            <li class="nav-item with-sub">
                <a class="nav-link" href="#">
                    <i class="icon ion-ios-filing-outline"></i>
                    <span>The Building</span>
                </a>
                <div class="sub-item">
                    <ul>
                        <li><a href="facility.html">Facilities</a></li>
                        <li><a href="office.html">Office</a></li>
                        <li class="sub-with-sub">
                            <a href="#">Conference</a>
                            <ul>
                                <li><a href="conference.html">Inquiries</a></li>
                                <li><a href="conference-calendar.html">Calandar</a></li>
                                <li><a href="conference-rooms.html">Rooms</a></li>
                            </ul>
                        </li>
                        <li class="sub-with-sub">
                            <a href="#">Parking</a>
                            <ul>
                                <li><a href="add-new-parking.html">Add Parking</a></li>
                                <li><a href="parking.html">Inquiries</a></li>
                                <li><a href="parking-bays.html">Spaces</a></li>
                            </ul>
                        </li>
                        <li><a href="bus-routes.html">Bus Routes</a></li>
                    </ul>
                </div><!-- sub-item -->
            </li>
            <li class="nav-item with-sub ">
                <a class="nav-link" href="#">
                    <i class="icon ion-ios-color-filter-outline"></i>
                    <span>Community</span>
                </a>
                <div class="sub-item">
                    <ul>
                        <li><a href="events.html">Events</a></li>
                        <li class="sub-with-sub">
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="add-blog.html">Add Blog</a></li>
                                <li><a href="blog.html">Blogs</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- dropdown-menu -->
            </li>
        </ul>
    </div><!-- container -->
</div><!-- slim-navbar -->