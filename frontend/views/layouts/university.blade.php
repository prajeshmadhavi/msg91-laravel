@section('university')
    active
@endsection
@section('my.university')
    active
@endsection

@extends('app')
@section('body')

    <section id="main" class="p-0">

        <section id="content">

            <div class="content_wrapper">
                <!-------------------------------------side panel--------------------------------------->
                @include('partials.sidebar')

                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!--------------------------------------subject section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-subject">
                            <div class="tab-content">
                                <!--====================little fixed==================-->
                                <div class="tab-pane fade active in" id="tab-this">
                                    <div class="top_banner">
                                        <div class="col-sm-12 col-md-12 p-0">
                                            <img src="{!! assets('img/cal-header.jpg') !!}" alt="" class="banner_image">
                                        </div>
                                        <div class="col-sm-9 col-md-9 p-t-10">
                                            <div class="cancel_factory m-0">
                                                <div class="col-sm-2 col-md-2 no-padding">
                                                    <img src="{!! $university->logo !!}" alt="" class="jumbotron_profile--img pull-left">
                                                </div>
                                                <div class="col-sm-7 col-md-7 no-padding text-capitalize text-muted" style="margin-left: 20px">
                                                    <span class="heading"> {!! $university->name !!}</span><br>
                                                    <span class="text-muted"> {!! $university->address !!}</span><br>
                                                    <span class="text-muted">{!! $university->additional_comment !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 pull-right p-t-10" ng-controller="followUniversityController">
                                            <button class="btn btn-primary follow" id="university_follow_button" ng-click="follow_unfollow()">Follow</button>
                                            <button class="btn btn-default m-l-10"><img src="{!! assets('img/icons/mail.svg') !!}" class="su_icon notify" alt=""></button>
                                            <button class="btn btn-default m-l-0"><img src="{!! assets('img/icons/card_menu.svg') !!}" class="su_icon notify" alt=""></button>

                                            <input type="hidden" value="0" id="follow_status">
                                            {{--<input type="hidden" value="university" id="follow_type">--}}
                                            <input type="hidden" value="{!! $university->id !!}" id="follow_id">

                                        </div>
                                    </div>
                                    <!--===========================end============================-->
                                    <div class="header_sub hi hidden-xs">
                                        <div class="header_padding">
                                            <ul class="tab-nav in p-l-10">
                                                <li class="active">
                                                    <a href="#toggle-sub_updates" data-toggle="tab" aria-expanded="false">
                                                        UPDATES <span class="text-muted"> {!! count($updates) !!}</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#toggle-sub_library" data-toggle="tab" aria-expanded="true">
                                                        LIBRARY <span class="text-muted">{!! count($updates->where('type', 'note')) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_news" data-toggle="tab" aria-expanded="false">
                                                        NEWS<span class="text-muted">{!! count($updates->where('type', 'news')) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_events" data-toggle="tab" aria-expanded="false">
                                                        EVENTS<span class="text-muted">{!! count($updates->where('type', 'event')) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_courses" data-toggle="tab">
                                                        COURSES<span class="text-muted">{!! count($university->courses) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_members" data-toggle="tab">
                                                        MEMBERS<span class="text-muted">{!! $university->members_count() !!}</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-content">


                                        <!--------------------UPDATES-------------------->
                                        <div class="tab-pane fade active in" data-toggle="tab" id="toggle-sub_updates" ng-controller="universityUpdateController" ng-cloak>

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="updates.length > 0" ng-repeat="post in updates" ng-cloak>

                                                    <div>
                                                        <div class="grid_head-info">
                                                            <div class="feed_user_info">
                                                                <div><img src="@{{ post.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                                                <div>
                                                                    <ul class="cancel_factory pl-10">
                                                                        <li class="username-highlighted"> @{{ post.poster.name }}</li>
                                                                        <li>@{{ post.poster.my_university }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_icon_holder">
                                                                <img ng-if="post.type == 'note' " src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                                <img ng-if="post.type == 'news' " src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                                <img ng-if="post.type == 'event' " src="{!! asset('assets/img/icons/calendar.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
                                                            </div>
                                                        </div>
                                                        <div class="grid_footer-info">
                                                            <div>
                                                                <ul class="cancel_factory">
                                                                    <li>
                                                                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ post.title }}" title="" data-original-title="@{{ post.title }}">
                                                                            @{{ post.title }}
                                                                        </div>
                                                                    </li>
                                                                    <li><small>@{{ post.time }}</small></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_actions">
                                                            <ul class="cancel_factory feed-counter-white">
                                                                <li>
                                                                    <img ng-click="likePost(post.type, post.id)" src="{!! asset('assets/img/icons/heart.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"  ng-if="post.likes.length > 0" >@{{ post.likes.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/chat.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter" ng-if="post.comments.length > 0"> @{{ post.comments.length }}</span>
                                                                    <span class="feed_counter" ng-if="post.answers.length > 0">@{{ post.answers.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/bookmark.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"></span>
                                                                </li>
                                                            </ul>
                                                            <button class="more-options-button" data-toggle="dropdown"  aria-expanded="false">
                                                                <img src="{!! asset('assets/img/icons/card_menu.svg') !!}" class="su_icon notify" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                <li>
                                                                    <a href="">Report</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!-------------------------LECTURES-------------------------------->
                                        <div class="tab-pane fade" data-toggle="tab" id="toggle-sub_library" ng-controller="universityUpdateController" ng-cloak>

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 first no-padding grid_card">
                                                    <div class="">
                                                        <i class="zmdi zmdi-plus-circle-o enlage"></i>
                                                        <span class="text-muted">ADD FOLDER</span>
                                                    </div>
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <ul class="cancel_factory pl-10">
                                                                <li><a class="f-15"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="library.length > 0" ng-repeat="post in library" ng-cloak>

                                                    <div>
                                                        <div class="grid_head-info">
                                                            <div class="feed_user_info">
                                                                <div><img src="@{{ post.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                                                <div>
                                                                    <ul class="cancel_factory pl-10">
                                                                        <li class="username-highlighted"> @{{ post.poster.name }}</li>
                                                                        <li>@{{ post.poster.my_university }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_icon_holder">
                                                                <img ng-if="post.type == 'note' " src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
                                                            </div>
                                                        </div>
                                                        <div class="grid_footer-info">
                                                            <div>
                                                                <ul class="cancel_factory">
                                                                    <li>
                                                                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ post.title }}" title="" data-original-title="@{{ post.title }}">
                                                                            @{{ post.title }}
                                                                        </div>
                                                                    </li>
                                                                    <li><small>@{{ post.time }}</small></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_actions">
                                                            <ul class="cancel_factory feed-counter-white">
                                                                <li>
                                                                    <img ng-click="likePost(post.type, post.id)" src="{!! asset('assets/img/icons/heart.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"  ng-if="post.likes.length > 0" >@{{ post.likes.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/chat.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter" ng-if="post.comments.length > 0"> @{{ post.comments.length }}</span>
                                                                    <span class="feed_counter" ng-if="post.answers.length > 0">@{{ post.answers.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/bookmark.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"></span>
                                                                </li>
                                                            </ul>
                                                            <button class="more-options-button" data-toggle="dropdown"  aria-expanded="false">
                                                                <img src="{!! asset('assets/img/icons/card_menu.svg') !!}" class="su_icon notify" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                <li>
                                                                    <a href="">Report</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <!------------------------NES------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_news" ng-controller="universityUpdateController" ng-cloak>

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="news.length > 0" ng-repeat="post in news" ng-cloak>

                                                    <div>
                                                        <div class="grid_head-info">
                                                            <div class="feed_user_info">
                                                                <div><img src="@{{ post.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                                                <div>
                                                                    <ul class="cancel_factory pl-10">
                                                                        <li class="username-highlighted"> @{{ post.poster.name }}</li>
                                                                        <li>@{{ post.poster.my_university }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_icon_holder">
                                                                <img ng-if="post.type == 'news' " src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
                                                            </div>
                                                        </div>
                                                        <div class="grid_footer-info">
                                                            <div>
                                                                <ul class="cancel_factory">
                                                                    <li>
                                                                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ post.title }}" title="" data-original-title="@{{ post.title }}">
                                                                            @{{ post.title }}
                                                                        </div>
                                                                    </li>
                                                                    <li><small>@{{ post.time }}</small></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_actions">
                                                            <ul class="cancel_factory feed-counter-white">
                                                                <li>
                                                                    <img ng-click="likePost(post.type, post.id)" src="{!! asset('assets/img/icons/heart.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"  ng-if="post.likes.length > 0" >@{{ post.likes.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/chat.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter" ng-if="post.comments.length > 0"> @{{ post.comments.length }}</span>
                                                                    <span class="feed_counter" ng-if="post.answers.length > 0">@{{ post.answers.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/bookmark.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"></span>
                                                                </li>
                                                            </ul>
                                                            <button class="more-options-button" data-toggle="dropdown"  aria-expanded="false">
                                                                <img src="{!! asset('assets/img/icons/card_menu.svg') !!}" class="su_icon notify" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                <li>
                                                                    <a href="">Report</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <!------------------------EVENTS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_events" ng-controller="universityUpdateController" ng-cloak>

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="events.length > 0" ng-repeat="post in events" ng-cloak>

                                                    <div>
                                                        <div class="grid_head-info">
                                                            <div class="feed_user_info">
                                                                <div><img src="@{{ post.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                                                <div>
                                                                    <ul class="cancel_factory pl-10">
                                                                        <li class="username-highlighted"> @{{ post.poster.name }}</li>
                                                                        <li>@{{ post.poster.my_university }}</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_icon_holder">
                                                                <img ng-if="post.type == 'event' " src="{!! asset('assets/img/icons/calendar.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
                                                            </div>
                                                        </div>
                                                        <div class="grid_footer-info">
                                                            <div>
                                                                <ul class="cancel_factory">
                                                                    <li>
                                                                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ post.title }}" title="" data-original-title="@{{ post.title }}">
                                                                            @{{ post.title }}
                                                                        </div>
                                                                    </li>
                                                                    <li><small>@{{ post.time }}</small></li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_actions">
                                                            <ul class="cancel_factory feed-counter-white">
                                                                <li>
                                                                    <img ng-click="likePost(post.type, post.id)" src="{!! asset('assets/img/icons/heart.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"  ng-if="post.likes.length > 0" >@{{ post.likes.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/chat.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter" ng-if="post.comments.length > 0"> @{{ post.comments.length }}</span>
                                                                    <span class="feed_counter" ng-if="post.answers.length > 0">@{{ post.answers.length }}</span>
                                                                </li>
                                                                <li>
                                                                    <img src="{!! asset('assets/img/icons/bookmark.svg') !!}" class="su_icon notify" alt="">
                                                                    <span class="feed_counter"></span>
                                                                </li>
                                                            </ul>
                                                            <button class="more-options-button" data-toggle="dropdown"  aria-expanded="false">
                                                                <img src="{!! asset('assets/img/icons/card_menu.svg') !!}" class="su_icon notify" alt="">
                                                            </button>
                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                <li>
                                                                    <a href="">Report</a>
                                                                </li>
                                                                <li>
                                                                    <a href="">Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" data-toggle="tab" id="toggle-sub_courses">

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                @foreach($university->courses as $course)

                                                    <a target="_self" href="/course_details/{!! $course->id !!}?course={!! $course->id !!}">
                                                        <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                            <div class="grid_image-holder">
                                                                <img src="{!!  assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                            </div>
                                                            <div class="grid_head-info">
                                                                <div class="feed_user_info">
                                                                    <ul class="cancel_factory pl-10">
                                                                        <li><a class="f-15">{!! $course->name !!}</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_actions fill" style="text-align: center">
                                                                <a href="/course/enroll/{!! $course->id !!}">
                                                                    <span> Enroll </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </a>

                                                @endforeach

                                            </div>
                                        </div>

                                        <!-------------------------SAMPLE LIBRARY-------------------->
                                        <div class="tab-pane fade" data-toggle="tab" id="university_library">

                                            <div class="header_sub hi hidden-xs m-t-20">
                                                <div class="header_padding inner-view">
                                                    <ul class="tab-nav in p-l-10">
                                                        <li href="#toggle-sub_bookmark" data-toggle="tab" aria-expanded="false">
                                                            <a>
                                                                Back
                                                            </a>
                                                        </li>
                                                        <li class="p-t-5">
                                                            <img src="{!! assets('img/shawaz.jpg') !!}" class="lv-img feed_image" alt="">
                                                            <span>
                                                            <a class="text-muted p-l-5">
                                                                LEADERSHIP
                                                            </a>
                                                        </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card">
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <div><img src="{!! assets('img/shawaz.jpg') !!}" class="lv-img feed_image" alt=""></div>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="{!! assets('img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                            <img src="{!! assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                        </a>
                                                    </div>
                                                    <div class="grid_footer-info">
                                                        <div>
                                                            <ul class="cancel_factory">
                                                                <li>
                                                                    <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis blandit. Praesent vehicula,
                                                    Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a volutpat." title="" data-original-title="Orange is the New Black Season out now on Netflix">
                                                                        Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.
                                                                        Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien.
                                                                        Integer vitae eros nulla. Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing elit. Aliquam consectetur venenatis blandit.
                                                                    </div>
                                                                </li>
                                                                <li class="unseen"><small>Start Date: 14 Aug 2016</small><span class="spacer">|</span><small>End Date: 29 Aug 2016</small></li>
                                                                <li><small>3 hours ago</small></li>

                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="feed_actions">
                                                        <ul class="cancel_factory feed-counter-white">
                                                            <li>
                                                                <img src="img/icons/heart.svg" class="su_icon notify" alt="">
                                                                <span class="feed_counter">12k</span>
                                                            </li>
                                                            <li>
                                                                <img src="img/icons/chat.svg" class="su_icon notify" alt="">
                                                                <span class="feed_counter">12k</span>
                                                            </li>
                                                            <li>
                                                                <img src="img/icons/bookmark.svg" class="su_icon notify" alt="">
                                                                <span class="feed_counter">12k</span>
                                                            </li>
                                                        </ul>
                                                        <button class="more-options-button" data-toggle="dropdown"  aria-expanded="false">
                                                            <img src="img/icons/Card%20Menu.svg" class="su_icon notify" alt="">
                                                        </button>
                                                        <ul class="dropdown-menu dm-icon su pull-right">
                                                            <li>
                                                                <a href="">Report</a>
                                                            </li>
                                                            <li>
                                                                <a href="">Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <!------------------------MEMBERS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_members">

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                @foreach($university->students as $student)
                                                    <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                        <div class="grid_image-holder member">
                                                            <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                                <img src="{!! assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                            </a>
                                                        </div>
                                                        <div class="member_image">
                                                            <a href="/profile/{!! $student->id !!}">
                                                                <img src="{!! $student->avatar !!}" class="lv-img feed_image" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="member_info2">
                                                            <h5>{!! $student->name !!}</h5>
                                                            <span class="text-muted">{!! $university->name !!}</span>
                                                        </div>


                                                        <div ng-controller="followStudentController">

                                                            @if(user()->isFollowing(user_type(), $student->id))

                                                                <div class="feed_actions fill" style="background-color: #4A90E2; color: white;" id="{!! 'student_'.$student->id !!}" ng-click="follow_unfollow({!! $student->id !!})">
                                                                    <span> Following </span>
                                                                    <input type="hidden" value="1" id="{!! 'is_following_'.$student->id !!}">
                                                                </div>
                                                            @else

                                                                @if(is_student() && $student->id != user()->id)
                                                                    <div class="feed_actions fill" id="{!! 'student_'.$student->id !!}" ng-click="follow_unfollow({!! $student->id !!})" >
                                                                        <span> Follow </span>
                                                                        <input type="hidden" value="0" id="{!! 'is_following_'.$student->id !!}">
                                                                    </div>
                                                                @endif

                                                            @endif
                                                        </div>



                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>


@endsection