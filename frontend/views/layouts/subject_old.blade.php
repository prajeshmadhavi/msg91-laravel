@section('subjects')
    active
@endsection

@extends('app')
@section('body')


    @if(is_faculty())
        <div class="modal fade" id="modal-addlectures" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="p-20" method="post" action="/faculty/postLecture">
                        <div class="form-group">
                            <span class="form_title">ADD LECTURE</span>
                            <hr>
                        </div>
                        <div class="form-group">
                            <input name="name" type="text" class="custom_form-control lb" placeholder="Lecture Title">
                            <input type="hidden" name="subject" value="{!! $subject->id!!}">
                        </div>
                         <div class="form-group">
                        <select name="subject" class="custom_form-control lb">
                            <option disabled selected>Select Subject</option>
                            @foreach($faculty->subjects as $index)
                                <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                            @endforeach
                                </select>
                            </div>
                        <div class="form-group">
                            <select name="tags" class="chosen su"  multiple data-placeholder="Tag">
                                @foreach($students as $index)
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
    @endif


    <section id="content ">

        @include('partials.sidebar')

        <div class="scrollable">

            @include('partials.navigation')

            < class="content_scroable-wrapper">
                <div class="tab-content">

                    <div>
                        <div class="tab-content m-20">

                            <!--====================fixed==================-->

                            <div class="tab-pane fade active in" id="tab-this">
                                <div class="top_banner">
                                    <div class="col-sm-4 col-md-4 hidden-xs">
                                        <div class="top_banner top_count pull-left">
                                            <h4 class="text-center">2k</h4><span>Score</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 col-md-4 he2">
                                        <ul class="cancel_factory m-0">
                                            <li>
                                                <img src="{!! $faculty->avatar !!}" alt="" class="jumbotron_profile--img">
                                            </li>
                                            <li class="text-capitalize text-muted"><span class="c-blue">{!! $subject->name !!}</span><br>
                                                <span class="text-muted">{!! $faculty->name !!}</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-4 col-md-4 hidden-xs">
                                        <div class="top_banner top_count pull-right">
                                            <h4 class="text-center">{!! $students->count() !!}</h4><span>Member</span>
                                        </div>
                                    </div>
                                </div>

                                <!--===========================end============================-->
                                <div class="card col-lg-12 col-md-12 col-sm-12 cent no-padding grid_card m-b-5">
                                    <div class="header_sub hi hidden-xs">
                                        <div class="header_padding">
                                            <ul class="tab-nav in">

                                                <!--<li class="active">
                                                    <a href="#toggle-sub_updates" data-toggle="tab" aria-expanded="true">
                                                        <img src="{!! asset('assets/img/icon-set-png/blackboard.png') !!}" class="su_icon header" alt="">
                                                        <span class="hidden-sm hidden-xs">Updates</span>
                                                    </a>
                                                </li> -->
                                                <li class="active">
                                                    <a href="#toggle-sub_lectures" data-toggle="tab" aria-expanded="true">
                                                        <img src="{!! asset('assets/img/icon-set-png/blackboard.png') !!}" class="su_icon header" alt="">
                                                        <span class="hidden-sm hidden-xs">Lectures</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_assignment" data-toggle="tab" aria-expanded="true">
                                                        <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" class="su_icon header" alt="">
                                                        <span class="hidden-sm hidden-xs">Assignment</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_reports" data-toggle="tab" aria-expanded="true">
                                                        <img src="{!! asset('assets/img/icon-set-png/grades.png') !!}" class="su_icon header" alt="">
                                                        <span class="hidden-sm hidden-xs">Reports</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_members" data-toggle="tab" aria-expanded="true">
                                                        <img src="{!! asset('assets/img/icon-set-png/graduate.png') !!}" class="su_icon header" alt="">
                                                        <span class="hidden-sm hidden-xs">Members</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="feed_actions">
                                            <button class="more-options-button follow-btn-feed enrolled"><span>{!! is_faculty() ? 'TEACHING'  :'ENROLLED' !!}</span></button>
                                            <button class="more-options-button" data-toggle="dropdown" aria-expanded="false"><i class="zmdi zmdi-more-vert zmdi-hc-fw"></i></button>
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


                                @if(is_faculty())
                                    <div class="follower-toggle-group">

                                        <div class="custom_search">
                                            <button class="mega__addmore--button" data-toggle="modal" href="#modal-addlectures">ADD LECTURE</button>
                                        </div>
                                    </div>
                                @endif




                                    <div class="tab-content">

                                        <div class="tab-pane fade active in" id="toggle-sub_lectures" ng-controller="lecturesController">
                                            <div class="su bground">

                                                <div class="panel-group" data-collapse-color="teal" id="accordionTeal1" role="tablist" aria-multiselectable="true">

                                                    @foreach($subject->lectures as $lecture)

                                                        <div class="panel panel-collapse feed_panel">




                                                            <div class="cfeed_panel-headl-md-3 col-sm-3 added2 no-padding grid_card feed_panel-head" role="tab">
                                                                <div class="grid_image-holder">

                                                                    <a href="" class="f-15  feed_panel-toggler" data-parent="#accordionTeal1" aria-expanded="true">
                                                                        <img src=" {!! asset('assets/img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                                    </a>


                                                                </div>
                                                                <div class="grid_head-info">
                                                                    <div class="feed_user_info">
                                                                        <ul class="cancel_factory pl-10">

                                                                                                                                       <li><a class="f-15  feed_panel-toggler" data-parent="#accordionTeal1" aria-expanded="true">
                                                                                    {!! $lecture->id .'. '. $lecture->name !!}

                                                                                </a>

                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>







                                                            <div class="collapse card_collapse" role="tabpanel">

                                                                <div class="col-lg-12 col-md-12 col-sm-12 user_view">

                                                                    @foreach($lecture->notes as $note)

                                                                        <div class="card col-lg-4 col-md-3 col-sm-4 adjusted__width--custom no-padding grid_card" ng-click="showLectureModal({!! $note['id'] !!})" ng-cloak>
                                                                            <div class="grid_head-info">
                                                                                <div class="feed_user_info">
                                                                                    <div><img src="{!! $note['poster']['avatar'] !!}" class="lv-img feed_image" alt=""></div>
                                                                                    <div>
                                                                                        <ul class="cancel_factory pl-10">
                                                                                            <li class="username-highlighted">
                                                                                                <a href="" ng-href="@{{  '/student/profile?student='+index.note.poster.id }}" ng-click="$event.stopPropagation()">
                                                                                                    {!! $note['poster']['name'] !!}
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                {!! $note['poster']['university']['name'] !!}
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div></div>
                                                                                <div class="feed_icon_holder">
                                                                                    <img src="{!! asset('assets/img/icon-set-png/pencil-1.png') !!}" class="su_icon notify" alt="">
                                                                                </div>
                                                                            </div>

                                                                            <div class="grid_image-holder">
                                                                                <img src="{!! $note['preview_image'] !!}" alt="" class="grid_image-cover">
                                                                            </div>
                                                                            <div class="grid_footer-info">
                                                                                <div>
                                                                                    <ul class="cancel_factory">
                                                                                        <li>
                                                                                            <div class="feed_description-head text_description" >
                                                                                                {!! $note['title'] !!}
                                                                                            </div>
                                                                                        </li>
                                                                                        <li><small>{!! $note['created_at'] !!}</small></li>

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
                                                                                    {!! count($note['likes']) !!}
                                                                                </span>
                                                                            </span>
                                                                                        </button>

                                                                                    </li>
                                                                                    <li>
                                                                                        <button>
                                                                                            <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                                                                <span class="feed_counter" >
                                                                                    {!! count($note['comments']) !!}
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

                                                    @endforeach

                                                </div>
                                            </div>
                                            <!--<div class="card animated m-b-0">
                                                <div class="card-header su">
                                                    <div class="media-body p-5" data-toggle="tab" aria-expanded="true" href="#lectureName" >
                                                        <div class="pull-left">
                                                            <img src="img/icon-set-png/blackboard.png" class="su_icon notify" alt="">
                                                        </div>
                                                        <div class="pull-left">
                                                            <ul class="info_aligner">
                                                                <li class="text-capitalize p-l-10">
                                                                    <a>1. Lecture Name</a><br>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="pull-right">
                                                            <ul class="info_aligner">
                                                                <li>
                                                                    <i class="fa fa-angle-right f-20" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="card animated m-b-0">
                                                <div class="card-header su">
                                                    <div class="media-body p-5" data-toggle="tab" aria-expanded="true" href="#lectureName" >
                                                        <div class="pull-left">
                                                            <img src="img/icon-set-png/blackboard.png" class="su_icon notify" alt="">
                                                        </div>
                                                        <div class="pull-left">
                                                            <ul class="info_aligner">
                                                                <li class="text-capitalize p-l-10">
                                                                    <a>1. Lecture Name</a><br>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="pull-right">
                                                            <ul class="info_aligner">
                                                                <li>
                                                                    <i class="fa fa-angle-right f-20" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="card animated m-b-0">
                                                <div class="card-header su">
                                                    <div class="media-body p-5" data-toggle="tab" aria-expanded="true" href="#lectureName" >
                                                        <div class="pull-left">
                                                            <img src="img/icon-set-png/blackboard.png" class="su_icon notify" alt="">
                                                        </div>
                                                        <div class="pull-left">
                                                            <ul class="info_aligner">
                                                                <li class="text-capitalize p-l-10">
                                                                    <a>1. Lecture Name</a><br>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="pull-right">
                                                            <ul class="info_aligner">
                                                                <li>
                                                                    <i class="fa fa-angle-right f-20" aria-hidden="true"></i>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />-->
                                        </div>


                                        <div class="tab-pane fade" id="toggle-sub_assignment">

                                           @if(is_student())

                                                @foreach(user()->assignment as $assignment)

                                                    <div class="card animated m-b-0">
                                                        <div class="card-header su">
                                                            <div class="media-body p-5">
                                                                <div class="pull-left p-t-5">
                                                                    <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                                <div class="pull-left">
                                                                    <ul class="info_aligner">
                                                                        <li class="text-capitalize p-l-10"><a href="">{!! $assignment->title !!}</a><br>
                                                                            <span class="text-muted">Due Date: {!! $assignment->due_date !!}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="info_aligner">
                                                                        <li>
                                                                            <span class="{!! assignment_status($assignment) !!} text-muted">{!! print_assignment_status($assignment) !!}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>

                                                @endforeach

                                           @endif

                                               @if(is_faculty())

                                                   @foreach($assignments as $assignment)

                                                       <div class="card animated m-b-0">
                                                           <div class="card-header su">
                                                               <div class="media-body p-5">
                                                                   <div class="pull-left p-t-5">
                                                                       <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" class="su_icon notify" alt="">
                                                                   </div>
                                                                   <div class="pull-left">
                                                                       <ul class="info_aligner">
                                                                           <li class="text-capitalize p-l-10"><a href="">{!! $assignment->title !!}</a><br>
                                                                               <span class="text-muted">Due Date: {!! $assignment->due_date !!}</span>
                                                                           </li>
                                                                       </ul>
                                                                   </div>
                                                                   {{--<div class="pull-right">--}}
                                                                       {{--<ul class="info_aligner">--}}
                                                                           {{--<li>--}}
                                                                               {{--<span class="{!! assignment_status($assignment) !!} text-muted">{!! print_assignment_status($assignment) !!}</span>--}}
                                                                           {{--</li>--}}
                                                                       {{--</ul>--}}
                                                                   {{--</div>--}}
                                                               </div>
                                                           </div>
                                                       </div>
                                                       <hr>

                                                   @endforeach

                                               @endif

                                        </div>

                                        <div class="tab-pane fade" id="toggle-sub_reports">

                                            @foreach($results as $result)
                                                <div class="card animated m-b-0">
                                                    <div class="card-header su">
                                                        <div class="media-body">
                                                            <div class="pull-left">
                                                                <img src="{!! asset('assets/img/icon-set-png/grades.png') !!}" class="su_icon notify" alt="">
                                                            </div>
                                                            <div class="pull-left">
                                                                <ul class="info_aligner">
                                                                    <li class="text-capitalize p-l-10 text-muted c-black"><a href="">{!! $result->title !!}</a><br>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="pull-right">
                                                                <ul class="info_aligner">
                                                                    <li>
                                                                        <span class="{!! result_pass_or_fail($result->pass_mark, $result->result_mark) !!} text-muted">{!! $result->result_mark !!}</span> / <span class="text-muted">{!! $result->total_mark!!}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr>
                                            @endforeach

                                                @foreach($attendances as $attendance)
                                                    <div class="card animated m-b-0">
                                                        <div class="card-header su">
                                                            <div class="media-body">
                                                                <div class="pull-left p-t-5">
                                                                    <img src="{!! asset('assets/img/icon-set-png/desk-chair.png') !!}" class="su_icon notify" alt="">
                                                                </div>
                                                                <div class="pull-left">
                                                                    <ul class="info_aligner">
                                                                        <li class="text-capitalize p-l-10 text-muted c-black"><a href="">{!! $attendance->total_class !!} classes | {!! $attendance->class_attended !!} attended</a><br>
                                                                            <span class="text-muted">{!! $attendance->period!!}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pull-right">
                                                                    <ul class="info_aligner">
                                                                        <li>
                                                                            <span class="{!! attendance_pass_fail($attendance->total_class, $attendance->class_attended) !!} text-muted">{!! attendance_percentage($attendance->total_class, $attendance->class_attended) !!}</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr />
                                                @endforeach

                                        </div>

                                        <div class="tab-pane fade" id="toggle-sub_members">
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
                                                    <div class="media-body p-5">
                                                        <div class="pull-left">
                                                            <img src="{!!  $faculty->avatar !!}" class="su_icon img-circle" alt="">
                                                        </div>
                                                        <div class="pull-left p-t-5">
                                                            <ul class="info_aligner">
                                                                <li class="text-capitalize p-l-10">
                                                                    {!! $faculty->name !!}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
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
                                                    <hr>
                                                    @if($students->count() > 0)
                                                    @foreach($students as $student)

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
                                                     <hr>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                            <hr>

                                        </div>

                                       
                                        
                                        <!-------------------------------end------------------------------------>

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