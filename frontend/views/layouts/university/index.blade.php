@section('stats')
    active
@endsection

@extends('app')
@section('body')


    <section id="main" class="p-0">

        <section id="content">

            @include('partials.sidebar')

            <div class="scrollable">

                <div class="content_scroable-wrapper subject">
                    <div class="tab-content">
                        <div class="banner" id="tab-university_statistic">
                            <div class="card col-lg-12 col-md-12 col-sm-12 banner_inner">
                                <div class="col-sm-2 col-md-2 col-xs-4 p-r-0 adj">
                                    <div class="bs-item z-depth-1">
                                        <img src="{!! asset('assets/img/icon-set-png/chemistry.png') !!}" class="su_icon notify inc1" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-5 col-xs-4 p-l-0">
                                    <div class="banner_info">
                                        <h4>{!! university()->name !!} Statistics</h4>
                                        <span>{!! university()->address !!}</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-xs-4 pull-right">
                                    <button class="more-options-button follow-btn-feed enrolled pull-right"><span>MANAGE PRIVACY</span></button>
                                </div>
                            </div>
                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card listing stat">
                                <div class="stat_head">
                                    <div class="stat_img">
                                        <img src="{!! asset('assets/img/icon-set-png/high-school.png') !!}" class="su_icon notify inc" alt="">
                                    </div>
                                    <div class="feed_user_info">
                                        <h5>University Statistics</h5>
                                    </div>
                                </div>
                                <ul class="p-0">
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Followers</li>
                                                <li class="text-right">{!! user()->followers_count() !!}</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>SU Ranked</li>
                                                <li class="text-right">382</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Mentions</li>
                                                <li class="text-right">12,42,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card listing stat">
                                <div class="stat_head">
                                    <div class="stat_img">
                                        <img src="{!! asset('assets/img/icon-set-png/graduate.png') !!}" class="su_icon notify inc" alt="">
                                    </div>
                                    <div class="feed_user_info">
                                        <h5>University Members</h5>
                                    </div>
                                </div>
                                <ul class="p-0">
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Scored</li>
                                                <li class="text-right">42,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Job Completed</li>
                                                <li class="text-right">382</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Followers</li>
                                                <li class="text-right">12,42,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card listing stat">
                                <div class="stat_head">
                                    <div class="stat_img">
                                        <img src="{!! asset('assets/img/icon-set-png/agenda.png') !!}" class="su_icon notify inc" alt="">
                                    </div>
                                    <div class="feed_user_info">
                                        <h5>University Course</h5>
                                    </div>
                                </div>
                                <ul class="p-0">
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Overall Assignment</li>
                                                <li class="text-right">95%</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Overall Report</li>
                                                <li class="text-right">76%</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Course Sold</li>
                                                <li class="text-right">93,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card listing stat">
                                <div class="stat_head">
                                    <div class="stat_img">
                                        <img src="{!! asset('assets/img/icon-set-png/newspaper.png') !!}" class="su_icon notify inc" alt="">
                                    </div>
                                    <div class="feed_user_info">
                                        <h5>University News</h5>
                                    </div>
                                </div>
                                <ul class="p-0">
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Views</li>
                                                <li class="text-right">1,23,44,268</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Shares</li>
                                                <li class="text-right">64,234,214</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Comments</li>
                                                <li class="text-right">12,93,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card listing stat">
                                <div class="stat_head">
                                    <div class="stat_img">
                                        <img src="{!! asset('assets/img/icon-set-png/calendar.png') !!}" class="su_icon notify inc" alt="">
                                    </div>
                                    <div class="feed_user_info">
                                        <h5>University Events</h5>
                                    </div>
                                </div>
                                <ul class="p-0">
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Scored</li>
                                                <li class="text-right">42,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Job Completed</li>
                                                <li class="text-right">382</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Followers</li>
                                                <li class="text-right">12,42,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card listing stat">
                                <div class="stat_head">
                                    <div class="stat_img">
                                        <img src="{!! asset('assets/img/icon-set-png/calculator.png') !!}" class="su_icon notify inc" alt="">
                                    </div>
                                    <div class="feed_user_info">
                                        <h5>University Payments</h5>
                                    </div>
                                </div>
                                <ul class="p-0">
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Paid</li>
                                                <li class="text-right">10,00,000</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Total Teachers Commision</li>
                                                <li class="text-right">12,32,455<strike>R</strike></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="listing grid_head-info">
                                            <ul>
                                                <li>Followers</li>
                                                <li class="text-right">12,42,345</li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </section>


@endsection()