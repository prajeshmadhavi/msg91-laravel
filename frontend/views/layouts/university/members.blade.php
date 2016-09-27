@section('members')
    active
@endsection

@extends('app')
@section('body')


    <section id="main" class="p-0">

        <section id="content">

            @include('partials.sidebar')

            <div class="scrollable">

                {{--@include('partials.navigation')--}}

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
                                        <h4>{!! university()->name !!} Members</h4>
                                        <span>{!! university()->address !!}</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-xs-4 pull-right">
                                    <button class="more-options-button follow-btn-feed enrolled pull-right">
                                        <span data-toggle="modal" href="#modal-member">INVITE MEMBER</span>
                                    </button>
                                </div>
                            </div>

                            @foreach(university()->department as $department)

                                <div class="card col-lg-3 col-md-3 col-sm-3 adjusted__width--custom1 no-padding grid_card listing stat">
                                    <a href="/university/members_details/{!! $department->id !!}">
                                        <div class="stat_head">
                                            <div class="stat_img">
                                                <img src="{!! asset('assets/img/icon-set-png/graduate.png') !!}" class="su_icon notify inc" alt="">
                                            </div>
                                        </div>
                                        <div class="stat_head p-b-10">
                                            <div class="feed_user_info">
                                                <h5 class="f-25"> {!! count(university()->department_members($department)) !!} </h5>
                                            </div>
                                        </div>
                                        <div class="stat_head p-t-0">
                                            <div class="feed_user_info">
                                                <h5 class="f-15">{!! $department->name !!}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>

            </div>
            </div>
        </section>
    </section>


@endsection()






