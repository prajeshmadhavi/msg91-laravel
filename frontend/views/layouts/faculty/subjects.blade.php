@include('partials.header')

<body ng-app="socialUniversity">

@include('partials.post_forms')
@include('partials.navigation')

@include('flash::message')

<section id="main" class="p-0">
    <aside id="sidebar" class="sidebar su c-overflow ">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <img src="../assets/img/profile-pics/1.jpg" alt="">
                </div>

                <div class="profile-info">
                    POST SOMETHING

                    <i class="zmdi zmdi-caret-down"></i>

                </div>
            </a>

            <ul class="main-menu">
                <li>
                    <a  data-toggle="modal" href="#post_notes"><i class="zmdi zmdi-comment-edit zmdi-hc-fw"></i>Post Note</a>
                </li>

                <li>
                    <a href=""><i class="zmdi zmdi-upload zmdi-hc-fw"></i>Upload File</a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_question"><i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>Post Question</a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_project"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Post Project </a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_event"><i class="zmdi zmdi-time-restore"></i>Post Event</a>
                </li>
                <li>
                    <a data-toggle="modal" href="#post_assignment"><i class="zmdi zmdi-time-restore"></i>Post Assignment</a>
                </li>
                <li>
                    <a href=""><i class="zmdi zmdi-time-restore"></i>Post Report</a>
                </li>


            </ul>
        </div>
        <ul class="main-menu">
            <li>
                <a href="<!--#newsfeed-tab--> #subject-updates" aria-controls="home11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/high-school-1.png" class="su_icon header" alt="">
                    NEWSFEED
                </a>
            </li>
            <li>
                <a href="<!--#subject-tab--> #subject-lectures" aria-controls="profile11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/agenda.png" class="su_icon header" alt="">
                    SUBJECTS
                </a>

            </li>
            <li>
                <a href="#subject-assignments" aria-controls="messages11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/earth-globe.png" class="su_icon header" alt="">DEPARTMENT
                </a>
            </li>
            <li>
                <a href="<!--#university-tab-->#subject-reports" aria-controls="settings11" role="tab" data-toggle="tab">
                    <img src="../assets/img/icon-set-png/high-school.png" class="su_icon header" alt="">UNIVERSITY
                </a>
            </li>
        </ul>
    </aside>
    <section id="content ">

        <div class="container no-padding">
            <div class="coverphoto_section-wrapper">
                <div class="coverphoto__holder">
                    <img src="../assets/img/coverphoto.jpg" alt="" class="coverphoto">
                    <div class="userinfo__content--holder">
                        <div class="leftside__content">
                            <ul class="banner__user--info cancel_factory">
                                <li class="banner__img--holder">
                                    <img src="../assets/img/icon-set-png/agenda.png" alt="" class="su_icon header">
                                </li>
                                <li>
                                    <ul class="cancel_factory banner_info-text">
                                        <li class="gray">SUBJECTS</li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="rightside__content">
                            <!-- <label>
                            <span class="btn btn-primary follow_button-lgscr">
                                <input type="checkbox"class="check_follow" id="checkbox">
                                <span class="follow_tag" id="followingmessage">Follow</span>
                            </span>
                            </label>
                            <span class="follow_counter">123,456,789 Followers</span> -->
                            <div class="feed-inline-search-container">
                                <form action="">
                                    <input type="search" class="feed-inline-searchbar" placeholder="Search">
                                    <button type="submit" class="feed-inline-button">
                                        <i class="zmdi zmdi-search zmdi-hc-fw"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="padding-top">
                <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs p-10 n-p-t adjusted_marginleft-10">
                    <div class="col-lg-12 p-10 tab_toggle" style="background-color: white; border-radius: 5px;">
                        <ul class="cancel_factory">
                            <li class="gray p-10 active "><a href="#tab-subjectstats" data-toggle="tab" aria-expanded="true">my subjects</a></li>
                            <li class="gray p-10 "><a href="#tab-subjectusers" data-toggle="tab" aria-expanded="false">top subjects</a></li>
                            <li class="gray p-10"><a href="#tab-subjectcategory" data-toggle="tab">top enrolled subjects</a></li>
                            <li class="gray p-10"><a href="#tab-subjectlist" data-toggle="tab" aria-expanded="false">top rated subjects</a></li>
                            <li class="gray p-10"><a href="#tab-createnewsubject" data-toggle="tab">top featured subjects</a></li>
                        </ul>

                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab-subjectstats">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 n-p-t subject_gridview">
                            <div class="mm-top">

                                    @foreach($subjects as $value)

                                        <div class="card col-lg-4 col-md-4 col-sm-6 adjusted__width--custom no-padding grid_card">

                                                <div class="grid_head-info">
                                                    <div><img src="../assets/img/shawaz.jpg" class="lv-img feed_image" alt=""></div>
                                                    <div>
                                                        <ul class="cancel_factory pl-10">
                                                            <li>{!! $value['faculty']['name'] !!}</li>
                                                            <li>{!! $member->university->name !!}</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="grid_image-holder">
                                                    <a href="/subject_faculty?subject={!! $value['subject']['id'] !!}&department=n&faculty={!! $value['faculty']['id'] !!}" class="c-black">
                                                    <img src="../assets/img/profile-menu.png" alt="" class="grid_image-cover">
                                                    </a>
                                                </div>
                                                <div class="grid_footer-info">
                                                    <div>
                                                        <ul class="cancel_factory">
                                                            <li>{!! $value['subject']['name'] !!}</li>
                                                            <li><small>{!! get_enrolled($value['faculty']['id'], $value['subject']['id']) !!}  Enrolled</small></li>
                                                        </ul>
                                                    </div>
                                                </div>

                                        </div>

                                    @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab-subjectusers">
                        <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-subjectcategory">
                        <p>Duis eu eros vitae risus sollicitudin blandit in non nisi. Phasellus rhoncus ullamcorper pretium. Etiam et viverra neque, aliquam imperdiet velit. Nam a scelerisque justo, id tristique diam. Aenean ut vestibulum velit, vel ornare augue. Nullam eu est malesuada, vehicula ex in, maximus massa. Sed sit amet massa venenatis, tristique orci sed, eleifend arcu.</p>
                        <p>Aliquam tempus rutrum neque, a blandit dui. Proin quis elit non est scelerisque pharetra nec id libero. Quisque id tincidunt elit. Maecenas non mauris malesuada, interdum justo et, ullamcorper magna. Nulla libero risus, vestibulum pharetra eleifend in, aliquam ac odio. Sed ligula orci, rhoncus sit amet ipsum vel, vehicula interdum ligula. </p>
                    </div>
                    <div class="tab-pane fade" id="tab-subjectlist">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus purus sapien, cursus et egestas at, volutpat sed dolor. Aliquam sollicitudin dui ac euismod hendrerit. Phasellus quis lobortis dolor. Sed massa massa, sagittis nec fermentum eu, volutpat non lectus. Nullam vitae tristique nunc. Aenean vel placerat augue. Aliquam pharetra mauris neque, sit amet egestas risus semper non. Proin egestas egestas ex sed gravida. Suspendisse commodo nisl sit amet risus volutpat volutpat. Phasellus vitae turpis a elit tincidunt ornare. Praesent non libero quis libero scelerisque eleifend. Ut eleifend laoreet vulputate.</p>
                    </div>
                    <div class="tab-pane fade" id="tab-createnewsubject">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 p-10 n-p-t">
                            <div class="card mm-top">
                                <form class="p-20">
                                    <div class="form-group">
                                        <span class="">New Subject Registration</span>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="custom_form-control lb" placeholder="Department Name">
                                    </div>
                                    <div class="form-group">
                                        <select class="chosen" data-placeholder="Select Subject">
                                            <option value="United States">Select Subject</option>
                                            <option value="United States">Physics</option>
                                            <option value="United Kingdom">Electrical Theory of matter</option>
                                            <option value="Afghanistan">Zoology</option>
                                            <option value="Aland Islands">Applied Mathematics</option>
                                            <option value="Albania">Biology</option>
                                            <option value="Algeria">Chemistry</option>
                                            <option value="American Samoa">Fine Arts</option>
                                        </select>
                                    </div>

                                    <div class="form-group landing-page-footer-modalright" >
                                        <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                                        <button type="submit" class="btn landing-page">SUBMIT</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</section>


<!-- Javascript Libraries -->

@include('partials.scripts')


<!-- Following is only for demo purpose to trigger colored modals. You may ignore this when you implement -->
<script type="text/javascript">
    $(document).ready(function(){
        $('body').on('click', '#btn-color-targets > .btn', function(){
            var color = $(this).data('target-color');
            $('#modalColor').attr('data-modal-color', color);
        });
        $('.close_button').on('click',function(){
            $(this).closest('div.lv-item').fadeOut('slow');

        });
    });

</script>

</body>
</html>