@section('subjects')
    active
@endsection

@extends('app')
@section('body')

    <style>
        .ng-isolate-scope{
            width: 460px;
        }
    </style>


    <div ng-controller="lectureController" class="modal fade" id="modal-addlectures" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20" method="post" action="/university/postCourseLecture">
                    <div class="form-group">
                        <span class="form_title">ADD LECTURE</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input name="title" type="text" class="custom_form-control lb" placeholder="Lecture Title">
                        <input type="hidden" name="subject" value="{!! $course->id!!}">
                    </div>

                    <div class="form-group has-error">
                        <input ng-model="video_url" ng-change="loadFrame()" type="text" name="video_url" class="custom_form-control lb" placeholder="Youtube Video URL">
                        <span class="help-block" ng-if="error_url">
                            <strong ng-cloak>@{{ error_url }}</strong>
                        </span>

                    </div>

                    <div class="form-group">
                        <textarea class="custom_form-control-textarea" name="brief_note" rows="5" placeholder="Brief note on the lecture"></textarea>
                    </div>

                    {{--<div  class="form-group">--}}
                    {{--<iframe  width="560" height="180" src="https://www.youtube.com/embed/-GTBbZ-dEYw" frameborder="0"></iframe>--}}
                    {{--</div>--}}

                    <div class="form-group">
                        <select name="tags" class="chosen su"  multiple data-placeholder="Tag">
                            @foreach($course->enrolled as $index)
                                <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group landing-page-footer-modalright" >
                        <button type="button" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                        <button type="submit" class="btn landing-page">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <section id="main" class="p-0">


        <section id="content ">
            <div class="content_wrapper">
                <!-------------------------------------side panel--------------------------------------->

                @include('partials.sidebar')

                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!--------------------------------------subject section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-subject">
                            <div class="tab-content">
                                <!--====================fixed==================-->
                                <div class="tab-pane fade active in" id="tab-this">
                                    <div class="top_banner">
                                        <div class="col-sm-12 col-md-12 p-0">
                                            <img src="{!! assets('img/cal-header.jpg') !!}" alt="" class="banner_image">
                                        </div>
                                        <div class="col-sm-9 col-md-9 p-t-10">
                                            <div class="cancel_factory m-0">
                                                <div class="col-sm-2 col-md-2 no-padding">
                                                    <img src="{!! $course->moderator->avatar !!}" alt="" class="jumbotron_profile--img pull-left">
                                                </div>
                                                <div class="col-sm-7 col-md-7 no-padding text-capitalize text-muted" style="margin-left: 20px;">
                                                    <span class="heading">{!! $course->name !!}</span><br>
                                                    <span class="text-muted">{!! $course->moderator->name !!}</span><br>
                                                    <span class="text-muted">{!! $course->university->name !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 pull-right p-t-10">
                                            <button class="btn btn-primary" data-toggle="modal" href="#modal-addlectures">Add Lectures</button>
                                            <!--<button class="btn btn-default m-l-10"><img src="{!! assets('img/icons/mail.svg') !!}" class="su_icon notify" alt=""></button>
                                            <button class="btn btn-default m-l-0"><img src="{!! assets('img/icons/card_menu.svg') !!}" class="su_icon notify" alt=""></button>-->
                                        </div>
                                    </div>
                                    <!--===========================end============================-->
                                    <div class="header_sub hi hidden-xs">
                                        <div class="header_padding">
                                            <ul class="tab-nav in p-l-10">
                                                <li class="active">
                                                    <a href="#toggle-sub_courses" data-toggle="tab" aria-expanded="false">
                                                        COURSES <span class="text-muted">{!!  count($course->university->courses) !!}</span>
                                                    </a>
                                                </li>
                                                {{--<li class="">--}}
                                                    {{--<a href="#toggle-sub_references" data-toggle="tab" aria-expanded="true">--}}
                                                        {{--REFFERENCES <span class="text-muted">32,888</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                <li class="m-l-30">
                                                    <a href="#toggle-sub_memberss" data-toggle="tab">
                                                        MEMBERS<span class="text-muted">{!! count($course->enrolled) !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_about" data-toggle="tab" aria-expanded="false">
                                                        ABOUT
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <!--------------------UPDATES-------------------->
                                        <div class="tab-pane fade active in" data-toggle="tab" id="toggle-sub_courses" ng-controller="courseLectureViewController" ng-cloak>
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground" ng-if="course.lectures">
                                                <div class="col-sm-4 col-md-4 col-lg-4 grid_card p-l-20">
                                                    <div class="card">
                                                        <div class="card-body admin_panel">
                                                            <ul class="tab-nav tn-justified1 tn-icon text-capitalize" role="tablist">
                                                                <li role="presentation" class="" ng-repeat="lecture in course.lectures">
                                                                    <a class="col-sx-12 toggler-switch">
                                                                        <div class="hs video_play">
                                                                            <span class="">@{{ lecture.id }}. @{{ lecture.title }}</span>
                                                                            <i ng-click="playCourseVideo(lecture)" href="" class="zmdi zmdi-play-circle-outline zmdi-hc-fw pull-right"></i>
                                                                        </div>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-8 col-md-8 col-lg-8 grid_card p-r-20">
                                                    <div align="center" class="w-100">
                                                        <youtube-video video-id="video_id"></youtube-video>
                                                    </div>
                                                    <div class="card m-b-1 p p-15 text-left">
                                                        <span class="p-t-b-5"><strong>@{{ default_lecture.id }}. @{{ default_lecture.title }}</strong></span><br>
                                                            @{{ default_lecture.brief_note }}
                                                    </div>
                                                    <div class="card grid_footer-info p-l-15">
                                                        <div class="wcl-list comments_list m-0 p-0" ng-if="default_lecture.comments" ng-repeat="comment in default_lecture.comments">
                                                            <div class="media p-l-10 p-t-b-5">
                                                                <a href="" class="pull-left">
                                                                    <img src="@{{ comment.poster.avatar }}" alt="" class="lv-img-sm">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a href="" class="a-title">@{{ comment.poster.name }}</a>
                                                                    <small class="c-gray m-l-10"><span> | </span>@{{ comment.created_at }}</small>
                                                                    <p class="m-t-5 m-b-0 commented_contents">
                                                                        @{{ comment.body }}
                                                                        <a href=""> Read more</a>
                                                                    </p><br>
                                                                    <div class="pull-left">
                                                                        <a href="">
                                                                            <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                                                                                <li>
                                                                                    <button>
                                                                                        <i class="zmdi zmdi-favorite zmdi-hc-fw feed_card-file-btn"></i>
                                                                                        <span class="feed_counter" ng-if="comment.likes.length > 0">@{{ comment.likes.length }}</span>
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-------------------------REFERENCE-------------------------------->
                                        <div class="tab-pane fade" data-toggle="tab" id="toggle-sub_references">
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
                                                        <a href="#lectureName" data-toggle="tab" aria-expanded="false">
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                                        </a>
                                                    </div>
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <ul class="cancel_factory pl-10">
                                                                <li><a class="f-15">2. Lecture Name</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                                        </a>
                                                    </div>
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <ul class="cancel_factory pl-10">
                                                                <li><a class="f-15">3. Lecture Name</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                                        </a>
                                                    </div>
                                                    <div class="grid_head-info">
                                                        <div class="feed_user_info">
                                                            <ul class="cancel_factory pl-10">
                                                                <li><a class="f-15">4. Lecture Name</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
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
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
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
                                        <!--------------------------------------------->
                                        <div class="tab-pane fade" data-toggle="tab" id="lectureName">
                                            <div class="header_sub hi hidden-xs m-t-20">
                                                <div class="header_padding inner-view">
                                                    <ul class="tab-nav in p-l-10">
                                                        <li href="#toggle-sub_references" data-toggle="tab" aria-expanded="false">
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
                                        <!------------------------REPORTS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_about">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-10 bground">
                                                <div class="table-responsive">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox1">
                                                                    <span>Assignments of Fundamentals of Business Management</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>lobortis mollis quam. Morbi posuere egestas posuere.</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>Morbi posuere egestas Donec velit libero,  Morbi posuere egestas posuere. posuere.</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>Elizabeth</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>Benjamin</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>Katherine</span></td>
                                                        </tr>
                                                        <tr>
                                                            <td><div class="checkbox">
                                                                    <label>
                                                                        <input type="checkbox" value="">
                                                                        <i class="input-helper"></i>
                                                                    </label>
                                                                </div><span>Nicholas</span></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!------------------------MEMBERS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_memberss">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">
                                                <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                    <div class="grid_image-holder member">
                                                        <a data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                                        </a>
                                                    </div>
                                                    <div class="member_image">
                                                        <img src="img/shawaz.jpg" class="lv-img feed_image" alt="">
                                                    </div>
                                                    <div class="member_info2">
                                                        <h5>Arthor Crawford</h5>
                                                        <span class="text-muted">Manipal University</span>
                                                    </div>
                                                    <div class="feed_actions fill">
                                                        <span>Follow</span>
                                                    </div>
                                                </div>
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

@endsection()