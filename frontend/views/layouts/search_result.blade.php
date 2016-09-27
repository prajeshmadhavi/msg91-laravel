@extends('app')
@section('body')


    <section id="main" class="p-0" >

        <div class="content_wrapper">
            @include('partials.sidebar')
        </div>

        <div class="scrollable">
            <div class="content_scroable-wrapper">

                <div class="tab-content pad1 p-t-0">
                    <!--------------------------------------subject section starts here------------------------>
                    <div class="tab-pane fade active in" id="toggle-subject">
                        <div class="tab-content">
                            <!--====================little fixed==================-->
                            <div class="tab-pane fade active in" id="tab-this">
                                <div class="card col-lg-12 col-md-12 col-sm-12 cent no-padding grid_card m-b-5">
                                    <div class="header_padding search">
                                        <ul class="tab-nav in">
                                            <li class="">
                                                <a href="#tab-all" data-toggle="tab" aria-expanded="false">
                                                    <img src="{!! assets('img/icons/search.svg') !!}"
                                                         class="su_icon header"
                                                         alt="">
                                                    <span class="hidden-sm hidden-xs">All</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab-files" data-toggle="tab" aria-expanded="false">
                                                    <img src="{!! assets('img/icons/file.svg') !!}"
                                                         class="su_icon header" alt="">
                                                    <span class="hidden-sm hidden-xs">Files</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#tab-subjects" data-toggle="tab" aria-expanded="true">
                                                    <img src="{!! assets('img/icons/Report.svg') !!}"
                                                         class="su_icon header" alt="">
                                                    <span class="hidden-sm hidden-xs">Subjects</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-university" data-toggle="tab" aria-expanded="false">
                                                    <img src="img/icon-set-png/high-school.png" class="su_icon header"
                                                         alt="">
                                                    <span class="hidden-sm hidden-xs">University</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-projects" data-toggle="tab" aria-expanded="false">
                                                    <img src="{!! assets('img/icons/project.svg') !!}"
                                                         class="su_icon header" alt="">
                                                    <span class="hidden-sm hidden-xs">Projects</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-forums" data-toggle="tab">
                                                    <img src="{!! assets('img/icons/Forum.svg') !!}"
                                                         class="su_icon header" alt="">
                                                    <span class="hidden-sm hidden-xs">Forums</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-news" data-toggle="tab">
                                                    <img src="img/icon-set-png/newspaper.png" class="su_icon header"
                                                         alt="">
                                                    <span class="hidden-sm hidden-xs">News</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#tab-events" data-toggle="tab">
                                                    <img src="{!! assets('img/icons/calendar.svg') !!}"
                                                         class="su_icon header" alt="">
                                                    <span class="hidden-sm hidden-xs">Events</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="card col-lg-12 col-md-12 col-sm-11 no-padding grid_card h" >



                                    <div class="tab-content search_image">
                                        <!--------------------all search------------------------->
                                        <div class="tab-pane fade active in" id="tab-all">
                                            @foreach($result['hits'] as $hit)
                                                @if($hit['type'] == 'student')
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="{!! $hit['avatar'] !!}" class="lv-img feed_image rad" alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>{!! $hit['name'] !!}</strong></li>
                                                                    <li class="">{!! $hit['university']['name'] !!}</li>
                                                                    <li><span class="small">24,4555 Certified</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/agenda.png"
                                                                 class="su_icon notify pull-right" alt="">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                @endif
                                                    @if($hit['type'] == 'university')
                                                        <div class="grid_head-info rad">
                                                            <div class="feed_user_info rad">
                                                                <div>
                                                                    <img src="{!! $hit['logo'] !!}" class="lv-img feed_image rad" alt="">
                                                                </div>
                                                                <div>
                                                                    <ul class="cancel_factory pl-20">
                                                                        <li><strong>{!! $hit['name'] !!}</strong></li>
                                                                        <li class="">{!! $hit['follower_count'] !!}</li>
                                                                        <li><span class="small">24,4555 Certified</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_icon_holder p-r-15">
                                                                <img src="img/icon-set-png/agenda.png"
                                                                     class="su_icon notify pull-right" alt="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    @endif
                                          @endforeach

                                        </div>

                                        @foreach($result['hits'] as $hit)


                                                <div class="tab-pane fade" data-toggle="tab" id="tab-files" ng-controller="noteSearchController">

                                                    @if($hit['type'] == 'note')
                                                        <div class="grid_head-info rad" ng-click="showNoteModal({!! $hit['id'] !!})">
                                                            <div class="feed_user_info rad">
                                                                <div>
                                                                    <img src="{!! $hit['preview_image'] !!}" class="lv-img feed_image rad" alt="">
                                                                </div>
                                                                <div>
                                                                    <ul class="cancel_factory pl-20">
                                                                        <li><strong>{!! $hit['title'] !!}</strong></li>
                                                                        <li class="">Posted by {!! $hit['poster']['name'] !!}</li>
                                                                        <li><span class="small">{!! $hit['created_at'] !!}</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="feed_icon_holder p-r-15">
                                                                <img src="{!! assets('img/icons/file.svg') !!}" class="su_icon notify pull-right" alt="">
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    @endif
                                                </div>



                                            @if($hit['type'] == 'subject')
                                                <div class="tab-pane fade" id="tab-subjects">
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image rad"
                                                                     alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>Tittle of Course</strong></li>
                                                                    <li class="">Manipal University</li>
                                                                    <li><span class="small">24,4555 Certified</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/agenda.png"
                                                                 class="su_icon notify pull-right"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                            @endif

                                            @if($hit['type'] == 'university')
                                                <div class="tab-pane fade" id="tab-university">
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="{!! $hit['logo'] !!}" class="lv-img feed_image rad"
                                                                     alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>{!! $hit['name'] !!}</strong></li>
                                                                    <li class="">{!! $hit['address'] !!}</li>
                                                                    <li><span class="small">Followers {!! $hit['follower_count'] !!}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/high-school.png"
                                                                 class="su_icon notify pull-right" alt="">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                            @endif

                                            @if($hit['type'] == 'project')
                                                <div class="tab-pane fade" id="tab-projects">
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image rad"
                                                                     alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>Tittle of the Project</strong></li>
                                                                    <li class="">Shawaz Sharif, Manipal University</li>
                                                                    <li><span class="small">24,4555 views</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/high-school.png"
                                                                 class="su_icon notify pull-right" alt="">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                            @endif

                                            @if($hit['type'] == 'topic')
                                                <div class="tab-pane fade" id="tab-forums">
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image rad"
                                                                     alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>Tittle of Topic</strong></li>
                                                                    <li class="">Shawaz Sharif, Manipal University</li>
                                                                    <li><span class="small">24,4555 views</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/hands.png"
                                                                 class="su_icon notify pull-right"
                                                                 alt="">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                            @endif

                                            @if($hit['type'] == 'news')
                                                <div class="tab-pane fade" id="tab-news">
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image rad"
                                                                     alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>News Tittle</strong></li>
                                                                    <li class="">Shawaz Sharif, Manipal University</li>
                                                                    <li><span class="small">24,4555 views</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/newspaper.png"
                                                                 class="su_icon notify pull-right" alt="">
                                                        </div>
                                                    </div>
                                                    <hr>

                                                </div>
                                            @endif

                                            @if($hit['type'] == 'event')
                                                <div class="tab-pane fade" id="tab-events">
                                                    <div class="grid_head-info rad">
                                                        <div class="feed_user_info rad">
                                                            <div>
                                                                <img src="img/shawaz.jpg" class="lv-img feed_image rad"
                                                                     alt="">
                                                            </div>
                                                            <div>
                                                                <ul class="cancel_factory pl-20">
                                                                    <li><strong>Event Tittle</strong></li>
                                                                    <li class="">Location</li>
                                                                    <li><span class="small">Time</span></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="feed_icon_holder p-r-15">
                                                            <img src="img/icon-set-png/calendar.png"
                                                                 class="su_icon notify pull-right" alt="">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            @endif


                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection