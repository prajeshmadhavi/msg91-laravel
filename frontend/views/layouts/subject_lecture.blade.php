@section('subjects')
    active
@endsection

@extends('app')
@section('body')

    @if(is_faculty())
        <div class="modal fade" id="modal-addlectures" tabindex="-1"
             role="dialog" aria-hidden="true" data-backdrop="static"
             data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="p-20" method="post"
                          action="/faculty/postLecture">
                        <div class="form-group">
                            <span class="form_title">ADD LECTURE</span>
                            <hr>
                        </div>
                        <div class="form-group">
                            <input name="name" type="text"
                                   class="custom_form-control lb"
                                   placeholder="Lecture Title">
                            <input type="hidden" name="subject"
                                   value="{!! $subject->id!!}">
                        </div>
                        <div class="form-group">
                            <select name="subject"
                                    class="custom_form-control lb">
                                <option disabled selected>Select
                                    Subject
                                </option>
                                @foreach($faculty->subjects as $index)
                                    <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <select name="tags" class="chosen su"
                                    multiple data-placeholder="Tag">
                                @foreach($students as $index)
                                    <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group landing-page-footer-modalright">
                            <button type="button"
                                    class="btn landing-page"
                                    data-dismiss="modal"
                                    style="margin-right: 15px; background-color: #9B9B9B;">
                                CANCEL
                            </button>
                            <button type="submit"
                                    class="btn landing-page">SUBMIT
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

    <section id="main" class="p-0">

        <section id="content">

            <div class="content_wrapper">
                <!-------------------------------------side panel--------------------------------------->
                @include('partials.sidebar')

                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!--------------------------------------subject section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-subject">
                            <div class="tab-content">
                                <!--====================little fixed==================-->
                                <div class="tab-pane fade active in" id="tab-this">
                                    <div class="top_banner">
                                        <div class="col-sm-12 col-md-12 p-0">
                                            <img src="{!! assets('img/cal-header.jpg') !!}" alt="" class="banner_image">
                                        </div>
                                        <div class="col-sm-9 col-md-9 p-t-10">
                                            <div class="cancel_factory m-0">
                                                <div class="col-sm-2 col-md-2 no-padding">
                                                    <img src="{!! $faculty->avatar !!}" alt="" class="jumbotron_profile--img pull-left">
                                                </div>
                                                <div class="col-sm-7 col-md-7 no-padding text-capitalize text-muted" style="margin-left: 20px;">
                                                    <span class="heading">{!! $subject->name !!}</span><br>
                                                    <span class="text-muted">{!! $faculty->name !!}</span><br>
                                                    <span class="text-muted">{!! $faculty->university->name !!}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-3 col-md-3 col-lg-3 pull-right p-t-10">
                                            <button class="btn btn-primary follow">{!! is_student() ? 'Enrolled' : 'Teaching' !!}</button>
                                            <button class="btn btn-default m-l-10"><img src="{!! assets('img/icons/mail.svg') !!}" class="su_icon notify" alt=""></button>
                                            <button class="btn btn-default m-l-0"><img src="{!! assets('img/icons/card_menu.svg') !!}" class="su_icon notify" alt=""></button>
                                        </div>
                                    </div>
                                    <!--===========================end============================-->
                                    <div class="header_sub hi hidden-xs">
                                        <div class="header_padding">
                                            <ul class="tab-nav in p-l-10">
                                                <li class="">
                                                    <a href="#toggle-sub_updates" data-toggle="tab" aria-expanded="false">
                                                        Updates <span class="text-muted"> {!! count($updates) > 0 ? count($updates): '' !!}</span>
                                                    </a>
                                                </li>
                                                <li class="active">
                                                    <a href="#toggle-sub_lectures" data-toggle="tab" aria-expanded="true">
                                                        Lecture <span class="text-muted">{!! count($lectures) > 0 ? count($lectures): '' !!}</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_assignment" data-toggle="tab" aria-expanded="false">
                                                        Assignment<span class="text-muted"> {!! count($assignments) > 0 ? count($assignments): '' !!}</span>
                                                    </a>
                                                </li>
                                                <li class="p-l-10">
                                                    <a href="#toggle-sub_reports" data-toggle="tab" aria-expanded="false">
                                                        Reports<span class="text-muted">
                                                           {!! count($reports) > 0 ?   count($reports): '' !!}
                                                        </span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#toggle-sub_members" data-toggle="tab">
                                                        Members<span class="text-muted"> {!! count($students) > 0 ? count($students): '' !!}</span>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>

                                    <div class="tab-content">
                                        <!--------------------UPDATES-------------------->
                                        <div class="tab-pane fade in" data-toggle="tab" id="toggle-sub_updates" ng-controller="subjectUpdateController">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="updates.length > 0" ng-repeat="post in updates" ng-cloak>

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
                                                            <img src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="grid_image-holder">
                                                        <div ng-click="showLectureModal(post.id)">
                                                            <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
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
                                                                <li><small>@{{ post.created_at }}</small></li>

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
                                        <!-------------------------LECTURES-------------------------------->

                                        <div class="tab-pane fade active in" id="toggle-sub_lectures" ng-controller="subjectLecturesController">
                                            <div class="header_sub hi hidden-xs m-t-20">
                                                <div class="header_padding">
                                                    <ul class="tab-nav in p-l-5">
                                                        <li>
                                                            <a>
                                                                <span class="text-muted">{!! $lecture->name !!}</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="card col-lg-3 col-md-3 col-sm-3 added no-padding grid_card" ng-if="lectures.length > 0" ng-repeat="post in lectures" ng-cloak>

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
                                                        <img src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                                                    </div>
                                                </div>
                                                <div class="grid_image-holder">
                                                    <div ng-click="showLectureModal(post.id)">
                                                        <img src="@{{ post.preview_image }}" alt="" class="grid_image-cover">
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
                                                            <li><small>@{{ post.created_at }}</small></li>

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
                                        <!--------------------------------------------->

                                        <!------------------------ASSIGNMENT------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_assignment">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">
                                                <div class="table-responsive m-b-20">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox1">
                                                                    <span>Assignments of {!! $subject->name !!}</span>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        @foreach($assignments as $assignment)
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <i class="input-helper"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="report-list subject_list">
                                                                        <div class="report_info">
                                                                            <ul class="cancel_factory">
                                                                                <li>{!! $assignment->title !!}</li>
                                                                                <li>Due on {!! $assignment->due_date !!}</li>
                                                                            </ul>
                                                                        </div>
                                                                        {{--<div class="report_score">--}}
                                                                        {{--<span class="border-pass">80 / 100</span>--}}
                                                                        {{--</div>--}}
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!------------------------REPORTS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_reports">
                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">
                                                <div class="table-responsive m-b-20">
                                                    <table class="table table-striped">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="checkbox1">
                                                                    <span>Reports of {!! $subject->name !!}</span>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @foreach($reports as $report)
                                                            <tr>
                                                                <td>
                                                                    <div class="checkbox">
                                                                        <label>
                                                                            <input type="checkbox" value="">
                                                                            <i class="input-helper"></i>
                                                                        </label>
                                                                    </div>
                                                                    <div class="report-list subject_list">
                                                                        <div class="report_info">
                                                                            <ul class="cancel_factory">
                                                                                <li>{!! $report->subject->name !!}</li>
                                                                                <li>{!! $report->type == 'attendance' ?  $report->period : $report->title!!}</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="report_score">
                                                                            @if($report->type == 'attendance')
                                                                                <span class="{!! attendance_pass_fail($report->total_class, $report->class_attended) !!}"> {!! $report->class_attended . ' / '.  $report->total_class !!} </span>
                                                                            @endif
                                                                            @if($report->type == 'result')
                                                                                <span class="{!! result_pass_or_fail($report->total_mark, $report->result_mark) !!}">{!! $report->result_mark. ' / '. $report->total_mark !!}/span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <!------------------------MEMBERS---------------------------------->
                                        <div class="tab-pane fade" id="toggle-sub_members">

                                            <div class="col-lg-12 col-md-12 col-sm-12 p-t-20 bground">

                                                @foreach($students as $student)
                                                    <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                                        <div class="grid_image-holder member">
                                                            <a data-toggle="tab"
                                                               class="sub-toggle"
                                                               aria-expanded="true">
                                                                <img src="{!! assets('img/google_io_blog.png') !!}"
                                                                     alt=""
                                                                     class="grid_image-cover">
                                                            </a>
                                                        </div>
                                                        <div class="member_image">
                                                            <img src="{!! $student->avatar !!}"
                                                                 class="lv-img feed_image"
                                                                 alt="">
                                                        </div>
                                                        <div class="member_info2">
                                                            <h5>{!! $student->name !!}</h5>
                                                            <span class="text-muted">{!! university()->name !!}</span>
                                                        </div>

                                                        @if(is_student() && $student->id != user()->id)

                                                            <div ng-controller="followStudentController">

                                                                @if(user()->isFollowing('student', $student->id))

                                                                    <div class="feed_actions fill"
                                                                         style="background-color: #4A90E2; color: white;"
                                                                         id="{!! 'student_'.$student->id !!}"
                                                                         ng-click="follow_unfollow({!! $student->id !!})">
                                                                        <span> Following </span>
                                                                        <input type="hidden"
                                                                               value="1"
                                                                               id="{!! 'is_following_'.$student->id !!}">
                                                                    </div>
                                                                @else

                                                                    <div class="feed_actions fill"
                                                                         id="{!! 'student_'.$student->id !!}"
                                                                         ng-click="follow_unfollow({!! $student->id !!})">
                                                                        <span> Follow </span>
                                                                        <input type="hidden"
                                                                               value="0"
                                                                               id="{!! 'is_following_'.$student->id !!}">
                                                                    </div>

                                                                @endif
                                                            </div>

                                                        @else

                                                            <div ng-controller="followStudentController">

                                                                @if(user()->isFollowing('student', $student->id))

                                                                    <div class="feed_actions fill"
                                                                         style="background-color: #4A90E2; color: white;"
                                                                         id="{!! 'student_'.$student->id !!}"
                                                                         ng-click="follow_unfollow({!! $student->id !!})">
                                                                        <span> Following </span>
                                                                        <input type="hidden"
                                                                               value="1"
                                                                               id="{!! 'is_following_'.$student->id !!}">
                                                                    </div>
                                                                @else

                                                                    <div class="feed_actions fill"
                                                                         id="{!! 'student_'.$student->id !!}"
                                                                         ng-click="follow_unfollow({!! $student->id !!})">
                                                                        <span> Follow </span>
                                                                        <input type="hidden"
                                                                               value="0"
                                                                               id="{!! 'is_following_'.$student->id !!}">
                                                                    </div>

                                                                @endif
                                                            </div>

                                                        @endif

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

        </section>
    </section>


@endsection



