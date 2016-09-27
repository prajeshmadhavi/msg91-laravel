@section('subjects')
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


                            <div class="panel panel-collapse feed_panel">

                            <br><br><br><br><br>
                            <h5>University Subjects </h5>
                            @foreach(university()->department as $department)
                                <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width&#45;&#45;custom no-padding grid_card listing">
                                    <ul class="p-0">
                                        <li>
                                            <div class="grid_head-info">
                                                <div class="feed_icon_holder">
                                                    <img src="{!! asset('assets/img/icon-set-png/graduate.png') !!}" class="su_icon notify inc" alt="">
                                                </div>
                                                <div class="feed_user_info">
                                                    <div class="capitalized">
                                                        <ul class="">
                                                            <li>{!! $department->name !!}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        @foreach($department->subjects()->wherePivot('university_id', university()->id)->get() as $subject)
                                            <li>
                                                <div class="listing grid_head-info panel-heading feed_panel-head" role="tab">
                                                    <div class="feed_icon_holder">
                                                        <img src="{!! asset('assets/img/icon-set-png/agenda.png') !!}" class="su_icon notify" alt="">
                                                    </div>
                                                    <div class="listing feed_user_info">
                                                        <div class="listing_info">
                                                            <ul>
                                                                <li><a href="/university/subject_details/{!! $subject->id !!}">{!! $subject->name !!}</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endforeach

                            </div>


                        </div>

                        <br><br><br><br><br><br><br><br><br>

                        <h5>Online Courses </h5>
                        @foreach(university()->courses as $course)

                           <a href="/university/course_details/{!! $course->id !!}/?course={!! $course->id !!}">
                               <div class="card col-lg-3 col-md-3 col-sm-3 adjusted__width--custom1 no-padding grid_card listing stat">
                                   <div class="stat_head">
                                       <div class="stat_img">
                                           <img src="{!! asset('assets/img/icon-set-png/graduate.png') !!}" class="su_icon notify inc" alt="">
                                       </div>
                                   </div>
                                   <div class="stat_head p-b-10">
                                       <div class="feed_user_info">
                                           <h5 class="f-25"> {!! $course->enrolled->count() !!} Enrolled</h5>
                                       </div>
                                   </div>
                                   <div class="stat_head p-t-0">
                                       <div class="feed_user_info">
                                           <h5 class="f-15">{!! $course->name !!}</h5>
                                       </div>
                                   </div>
                               </div>
                           </a>

                        @endforeach


                        <div class="tab-pane fade" data-toggle="tab" id="business_comm">
                            <div class="tab-content search_image1 pad">
                                <div class="card col-lg-12 col-md-12 col-sm-11 no-padding grid_card h">
                                    <div class="form-group ihe">
                                        <a href="#university_admin_subject" role="tab" data-toggle="tab" class="pull-left m-b-10">
                                            <i class="zmdi zmdi-chevron-left zmdi-hc-fw m-b-5">
                                            </i>
                                        </a>
                                        <div class="pull-left m-t-10">
                                            <img src="img/icon-set-png/blackboard.png" class="su_icon notify" alt="">
                                            <span><a href="" data-toggle="tab" aria-expanded="true">Principal of Management</a></span>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 p-t-5 p-l-0 p-r-0 bground">
                                            <div class="su bground">
                                                <div class="panel-group" data-collapse-color="teal" id="accordionTeal11" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-collapse feed_panel">
                                                        <div class="panel-heading feed_panel-head m-b-5" role="tab">
                                                            <div class="pull-left coosh2">
                                                                <img src="img/icon-set-png/mortarboard.png" class="su_icon notify" alt="">
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
                                                                                    <img src="img/icon-set-png/mortarboard.png" class="su_icon notify" alt="">
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
                                                                        <div class="media-body p-5">
                                                                            <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                <div class="pull-left">
                                                                                    <img src="img/shawaz.jpg" class="su_icon img-circle" alt="">
                                                                                </div>
                                                                                <div class="pull-left p-t-10">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-capitalize p-l-10">Mr P Venugopal
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/desk-lamp.png" class="su_icon notify" alt="">
                                                                                            <span>2,355</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/grades.png" class="su_icon notify" alt="">
                                                                                            <span>2,355</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body p-5">
                                                                            <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                <div class="pull-left">
                                                                                    <img src="img/shawaz.jpg" class="su_icon img-circle" alt="">
                                                                                </div>
                                                                                <div class="pull-left p-t-10">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-capitalize p-l-10">Mr P Venuchpal2
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/desk-lamp.png" class="su_icon notify" alt="">
                                                                                            <span>2,355</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/grades.png" class="su_icon notify" alt="">
                                                                                            <span>2,355</span>
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
                                                    <div class="panel panel-collapse feed_panel">
                                                        <div class="panel-heading feed_panel-head m-b-5" role="tab">
                                                            <div class="pull-left coosh2">
                                                                <img src="img/icon-set-png/desk-lamp.png" class="su_icon notify" alt="">
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
                                                                                    <img src="img/icon-set-png/graduate.png" class="su_icon notify" alt="">
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
                                                                        <div class="media-body p-5">
                                                                            <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                <div class="pull-left">
                                                                                    <img src="img/shawaz.jpg" class="su_icon img-circle" alt="">
                                                                                </div>
                                                                                <div class="pull-left p-t-10">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-capitalize p-l-10">Nikky Tander
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/desk-lamp.png" class="su_icon notify" alt="">
                                                                                            <span>95%</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/grades.png" class="su_icon notify" alt="">
                                                                                            <span>95%</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body p-5">
                                                                            <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                <div class="pull-left">
                                                                                    <img src="img/shawaz.jpg" class="su_icon img-circle" alt="">
                                                                                </div>
                                                                                <div class="pull-left p-t-10">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-capitalize p-l-10">suman Joshi
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/desk-lamp.png" class="su_icon notify" alt="">
                                                                                            <span>90%</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/grades.png" class="su_icon notify" alt="">
                                                                                            <span>90%</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="media-body p-5">
                                                                            <div class="col-sm-7 col-md-7 col-lg-7 no-padding">
                                                                                <div class="pull-left">
                                                                                    <img src="img/shawaz.jpg" class="su_icon img-circle" alt="">
                                                                                </div>
                                                                                <div class="pull-left p-t-10">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-capitalize p-l-10">Rakesh Smoff
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-sm-5 col-md-5 col-lg-5 no-padding">
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/desk-lamp.png" class="su_icon notify" alt="">
                                                                                            <span>92%</span>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="col-sm-6 col-md-6 p-t-5">
                                                                                    <ul class="info_aligner">
                                                                                        <li class="text-center">
                                                                                            <img src="img/icon-set-png/grades.png" class="su_icon notify" alt="">
                                                                                            <span>92%</span>
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