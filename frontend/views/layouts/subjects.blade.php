@section('subjects')
    active
@endsection

@extends('app')
@section('body')



    <section id="main" class="p-0">



        <section id="content ">

            <div class="content_wrapper">

                <!-------------------------------------side panel--------------------------------------->
                @include('partials.sidebar')


                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!--------------------------------------subject section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-subject">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab-mysubject">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="header_sub hi hidden-xs home">
                                            <div class="header_padding">
                                                <h5 class="text-muted p-l-10">UNIVERSITY SUBJECTS</h5>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach(user()->subjects as $subject)
                                        <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                            <div class="grid_image-holder">
                                                <a href="/subject_faculty?subject={!! $subject->id !!}&department=n&faculty={!!  $subject->faculty(university()->id)->id !!}">
                                                    <img src="{!!  assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                                </a>
                                            </div>
                                            <div class="grid_head-info">
                                                <div class="feed_user_info">
                                                    <ul class="cancel_factory pl-10">
                                                        <li><a class="f-15">{!! $subject->name !!}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="header_sub hi hidden-xs home">
                                            <div class="header_padding">
                                                <h5 class="text-muted p-l-10">ONLINE SUBJECTS</h5>
                                            </div>
                                        </div>
                                    </div>

                                    @if(is_student())

                                        @foreach(user()->enrolled_courses as $course)
                                             <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                        <div class="grid_image-holder">
                                            <a href="/subject_faculty?subject={!! $subject->id !!}&department=n&faculty={!!  $subject->faculty(university()->id)->id !!}">
                                                <img src="{!!  assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                            </a>
                                        </div>
                                        <div class="grid_head-info">
                                            <div class="feed_user_info">
                                                <ul class="cancel_factory pl-10">
                                                    <li><a class="f-15">{!! $course->name !!}</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                        @endforeach

                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>

@endsection