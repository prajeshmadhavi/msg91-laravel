@include('admin.partials.header')

<body ng-app="socialUniversity">

<div ng-controller="adminController">

    <header id="header" class="clearfix mobile_lgscr hidden-xs" data-current-skin="white">
    <div class="container item-header top-head" style="">
        <ul class="header__row cancel_factory">
            <li class="header__row--item">
                <ul class="header-inner no-padding su">
                    <li id="menu-trigger" data-trigger="#sidebar" class="visible-xs">
                        <div class="line-wrap">
                            <div class="line top header"></div>
                            <div class="line center header"></div>
                            <div class="line bottom header"></div>
                        </div>
                    </li>
                    <li class="hidden-xs">
                        <a href="" class="su-title"><img src="../assets/img/su-logo.png" alt=""><span>Social University</span></a>
                    </li>
                </ul>
            </li>
            <li class="header__row--item">
                <div class="custom_search-header">
                    <button type="submit" class="search_box-button-header"><i class="zmdi zmdi-search zmdi-hc-fw search_box-icon"></i></button>
                    <input type="search" class="search_box-header col-xs-11" placeholder="Search University Name Media">
                </div>
            </li>
            <li class="header__row--item">
                <ul class="top-menu">
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <i class="zmdi zmdi-notifications zmdi-hc-fw head-icon"></i>
                            <i class="tmn-counts">6</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <i class="glyphicon glyphicon-book head-icon book"></i>
                            <i class="tmn-counts">9</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <a class="lv-footer" href="">View Previous</a>
                            </div>

                        </div>
                    </li>
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <i class="zmdi zmdi-local-post-office zmdi-hc-fw head-icon"></i>
                            <i class="tmn-counts">2</i>
                        </a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <img src="../assets/img/shawaz.jpg" class="su_icon notify bus atom-buttom" alt="">
                        </a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li class="skin-switch hidden-xs">
                                <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                <span class="ss-skin bgm-blue" data-skin="blue"></span>
                            </li>
                            <li class="divider hidden-xs"></li>
                            <li class="hidden-xs">
                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href="{!! url('/backoffice/logout')!!}"><i class="zmdi zmdi-settings"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown hidden-lg hidden-md hidden-sm">
                        <a data-toggle="dropdown" href="" aria-expanded="false">
                            <img src="../assets/img/icon-set-png/atom.png" class="su_icon notify bus atom-buttom" alt="">
                        </a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="card-body">
                                <ul class="tab-nav tn-justified tn-icon" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="col-sx-4" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                            <img src="../assets/img/icon-set-png/desk-lamp.png" alt="" class="tab_icon">
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                                            <img src="../assets/img/icon-set-png/grades.png" alt="" class="tab_icon">
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                                            <img src="../assets/img/icon-set-png/calendar.png" alt="" class="tab_icon">
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content p-20 left_side-bar">
                                    <div role="tabpanel" class="tab-pane animated fadeIn in active left_side-bar" id="tab-1">
                                        <div class="tl-body left_side-bar c-overflow mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" style="max-height: 280px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: -100px; width: 100%;" dir="ltr">
                                            <div class="checkbox media">
                                                <div class="media-body assignment_panel-text ">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                    </label>
                                                </div>
                                            </div>

                                            <div class="checkbox media">
                                                <div class="media-body assignment_panel-text ">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                    </label>
                                                </div>
                                            </div>

                                            <div class="checkbox media">
                                                <div class="media-body assignment_panel-text ">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                    </label>
                                                </div>
                                            </div>

                                            <div class="checkbox media">
                                                <div class="media-body assignment_panel-text ">
                                                    <label>
                                                        <input type="checkbox">
                                                        <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                    </label>
                                                </div>
                                            </div>
                                        </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div><div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; display: block; width: 0px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2">
                                        <img src="../assets/img/headers/sm/2.png" class="img-responsive m-b-15" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet dapibus tellus. Nullam aliquet dignissim semper. Cras sit amet ligula congue, dapibus enim id, dapibus tellus.
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3">
                                        <img src="../assets/img/headers/sm/4.png" class="img-responsive m-b-15" alt="">
                                        Serhoncus quis est sit amete in nisl molestie fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna massa.
                                    </div>
                                </div>
                            </div>
                            <!--    <div class="listview">
                                    <div class="lv-header">
                                        Tasks
                                    </div>
                                    <div class="lv-body">
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Google Chrome Extension</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Social Intranet Projects</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Youtube Client App</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>-->
                        </div>
                    </li>

                </ul>
            </li>
        </ul>
    </div>
    <!-- Top Search Content -->
</header>

<header id="header" class="clearfix flex header_mobile" data-current-skin="white">
    <div class="mobile_menu-container">
        <div id="menu-trigger" data-trigger="#sidebar" class="visible-xs hamburger mobile_menu-item">
            <div class="line-wrap mini">
                <div class="line top header"></div>
                <div class="line center header"></div>
                <div class="line bottom header"></div>
            </div>
        </div>
        <div class="site_title mobile_menu-item">Social University</div>
        <div class="mobile_alert mobile_menu-item">
            <ul class="top-menu xs mobile_alert-list cancel_factory">
                <li class="dropdown  ">
                    <a data-toggle="dropdown" href="">
                        <i class="zmdi zmdi-notifications zmdi-hc-fw head-icon"></i>
                        <i class="tmn-counts">6</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview">
                            <div class="lv-header">
                                Messages
                            </div>
                            <div class="lv-body">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a class="lv-footer" href="">View All</a>
                        </div>
                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="glyphicon glyphicon-book head-icon book"></i>
                        <i class="tmn-counts">9</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg pull-right">
                        <div class="listview" id="notifications">
                            <div class="lv-header">
                                Notification

                                <ul class="actions">
                                    <li class="dropdown">
                                        <a href="" data-clear="notification">
                                            <i class="zmdi zmdi-check-all"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="lv-body">
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/2.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/3.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </a>
                                <a class="lv-item" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a class="lv-footer" href="">View Previous</a>
                        </div>

                    </div>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" href="">
                        <i class="zmdi zmdi-local-post-office zmdi-hc-fw head-icon"></i>
                        <i class="tmn-counts">2</i>
                    </a>
                    <div class="dropdown-menu pull-right dropdown-menu-lg">
                        <div class="listview">
                            <div class="lv-header">
                                Tasks
                            </div>
                            <div class="lv-body">
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                            <span class="sr-only">95% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Google Chrome Extension</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Social Intranet Projects</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="lv-item">
                                    <div class="lv-title m-b-5">Youtube Client App</div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="lv-footer" href="">View All</a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="menu-trigger" data-trigger="#sidebar" class=" hidden-xs hamburger sticky mobile_menu-item">
        <div class="line-wrap mini">
            <div class="line top header"></div>
            <div class="line center header"></div>
            <div class="line bottom header"></div>
        </div>
    </div>
    <div class="searchbar__holder">
        <div class="custom_search-header">
            <button type="submit" class="search_box-button-header"><i class="zmdi zmdi-search zmdi-hc-fw search_box-icon"></i></button>
            <input type="search" class="search_box-header col-xs-11" placeholder="Search University Name Media">
        </div>
    </div>
    <!-- Top Search Content -->
</header>

<div class="header_sub hidden-xs no-margin">
    <div class="container header_padding">
        <ul class="header-inner hidden-xs group_switcher">

            <li class="icon-group-header ">

                <ul class="toggle_header-icon-items dashboard">
                    <li class="active toggle_item first-child">
                        <a href="#tab-dashboard"  role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/chemistry.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#tab-department" role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/earth-globe.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">DEPARTMENT</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#tab-university" role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/high-school.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">UNIVERSITY</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#tab-subjects"  role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/agenda.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">SUBJECTS</span>
                        </a>
                    </li>
                    <li class="toggle_item ">
                        <a href="#tab-projects" role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/screen.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">PROJECTS</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#tab-forums"  role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/hands.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">FORUMS</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#tab-jobs"  role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/briefcase.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">JOBS</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#tab-adcontent"  role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/schedule.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">AD CONTENTS</span>
                        </a>
                    </li>
                    <!-- <li class="toggle_item">
                        <a href="#tab-billing"  role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/calculator.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">BILLING</span>
                        </a>
                    </li> -->

                </ul>

            </li>
        </ul>
    </div>
</div>
    @include('flash::message')
<section id="main" class="p-0">
    <aside id="sidebar" class="sidebar su c-overflow ">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <img src="../assets/img/profile-pics/1.jpg" alt="">
                </div>

                <div class="profile-info">
                    POST SOMETHING

                    <i class="zmdi zmdi-caret-down"></i>

                </div>
            </a>

            <ul class="main-menu">
                <li>
                    <a  data-toggle="modal" href="#post_notes"><i class="zmdi zmdi-comment-edit zmdi-hc-fw"></i>Post Note</a>
                </li>

                <li>
                    <a href=""><i class="zmdi zmdi-upload zmdi-hc-fw"></i>Upload File</a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_question"><i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>Post Question</a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_project"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Post Project </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_event"><i class="zmdi zmdi-time-restore"></i>Post Event</a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_assignment"><i class="zmdi zmdi-time-restore"></i>Post Assignment</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-time-restore"></i>Post Report</a>
                </li>


            </ul>
        </div>
        <ul class="main-menu">

            <!-- <li class="toggle_item">
                 <div class="btn-group post_something-button">
                     <button type="button" class="btn btn-primary dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                         Post Something
                     </button>
                     <ul class="dropdown-menu" role="menu">
                         <li>
                             <a  data-toggle="modal" href="#post_notes"><i class="zmdi zmdi-comment-edit zmdi-hc-fw"></i>Post Note</a>
                         </li>
                         <li>
                             <a href=""><i class="zmdi zmdi-upload zmdi-hc-fw"></i>Upload File</a>
                         </li>
                         <li>
                             <a data-toggle="modal" href="#post_question"><i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>Post Question</a>
                         </li>
                         <li>
                             <a data-toggle="modal" href="#post_project"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Post Project </a>
                         </li>
                         <li>
                             <a data-toggle="modal" href="#post_event"><i class="zmdi zmdi-time-restore"></i>Post Event</a>
                         </li>
                         <li>
                             <a data-toggle="modal" href="#post_assignment"><i class="zmdi zmdi-time-restore"></i>Post Assignment</a>
                         </li>
                         <li>
                             <a href=""><i class="zmdi zmdi-time-restore"></i>Post Report</a>
                         </li>
                     </ul>
                 </div>
             </li>-->



            <li>
                <a href="<!--#newsfeed-tab--> #subject-updates" aria-controls="home11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/high-school-1.png" class="su_icon header" alt="">
                    NEWSFEED
                </a>
            </li>
            <li>
                <a href="<!--#subject-tab--> #subject-lectures" aria-controls="profile11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/agenda.png" class="su_icon header" alt="">
                    SUBJECTS
                </a>

            </li>
            <li>
                <a href="<!--#department-tab-->#subject-assignments" aria-controls="messages11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/earth-globe.png" class="su_icon header" alt="">DEPARTMENT
                </a>
            </li>
            <li>
                <a href="<!--#university-tab-->#subject-reports" aria-controls="settings11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/high-school.png" class="su_icon header" alt="">UNIVERSITY
                </a>
            </li>
        </ul>
    </aside>
    <section id="content">
        <div class="container padding-top grid-dashboard">
                <div class="tab-content dashboard-card">
                    <div class="tab-pane fade  active in" id="tab-dashboard">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/chemistry.png" class="su_icon" alt="">
                                    <span>DASHBOARD</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/earth-globe.png" class="su_icon" alt="">
                                    <span>DEPARTMENT</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/high-school.png" class="su_icon" alt="">
                                    <span>UNIVERSITY</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/agenda.png" class="su_icon" alt="">
                                    <span>SUBJECTS</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/screen.png" class="su_icon" alt="">
                                    <span>PROJECTS</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/hands.png" class="su_icon" alt="">
                                    <span>FORUMS</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/briefcase.png" class="su_icon" alt="">
                                    <span>JOBS</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/schedule.png" class="su_icon" alt="">
                                    <span>AD CONTENT</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
                            <div class="card db n-m-b n-b-s col-xs-12">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/writing.png" class="su_icon" alt="">
                                    <span>BILLING</span>
                                </div>
                                <hr class="su2">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-department">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/earth-globe.png" class="su_icon" alt="">
                                    <span class="gray">DEPARTMENT NETWORK</span>
                                </div>
                                <hr class="su2">

                             <ul class="cancel_factory">
                                <li class="gray p-10 active"><a href="#tab-departmentstats" data-toggle="tab" aria-expanded="true">DEPARTMENT STATS</a></li>
                                <li class="gray p-10 "><a href="#tab-all-department" data-toggle="tab" aria-expanded="false">ALL DEPARTMENT</a></li>
                                <li class="gray p-10"><a href="#tab-add-department" data-toggle="tab">CREATE NEW DEPARTMENT</a></li>
                            </ul>    

                            </div>
                        </div>

                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab-departmentstats">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                    <div class="card mm-top">
                                        <div class="card-header">
                                            <h2><span class="username-highlighted">DEPARTMENT STATS</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                        </div>

                                        <div class="table-responsive">
                                            <table id="data-table-department" class="table table-striped table-dashboard">
                                                <thead>
                                                <tr>
                                                    <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                    <th data-column-id="department name">DEPARTMENT NAME</th>
                                                    <th data-column-id="university listed" data-order="desc">UNIVERSITY LISTED</th>
                                                    <th data-column-id="edit" data-order="desc">EDIT</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                <tr>
                                                    <td>10245</td>
                                                    <td>tim@microsoft.com</td>
                                                    <td>21.10.2013</td>
                                                    <td></td>
                                                </tr>

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-all-department">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                    <div class="card mm-top">
                                        <div class="card-header">
                                            <h2><span class="username-highlighted">ALL DEPARTMENT</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                        </div>

                                        <div class="table-responsive">
                                            <table id="data-table-department" class="table table-striped table-dashboard">
                                                <thead>
                                                <tr>
                                                    <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                    <th data-column-id="department name">DEPARTMENT NAME</th>
                                                    <th data-column-id="university listed" data-order="desc">UNIVERSITY LISTED</th>
                                                    <th data-column-id="edit" data-order="desc">EDIT</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                               @foreach($department as $index)

                                                <tr>
                                                    <td>{!! $index->id !!}</td>
                                                    <td>{!! $index->name !!}</td>
                                                    <td>{!! count($index->university) !!}</td>
                                                    <td></td>
                                                </tr>

                                              @endforeach

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-add-department">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                    <div class="card mm-top">
                                        <div class="card-header">
                                            <h2><span class="username-highlighted">CREATE NEW DEPARTMENT</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                        </div>

                                        <form class="p-20" method="post" action="backoffice/addDepartment">
                                            <div class="form-group">
                                                <input name="name" type="text" class="custom_form-control lb" placeholder="Department Name">
                                            </div>
                                            <div class="form-group">
                                                <input name="subject" type="text" class="custom_form-control lb" placeholder="Add Subject (Optional)">
                                            </div>

                                            <div class="form-group landing-page-footer-modalright" >
                                                {{--<button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>--}}
                                                <button type="submit" class="btn landing-page">SUBMIT</button>
                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="tab-pane fade" id="tab-university">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                        <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                            <div class="p-10">
                                <img src="../assets/img/icon-set-png/high-school.png" class="su_icon" alt="">
                                <span class="gray">UNIVERSITY NETWORK</span>
                            </div>
                            <hr class="su2">
                            <ul class="cancel_factory">
                                <li class="gray p-10 active"><a href="#tab-universitystats" data-toggle="tab" aria-expanded="true">UNIVERSITY STATS</a></li>
                                <li class="gray p-10 "><a href="#tab-uinversity" data-toggle="tab" aria-expanded="false">UNIVERSITY</a></li>
                                <li class="gray p-10"><a href="#tab-member" data-toggle="tab">MEMBER</a></li>
                                <li class="gray p-10"><a href="#tab-memberrolesettings" data-toggle="tab" aria-expanded="false">MEMBER ROLE SETTINGS</a></li>
                                <li class="gray p-10"><a href="#tab-invitememeber" data-toggle="tab">INVITE MEMBER</a></li>
                                <li class="gray p-10"><a href="#tab-createnewuniveristy" data-toggle="tab">CREATE NEW UNIVERSITY</a></li>
                            </ul>

                        </div>
                    </div>
                        <div class="tab-content">
                        <div class="tab-pane fade active in" id="tab-universitystats">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                <div class="card  mm-top">
                                    <div class="card-header">
                                        <h2><span class="username-highlighted">ALL UNIVERSITY</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="data-table-universitystats" class="table table-striped table-dashboard">
                                            <thead>
                                            <tr>
                                                <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                <th data-column-id="university name">UNIVERSITY NAME</th>
                                                <th data-column-id="dept" data-order="desc">DEPT</th>
                                                <th data-column-id="memebers" data-order="desc">MEMBERS</th>
                                                <th data-column-id="edit" data-order="desc">EDIT</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>
                                                <td>10245</td>
                                                <td>tim@microsoft.com</td>
                                                <td>21.10.2013</td>
                                                <td>1234</td>
                                                <td></td>
                                            </tr>
                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="tab-uinversity" >

                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t" ng-hide="uni_modal_table">
                                <div class="card  mm-top">
                                    <div class="card-header">
                                        <h2 ><span class="username-highlighted">ALL UNIVERSITY</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                    </div>

                                    <div class="table-responsive">
                                        <table id="data-table-university" class="table table-striped table-dashboard">
                                            <thead>
                                            <tr>
                                                <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                <th data-column-id="university name">UNIVERSITY NAME</th>
                                                <th data-column-id="dept" data-order="desc">DEPT</th>
                                                <th data-column-id="memebers" data-order="desc">MEMBERS</th>
                                                <th data-column-id="edit" data-order="desc">APRROVE REQUEST</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($university as $index)

                                                <tr>
                                                    <td>{!! $index->id !!}</td>
                                                    <td>{!! $index->name !!}</td>
                                                    <td>{!! count($index->department) !!}</td>
                                                    <td>{!! count($index->faculty) + count($index->student) + count($index->admin)!!}</td>
                                                    <td> <input type="checkbox" name="is_verified" {!! $index->is_verified ? "checked" : "" !!} ng-click="verifyUniversity({!! $index->id !!})"/> </td>
                                                </tr>

                                            @endforeach
                                    
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- <table border="1">
                                            <thead>
                                            <tr>
                                                <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                <th data-column-id="university name">UNIVERSITY NAME</th>
                                                <th data-column-id="dept" data-order="desc">DEPT</th>
                                                <th data-column-id="memebers" data-order="desc">MEMBERS</th>
                                                <th data-column-id="edit" data-order="desc">EDIT</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                <tr ng-repeat="index in universities">
                                                    <td >@{{ index.id }}</td>
                                                    <td >@{{ index.name }}</td>
                                                    <td >@{{ index.department.lenght }}</td>
                                                    <td></td>
                                                    <td ng-click="showRegisterModal(index.id)"> EDIT </td>
                                                </tr>
                                    
                                            </tbody>
                                    </table>    -->

                                </div>
                            </div>


                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t" ng-hide="reg_uni_modal">
                                <div class="card  mm-top">
                                    <div class="card-header">
                                        <h2 ><span class="username-highlighted">ALL UNIVERSITY</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                    </div>

                                    <!-- <div class="table-responsive">
                                        <table id="data-table-university" class="table table-striped table-dashboard">
                                            <thead>
                                            <tr>
                                                <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                <th data-column-id="university name">UNIVERSITY NAME</th>
                                                <th data-column-id="dept" data-order="desc">DEPT</th>
                                                <th data-column-id="memebers" data-order="desc">MEMBERS</th>
                                                <th data-column-id="edit" data-order="desc">EDIT</th>
                                                <th><a data-href='#' ng-click='test()' >CREATE NEW UNIVERSITY</a> </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($university as $index)

                                                <tr>
                                                    <td>{!! $index->id !!}</td>
                                                    <td>{!! $index->name !!}</td>
                                                    <td>{!! count($index->department) !!}</td>
                                                    <td>{!! count($index->faculty) + count($index->student) !!}</td>
                                                    <td ng-click='test()'> EDIT </td>
                                                </tr>

                                            @endforeach
                                    
                                            </tbody>
                                        </table>
                                    </div> -->

                                {{--<form class="p-20" ng-submit="createUniversity()">--}}
                                        {{--<div class="form-group">--}}
                                            {{--<span class="">NEW UNIVERSITY REGISTRATION</span>--}}
                                            {{--<hr>--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">--}}
                                            {{--<input ng-model="formData.name" name="name" type="text" class="custom_form-control lb" placeholder="University Name">--}}
                                            {{--@if ($errors->has('name'))--}}
                                                {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('name') }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">--}}
                                            {{--<input ng-model="formData.address" name="address" type="text" class="custom_form-control lb" placeholder="Location">--}}
                                             {{--@if ($errors->has('address'))--}}
                                                {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('address') }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">--}}
                                            {{--<input ng-model="formData.email" name="email" type="text" class="custom_form-control lb" placeholder="University Admin E-Mail">--}}
                                             {{--@if ($errors->has('email'))--}}
                                                {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('email') }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}
                                        {{--<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">--}}
                                            {{--<input ng-model="formData.phone" name="phone" type="text" class="custom_form-control lb" placeholder="Phone No">--}}
                                            {{--@if ($errors->has('phone'))--}}
                                                {{--<span class="help-block">--}}
                                                    {{--<strong>{{ $errors->first('phone') }}</strong>--}}
                                                {{--</span>--}}
                                            {{--@endif--}}
                                        {{--</div>--}}

                                        {{--<div class="row m-b-15 multiselect su">--}}
                                            {{--<div class="col-xs-5">--}}
                                                {{--<select name="from" class="custom_form-control-textarea" size="8" id="multiselect_edit" multiple="multiple">--}}
                                {{----}}
                                                    {{--@foreach($department as $index)--}}
                                                        {{--<option value="{!! $index->id !!}">{!! $index->name !!}</option>--}}
                                                    {{--@endforeach--}}
                                                {{--</select>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-xs-2">--}}
                                                {{--<button type="button" id="multiselect_rightSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-right"></i></button>--}}
                                                {{--<button type="button" id="multiselect_leftSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-left"></i></button>--}}
                                            {{--</div>--}}

                                            {{--<div class="col-xs-5 {{ $errors->has('department') ? 'form-group has-error' : '' }}">--}}
                                                {{--<select name="department[]" id="multiselect_to" class="custom_form-control-textarea" size="8" multiple="multiple" ng-model="department">--}}
                                                    {{----}}
                                                {{--</select>--}}
                                                 {{--@if ($errors->has('department'))--}}
                                                    {{--<span class="help-block">--}}
                                                        {{--<strong>{{ $errors->first('department') }}</strong>--}}
                                                    {{--</span>--}}
                                                {{--@endif--}}
                                            {{--</div>--}}
                                        {{--</div>--}}


                                        {{--<div class="form-group landing-page-footer-modalright" >--}}
                                            {{--<button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>--}}
                                            {{--<button type="submit" class="btn landing-page">SUBMIT</button>--}}
                                        {{--</div>--}}

                                    {{--</form>   --}}
                               


                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-member">
                            <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                            <p>Aliquam tempus rutrum neque, a blandit dui. Proin quis elit non est scelerisque pharetra nec id libero. Quisque id tincidunt elit. Maecenas non mauris malesuada, interdum justo et, ullamcorper magna. Nulla libero risus, vestibulum pharetra eleifend in, aliquam ac odio. Sed ligula orci, rhoncus sit amet ipsum vel, vehicula interdum ligula. </p>
                        </div>
                        <div class="tab-pane fade" id="tab-memberrolesettings">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sit amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat. Phasellus vitae turpis a elit tincidunt ornare. Praesent non libero quis libero scelerisque eleifend. Ut eleifend laoreet vulputate.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-invitememeber">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sit amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat. Phasellus vitae turpis a elit tincidunt ornare. Praesent non libero quis libero scelerisque eleifend. Ut eleifend laoreet vulputate.</p>
                        </div>
                        <div class="tab-pane fade" id="tab-createnewuniveristy">
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                <div class="card mm-top">
                                    <form class="p-20" method="post" action="{!! url('backoffice/createUniversity') !!}">
                                        <div class="form-group">
                                            <span class="">NEW UNIVERSITY REGISTRATION</span>
                                            <hr>
                                        </div>
                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            <input name="name" type="text" class="custom_form-control lb" placeholder="University Name">
                                            @if ($errors->has('name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                            <input name="address" type="text" class="custom_form-control lb" placeholder="Location">
                                             @if ($errors->has('address'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('address') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <input name="email" type="text" class="custom_form-control lb" placeholder="University Admin E-Mail">
                                             @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                            <input name="phone" type="text" class="custom_form-control lb" placeholder="Phone No">
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('phone') }}</strong>
                                                </span>
                                            @endif
                                        </div>

                                        <div class="row m-b-15 multiselect su">
                                            <div class="col-xs-5">
                                                {!! Form::select('from[]', $department->pluck('name', 'id'),[], ['class' =>'custom_form-control-textarea', 'size'=>'8', 'id'=>'multiselect', 'multiple']) !!}
                                               
                                            </div>

                                            <div class="col-xs-2">
                                                <button type="button" id="multiselect_rightSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                                <button type="button" id="multiselect_leftSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                            </div>

                                            <div class="col-xs-5 {{ $errors->has('department') ? 'form-group has-error' : '' }}">
                                                <select name="department[]" id="multiselect_to" class="custom_form-control-textarea" size="8" multiple="multiple"></select>
                                                 @if ($errors->has('department'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('department') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright" >
                                            {{--<button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>--}}
                                            <button type="submit" class="btn landing-page">SUBMIT</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    </div>
                    <div class="tab-pane fade" id="tab-subjects">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/briefcase.png" class="su_icon" alt="">
                                    <span class="gray">SUBJECTS</span>
                                </div>
                                <hr class="su2">
                                <ul class="cancel_factory">
                                    <li class="gray p-10 active "><a href="#tab-subjectstats" data-toggle="tab" aria-expanded="true">SUBJECTS STATS</a></li>
                                    <li class="gray p-10 "><a href="#tab-subjectusers" data-toggle="tab" aria-expanded="false">SUBJECTS USERS</a></li>
                                    <li class="gray p-10"><a href="#tab-subjectcategory" data-toggle="tab">SUBJECTS CATEGORY</a></li>
                                    <li class="gray p-10"><a href="#tab-subjectlist" data-toggle="tab" aria-expanded="false">SUBJECTS LISTS</a></li>
                                    <li class="gray p-10"><a href="#tab-createnewsubject" data-toggle="tab">CREATE NEW SUBJECT</a></li>

                                </ul>

                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade active in" id="tab-subjectstats">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                    <div class="card  mm-top">
                                        <div class="card-header">
                                            <h2><span class="username-highlighted">ALL UNIVERSITY</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                        </div>

                                        <div class="table-responsive">
                                            <table id="data-table-subjectstats" class="table table-striped table-dashboard">
                                                <thead>
                                                <tr>
                                                    <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                    <th data-column-id="university name">UNIVERSITY NAME</th>
                                                    <th data-column-id="dept" data-order="desc">DEPT</th>
                                                    <th data-column-id="memebers" data-order="desc">MEMBERS</th>
                                                    <th data-column-id="edit" data-order="desc">EDIT</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                
                                                
                                                <tr>
                                                    <td>10245</td>
                                                    <td>tim@microsoft.com</td>
                                                    <td>21.10.2013</td>
                                                    <td>1234</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>10250</td>
                                                    <td>tim@microsoft.com</td>
                                                    <td>26.10.2013</td>
                                                    <td>1234</td>
                                                    <td></td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-subjectusers">
                                <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                            </div>
                            <div class="tab-pane fade" id="tab-subjectcategory">
                                <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                                <p>Aliquam tempus rutrum neque, a blandit dui. Proin quis elit non est scelerisque pharetra nec id libero. Quisque id tincidunt elit. Maecenas non mauris malesuada, interdum justo et, ullamcorper magna. Nulla libero risus, vestibulum pharetra eleifend in, aliquam ac odio. Sed ligula orci, rhoncus sit amet ipsum vel, vehicula interdum ligula. </p>
                            </div>
                            <div class="tab-pane fade" id="tab-subjectlist">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                    <div class="card mm-top">
                                        <div class="card-header">
                                            <h2><span class="username-highlighted">ALL SUBJECTS</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                        </div>

                                        <div class="table-responsive">
                                            <table id="data-table-subjectlist" class="table table-striped table-dashboard">
                                                <thead>
                                                <tr>
                                                    <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                                    <th data-column-id="university name">UNIVERSITY NAME</th>
                                                    <th data-column-id="dept" data-order="desc">DEPT</th>
                                                    <th data-column-id="memebers" data-order="desc">MEMBERS</th>
                                                    <th data-column-id="edit" data-order="desc">EDIT</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($subject as $index)

                                                    <tr>
                                                        <td>{!! $index->id !!}</td>
                                                        <td>{!! $index->name !!}</td>
                                                        <td>{!! count($index->department) !!}</td>
                                                        <td>0</td>
                                                        <td></td>
                                                    </tr>

                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="tab-createnewsubject">
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                                    <div class="card mm-top">
                                        <div class="card-header">
                                            <h2><span class="username-highlighted">CREATE NEW SUBJECT</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                        </div>

                                        <form class="p-20" method="post" action="{!! url('backoffice/addSubject') !!}">

                                            <div class="form-group">
                                                <input name="name" type="text" class="custom_form-control lb" placeholder="Subject Name">
                                            </div>
                                            <div class="form-group">
                                        
                                                <select name="department" class="chosen">
                                                    <option disabled selected>Select Department (Optional)</option>
                                                    @foreach($department as $index)
                                                        <option value="{!! $index->name !!}">{!! $index->name !!}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            <div class="form-group landing-page-footer-modalright" >
                                                {{--<button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>--}}
                                                <button type="submit" class="btn landing-page">SUBMIT</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="tab-projects">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/screen.png" class="su_icon" alt="">
                                    <span class="gray">PROJECTS</span>
                                </div>
                                <hr class="su2">
                                <div class="gray p-10">PROJECT NAME</div>
                                <div class=" gray p-10 ">PENDING PROJECTS</div>
                                <div class="username-highlighted p-10">COMPLETED PROJECTS</div>
                                <div class="gray p-10">APPROVED PROJECTS</div>
                                <div class="gray p-10">CREATE NEW PROJECT</div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                            <div class="card">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">PROJECTS</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                </div>

                                <div class="table-responsive">
                                    <table id="data-table-projects" class="table table-striped table-dashboard">
                                        <thead>
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                            <th data-column-id="university name">UNIVERSITY NAME</th>
                                            <th data-column-id="ept" data-order="desc">DEPT</th>
                                            <th data-column-id="members" data-order="desc">MEMBERS</th>
                                            <th data-column-id="edit" data-order="desc">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                       
                                        <tr>
                                            <td>10245</td>
                                            <td>tim@microsoft.com</td>
                                            <td>21.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10250</td>
                                            <td>tim@microsoft.com</td>
                                            <td>26.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-forums">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/hands.png" class="su_icon" alt="">
                                    <span class="gray">FORUM</span>
                                </div>
                                <hr class="su2">
                                <div class="gray p-10">FORUM STATS</div>
                                <div class="gray p-10 ">FORUM USERS</div>
                                <div class="gray p-10">FORUM CATEGORY</div>
                                <div class="username-highlighted p-10">FORUM LISTS</div>
                                <div class="gray p-10">CREATE NEW FORUM</div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                            <div class="card">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">ALL FORUM</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                </div>

                                <div class="table-responsive">
                                    <table id="data-table-forum" class="table table-striped table-dashboard">
                                        <thead>
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                            <th data-column-id="university name">UNIVERSITY NAME</th>
                                            <th data-column-id="ept" data-order="desc">DEPT</th>
                                            <th data-column-id="members" data-order="desc">MEMBERS</th>
                                            <th data-column-id="edit" data-order="desc">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    
                                        <tr>
                                            <td>10240</td>
                                            <td>tim@microsoft.com</td>
                                            <td>16.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10245</td>
                                            <td>tim@microsoft.com</td>
                                            <td>21.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10250</td>
                                            <td>tim@microsoft.com</td>
                                            <td>26.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-jobs">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/briefcase.png" class="su_icon" alt="">
                                    <span class="gray">JOBS</span>
                                </div>
                                <hr class="su2">
                                <div class="gray p-10">JOB STATS</div>
                                <div class=" p-10 username-highlighted">JOB USERS</div>
                                <div class="gray p-10">JOB CATEGORY</div>
                                <div class="gray p-10">JOB LISTS</div>
                                <div class="gray p-10">CREATE NEW JOB</div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                            <div class="card">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">ALL JOBS</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                </div>

                                <div class="table-responsive">
                                    <table id="data-table-jobs" class="table table-striped table-dashboard">
                                        <thead>
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                            <th data-column-id="university name">UNIVERSITY NAME</th>
                                            <th data-column-id="ept" data-order="desc">DEPT</th>
                                            <th data-column-id="members" data-order="desc">MEMBERS</th>
                                            <th data-column-id="edit" data-order="desc">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                    
                                        <tr>
                                            <td>10240</td>
                                            <td>tim@microsoft.com</td>
                                            <td>16.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10245</td>
                                            <td>tim@microsoft.com</td>
                                            <td>21.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10250</td>
                                            <td>tim@microsoft.com</td>
                                            <td>26.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-adcontent">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/schedule.png" class="su_icon" alt="">
                                    <span class="gray">AD CONTENT</span>
                                </div>
                                <hr class="su2">
                                <div class="gray p-10">AD CONTENT STATS</div>
                                <div class=" gray p-10 ">AD CONTENT NETWORK</div>
                                <div class="gray p-10">AD CONTENT LIST</div>
                                <div class="username-highlighted p-10">AD CONTENT PAYMENTS</div>
                                <div class="gray p-10">CREATE NEW AD</div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                            <div class="card">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">AD CONTENT</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                </div>

                                <div class="table-responsive">
                                    <table id="data-table-adcontent" class="table table-striped table-dashboard">
                                        <thead>
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                            <th data-column-id="university name">UNIVERSITY NAME</th>
                                            <th data-column-id="ept" data-order="desc">DEPT</th>
                                            <th data-column-id="members" data-order="desc">MEMBERS</th>
                                            <th data-column-id="edit" data-order="desc">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <tr>
                                            <td>10240</td>
                                            <td>tim@microsoft.com</td>
                                            <td>16.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10245</td>
                                            <td>tim@microsoft.com</td>
                                            <td>21.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10250</td>
                                            <td>tim@microsoft.com</td>
                                            <td>26.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-billing">
                        <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t">
                            <div class="col-lg-12" style="background-color: white; border-radius: 5px;">
                                <div class="p-10">
                                    <img src="../assets/img/icon-set-png/briefcase.png" class="su_icon" alt="">
                                    <span class="gray">BILLING</span>
                                </div>
                                <hr class="su2">
                                <div class="gray p-10">MEMBER PAYMENTS</div>
                                <div class=" gray p-10 ">STUDENT PAYMENTS</div>
                                <div class="gray p-10">PROJECT PAYMENTS</div>
                                <div class="username-highlighted p-10">JOB POSTING PAYMENTS</div>
                                <div class="gray p-10">AD PAYMENTS</div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                            <div class="card">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">BILLINGS</span><small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                                </div>

                                <div class="table-responsive">
                                    <table id="data-table-billing" class="table table-striped table-dashboard">
                                        <thead>
                                        <tr>
                                            <th data-column-id="id" data-type="numeric" class="gray">ID</th>
                                            <th data-column-id="university name">UNIVERSITY NAME</th>
                                            <th data-column-id="ept" data-order="desc">DEPT</th>
                                            <th data-column-id="members" data-order="desc">MEMBERS</th>
                                            <th data-column-id="edit" data-order="desc">EDIT</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        
                                        <tr>
                                            <td>10245</td>
                                            <td>tim@microsoft.com</td>
                                            <td>21.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10250</td>
                                            <td>tim@microsoft.com</td>
                                            <td>26.10.2013</td>
                                            <td>12345</td>
                                            <td></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

        </div>
    </section>
</section>

</div>                        

@include('admin.partials.scripts')  

</body>
</html>