@section('university')
    active
@endsection

@extends('app')
@section('body')

    <section id="content ">

        @include('partials.sidebar')

        <div class="scrollable">

            <div class="content_scroable-wrapper">
                <div class="tab-content">

                    <div>
                        <ul class="tab-nav text-center">
                            <li class="active">
                                <a href="#my-university" data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                    <span class="">My University</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#following-universities" data-toggle="tab" class="sub-toggle" aria-expanded="false">
                                    <span class="">Following Universities</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="#browse-university" data-toggle="tab" class="sub-toggle" aria-expanded="false">
                                    <span class="">Browse University</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content m-20">

                            <div class="tab-pane fade active in" id="my-university">

                                <div class="top_banner">
                                    <div class="col-sm-4 col-md-4 hidden-xs">
                                        <div class="top_banner top_count pull-left">
                                            <h4 class="text-center">2k</h4><span>Score</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 he2">
                                        <ul class="cancel_factory m-0">
                                            <li>
                                                <img src="{!! university()->logo !!}" alt="" class="jumbotron_profile--img">
                                            </li>
                                            <li class="text-capitalize text-muted"><span class="c-blue">{!! university()->name !!}</span><br>
                                                <span class="text-muted">{!! university()->address !!}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-4 hidden-xs">
                                        <div class="top_banner top_count pull-right">
                                            <h4 class="text-center">{!! university()->members_count() !!}</h4><span>Members</span>
                                        </div>
                                    </div>
                                </div>
                                <!--===========================end============================-->
                                <div class="card col-lg-12 col-md-12 col-sm-12 cent no-padding grid_card">
                                    <div class="header_sub hi hidden-xs">
                                        <div class="header_padding">
                                            <ul class="tab-nav in">
                                                <li class="active">
                                                    <a href="#toggle-sub_updates" data-toggle="tab" aria-expanded="true">
                                                        <span class="hidden-sm hidden-xs">Updates</span>
                                                    </a>
                                                </li>
                                                <li class="">
                                                    <a href="#toggle-sub_library" data-toggle="tab" aria-expanded="false">
                                                        <span class="hidden-sm hidden-xs">Library</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_news" data-toggle="tab" aria-expanded="false">
                                                        <span class="hidden-sm hidden-xs">News</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_events" data-toggle="tab" aria-expanded="false">
                                                        <span class="hidden-sm hidden-xs">Events</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_members1" data-toggle="tab">
                                                        <span class="hidden-sm hidden-xs">Members</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <!-- <div class="feed_actions">
                                            <button class="more-options-button follow-btn-feed"><span>ENROLL</span></button>
                                            <button class="more-options-button" data-toggle="dropdown"  aria-expanded="false"><i class="zmdi zmdi-more-vert zmdi-hc-fw"></i></button>
                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                <li>
                                                    <a href="">Report</a>
                                                </li>
                                                <li>
                                                    <a href="">Delete</a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                </div>

                                <div class="card col-lg-12 col-md-12 col-sm-11 no-padding grid_card h">
                                    <div class="tab-content">
                                        <!--------------------updates tab------------------------->
                                        <div class="tab-pane fade active in" data-toggle="tab" id="toggle-sub_updates" ng-controller="universityUpdatesController" >
                                            <div class="form-group ihe m-0">
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-t-5 p-l-0 p-r-0 bground">

                                                    @foreach($updates as $update)

                                                        @if($update['post_type'] == 'questions')

                                                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-click="showTopicUpdateModal({!! $update['id'] !!})"  ng-cloak>
                                                                <div class="grid_head-info">
                                                                    <div class="feed_user_info">
                                                                        <div><img src="{!! $update['poster']['avatar'] !!}" class="lv-img feed_image" alt=""></div>
                                                                        <div>
                                                                            <ul class="cancel_factory pl-10">
                                                                                <li class="username-highlighted">
                                                                                    <a href="" ng-href="@{{  '/student/profile?student='+index.note.poster.id }}" ng-click="$event.stopPropagation()">
                                                                                        {!! $update['poster']['name'] !!}
                                                                                    </a>
                                                                                </li>

                                                                                <li>{!! $update['poster']['university']['name'] !!}</li>
                                                                            </ul>
                                                                        </div></div>
                                                                    <div class="feed_icon_holder">
                                                                        <img src="{!! asset('assets/img/icon-set-png/hands.png') !!}" class="su_icon notify" alt="">
                                                                    </div>
                                                                </div>

                                                                <div class="grid_image-holder">

                                                                    <center class="grid_image-cover" style="margin-top: 50px;"><h4>{!! $update['title'] !!}</h4></center>
                                                                </div>


                                                                <div class="grid_footer-info">
                                                                    <div>
                                                                        <ul class="cancel_factory">
                                                                            <li>
                                                                                <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="{!!  $update['description'] !!}" title="{!!  $update['title'] !!}" data-original-title="{!!  $update['title'] !!}">
                                                                                    {!!  $update['description'] !!}
                                                                                </div>
                                                                            </li>
                                                                            <li><small>{!! $update['created_at'] !!}</small></li>

                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                                <div class="feed_actions">
                                                                    <ul class="cancel_factory feed-counter-white">
                                                                        <li>
                                                                            <button ng-click="$event.stopPropagation()">
                                                                                <i ng-click="likePost('topic', index.topic.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i><span></span>
                                                                                <span>
                                                                                    <span class="feed_counter">
                                                                                        {!! count($update['likes']) !!}
                                                                                    </span>
                                                                                </span>
                                                                            </button>

                                                                        </li>
                                                                        <li>
                                                                            <button>
                                                                                <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                                                                        <span class="feed_counter" >
                                                                                            {!! count($update['answers']) !!}
                                                                                        </span>
                                                                            </button>
                                                                        </li>
                                                                        <li ng-if="index.topic.shares">
                                                                            <button>
                                                                                <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter">125k</span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                    <button ng-click="$event.stopPropagation()" class="more-options-button" data-toggle="dropdown"  aria-expanded="false"><i class="zmdi zmdi-more zmdi-hc-fw"></i></button>
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

                                                        @endif

                                                        @if($update['post_type'] == 'notes')

                                                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-click="showLibraryModal({!! $update['id'] !!})"  ng-cloak>
                                                                <div class="grid_head-info">
                                                                    <div class="feed_user_info">
                                                                        <div><img src="{!! $update['poster']['avatar'] !!}" class="lv-img feed_image" alt=""></div>
                                                                        <div>
                                                                            <ul class="cancel_factory pl-10">
                                                                                <li class="username-highlighted">
                                                                                    <a href="" ng-href="@{{  '/student/profile?student='+index.note.poster.id }}" ng-click="$event.stopPropagation()">
                                                                                        {!! $update['poster']['name'] !!}
                                                                                    </a>
                                                                                </li>

                                                                                <li>{!! $update['poster']['university']['name'] !!}</li>
                                                                            </ul>
                                                                        </div></div>
                                                                    <div class="feed_icon_holder">
                                                                        <img src="{!!  asset('assets/img/icon-set-png/pencil-1.png')!!}" class="su_icon notify" alt="">
                                                                    </div>
                                                                </div>

                                                                <div class="grid_image-holder">

                                                                    <img src="{!! $update['preview_image'] !!}" alt="" class="grid_image-cover">
                                                                </div>


                                                                <div class="grid_footer-info">
                                                                    <div>

                                                                        <ul class="cancel_factory" style="text-align: left;">
                                                                            <li>
                                                                                <div class="feed_description-head text_description">
                                                                                    {!!  $update['title']!!}
                                                                                </div>
                                                                            </li>
                                                                            <li><small>{!! $update['created_at'] !!}</small></li>
                                                                        </ul>

                                                                    </div>

                                                                </div>
                                                                <div class="feed_actions">
                                                                    <ul class="cancel_factory feed-counter-white">
                                                                        <li>
                                                                            <button ng-click="$event.stopPropagation()">
                                                                                <i  ng-click="likePost('note', index.note.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                                                                                <span></span>
                                                                            <span >
                                                                                <span class="feed_counter">{!! count($update['likes']) !!}</span>
                                                                            </span>
                                                                            </button>

                                                                        </li>
                                                                        <li>
                                                                            <button>
                                                                                <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                                                            <span class="feed_counter" >
                                                                                {!! count($update['comments']) !!}
                                                                            </span>
                                                                            </button>
                                                                        </li>
                                                                        <li ng-if="index.note.shares">
                                                                            <button>
                                                                                <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter">125k</span>
                                                                            </button>
                                                                        </li>
                                                                    </ul>
                                                                    <button ng-click="$event.stopPropagation()" class="more-options-button" data-toggle="dropdown"  aria-expanded="false"><i class="zmdi zmdi-more zmdi-hc-fw"></i></button>
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

                                                        @endif


                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------library tab------------------------------------>
                                        <div class="tab-pane fade" id="toggle-sub_library" ng-controller="collegeLibraryController">
                                            <div class="form-group ihe m-0">
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-t-5 p-l-0 p-r-0 bground">

                                                    @foreach($libraries as $library)

                                                        <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-click="showLibraryModal({!! $library['id'] !!})" ng-cloak>
                                                            <div class="grid_head-info">
                                                                <div class="feed_user_info">
                                                                    <div><img src="{!! $library['poster']['avatar'] !!}" class="lv-img feed_image" alt=""></div>
                                                                    <div>
                                                                        <ul class="cancel_factory pl-10">
                                                                            <li class="username-highlighted">
                                                                                <a href="" ng-href="@{{  '/student/profile?student='+index.note.poster.id }}" ng-click="$event.stopPropagation()">
                                                                                    {!! $library['poster']['name'] !!}
                                                                                </a>
                                                                            </li>

                                                                            <li>
                                                                                {!! $library['poster']['university']['name'] !!}
                                                                            </li>
                                                                        </ul>
                                                                    </div></div>
                                                                <div class="feed_icon_holder">
                                                                    <img src="{!! asset('assets/img/icon-set-png/pencil-1.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="grid_image-holder">
                                                                <img src="{!! $library['preview_image'] !!}" alt="" class="grid_image-cover">
                                                            </div>
                                                            <div class="grid_footer-info">
                                                                <div>
                                                                    <ul class="cancel_factory">
                                                                        <li>
                                                                            <div class="feed_description-head text_description" >
                                                                                {!! $library['title'] !!}
                                                                            </div>
                                                                        </li>
                                                                        <li><small>{!! $library['created_at'] !!}</small></li>

                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <div class="feed_actions">
                                                                <ul class="cancel_factory feed-counter-white">
                                                                    <li>
                                                                        <button ng-click="$event.stopPropagation()">
                                                                            <i  ng-click="likePost('note', index.note.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                                                                            <span></span>
                                                                            <span>
                                                                                <span class="feed_counter">
                                                                                    {!! count($library['likes']) !!}
                                                                                </span>
                                                                            </span>
                                                                        </button>

                                                                    </li>
                                                                    <li>
                                                                        <button>
                                                                            <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                                                                <span class="feed_counter" >
                                                                                    {!! count($library['comments']) !!}
                                                                                </span>
                                                                        </button>
                                                                    </li>
                                                                    <li ng-if="index.note.shares">
                                                                        <button>
                                                                            <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter">125k</span>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                                <button ng-click="$event.stopPropagation()" class="more-options-button" data-toggle="dropdown"  aria-expanded="false"><i class="zmdi zmdi-more zmdi-hc-fw"></i></button>
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

                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------News tab------------------------------------>
                                        <div class="tab-pane fade" id="toggle-sub_news">
                                            <div class="form-group ihe m-0">
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-t-5 p-l-0 p-r-0 bground">

                                                    @foreach($libraries as $library)

                                                        <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card"  ng-cloak>
                                                            <div class="grid_head-info">
                                                                <div class="feed_user_info">
                                                                    <div><img src="@{{ index.note.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                                                    <div>
                                                                        <ul class="cancel_factory pl-10">
                                                                            <li class="username-highlighted">
                                                                                <a href="" ng-href="@{{  '/student/profile?student='+index.note.poster.id }}" ng-click="$event.stopPropagation()">
                                                                                    @{{ index.note.poster.name }}
                                                                                </a>
                                                                            </li>

                                                                            <li>@{{ index.note.poster.university.name }}</li>
                                                                        </ul>
                                                                    </div></div>
                                                                <div class="feed_icon_holder">
                                                                    <img src="{!! asset('assets/img/icon-set-png/pencil-1.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="grid_image-holder">
                                                                <img src="@{{ index.note.preview_image }}" alt="" class="grid_image-cover">
                                                            </div>
                                                            <div class="grid_footer-info">
                                                                <div>
                                                                    <ul class="cancel_factory">
                                                                        <li>
                                                                            <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.note.title }}" title="@{{ index.note.title }}" data-original-title="@{{ index.note.title }}">
                                                                                @{{ index.note.title }}
                                                                            </div>
                                                                        </li>
                                                                        <li><small>@{{ index.note.created_at }}</small></li>

                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <div class="feed_actions">
                                                                <ul class="cancel_factory feed-counter-white">
                                                                    <li>
                                                                        <button ng-click="$event.stopPropagation()">
                                                                            <i  ng-click="likePost('note', index.note.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                                                                            <span></span>
                            <span ng-if="index.note.likes.length > 0">
                                <span class="feed_counter">@{{ index.note.likes.length }}</span>
                            </span>
                                                                        </button>

                                                                    </li>
                                                                    <li>
                                                                        <button>
                                                                            <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" ng-if="index.note.comments.length > 0">
                                    @{{ index.note.comments.length }}
                                </span>
                                                                        </button>
                                                                    </li>
                                                                    <li ng-if="index.note.shares">
                                                                        <button>
                                                                            <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter">125k</span>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                                <button ng-click="$event.stopPropagation()" class="more-options-button" data-toggle="dropdown"  aria-expanded="false"><i class="zmdi zmdi-more zmdi-hc-fw"></i></button>
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

                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------events tab------------------------------------>
                                        <div class="tab-pane fade" id="toggle-sub_events">
                                            <div class="form-group ihe m-0">
                                                <div class="col-lg-12 col-md-12 col-sm-12 p-t-5 p-l-0 p-r-0 bground">

                                                    @foreach($libraries as $library)

                                                        <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card"  ng-cloak>
                                                            <div class="grid_head-info">
                                                                <div class="feed_user_info">
                                                                    <div><img src="@{{ index.note.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                                                    <div>
                                                                        <ul class="cancel_factory pl-10">
                                                                            <li class="username-highlighted">
                                                                                <a href="" ng-href="@{{  '/student/profile?student='+index.note.poster.id }}" ng-click="$event.stopPropagation()">
                                                                                    @{{ index.note.poster.name }}
                                                                                </a>
                                                                            </li>

                                                                            <li>@{{ index.note.poster.university.name }}</li>
                                                                        </ul>
                                                                    </div></div>
                                                                <div class="feed_icon_holder">
                                                                    <img src="{!! asset('assets/img/icon-set-png/pencil-1.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                            </div>

                                                            <div class="grid_image-holder">
                                                                <img src="@{{ index.note.preview_image }}" alt="" class="grid_image-cover">
                                                            </div>
                                                            <div class="grid_footer-info">
                                                                <div>
                                                                    <ul class="cancel_factory">
                                                                        <li>
                                                                            <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.note.title }}" title="@{{ index.note.title }}" data-original-title="@{{ index.note.title }}">
                                                                                @{{ index.note.title }}
                                                                            </div>
                                                                        </li>
                                                                        <li><small>@{{ index.note.created_at }}</small></li>

                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <div class="feed_actions">
                                                                <ul class="cancel_factory feed-counter-white">
                                                                    <li>
                                                                        <button ng-click="$event.stopPropagation()">
                                                                            <i  ng-click="likePost('note', index.note.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                                                                            <span></span>
                                                                            <span ng-if="index.note.likes.length > 0">
                                                                                <span class="feed_counter">@{{ index.note.likes.length }}</span>
                                                                            </span>
                                                                        </button>

                                                                    </li>
                                                                    <li>
                                                                        <button>
                                                                            <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                                                            <span class="feed_counter" ng-if="index.note.comments.length > 0">
                                                                                @{{ index.note.comments.length }}
                                                                            </span>
                                                                        </button>
                                                                    </li>
                                                                    <li ng-if="index.note.shares">
                                                                        <button>
                                                                            <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter">125k</span>
                                                                        </button>
                                                                    </li>
                                                                </ul>
                                                                <button ng-click="$event.stopPropagation()" class="more-options-button" data-toggle="dropdown"  aria-expanded="false"><i class="zmdi zmdi-more zmdi-hc-fw"></i></button>
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

                                                    @endforeach

                                                </div>
                                            </div>
                                        </div>
                                        <!--------------------Member tab------------------------------------>
                                        <div class="tab-pane fade" id="toggle-sub_members1">
                                            <div class="card animated m-b-0">
                                                <div class="card-header su">
                                                    <div class="media-body p-5">
                                                        <div class="pull-left">
                                                            <img src="{!! asset('assets/img/icon-set-png/mortarboard.png') !!}" class="su_icon notify" alt="">
                                                        </div>
                                                        <div class="pull-left">
                                                            <ul class="info_aligner">
                                                                <li class="text-capitalize p-l-10">INSTRUCTOR
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    @foreach(university()->faculty as $faculty)

                                                        <div class="media-body p-5">
                                                            <div class="pull-left">
                                                                <img src="{!! $faculty->avatar !!}" class="su_icon img-circle" alt="">
                                                            </div>
                                                            <div class="pull-left p-t-5">
                                                                <ul class="info_aligner">
                                                                    <li class="text-capitalize p-l-10">
                                                                        {!! $faculty->name !!}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>

                                                    @endforeach

                                                </div>
                                            </div>
                                            <hr />
                                            <div class="card animated m-b-0">
                                                <div class="card-header su">
                                                    <div class="media-body p-5">
                                                        <div class="pull-left">
                                                            <img src="{!! asset('assets/img/icon-set-png/graduate.png') !!}" class="su_icon notify" alt="">
                                                        </div>
                                                        <div class="pull-left">
                                                            <ul class="info_aligner">
                                                                <li class="text-capitalize p-l-10">STUDENTS
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    @foreach(university()->students as $student)
                                                        <div class="media-body p-5">
                                                            <div class="pull-left">
                                                                <img src="{!! $student->avatar !!}" class="su_icon img-circle" alt="">
                                                            </div>
                                                            <div class="pull-left p-t-5">
                                                                <ul class="info_aligner">
                                                                    <li class="text-capitalize p-l-10">
                                                                        {!! $student->name !!}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                            <hr />

                                        </div>
                                    </div>
                                </div>

                            </div>


                            <div class="tab-pane fade" id="following-universities">

                                <!--<div class="card col-lg-4 col-md-4 col-sm-6 adjusted__width--custom no-padding grid_card">
                                    <div class="grid_head-info">
                                        <div class="feed_user_info">
                                            <div><img src="img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                            <div>
                                                <ul class="cancel_factory pl-10">
                                                    <li class="username-highlighted">Shawaz Sharif Tuff </li>
                                                    <li>Manipal University</li>
                                                </ul>
                                            </div></div>
                                        <div class="feed_icon_holder">
                                            <img src="img/icon-set-png/agenda.png" class="su_icon notify" alt="">
                                        </div>
                                    </div>
                                    <div class="grid_image-holder">
                                        <a href="#tab-this" data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                        </a>
                                    </div>
                                    <div class="grid_footer-info">
                                        <div>
                                            <ul class="cancel_factory singular-line">
                                                <li>
                                                    <div class="feed_description-head text_description"
                                                         data-toggle="popover"
                                                         data-trigger="hover"
                                                         data-placement="top" data-content="Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus, sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor." title=""
                                                         data-original-title="Orange is the New Black Season out now on Netflix">
                                                        Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.
                                                        Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien.
                                                        Integer vitae eros nulla. Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Aliquam consectetur venenatis blandit.
                                                        Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                                        sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor.
                                                        Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor. Fusce scelerisque eleifend lectus in bibendum.
                                                        Suspendisse lacinia egestas felis a volutpat.
                                                    </div>
                                                </li>
                                                <li class="unseen"><small>Start Date: 14 Aug 2016</small><span class="spacer">|</span><small>End Date: 29 Aug 2016</small></li>
                                                <li><small>3 hours ago</small></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="feed_actions enroll_action-button">
                                        <button class="more-options-button follow-btn-feed enrolled"><span>ENROLLED</span></button>
                                        <ul class="cancel_factory feed-counter-white enroll_group-action">
                                            <li>
                                                <button>
                                                    <i class="zmdi zmdi-accounts-outline zmdi-hc-fw feed_card-file-btn"></i><span></span><span><span class="feed_counter">125k</span></span>
                                                </button>

                                            </li>
                                            <li>
                                                <button>
                                                    <i class="zmdi zmdi-file zmdi-hc-fw feed_card-file-btn"></i><span class="feed_counter">125k</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                -->

                            </div>

                            <div class="tab-pane fade" id="browse-university">

                                <!--<div class="card col-lg-4 col-md-4 col-sm-6 adjusted__width--custom no-padding grid_card">
                                    <div class="grid_head-info">
                                        <div class="feed_user_info">
                                            <div><img src="img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                            <div>
                                                <ul class="cancel_factory pl-10">
                                                    <li class="username-highlighted">Shawaz Sharif Tuff </li>
                                                    <li>Manipal University</li>
                                                </ul>
                                            </div></div>
                                        <div class="feed_icon_holder">
                                            <img src="img/icon-set-png/agenda.png" class="su_icon notify" alt="">
                                        </div>
                                    </div>
                                    <div class="grid_image-holder">
                                        <a href="#tab-this" data-toggle="tab" class="sub-toggle" aria-expanded="true">
                                            <img src="img/google_io_blog.png" alt="" class="grid_image-cover">
                                        </a>
                                    </div>
                                    <div class="grid_footer-info">
                                        <div>
                                            <ul class="cancel_factory singular-line">
                                                <li>
                                                    <div class="feed_description-head text_description"
                                                         data-toggle="popover"
                                                         data-trigger="hover"
                                                         data-placement="top" data-content="Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam consectetur venenatis blandit. Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus, sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor." title=""
                                                         data-original-title="Orange is the New Black Season out now on Netflix">
                                                        Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.
                                                        Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien.
                                                        Integer vitae eros nulla. Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit. Aliquam consectetur venenatis blandit.
                                                        Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                                        sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor.
                                                        Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor. Fusce scelerisque eleifend lectus in bibendum.
                                                        Suspendisse lacinia egestas felis a volutpat.
                                                    </div>
                                                </li>
                                                <li class="unseen"><small>Start Date: 14 Aug 2016</small><span class="spacer">|</span><small>End Date: 29 Aug 2016</small></li>
                                                <li><small>3 hours ago</small></li>

                                            </ul>
                                        </div>
                                    </div>
                                    <div class="feed_actions enroll_action-button">
                                        <button class="more-options-button follow-btn-feed enrolled"><span>ENROLLED</span></button>
                                        <ul class="cancel_factory feed-counter-white enroll_group-action">
                                            <li>
                                                <button>
                                                    <i class="zmdi zmdi-accounts-outline zmdi-hc-fw feed_card-file-btn"></i><span></span><span><span class="feed_counter">125k</span></span>
                                                </button>

                                            </li>
                                            <li>
                                                <button>
                                                    <i class="zmdi zmdi-file zmdi-hc-fw feed_card-file-btn"></i><span class="feed_counter">125k</span>
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                -->

                            </div>


                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


@endsection