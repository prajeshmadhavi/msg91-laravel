@section('home')
    active
@endsection

@extends('app')
@section('body')
    @include('partials.sidebar')


    <div class="scrollable">
        <div class="content_scroable-wrapper">
            <!--------------------------------------home section starts here------------------------>
            <div class="tab-pane fade active in" id="toggle-home"  ng-controller="myTopicFeedController" >
                <div class="col-md-12 col-lg-12 col-sm-12 no-padding">

                    <!-- TOPIC UPDATES-->

                    <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-repeat="index in topics" ng-click="showTopicModal(index)" ng-if="topics.length > 0" ng-cloak>
                        <div class="grid_head-info">
                            <div class="feed_user_info">
                                <div><img src="@{{ index.topic.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                                <div>
                                    <ul class="cancel_factory pl-10">
                                        <li class="username-highlighted"> @{{ index.topic.poster.name }}</li>
                                        <li>@{{ index.topic.poster.university.name }}</li>
                                    </ul>
                                </div></div>
                            <div class="feed_icon_holder">
                                <img src="{!! asset('assets/img/icons/Forum.svg') !!}" class="su_icon notify" alt="">
                            </div>
                        </div>
                        <div class="grid_image-holder">
                            <div data-toggle="modal" href="#modal-newspopup">
                                <img src="{!! asset('assets/img/icons/Forum.svg') !!}" alt="" class="grid_image-cover">
                            </div>
                        </div>
                        <div class="grid_footer-info">
                            <div>
                                <ul class="cancel_factory">
                                    <li>
                                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.note.title }}" title="" data-original-title="@{{ index.note.title }}">

                                            @{{ index.topic.title }}
                                        </div>
                                    </li>
                                    <li><small>@{{ index.topic.created_at }}</small></li>

                                </ul>
                            </div>
                        </div>
                        <div class="feed_actions">
                            <ul class="cancel_factory feed-counter-white">
                                <li>
                                    <img src="{!! asset('assets/img/icons/heart.svg') !!}" class="su_icon notify" alt="">
                                    <span class="feed_counter"  ng-if="index.note.likes.length > 0" >@{{ index.topic.likes.length }}</span>
                                </li>
                                <li>
                                    <img src="{!! asset('assets/img/icons/chat.svg') !!}" class="su_icon notify" alt="">
                                    <span class="feed_counter" ng-if="index.note.comments.length > 0"> @{{ index.topic.comments.length }}</span>
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


@endsection()