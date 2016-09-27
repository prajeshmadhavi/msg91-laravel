@section('home')
    active
@endsection

@extends('app')
@section('body')


    <section id="main" class="p-0">

        <section id="content">
            <div class="content_wrapper">

                <!-------------------------------------side panel-------------------------->
                @include('partials.sidebar')

                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!--------------------------------------home section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-home"  ng-controller="feedTimeLineController" >
                            <div class="col-md-12 col-lg-12 col-sm-12 no-padding">

                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="posts.length > 0" ng-repeat="post in posts" ng-cloak>

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
                                                <img ng-if="post.type == 'news' " src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                <img ng-if="post.type == 'event' " src="{!! asset('assets/img/icons/calendar.svg') !!}" class="su_icon notify" alt="">
                                            </div>
                                        </div>
                                        <div class="grid_image-holder">
                                            <div ng-click="viewPost(post.type, post.id)">
                                                <img ng-if="post.type != 'topic' " src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
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
                    </div>
                </div>
            </div>

        </section>
    </section>


@endsection()