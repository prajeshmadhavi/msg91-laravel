<div ng-controller="feedTimeLineController">


    <!-- NOTE UPDATES -->

    <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-repeat="index in notes" ng-click="showNoteModal(index.note)" ng-if="notes.length > 0" ng-cloak>
            <div class="grid_head-info">
                <div class="feed_user_info">
                    <div><img src="@{{ index.note.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                    <div>
                        <ul class="cancel_factory pl-10">
                            <li class="username-highlighted">
                                <a href="" ng-href="@{{  '/profile/'+index.topic.poster.id }}" ng-click="$event.stopPropagation()">
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
                        <li>
                            <button>
                                <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter"></span>
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

    <!-- NOTE UPDATES -->


    <!-- PROJECT UPDATES -->

    <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-repeat="index in projects" ng-click="showProjectModal(index.project)" ng-if="projects.length > 0" ng-cloak>
        <div class="grid_head-info">
            <div class="feed_user_info">
                <div><img src="@{{ index.project.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                <div>
                    <ul class="cancel_factory pl-10">
                        <li class="username-highlighted">
                            <a href="" ng-href="@{{  '/student/profile?student='+index.project.poster.id }}" ng-click="$event.stopPropagation()">
                                @{{ index.project.poster.name }}
                            </a>
                        </li>

                        <li>@{{ index.project.poster.university.name }}</li>
                    </ul>
                </div></div>
            <div class="feed_icon_holder">
                <img src="{!! asset('assets/img/icon-set-png/screen.png') !!}" class="su_icon notify" alt="">
            </div>
        </div>

        <div class="grid_image-holder">
            <img src="@{{ index.project.preview_image }}" alt="" class="grid_image-cover">
        </div>
        <div class="grid_footer-info">
            <div>
                <ul class="cancel_factory">
                    <li>
                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.project.title }}" title="@{{ index.project.title }}" data-original-title="@{{ index.project.title }}">
                            @{{ index.project.title }}
                        </div>
                    </li>
                    <li><small>@{{ index.project.created_at }}</small></li>

                </ul>
            </div>

        </div>
        <div class="feed_actions">
            <ul class="cancel_factory feed-counter-white">
                <li>
                    <button ng-click="$event.stopPropagation()">
                        <i  ng-click="likePost('project', index.project.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                        <span></span>
                            <span ng-if="index.note.likes.length > 0">
                                <span class="feed_counter">@{{ index.project.likes.length }}</span>
                            </span>
                    </button>

                </li>
                <li>
                    <button>
                        <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" ng-if="index.project.comments.length > 0">
                                    @{{ index.project.comments.length }}
                                </span>
                    </button>
                </li>
                <li ng-if="index.project.shares">
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

    <!-- PROJECT UPDATES -->





    <!-- PROJECT UPDATES -->

    <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-repeat="index in events" ng-click="showProjectModal(index.event)" ng-if="events.length > 0" ng-cloak>
        <div class="grid_head-info">
            <div class="feed_user_info">
                <div><img src="@{{ index.event.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                <div>
                    <ul class="cancel_factory pl-10">
                        <li class="username-highlighted">
                            <a href="" ng-href="@{{  '/student/profile?student='+index.event.poster.id }}" ng-click="$event.stopPropagation()">
                                @{{ index.event.poster.name }}
                            </a>
                        </li>

                        <li>@{{ index.event.poster.university.name }}</li>
                    </ul>
                </div></div>
            <div class="feed_icon_holder">
                <img src="{!! asset('assets/img/icon-set-png/calendar.png') !!}" class="su_icon notify" alt="">
            </div>
        </div>

        <div class="grid_image-holder">
            <img src="@{{ index.event.preview_image }}" alt="" class="grid_image-cover">
        </div>
        <div class="grid_footer-info">
            <div>
                <ul class="cancel_factory">
                    <li>
                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.project.title }}" title="@{{ index.project.title }}" data-original-title="@{{ index.project.title }}">
                            @{{ index.event.title }}
                        </div>
                    </li>
                    <li><small>@{{ index.event.created_at }}</small></li>

                </ul>
            </div>

        </div>
        <div class="feed_actions">
            <ul class="cancel_factory feed-counter-white">
                <li>
                    <button ng-click="$event.stopPropagation()">
                        <i  ng-click="likePost('project', index.project.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                        <span></span>
                            <span ng-if="index.note.likes.length > 0">
                                <span class="feed_counter">@{{ index.event.likes.length }}</span>
                            </span>
                    </button>

                </li>
                <li>
                    <button>
                        <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" ng-if="index.project.comments.length > 0">
                                    @{{ index.event.comments.length }}
                                </span>
                    </button>
                </li>
                <li ng-if="index.project.shares">
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

    <!-- PROJECT UPDATES -->





    <!-- QUESTION UPDATES -->

    <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card"  ng-if="topics.length > 0" ng-repeat="index in topics" ng-click="showTopicModal(index.topic)" ng-cloak>
            <div class="grid_head-info">
                <div class="feed_user_info">
                    <div><img src="@{{ index.topic.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                    <div>
                        <ul class="cancel_factory pl-10">
                            <li class="username-highlighted">
                                <a href="" ng-href="@{{  '/profile/'+index.topic.poster.id }}" ng-click="$event.stopPropagation()">
                                    @{{ index.topic.poster.name }}
                                </a>
                            </li>

                            <li>@{{ index.topic.poster.university.name }}</li>
                        </ul>
                    </div></div>
                <div class="feed_icon_holder">
                    <img src="{!! asset('assets/img/icon-set-png/hands.png') !!}" class="su_icon notify" alt="">

                </div>
            </div>

            <div class="grid_image-holder">
                <center class="grid_image-cover" style="margin-top: 50px;"><h4>@{{ index.topic.title }}</h4></center>
            </div>

            <div class="grid_footer-info">
                <div>
                    <ul class="cancel_factory">
                        <li>
                            <div class="feed_description-head text_description" style="text-align: left;"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.topic.description }}" title="@{{ index.topic.title }}" data-original-title="@{{ index.topic.title }}">
                                @{{ index.topic.description }}
                            </div>
                        </li>
                        <li><small>@{{ index.topic.created_at }}</small></li>

                    </ul>
                </div>

            </div>
            <div class="feed_actions">
                <ul class="cancel_factory feed-counter-white">
                    <li>
                        <button ng-click="$event.stopPropagation()">
                            <i ng-click="likePost('topic', index.topic.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i><span></span>
                            <span ng-if="index.topic.likes.length > 0">
                                <span class="feed_counter">@{{ index.topic.likes.length }}</span>
                            </span>
                        </button>

                    </li>
                    <li>
                        <button>
                            <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" ng-if="index.topic.answers.length > 0">
                                    @{{ index.topic.answers.length }}
                                </span>
                        </button>
                    </li>
                    <li>
                        <button>
                            <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter"></span>
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

    <!-- QUESTION UPDATES -->


    <!-- NEWS UPDATES -->

    <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-repeat="index in news" ng-click="showNewsModal(index.newses)" ng-if="news.length > 0" ng-cloak>
        <div class="grid_head-info">
            <div class="feed_user_info">
                <div><img src="@{{ index.newses.poster.avatar }}" class="lv-img feed_image" alt=""></div>
                <div>
                    <ul class="cancel_factory pl-10">
                        <li class="username-highlighted">
                            <a href="" ng-href="@{{  '/student/profile?student='+index.newses.poster.id }}" ng-click="$event.stopPropagation()">
                                @{{ index.newses.poster.name }}
                            </a>
                        </li>

                        <li>@{{ index.newses.poster.university.name }}</li>
                    </ul>
                </div></div>
            <div class="feed_icon_holder">
                <img src="{!! asset('assets/img/icon-set-png/newspaper.png') !!}" class="su_icon notify" alt="">
            </div>
        </div>

        <div class="grid_image-holder">
            <img src="@{{ index.newses.preview_image }}" alt="" class="grid_image-cover">
        </div>
        <div class="grid_footer-info">
            <div>
                <ul class="cancel_factory">
                    <li>
                        <div class="feed_description-head text_description"  data-toggle="popover" data-trigger="hover" data-placement="top" data-content="@{{ index.newses.title }}" title="@{{ index.newses.title }}" data-original-title="@{{ index.newses.title }}">
                            @{{ index.newses.title }}
                        </div>
                    </li>
                    <li><small>@{{ index.newses.created_at }}</small></li>

                </ul>
            </div>
        </div>
        <div class="feed_actions">
            <ul class="cancel_factory feed-counter-white">
                <li>
                    <button ng-click="$event.stopPropagation()">
                        <i  ng-click="likePost('newses', index.newses.id)" class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i>
                        <span></span>
                            <span ng-if="index.note.likes.length > 0">
                                <span class="feed_counter">@{{ index.newses.likes.length }}</span>
                            </span>
                    </button>

                </li>
                <li>
                    <button>
                        <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" ng-if="index.newses.comments.length > 0">
                                    @{{ index.newses.comments.length }}
                                </span>
                    </button>
                </li>
                <li ng-if="index.newses.shares">
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

    <!-- NEWS UPDATES -->

</div>