@if(is_student() || is_faculty())

   <div ng-controller="sideBarNotifyController" ng-cloak>

    <!--user alert section-->
    <aside id="s-user-alerts" class="sidebar sm-image" >
        <ul class="tab-nav tn-justified tn-icon m-t-10" data-tab-color="teal">
            <li>
                <a class="sua-messages" href="#sua-messages_alert" data-toggle="tab">
                    <img src="{!! assets('img/icons/alarm-clock.svg') !!}" class="lv-img feed_image" alt="">
                    <i class="tmn-counts" ng-hide="unread_assignment_count == 0">@{{ unread_assignment_count }}</i>
                </a>
            </li>
            <li>
                <a class="sua-notifications" href="#sua-notifications" data-toggle="tab">
                    <img src="{!! assets('img/icons/Report.svg') !!}" class="lv-img feed_image" alt="">
                    <i class="tmn-counts"  ng-hide="unread_report_count == 0">@{{ unread_report_count }}</i>
                </a>
            </li>
            <li>
                <a class="sua-tasks" href="#sua-tasks" data-toggle="tab">
                    <img src="{!! assets('img/icons/calendar.svg') !!}" class="lv-img feed_image" alt="">
                    <i class="tmn-counts"  ng-hide="unread_event_count == 0">@{{ unread_event_count }}</i>
                </a>
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane fade active in" id="sua-messages_alert">
                <div class="list-group lg-alt c-overflow p-10">
                    <div class="report-list" ng-hide="assignments.length == 0" ng-repeat="assignment in assignments"> 
                        <label> 
                            <div class="report_info1"> 
                                <ul class="cancel_factory"> 
                                    <li>@{{ assignment.subject.name }}</li>
                                     
                                    <li>@{{ assignment.title }}</li>
                                     
                                    <li>@{{ assignment.due_date }}</li>
                                </ul>
                            </div>
                             
                            <div class="report_score1"> 
                                <div class="list-group-item checkbox media"> 
                                    <div class="media-body assignment_panel-text "> 
                                        <label> 
                                            <input type="checkbox" ng-checked="assignment.pivot.completed > 0" ng-model="status" ng-disabled="assignment.pivot.completed > 0" ng-click="attemptAssignment(assignment)"> 
                                            <i class="input-helper su"></i> 
                                        </label> 
                                    </div>
                                </div>
                            </div>
                        </label> 
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="sua-notifications">
                <div class="list-group lg-alt c-overflow p-10">

                    <div class="report-list" ng-if="reports.length > 0" ng-repeat="report in reports">
                            <div class="report_info">
                                <ul class="cancel_factory">
                                    <li>@{{ report.subject.name }}</li>
                                    <li>@{{ report.type == 'attendance' ? report.period : report.title }}</li>
                                </ul>
                            </div>
                            <div class="report_score" ng-if="report.type == 'attendance' ">
                                <span ng-class="report.class_attended >= (report.total_class / 2) ? 'border-pass' : 'border-fail'">@{{ report.class_attended }} / @{{ report.total_class }}</span>
                            </div>
                            <div class="report_score" ng-if="report.type == 'result' ">
                                <span ng-class="report.result_mark >= report.pass_mark ? 'border-pass' : 'border-fail'">@{{ report.result_mark }} / @{{ report.total_mark }}</span>
                            </div>
                    </div>

                    </div>
                </div>

            <div class="tab-pane fade" id="sua-tasks">
                <div class="list-group lg-alt c-overflow p-10">
                    <div class="report-list" ng-if="events.length > 0" ng-repeat="event in events">
                        <label>
                            <div class="report_info1">
                                <ul class="cancel_factory">
                                    <li>@{{ event.title }}</li>
                                    <li>@{{ event.starts }} to @{{ event.ends }}</li>
                                </ul>
                            </div>
                            <div class="report_score1">
                                <div class="list-group-item checkbox media">
                                    <div class="media-body assignment_panel-text ">
                                        <label>
                                            <input type="checkbox">
                                            <i class="input-helper su"></i>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--end of user alert section-->

    <!-------------------------------------side panel--------------------------------------->
    <div class="static_menu-left c-overflow p-t-30" >
        

        @include('partials.post_menu')

        <hr>
        <ul class="smm-alerts" >
            <li data-user-alert="sua-messages" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                <a class="sua-messages" href="#sua-messages_alert" data-toggle="tab">
                    <ul class="notified_trigger">
                        <li><img src="{!! assets('img/icons/alarm-clock.svg') !!}" class="lv-img feed_image" alt=""></li>
                        <li><span class="fa fa-circle notified" ng-hide="unread_assignment_count == 0"></span></li>
                    </ul>
                </a>
            </li>
            <li data-user-alert="sua-notifications" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                <a class="sua-notifications" href="#sua-notifications" data-toggle="tab">
                    <ul class="notified_trigger">
                        <li><img src="{!! assets('img/icons/Report.svg') !!}" class="lv-img feed_image" alt=""></li>
                        <li><span class="fa fa-circle notified" ng-hide="unread_report_count == 0"></span></li>
                    </ul>
                </a>
            </li>
            <li data-user-alert="sua-tasks" data-ma-action="sidebar-open" data-ma-target="user-alerts">
                <a class="sua-tasks" href="#sua-tasks" data-toggle="tab">
                    <ul class="notified_trigger">
                        <li><img src="{!! assets('img/icons/calendar.svg') !!}" class="lv-img feed_image" alt=""></li>
                        <li><span class="fa fa-circle notified" ng-hide="unread_event_count == 0"></span></li>
                    </ul>
                </a>
            </li>
        </ul>
        <hr>

        <!------------------Home, subject, university, projects, Topics------------------------->

    @include('partials.navigation')

    <!-------------------------------ends H,S,U,P,T----------------------------------------->
    </div>
    <!-------------------------------------------------------------------------------------->
   </div>


@endif






@if(is_university())

    <div class="content_wrapper">
        <div class="static_menu-left p-t-10">
            <div class="side_user-info m-b-15">
                <div class="profile__info--item">
                    {{--<ul class="cancel_factory">--}}
                    {{--<li>12k</li>--}}
                    {{--<li>Score</li>--}}
                    {{--</ul>--}}
                </div>
                <div class="profile__info--item">
                    <img src="{!! user()->avatar !!}" class="profile--picture" alt="">
                </div>
                <div class="profile__info--item">
                    {{--<ul class="cancel_factory">--}}
                    {{--<li>542</li>--}}
                    {{--<li>Followers< /li>--}}
                    {{--</ul>--}}
                </div>
            </div>
            <div class="side_user-info m-b-15">
                <div class="profile__info--item">
                    <ul class="cancel_factory">
                        <li>{!! user()->name !!}</li>
                        {{--<li>DEPT OF AUTOMOBILE ENGG</li>--}}
                        <li>{!! university()->name !!}</li>
                    </ul>
                </div>
            </div>
            <div class="panel-group static-menu" data-collapse-color="red" id="postnonmobile" role="tablist"
                 aria-multiselectable="true">
                <div class="panel panel-collapse static-menu">
                    <div class="panel-heading" role="tab">
                        <h4 class="panel-title static-menu">
                            <a data-toggle="collapse" data-parent="#postnonmobile" href="#postnonmobile-one"
                               aria-expanded="false" class="collapsed">
                                <span class="post_button-label">POST</span>
                            </a>
                        </h4>
                    </div>
                    <div id="postnonmobile-one" class="collapse" role="tabpanel" aria-expanded="false"
                         style="height: 0px;">
                        <div class="panel-body">
                            <ul class="cancel_factory post_category-menu">
                                <li data-toggle="modal" href="#modal-note">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post"
                                                     src="{!! assets('img/icon-set-png/pencil-1.png') !!}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">note</span>
                                            </td>
                                        </tr>
                                    </table>

                                </li>
                                <li data-toggle="modal" href="#modal-news">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post"
                                                     src="{!! assets('img/icon-set-png/newspaper.png') !!}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">news</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-event">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post"
                                                     src="{!! assets('img/icon-set-png/calendar.png') !!}" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">events</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card static-menu">
                <div class="card-body admin_panel">
                    <ul class="tab-nav tn-justified1 tn-icon static-menu  text-capitalize" role="tablist">
                        <li role="presentation" class="@yield('stats', '')">
                            <a class="col-sx-12 toggler-switch" href="/">
                                <img src="{!! assets('img/icon-set-png/chemistry.png') !!}" class="su_icon static-menu"
                                     alt=""><span class="">University Statistics</span>
                            </a>
                        </li>
                        <li role="presentation" class="@yield('members', '')">
                            <a class="col-xs-12 toggler-switch" href="/university/members">
                                <img src="{!! assets('img/icon-set-png/graduate.png') !!}" class="su_icon static-menu"
                                     alt=""><span class="">Manage Members</span>
                            </a>
                        </li>
                        <li role="presentation" class="@yield('subjects', '')">
                            <a class="col-xs-12 toggler-switch" href="/university/subjects">
                                <img src="{!! assets('img/icon-set-png/agenda.png') !!}" class="su_icon static-menu"
                                     alt=""><span class="">Manage Subjects</span>
                            </a>
                        </li>
                        <li role="presentation" class="@yield('payments', '')">
                            <a class="col-xs-12 toggler-switch" href="#tab-manage_payment">
                                <img src="{!! assets('img/icon-set-png/calculator.png') !!}" class="su_icon static-menu"
                                     alt=""><span class="">Manage Payment</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endif

