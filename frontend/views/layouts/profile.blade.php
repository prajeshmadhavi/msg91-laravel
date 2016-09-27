@extends('app')
@section('body')


    <section id="main" class="p-0">

        <section id="content">
            <div class="content_wrapper">

                <!-------------------------------------side panel-------------------------->
                @include('partials.sidebar')

                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!---------------subject section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-subject">
                            <div class="tab-content">
                                <!--====================little fixed==================-->
                                <div class="tab-pane fade active in" id="tab-this">
                                    <div class="top_banner pro">
                                        <div class="col-sm-12 col-md-12 p-0">
                                            <img src="{!! assets('img/cal-header.jpg') !!}" alt="" class="banner_image">
                                        </div>
                                        <div class="col-sm-9 col-md-9 col-lg-9 profile_container">
                                            <div class="member_image">
                                                <img src="{!! $member->avatar !!}" class="lv-img feed_image" alt="">
                                            </div>
                                        </div>

                                        <div class="col-sm-3 col-md-3 col-lg-3 pull-right p-t-10"
                                             ng-controller="followStudentProfileController">
                                            @if(is_student() && $member->id != user()->id)
                                                <button class="btn btn-primary follow" id="student_follow_button"
                                                        ng-click="follow_unfollow()">Follow
                                                </button>
                                            @endif
                                            <button class="btn btn-default m-l-10"><img
                                                        src="{!! assets('img/icons/mail.svg') !!}"
                                                        class="su_icon notify" alt=""></button>
                                            <button class="btn btn-default m-l-0"><img
                                                        src="{!! assets('img/icons/card_menu.svg') !!}"
                                                        class="su_icon notify" alt=""></button>

                                            <input type="hidden" value="0" id="follow_status">
                                            <input type="hidden" value="{!! $member->id !!}" id="follow_id">

                                        </div>


                                        <div class="col-sm-12 col-md-12 p-0 text-center text-uppercase">
                                            <h5 class="f-15 m-b-0">{!! $member->name !!}</h5>
                                            <span class="text-muted">Dept of {!! $member->my_department !!} ,</span>
                                            <span class="text-muted">{!! $member->university->name !!}</span>
                                            <ul class="p-l-10">
                                                <li>
                                                    <a href="#toggle-sub_followers" data-toggle="tab"
                                                       aria-expanded="true">
                                                        FOLLOWERS<span
                                                                class="text-muted">  {!! count($member->getFollowers()) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_following" data-toggle="tab"
                                                       aria-expanded="true">
                                                        FOLLOWING<span
                                                                class="text-muted">  {!! count($member->getFollowing()) !!}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--===========================end============================-->
                                    <div class="header_sub hi hidden-xs">
                                        <div class="header_padding">
                                            <ul class="tab-nav in p-l-10">
                                                <li class="active">
                                                    <a href="#toggle-sub_updates" data-toggle="tab"
                                                       aria-expanded="false">
                                                        UPDATES <span
                                                                class="text-muted">{!! count($member->posts()) !!}</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#toggle-sub_files" data-toggle="tab" aria-expanded="true">
                                                        FILES <span
                                                                class="text-muted">{!! count($member->notes) !!}</span>
                                                    </a>
                                                </li>
                                                <!--<li class="">
                                                    <a href="#toggle-sub_bookmark" data-toggle="tab" aria-expanded="true">
                                                        BOOKMARK <span class="text-muted">88</span>
                                                    </a>
                                                </li>
                                                <li  class="m-l-20">
                                                    <a href="#toggle-sub_resume"  data-toggle="tab" aria-expanded="false">
                                                        RESUME<span class="text-muted"> 88</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_uploads" data-toggle="tab" aria-expanded="false">
                                                        UPLOADS<span class="text-muted"> 88</span>
                                                    </a>
                                                </li> -->
                                                <li>
                                                    <a href="#toggle-sub_projects" data-toggle="tab"
                                                       aria-expanded="false">
                                                        PROJECTS<span
                                                                class="text-muted">{!! count($member->project) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_questions" data-toggle="tab"
                                                       aria-expanded="false">
                                                        QUESTIONS<span
                                                                class="text-muted">{!! count($member->topics) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_about" data-toggle="tab">
                                                        ABOUT
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <!--------------------UPDATES-------------------->
                                        <div class="tab-pane fade active in" data-toggle="tab" id="toggle-sub_updates" ng-controller="studentUpdateController">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

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
                                                                <img ng-if="post.type == 'project' " src="{!! asset('assets/img/icons/project.svg') !!}" class="su_icon notify" alt="">
                                                                <img ng-if="post.type == 'topic' " src="{!! asset('assets/img/icons/Forum.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
                                                                <img ng-if="post.type == 'topic' " src="{!! asset('assets/img/icons/Forum.svg') !!}" class="grid_image-cover">
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
                                        <div class="tab-pane fade" data-toggle="tab" id="toggle-sub_files" ng-controller="studentUpdateController">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="files.length > 0" ng-repeat="post in files" ng-cloak>

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

                                        <div class="tab-pane fade" data-toggle="tab" id="toggle-sub_bookmark">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

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

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a href="#toggle_bookmark" data-toggle="tab" aria-expanded="false">
                                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                                        </a>
                                                    </div>
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <ul class="cancel_factory pl-10">
                                                                <li><a class="f-15">1. Lecture Name</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <!------------------------RESUME------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_resume">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">
                                                <div class="header_sub hi hidden-xs card_book">
                                                    <div class="header_padding">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!------------------------UPLOADS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_uploads">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card">
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <a href="#tab-this" data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image" alt="">
                                                            </a>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="img/icons/file.svg" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <a href=""><img src="img/google_io_blog.png" alt="" class="grid_image-cover"></a>
                                                    </div>
                                                    <div class="grid_footer-info">
                                                        <div>
                                                            <ul class="cancel_factory">
                                                                <li>
                                                                    <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus, sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor. Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a volutpat." title="" data-original-title="Orange is the New Black Season out now on Netflix">
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card"  >
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <a href="#tab-this2" data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image" alt="">
                                                            </a>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="img/icons/project.svg" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <img src="img/instagram-logo-blog.jpg" alt="" class="grid_image-cover">
                                                    </div>
                                                    <div class="grid_footer-info">
                                                        <div>
                                                            <ul class="cancel_factory">
                                                                <li>
                                                                    <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus, sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor. Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a volutpat." title="" data-original-title="Orange is the New Black Season out now on Netflix">
                                                                        Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.
                                                                        Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien.
                                                                        Integer vitae eros nulla. Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing elit. Aliquam consectetur venenatis blandit.
                                                                    </div>
                                                                </li>
                                                                <li><small>Start Date: 14 Aug 2016</small><span class="spacer">|</span><small>End Date: 29 Aug 2016</small></li>
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" >
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <div><img src="img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="img/icons/Forum.svg" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <img src="img/android-n-developer-preview.jpg" alt="" class="grid_image-cover">
                                                    </div>
                                                    <div class="grid_footer-info">
                                                        <div>
                                                            <ul class="cancel_factory">
                                                                <li>
                                                                    <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus, sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor. Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor. Fusce scelerisque eleifend lectus in bibendum. Suspendisse lacinia egestas felis a volutpat." title="" data-original-title="Orange is the New Black Season out now on Netflix">
                                                                        Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.
                                                                        Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien.
                                                                        Integer vitae eros nulla. Lorem ipsum dolor sit amet,
                                                                        consectetur adipiscing elit. Aliquam consectetur venenatis blandit.
                                                                    </div>
                                                                </li>
                                                                <li><small>3 hours ago</small></li>
                                                                <li class="unseen"><small>Start Date: 14 Aug 2016</small><span class="spacer">|</span><small>End Date: 29 Aug 2016</small></li>
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

                                        <!------------------------SAMPLE BOOKMARK---------------------->
                                        <div class="tab-pane fade" data-toggle="tab" id="toggle_bookmark">
                                            <div class="header_sub hi hidden-xs m-t-20">
                                                <div class="header_padding inner-view">
                                                    <ul class="tab-nav in p-l-10">
                                                        <li href="#toggle-sub_bookmark" data-toggle="tab" aria-expanded="false">
                                                            <a>
                                                                Back
                                                            </a>
                                                        </li>
                                                        <li class="p-t-5">
                                                            <img src="img/shawaz.jpg" class="lv-img feed_image" alt="">
                                                            <span>
                                                            <a class="text-muted p-l-5">
                                                                LEADERSHIP
                                                            </a>
                                                        </span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card">
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <div><img src="img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="img/icons/file.svg" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card">
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <div><img src="img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="img/icons/project.svg" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card">
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <div><img src="img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                                            <div>
                                                                <ul class="cancel_factory pl-10">
                                                                    <li class="username-highlighted">Shawaz Sharif Tuff</li>
                                                                    <li>Manipal University</li>
                                                                </ul>
                                                            </div></div>
                                                        <div class="feed_icon_holder">
                                                            <img src="img/icons/project.svg" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
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

                                        <!-----------UPLOADS---------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_questions" ng-controller="studentUpdateController">

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="topics.length > 0" ng-repeat="post in topics" ng-cloak>

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
                                                                <img ng-if="post.type == 'topic' " src="{!! asset('assets/img/icons/Forum.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img ng-if="post.type == 'topic' " src="{!! asset('assets/img/icons/Forum.svg') !!}" class="grid_image-cover">
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

                                        <!-----------UPLOADS---------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_projects" ng-controller="studentUpdateController">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="projects.length > 0" ng-repeat="post in projects" ng-cloak>

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
                                                                <img ng-if="post.type == 'project' " src="{!! asset('assets/img/icons/project.svg') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="grid_image-holder">
                                                            <div ng-click="viewPost(post.type, post.id)">
                                                                <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
                                                                <img ng-if="post.type == 'topic' " src="{!! asset('assets/img/icons/Forum.svg') !!}" class="grid_image-cover">
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

                                        <!-----------ABOUT------------------------------>
                                        <div class="tab-pane fade" id="toggle-sub_about">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">
                                                <div class="header_sub hi hidden-xs card_book">
                                                    <div class="header_padding">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="toggle-sub_followers">

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                @foreach($member->followers->where('follower.type', 'student') as $follower)

                                                    <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card" ng-controller="followStudentController">
                                                        <div class="grid_image-holder member">
                                                            <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                                <img src="{!! assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                            </a>
                                                        </div>
                                                        <div class="member_image">
                                                            <a href="/profile/{!! $follower->follower->id !!}">
                                                                <img src="{!!  $follower->follower->avatar !!}" class="lv-img feed_image" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="member_info2">
                                                            <h5>{!! $follower->follower->name !!}</h5>
                                                            <span class="text-muted">{!! $follower->follower->university->name !!}</span>
                                                        </div>

                                                        @if(user()->isFollowing(user_type(), $follower->follower->id))

                                                            <div class="feed_actions fill" style="background-color: #4A90E2; color: white;" id="{!! 'student_'.$follower->follower->id !!}" ng-click="follow_unfollow({!! $follower->follower->id !!})">
                                                                <span> Following </span>
                                                                <input type="hidden" value="1" id="{!! 'is_following_'.$follower->follower->id !!}">
                                                            </div>
                                                        @else

                                                            <div class="feed_actions fill" id="{!! 'student_'.$follower->follower->id !!}" ng-click="follow_unfollow({!! $follower->follower->id !!})" >
                                                                <span> Follow </span>
                                                                <input type="hidden" value="0" id="{!! 'is_following_'.$follower->follower->id !!}">
                                                            </div>
                                                        @endif

                                                    </div>

                                                @endforeach

                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="toggle-sub_following">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">
                                                @foreach($member->followings->where('followed.type', 'student') as $following)

                                                    <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card" ng-controller="followStudentController">
                                                        <div class="grid_image-holder member">
                                                            <a>
                                                                <img src="{!! assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                            </a>
                                                        </div>
                                                        <div class="member_image">
                                                            <a href="/profile/{!! $following->followed->id !!}">
                                                                <img src="{!!  $following->followed->avatar !!}" class="lv-img feed_image" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="member_info2">
                                                            {!! $following->followed->name !!}
                                                            <span class="text-muted">{!!  $following->followed->university->name !!}</span>
                                                        </div>

                                                        @if(user()->isFollowing(user_type(), $following->followed->id))

                                                            <div class="feed_actions fill" style="background-color: #4A90E2; color: white;" id="{!! 'student_'.$following->followed->id !!}" ng-click="follow_unfollow({!! $following->followed->id !!})">
                                                                <span> Following </span>
                                                                <input type="hidden" value="1" id="{!! 'is_following_'.$following->followed->id !!}">
                                                            </div>
                                                        @else

                                                            <div class="feed_actions fill" id="{!! 'student_'.$following->followed->id !!}" ng-click="follow_unfollow({!! $following->followed->id !!})" >
                                                                <span> Follow </span>
                                                                <input type="hidden" value="0" id="{!! 'is_following_'.$following->followed->id !!}">
                                                            </div>
                                                        @endif

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