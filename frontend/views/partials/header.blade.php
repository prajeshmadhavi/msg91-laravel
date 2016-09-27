@if(is_faculty() || is_student())
        
        <div id="wrapper">
            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="/" class="logo"><img src="{!! assets('images/logo.svg') !!}"> <span>Social University</span> </a>
                    </div>
                </div>

                <!-- Navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left waves-effect">
                                    <i class="md md-menu"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <div ng-controller="searchController">
                                <form method="get" action="/search" role="search" class="navbar-left app-search pull-left hidden-xs">
                                     <input type="text" placeholder="Search..." class="form-control app-search-input">
                                     <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>

                            <ul class="nav navbar-nav navbar-right pull-right" ng-controller="notificationController">
                                
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light"
                                       data-toggle="dropdown" aria-expanded="true">
                                        <button type="button" class="btn btn-pink btn-rounded w-md waves-effect waves-light m-b-5">Post</button>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="list-group nicescroll notification-list">
                                            
                                            <!-- list item-->
                                            <a data-toggle="modal" href="#" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                        <img class="lv-img feed_image mCS_img_loaded" src="{!! assets('img/icons/file.svg') !!}" alt="">
                                                        <i class="tmn-counts" ng-cloak ng-hide="notifications.length == 0">@{{ notifications.length }}</i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Post File</h5>
                                                        <p class="m-0">
                                                            <small>Share file to your lecture</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- list item-->
                                            <a data-toggle="modal" href="#modal-postprojects" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                        <img src="{!! assets('img/icons/project.svg') !!}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Post Project</h5>
                                                        <p class="m-0">
                                                            <small>Post Your class projects online</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <!-- list item-->
                                            <a data-toggle="modal" href="#modal-question" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                        <img src="{!! assets('img/icons/topic.svg') !!}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Post Topic</h5>
                                                        <p class="m-0">
                                                            <small>Post any Question, Facts, Topics</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            <!-- list item-->
                                            <a data-toggle="modal" href="#modal-note" class="list-group-item">
                                                <div class="media">
                                                    <div class="pull-left p-r-10">
                                                        <img src="{!! assets('img/icons/event.svg') !!}">
                                                    </div>
                                                    <div class="media-body">
                                                        <h5 class="media-heading">Post Event</h5>
                                                        <p class="m-0">
                                                            <small>Post any Question, Facts, Topics</small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                            
                                            

                                        </li>

                                    </ul>
                                    
                                </li>
                                <!-- notification -->
                                <li class="dropdown hidden-xs ">
                                    <a data-target="#" class="dropdown-toggle waves-effect waves-light"
                                       data-toggle="dropdown" aria-expanded="true">
                                        <i class="md md-notifications" ng-cloak ></i><span
                                            class="badge badge-xs badge-pink">@{{ notifications.length }}</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                                        <div class="listview" id="notifications">
                                            <div class="lv-header">
                                                Notification

                                                <!--<ul class="actions">
                                                    <li class="dropdown">
                                                        <a href="" data-clear="notification">
                                                            <i class="zmdi zmdi-check-all"></i>
                                                        </a>
                                                    </li>
                                                </ul> -->

                                            </div>
                                            <div class="lv-body">
                                                <div ng-hide="notifications.length == 0">

                                                    <a class="lv-item" ng-repeat="notification in notifications" ng-href="@{{ notification.url }}" ng-click="markAsRead(notification)">
                                                        <div class="media" >
                                                            <div class="pull-left">
                                                                <img class="lv-img-sm" src="@{{ notification.picture }}" alt="@{{ notification.title }}">
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="lv-title">@{{ notification.title }}</div>
                                                                <small class="lv-small">@{{ notification.description }} <span style="color: black;">|</span> <span>@{{ notification.time }}</span></small>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>

                                            </div>

                                            <a class="lv-footer" href="">View All</a>
                                        </div>
                                    </div>
                                    
                                </li>
                                <!-- end notification -->
                                <li class="hidden-xs">
                                    <a href="#" id="tga_hd" class="right-bar-toggle waves-effect waves-light"><i class="md md-list"></i><span class="badge badge-xs badge-pink">3</span></a>
                                </li>
                                
                                <li class="dropdown">
                                <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true"><img src="{!! user()->avatar !!}" alt="user-img" class="img-circle"> </a>
                                <ul class="dropdown-menu">
                                    <li><a href="{!! is_student() ? '/profile' : '#' !!}"><i class="ti-user m-r-5"></i> Profile</a></li>
                                    <li><a href="settings.html"><i class="ti-settings m-r-5"></i> Settings</a></li>
                                    <li><a href="/{!! is_faculty() ? "faculty/" : "" !!}logout"><i class="ti-power-off m-r-5"></i> Logout</a></li>
                                </ul>
                            </li>

                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->
            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-tabs tabs">
                        <li class="active tab">
                            <a href="#home-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">Homework</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#profile-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-user"></i></span>
                                <span class="hidden-xs">Report</span>
                            </a>
                        </li>
                        <li class="tab">
                            <a href="#messages-2" data-toggle="tab" aria-expanded="true">
                                <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                                <span class="hidden-xs">Events</span>
                            </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="home-2">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox" checked="" type="checkbox">
                                <label for="checkbox">
                                    <b>Business Management</b><br>
                                    Description of the assignment will be given here.<br>
                                    <p class="assignment-color">Due: 7th Aptil</p>
                                </label>
                            </div>
                            <hr>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox2" checked="" type="checkbox">
                                <label for="checkbox2">
                                    <b>Business Management</b><br>
                                    Description of the assignment will be given here.<br>
                                    <p class="assignment-color">Due: 7th Aptil</p>
                                </label>
                                <br>
                            </div>
                            <hr>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox3" checked="" type="checkbox">
                                <label for="checkbox3">
                                    <b>Business Management</b><br>
                                    Description of the assignment will be given here.<br>
                                    <p class="assignment-color">Due: 7th Aptil</p>
                                </label>
                                <br>
                            </div>
                            <hr>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox4" checked="" type="checkbox">
                                <label for="checkbox4">
                                    <b>Business Management</b><br>
                                    Description of the assignment will be given here.<br>
                                    <p class="assignment-color">Due: 7th Aptil</p>
                                </label>
                            </div>
                            <hr>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox5" checked="" type="checkbox">
                                <label for="checkbox5">
                                    <b>Business Management</b><br>
                                    Description of the assignment will be given here.<br>
                                    <p class="assignment-color">Due: 7th Aptil</p>
                                </label>
                                <br>
                            </div>
                            <hr>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox6" checked="" type="checkbox">
                                <label for="checkbox6">
                                    <b>Business Management</b><br>
                                    Description of the assignment will be given here.<br>
                                    <p class="assignment-color">Due: 7th Aptil</p>
                                </label>
                                <br>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="profile-2">
                            
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Mid Term Results</h6>
                                <p class="report-subject">
                                <small>Business Management</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Mid Term Results</h6>
                                <p class="report-subject">
                                <small>Accounting</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/fail.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Mid Term Results</h6>
                                <p class="report-subject">
                                <small>Computer Application</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Mid Term Results</h6>
                                <p class="report-subject">
                                <small>Business Statistics</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Mid Term Results</h6>
                                <p class="report-subject">
                                <small>Human Resourse</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/attend-pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Attendance Aug 2016</h6>
                                <p class="report-subject">
                                <small>Business Management</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/attend-fail.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Attendance Aug 2016</h6>
                                <p class="report-subject">
                                <small>Accounting</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/attend-pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Attendance Aug 2016</h6>
                                <p class="report-subject">
                                <small>Computer Application</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/attend-pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Attendance Aug 2016</h6>
                                <p class="report-subject">
                                <small>Business Statistics</small>
                                </p>                                                
                            </div>
                            <hr>
                            <div class="pull-left p-r-10">
                                <img src="{!! assets('images/attend-pass.svg') !!}">
                            </div>
                            <div>
                                <h6 class="report-tittle">Attendance Aug 2016</h6>
                                <p class="report-subject">
                                <small>Human Resourse</small>
                                </p>                                                
                            </div>
                            
                        </div>



                        <div class="tab-pane fade" id="messages-2">
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox7" checked="" type="checkbox">
                                <label for="checkbox7">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox8" checked="" type="checkbox">
                                <label for="checkbox8">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox9" checked="" type="checkbox">
                                <label for="checkbox9">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox10" checked="" type="checkbox">
                                <label for="checkbox10">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox11" checked="" type="checkbox">
                                <label for="checkbox11">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox12" checked="" type="checkbox">
                                <label for="checkbox12">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox13" checked="" type="checkbox">
                                <label for="checkbox13">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            
                            <div class="checkbox checkbox-primary">
                                <input id="checkbox14" checked="" type="checkbox">
                                <label for="checkbox14">
                                    <b>Event Tittle will be given here</b><br>
                                    <p>Location will be given here</p>
                                    <p class="assignment-color">Starts: June 7</p>
                                    <br>
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->
        </div>
@endif

@if(is_university())


    <header id="header" class="clearfix mobile_lgscr hidden-xs" data-current-skin="blue" ng-cloak>
        <div class="container item-header top-head" style="">
            <ul class="header__row cancel_factory">
                <li class="header__row--item logo">
                    <div class="center_image">
                        <div id="menu-trigger" data-trigger="#sidebar" class="visible-xs">
                            <div class="line-wrap">
                                <div class="line top header"></div>
                                <div class="line center header"></div>
                                <div class="line bottom header"></div>
                            </div>
                        </div>
                        <div class="hidden-xs">
                            <a href="/" target="_self" class=""><img src="{!! assets('img/su-blue-logo.png') !!}" alt=""><span style="width: 178.98px"></span></a>
                        </div>
                    </div>
                </li>
                <li class="header__row--item search" >
                    <div class="custom_search-header" ng-controller="searchController">

                        <form method="get" action="/search">
                            <input type="search" class="search_box-header col-xs-11" spellcheck="false" autocomplete="off" name="query" id="search-input" placeholder="Search University Name Media">

                            <button type="submit" class="search_box-button-header">
                                <i class="zmdi zmdi-search zmdi-hc-fw search_box-icon"></i>
                            </button>
                        </form>
                    </div>

                </li>
                <li class="header__row--item noti" >
                    <ul class="top-menu">
                        <li class="dropdown hidden-xs ">
                            <a data-toggle="dropdown" href="">
                                <img class="lv-img feed_image mCS_img_loaded" src="{!! assets('img/icons/bell.svg') !!}" alt="">
                                <i class="tmn-counts" ng-cloak ng-hide="notifications.length == 0">@{{ notifications.length }}</i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview" id="notifications">
                                    <div class="lv-header">
                                        Notification

                                        <!--<ul class="actions">
                                            <li class="dropdown">
                                                <a href="" data-clear="notification">
                                                    <i class="zmdi zmdi-check-all"></i>
                                                </a>
                                            </li>
                                        </ul> -->

                                    </div>
                                    <div class="lv-body">
                                        <div ng-hide="notifications.length == 0">

                                            <a class="lv-item" ng-repeat="notification in notifications" ng-href="@{{ notification.url }}" ng-click="markAsRead(notification)">
                                                <div class="media" >
                                                    <div class="pull-left">
                                                        <img class="lv-img-sm" src="@{{ notification.picture }}" alt="@{{ notification.title }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="lv-title">@{{ notification.title }}</div>
                                                        <small class="lv-small">@{{ notification.description }} <span style="color: black;">|</span> <span>@{{ notification.time }}</span></small>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>

                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>

                        </li>
                        <li class="dropdown hidden-xs ">
                            <a data-toggle="dropdown" href="">
                                <img class="lv-img feed_image mCS_img_loaded" src="{!! assets('img/icons/mail.svg') !!}" alt="">
                                <i class="tmn-counts"  ng-hide="messages.length == 0" ng-cloak>@{{ messages.length }}</i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-lg pull-right">
                                <div class="listview">
                                    <div class="lv-header">
                                        Messages
                                    </div>
                                    <div class="lv-body">
                                        <div ng-hide="messages.length == 0">
                                            <a class="lv-item" ng-repeat="message in messages" href="@{{ message.url }}">
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <img class="lv-img-sm" src="@{{ message.icon }}"
                                                             alt="@{{ message.url }}">
                                                    </div>
                                                    <div class="media-body">
                                                        <div class="lv-title">@{{ message.title }}</div>
                                                        <small class="lv-small">@{{ message.description }}</small>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                    <a class="lv-footer" href="">View All</a>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown hidden-xs">
                            <a href="/university/logout" target="_self">
                                <img class="lv-img feed_image mCS_img_loaded" src="{!! assets('img/icons/exit.svg') !!}" alt="">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Top Search Content -->
    </header>


@endif


