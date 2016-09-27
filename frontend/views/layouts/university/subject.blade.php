@section('subjects')
    active
@endsection

@extends('app')
@section('body')


    <section id="main" class="p-0">

        <section id="content">

            @include('partials.sidebar')

            <div class="scrollable">

                @include('partials.navigation')

                <div class="content_scroable-wrapper subject">
                    <div class="tab-content">
                        <div class="banner" id="tab-university_statistic">
                            <div class="card col-lg-12 col-md-12 col-sm-12 banner_inner">
                                <div class="col-sm-2 col-md-2 col-xs-4 p-r-0 adj">
                                    <div class="bs-item z-depth-1">
                                        <img src="{!! asset('assets/img/icon-set-png/agenda.png') !!}" class="su_icon notify inc1" alt="">
                                    </div>
                                </div>
                                <div class="col-sm-5 col-md-5 col-xs-4 p-l-0">
                                    <div class="banner_info">
                                        <h4>{!! university()->name !!} Subjects</h4>
                                        <span>{!! university()->address !!}</span>
                                    </div>
                                </div>
                                <div class="col-sm-2 col-md-2 col-xs-4 pull-right">
                                    <button class="more-options-button follow-btn-feed enrolled pull-right">
                                        <span data-toggle="modal" href="#modal-subject">ADD SUBJECT</span>
                                    </button>
                                </div>
                            </div>


                            <div>
                                <div class="tab-content search_image1 pad">
                                    <div class="card col-lg-12 col-md-12 col-sm-11 no-padding grid_card h">
                                        <div class="form-group ihe">
                                            <a href="#university_admin_subject" role="tab" data-toggle="tab" class="pull-left m-b-10">
                                                <i class="zmdi zmdi-chevron-left zmdi-hc-fw m-b-5">
                                                </i>
                                            </a>
                                            <div class="pull-left m-t-10">
                                                <img src="{!! asset('assets/img/icon-set-png/blackboard.png') !!}" class="su_icon notify" alt="">
                                                <span><a href="" data-toggle="tab" aria-expanded="true">{!! $subject->name !!}</a></span>
                                            </div>

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-5 p-l-0 p-r-0 bground">
                                                <div class="su bground">
                                                    <div class="panel-group" data-collapse-color="teal" id="accordionTeal11" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-collapse feed_panel">
                                                            <div class="panel-heading feed_panel-head m-b-5" role="tab">
                                                                <div class="pull-left coosh2">
                                                                    <img src="{!! asset('assets/img/icon-set-png/mortarboard.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                                <h4 class="panel-title feed_panel-title">
                                                                    <a data-toggle="collapse" class="feed_panel-toggler p-15 m-b-10" data-parent="#accordionTeal11" aria-expanded="true">
                                                                        INSTRUCTORS
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="collapse card_collapse" role="tabpanel">
                                                                <div class="card">
                                                                    <div class="card animated m-b-10">
                                                                        <div class="coosh1">
                                                                            <!--Row-->
                                                                            <div class="media-body p-5">
                                                                                <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
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
                                                                                <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                    <div class="col-sm-6 col-md-6 p-t-5">
                                                                                        <ul class="info_aligner">
                                                                                            <li class="text-capitalize text-center">created
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-6 col-md-6 p-t-5">
                                                                                        <ul class="info_aligner">
                                                                                            <li class="text-capitalize text-center">created
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!--ends-->
                                                                            @foreach($faculties as $faculty)

                                                                                <div class="media-body p-5">
                                                                                    <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                        <div class="pull-left">
                                                                                            <img src="{!! $faculty->avatar !!}" class="su_icon img-circle" alt="">
                                                                                        </div>
                                                                                        <div class="pull-left p-t-10">
                                                                                            <ul class="info_aligner">
                                                                                                <li class="text-capitalize p-l-10">
                                                                                                    {!! $faculty->name !!}
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                        <div class="col-sm-6 col-md-6 p-t-5">
                                                                                            <ul class="info_aligner">
                                                                                                <li class="text-center">
                                                                                                    <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" class="su_icon notify" alt="">
                                                                                                    <span>{!! $faculty->assignments->count() !!}</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="col-sm-6 col-md-6 p-t-5">
                                                                                            <ul class="info_aligner">
                                                                                                <li class="text-center">
                                                                                                    <img src="{!! asset('assets/img/icon-set-png/grades.png') !!}" class="su_icon notify" alt="">
                                                                                                    <span>{!! count($faculty->attendance) + count($faculty->result) !!}</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-collapse feed_panel">
                                                            <div class="panel-heading feed_panel-head m-b-5" role="tab">
                                                                <div class="pull-left coosh2">
                                                                    <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                                <h4 class="panel-title feed_panel-title">
                                                                    <a data-toggle="collapse" class="feed_panel-toggler p-15 m-b-10" data-parent="#accordionTeal11" aria-expanded="true">
                                                                        STUDENTS
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div class="collapse card_collapse" role="tabpanel">
                                                                <div class="card">
                                                                    <div class="card animated m-b-10">
                                                                        <div class="coosh1">
                                                                            <div class="media-body p-5">
                                                                                <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
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
                                                                                <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                    <div class="col-sm-6 col-md-6 p-t-5">
                                                                                        <ul class="info_aligner">
                                                                                            <li class="text-capitalize text-center">Completed
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                    <div class="col-sm-6 col-md-6 p-t-5">
                                                                                        <ul class="info_aligner">
                                                                                            <li class="text-capitalize text-center">Completed
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            @foreach($students as $student)

                                                                                <div class="media-body p-5">
                                                                                    <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                        <div class="pull-left">
                                                                                            <img src="{!! $student->avatar !!}" class="su_icon img-circle" alt="">
                                                                                        </div>
                                                                                        <div class="pull-left p-t-10">
                                                                                            <ul class="info_aligner">
                                                                                                <li class="text-capitalize p-l-10">
                                                                                                    {!! $student->name !!}
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                        <div class="col-sm-6 col-md-6 p-t-5">
                                                                                            <ul class="info_aligner">
                                                                                                <li class="text-center">
                                                                                                    <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" class="su_icon notify" alt="">
                                                                                                    <span>{!! $student->assignment->count() !!}</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                        <div class="col-sm-6 col-md-6 p-t-5">
                                                                                            <ul class="info_aligner">
                                                                                                <li class="text-center">
                                                                                                    <img src="{!! asset('assets/img/icon-set-png/grades.png') !!}" class="su_icon notify" alt="">
                                                                                                    <span>{!! $student->result->count() !!}</span>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
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