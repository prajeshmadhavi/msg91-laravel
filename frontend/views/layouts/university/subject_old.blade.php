@include('partials.header')

<body ng-app="socialUniversity">

@include('partials.post_forms')
@include('partials.navigation')



<section id="main" class="p-0">
    <aside id="sidebar" class="sidebar su c-overflow ">
        <div class="profile-menu">
            <a href="">
                <div class="profile-pic">
                    <img src="../assets/../assets/img/profile-pics/1.jpg" alt="">
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
                    <img src="../assets/../assets/img/icon-set-png/high-school-1.png" class="su_icon header" alt="">
                    NEWSFEED
                </a>
            </li>
            <li>
                <a href="#" aria-controls="profile11" role="tab" data-toggle="tab">
                    <img src="../assets/../assets/img/icon-set-png/agenda.png" class="su_icon header" alt="">
                    SUBJECTS
                </a>

            </li>
            <li>
                <a href="<!--#department-tab-->#subject-assignments" aria-controls="messages11" role="tab" data-toggle="tab">
                    <img src="../assets/../assets/img/icon-set-png/earth-globe.png" class="su_icon header" alt="">DEPARTMENT
                </a>
            </li>
            <li>
                <a href="<!--#university-tab-->#subject-reports" aria-controls="settings11" role="tab" data-toggle="tab">
                    <img src="../assets/../assets/img/icon-set-png/high-school.png" class="su_icon header" alt="">UNIVERSITY
                </a>
            </li>
        </ul>
    </aside>
    <section id="content">
        <div class="container no-padding">
            <div class="coverphoto_section-wrapper">
                <div class="coverphoto__holder">
                    <img src="../assets/../assets/img/coverphoto.jpg" alt="" class="coverphoto">
                    <div class="userinfo__content--holder">
                        <div class="leftside__content">
                            <ul class="banner__user--info cancel_factory">
                                <li class="banner__img--holder"> <img src="{!! $faculty->avatar !!}" alt="" class="jumbotron_profile--img"></li>
                                <li>
                                    <ul class="cancel_factory banner_info-text">
                                        <li class="username-highlighted">{!! $subject->name !!}</li>
                                        <li>{!! $faculty->name !!}</li>
                                        {{--<li class="username-highlighted">{!! $faculty->university->name !!}</li>--}}
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="rightside__content" ng-controller="followController">
                            <span class="enrolled_status">ENROLLED</span>
                            <span class="follow_counter">{!! count($students) !!} ENROLLED</span>

                        </div>
                    </div>
                </div>
            </div>

            <div class="padding-top">
                <div class=" parent__wrapper--content">
                    <div class="card col-lg-3 col-md-3 col-sm-3 hidden-xs right-bar su lefthandedbar">
                        <div class="col-lg-12 assignment_panel2">
                            <div class="listview left-side-bar">

                                <div class="lv-body left-side-bar">
                                    <ul class="left_side-listmenu">
                                        <li href="#subject-updates" data-toggle="tab" aria-expanded="true" class="left_side-listmenu-item">
                                            <table class="left_side-listmenu-table">
                                                <tr class="menu_item-row">
                                                    <td class="menu_icon-holder"><img src="../assets/../assets/img/icon-set-png/atom.png" class="su_icon" alt=""></td>
                                                    <td class="menu_label">updates</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li href="#subject-lectures" data-toggle="tab" aria-expanded="false" class="left_side-listmenu-item">
                                            <table class="left_side-listmenu-table">
                                                <tr class="menu_item-row">
                                                    <td class="menu_icon-holder"><img src="../assets/../assets/img/icon-set-png/blackboard.png" class="su_icon" alt=""></td>
                                                    <td class="menu_label">Lectures</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li href="#subject-reports" data-toggle="tab" aria-expanded="false" class="left_side-listmenu-item">
                                            <table class="left_side-listmenu-table">
                                                <tr class="menu_item-row">
                                                    <td class="menu_icon-holder"><img src="../assets/../assets/img/icon-set-png/newspaper.png" class="su_icon" alt=""></td>
                                                    <td class="menu_label">reports</td>
                                                </tr>
                                            </table>
                                        </li>
                                        <li href="#subject-members" data-toggle="tab" aria-expanded="false" class="left_side-listmenu-item">
                                            <table class="left_side-listmenu-table">
                                                <tr class="menu_item-row">
                                                    <td class="menu_icon-holder"><img src="../assets/../assets/img/icon-set-png/graduate.png" class="su_icon" alt=""></td>
                                                    <td class="menu_label">Members</td>
                                                </tr>
                                            </table>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card su col-lg-6 col-md-6 col-sm-6 col-xs-12 middlefeed">
                        <div class="card-body card-padding su">
                            <div role="tabpanel">
                                <div class="tab-content su">
                                    <div role="tabpanel" class="tab-pane " id="newsfeed-tab">
                                        <div class="card">
                                            <div class="card-header su">
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                    </div>

                                                    <div class="media-body m-t-5">
                                                        <div class="pull-left">
                                                            <ul class="info_aligner">
                                                                <li class="username-highlighted">John Doe</li>
                                                                <li><small>Manipal University</small></li>
                                                                <li class="time_notify"><small>13 mins ago</small></li>
                                                            </ul>
                                                            <!--  <span class="time_notify">13 mins ago</span>-->
                                                        </div>
                                                        <!--    <div class="pull-right">
                                                                <ul class="info_aligner">
                                                                    <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                    <li><small>12,345,6789 enrolled</small></li>
                                                                </ul>
                                                            </div>-->
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="card-body">

                                                <div class="wall-comment-list su">
                                                    <div class="row document_details">
                                                        <div class="details_wrapper">
                                                            <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                            <ul>
                                                                <li>Name of document.pdf</li>
                                                                <li>Chapter 2: Name of Chapter</li>
                                                                <li>Enviroment and Technology with urban Development</li>
                                                            </ul>
                                                        </div>
                                                        <div class="row">
                                                            <button class="btn btn-primary waves-effect">View Document</button>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-header footer">
                                                <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                </p>
                                                <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                    <li class="wa-stats">
                                                        <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                        <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                    </li>
                                                    <li class="wa-users dropdown">
                                                        <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                        <ul class="dropdown-menu dm-icon su pull-right">
                                                            <li class="divider hidden-xs"></li>
                                                            <li class="hidden-xs">
                                                                <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane active" id="subject-tab">
                                        <div class="card toogle-group-pane">
                                            <div class="card-body card-padding su">
                                                <div role="tabpanel">
                                                    <div class="tab-content su">
                                                        <div role="tabpanel" class="tab-pane active" id="subject-updates">

                                                            <div class="card animated fadeIn">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of Jide.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div role="tabpanel" class="tab-pane" id="subject-lectures">

                                                            <div class=" animated fadeIn">
                                                                <div class="follower-toggle-group">
                                                                    <div class="custom_search">
                                                                        <input type="search" class="search_box col-xs-11" placeholder="Search Lectures Topics">
                                                                        <button type="submit" class="search_box-button"><i class="zmdi zmdi-search zmdi-hc-fw search_box-icon"></i></button>
                                                                    </div>
                                                                </div>

                                                                @if(is_faculty())

                                                                    <div class="follower-toggle-group">
                                                                        <div class="custom_search">
                                                                            <button class="mega__addmore--button" data-toggle="modal" href="#modal-addlectures">ADD LECTURE</button>
                                                                        </div>
                                                                    </div>

                                                                @endif

                                                                @foreach($lectures as $lecture)
                                                                    <div class="panel-group" data-collapse-color="teal" id="accordionTeal" role="tablist" aria-multiselectable="true">
                                                                        <div class="panel panel-collapse feed_panel">
                                                                            <div class="panel-heading feed_panel-head" role="tab">
                                                                                <h4 class="panel-title feed_panel-title">
                                                                                    <a data-toggle="collapse" class="feed_panel-toggler" data-parent="#accordionTeal" aria-expanded="true">
                                                                                        <img src="../assets/img/icon-set-png/homework.png" class="su_icon feed_icon m-l-17" alt=""> Lecture {!! $lecture->id !!}: {!! $lecture->name !!}
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div class="collapse card_collapse" role="tabpanel">

                                                                                @foreach($lecture->note as $note)

                                                                                    <div class="card">
                                                                                        <div class="card-header su">
                                                                                            <div class="media">
                                                                                                <div class="pull-left">
                                                                                                    <img class="lv-img feed_image" src="../assets/../assets/img/shawaz.jpg" alt="">
                                                                                                </div>

                                                                                                <div class="media-body m-t-5">
                                                                                                    <div class="pull-left">
                                                                                                        <ul class="info_aligner feed">
                                                                                                            <li class="username-highlighted">{!! $note->poster()->name !!}</li>
                                                                                                            <li><small>{!! $note->poster()->university->name  !!}</small></li>
                                                                                                            <li class="time_notify">
                                                                                                                <img src="../assets/img/icon-set-png/pencil-1.png" class="su_icon notify" alt="">
                                                                                                            </li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="card-body card-padding">

                                                                                            <div class="feeds-uploaded-images">
                                                                                                <div class="wall-img-preview lightbox clearfix">
                                                                                                    <div class="wip-item" data-src="{!! $note->preview_image !!}" style="background-image: url({!! $note->preview_image !!});">
                                                                                                        <img src="{!! $note->preview_image !!}">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="feed__context">
                                                                                                    <div class="feed_description-head text_description">
                                                                                                        Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere.
                                                                                                        Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien.
                                                                                                        Integer vitae eros nulla. Lorem ipsum dolor sit amet,
                                                                                                        consectetur adipiscing elit. Aliquam consectetur venenatis blandit.
                                                                                                        Praesent vehicula, libero non pretium vulputate, lacus arcu facilisis lectus,
                                                                                                        sed feugiat tellus nulla eu dolor. Nulla porta bibendum lectus quis euismod. Aliquam volutpat ultricies porttitor.
                                                                                                        Cras risus nisi, accumsan vel cursus ut, sollicitudin vitae dolor. Fusce scelerisque eleifend lectus in bibendum.
                                                                                                        Suspendisse lacinia egestas felis a volutpat.

                                                                                                    </div>
                                                                                                    <button type="button" class="readmore__button">Read more<i class="zmdi zmdi-caret-down zmdi-hc-fw"></i></button>

                                                                                                </div>
                                                                                                <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                                                    <li class="wa-stats">
                                                                                                        <span><i class="zmdi zmdi-comments"></i> 20</span>
                                                                                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 78</span>
                                                                                                    </li>

                                                                                                    <li class="wa-users">
                                                                                                        <a href=""><img src="../assets/img/profile-pics/2.jpg" alt=""></a>
                                                                                                        <a href=""><img src="../assets/img/profile-pics/3.jpg" alt=""></a>
                                                                                                    </li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="wall-comment-list">

                                                                                            <!-- Comment Listing -->

                                                                                            <div class="wcl-list comments_list">
                                                                                                <div class="media comment_container">
                                                                                                    <a href="" class="pull-left">
                                                                                                        <img src="../assets/img/profile-pics/3.jpg" alt="" class="lv-img-sm">
                                                                                                    </a>

                                                                                                    <div class="media-body">
                                                                                                        <a href="" class="a-title">Samantha Diaz</a> <small class="c-gray m-l-10">1 hour ago...</small>
                                                                                                        <p class="m-t-5 m-b-0 ">
                                                                                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                                                                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                                                                                        </p>
                                                                                                    </div>

                                                                                                    <ul class="actions">
                                                                                                        <li class="dropdown" dropdown="">
                                                                                                            <a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                                                <i class="zmdi zmdi-more-vert"></i>
                                                                                                            </a>

                                                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                                                <li>
                                                                                                                    <a href="">Report</a>
                                                                                                                </li>
                                                                                                                <li>
                                                                                                                    <a href="">Delete</a>
                                                                                                                </li>
                                                                                                            </ul>
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                            </div>

                                                                                            <!-- Comment form -->
                                                                                            <div class="wcl-form">
                                                                                                <div class="wc-comment">
                                                                                                    <div class="wcc-inner wcc-toggle comment__input--feed">
                                                                                                        Write Something...
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                @endforeach

                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                @endforeach

                                                            </div>
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane" id="subject-assignments">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div role="tabpanel" class="tab-pane" id="subject-reports">
                                                            <div class=" animated fadeIn">
                                                                <div class="follower-toggle-group">
                                                                    <ul class="tab-nav tn-justified tn-icon follower-toggle-container" role="tablist">
                                                                        <li role="presentation" class="active follower-toggle-item left">
                                                                            <a class="col-sx-4" href="#tab-media" aria-controls="tab-1" role="tab" data-toggle="tab">
                                                                                Assignments
                                                                            </a>
                                                                        </li>
                                                                        <li role="presentation" class="follower-toggle-item">
                                                                            <a class="col-xs-4" href="#tab-document" aria-controls="tab-2" role="tab" data-toggle="tab">
                                                                                Attendance
                                                                            </a>
                                                                        </li>
                                                                        <li role="presentation" class="follower-toggle-item right">
                                                                            <a class="col-xs-4" href="#tab-results" aria-controls="tab-2" role="tab" data-toggle="tab">
                                                                                Results
                                                                            </a>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <div class="card overflow c-overflow">
                                                                    <div class="card-body">
                                                                        <div class="tab-content p-1 no-padding">
                                                                            <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-media">
                                                                                <div class="listview">
                                                                                    <div class="lv-body">

                                                                                        <a class="lv-item" href="">
                                                                                            <div class="media">
                                                                                                <div class="pull-left">
                                                                                                    <img class="lv-img-sm left_bar-menu" src="../assets/../assets/img/icon-set-png/desk-lamp.png" alt="">
                                                                                                </div>

                                                                                                <div class="media-body m-t-5">
                                                                                                    <div class="pull-left">
                                                                                                        <ul class="info_aligner">
                                                                                                            <li class="username-highlighted">John Doe</li>
                                                                                                            <li class="due_date"><small class="gray">Manipal University</small></li>
                                                                                                            <li class="time_notify"><span class="gray">pending</span></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>
                                                                                        <a class="lv-item" href="">
                                                                                            <div class="media">
                                                                                                <div class="pull-left">
                                                                                                    <img class="lv-img-sm left_bar-menu" src="../assets/../assets/img/icon-set-png/desk-lamp.png" alt="">
                                                                                                </div>

                                                                                                <div class="media-body m-t-5">
                                                                                                    <div class="pull-left">
                                                                                                        <ul class="info_aligner">
                                                                                                            <li class="username-highlighted">John Doe</li>
                                                                                                            <li class="due_date"><small class="gray">Manipal University</small></li>
                                                                                                            <li class="time_notify"><span class="username-highlighted">completed</span></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>


                                                                                        <a class="lv-item" href="">
                                                                                            <div class="media">
                                                                                                <div class="pull-left">
                                                                                                    <img class="lv-img-sm left_bar-menu" src="../assets/../assets/img/icon-set-png/desk-lamp.png" alt="">
                                                                                                </div>

                                                                                                <div class="media-body m-t-5">
                                                                                                    <div class="pull-left">
                                                                                                        <ul class="info_aligner">
                                                                                                            <li class="username-highlighted">John Doe</li>
                                                                                                            <li class="due_date"><small class="gray">Manipal University</small></li>
                                                                                                            <li class="time_notify"><span class="completed">Approved</span></li>
                                                                                                        </ul>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </a>

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-document">
                                                                                <div class="listview">
                                                                                    <div class="lv-body">

                                                                                        @if($attendance->count() > 0)

                                                                                            @foreach($attendance as $key => $value)

                                                                                                <a class="lv-item" href="">
                                                                                                    <div class="media">
                                                                                                        <div class="pull-left">
                                                                                                            <img class="lv-img-sm left_bar-menu" src="../assets/../assets/img/icon-set-png/desk-lamp.png" alt="">
                                                                                                        </div>

                                                                                                        <div class="media-body m-t-5">
                                                                                                            <div class="pull-left">
                                                                                                                <ul class="info_aligner">
                                                                                                                    <li class="username-highlighted">{!! $value->class_attended !!} classes | {!! $value->total_class !!} classes</li>
                                                                                                                    <li class="due_date" style="text-align: center;"><small class="gray">{!! $value->period!!}</small></li>
                                                                                                                    <li class="time_notify"><span class="{!! attendance_pass_fail($value->total_class, $value->class_attended) !!}">{!! attendance_percentage($value->total_class, $value->class_attended) !!}</span></li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>

                                                                                            @endforeach
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-results">
                                                                                <div class="listview">
                                                                                    <div class="lv-body">

                                                                                        @if($results->count() > 0)
                                                                                            @foreach($results as $value)
                                                                                                <a class="lv-item" href="">
                                                                                                    <div class="media">
                                                                                                        <div class="pull-left">
                                                                                                            <img class="lv-img-sm left_bar-menu" src="../assets/../assets/img/icon-set-png/grades.png" alt="">
                                                                                                        </div>

                                                                                                        <div class="media-body m-t-5">
                                                                                                            <div class="pull-left">
                                                                                                                <ul class="info_aligner">
                                                                                                                    <li class="no-highlight pushed-top">{!! $value->title !!}</li>
                                                                                                                    <li class="time_notify pushed-top"><span class="{!! result_pass_or_fail($value->pass_mark, $value->result_mark) !!}">{!! $value->result_mark !!}</span><span class="no-highlight">/{!! $value->total_mark!!}</span></li>
                                                                                                                </ul>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </a>
                                                                                            @endforeach
                                                                                        @endif

                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <!--==================== Members =================================-->

                                                        <div role="tabpanel" class="tab-pane" id="subject-members">
                                                            <div class="card animated fadeIn m-b-10">
                                                                <div class="card-header su">
                                                                    <div class="media-body m-t-5 p-5">
                                                                        <img src="../assets/../assets/img/icon-set-png/mortarboard.png" alt="" class="su_icon p-b-5 p-t-5 f-700">
                                                                        <span class="p-l-10">INSTRUCTOR</span>
                                                                        <div class="p-t-5">
                                                                            <img class="lv-img" src="{!! $faculty->avatar !!}" alt="">
                                                                            <span class="p-l-5 p-t-10">{!! $faculty->name !!}</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeIn  m-b-10">
                                                                <div class="card-header su">
                                                                    <div class="media-body m-t-5 p-5">
                                                                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                                                                            <div class="panel panel-collapse m-0    ">
                                                                                <div class="panel-heading" role="tab" id="headingOne">
                                                                                    <img class="lv-img-sm pull-left p-t-5 m-r-10" src="../assets/../assets/img/icon-set-png/graduate.png" alt="">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" class="p-15 m-t-5 collapsed" data-parent="#accordion" href="#student-1" aria-expanded="false" aria-controls="collapseOne">
                                                                                            STUDENTS
                                                                                        </a>
                                                                                    </h4>
                                                                                </div>
                                                                                <div id="student-1" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                    <div class="panel-body text-justify">
                                                                                        @if($students->count() > 0)
                                                                                            @foreach($students as $student)

                                                                                                <div class="p-t-5">
                                                                                                    <a href="/student/profile?student={!! $student->id !!}">
                                                                                                        <img class="lv-img-sm" src="{!! $student->avatar !!}" alt="">
                                                                                                    </a>
                                                                                                    <span class="p-l-15 p-t-10">{!! $student->name !!}</span>
                                                                                                </div>

                                                                                            @endforeach
                                                                                        @endif
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeIn m-b-10">
                                                                <div class="card-header su">
                                                                    <div class="media-body m-t-5 p-5">
                                                                        <div class="panel-group" role="tablist" aria-multiselectable="true">
                                                                            <div class="panel panel-collapse m-0    ">
                                                                                <div class="panel-heading" role="tab" id="headingtwo">
                                                                                    <img class="lv-img-sm pull-left p-t-5 m-r-10" src="../assets/../assets/img/icon-set-png/graduate.png" alt="">
                                                                                    <h4 class="panel-title">
                                                                                        <a data-toggle="collapse" class="p-15 m-t-5 collapsed" data-parent="#accordion" href="#certified-1" aria-expanded="false" aria-controls="collapseOne">
                                                                                            CERTIFIED
                                                                                        </a>
                                                                                    </h4>
                                                                                </div><hr class="m-0">
                                                                                <div id="certified-1" class="collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                                                    <div class="panel-body text-justify">
                                                                                        <!-- <div class="p-t-5">
                                                                                            <img class="lv-img-sm" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                                            <span class="p-l-15 p-t-10">MEMBER NAME</span>
                                                                                        </div> -->

                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--==================== Members =================================-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="department-tab">
                                        <div class="card toogle-group-pane">
                                            <div class="card-header su toggle-group">
                                                <div class="media toggle-group">
                                                    <div class="pull-left">
                                                        <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                    </div>

                                                    <div class="media-body m-t-5">
                                                        <!--  <div class="pull-left">
                                                              <ul class="info_aligner">
                                                                  <li class="username-highlighted">John Doe</li>
                                                                  <li><small>Manipal University</small></li>
                                                                  <li class="time_notify"><small>13 mins ago</small></li>
                                                              </ul>
                                                              &lt;!&ndash;  <span class="time_notify">13 mins ago</span>&ndash;&gt;
                                                          </div>-->
                                                        <div class="pull-right">
                                                            <ul class="info_aligner2">
                                                                <li><button class="btn btn-primary btn-sm waves-effect">ENROLLED</button></li>
                                                                <li><small>12,345,6789 enrolled</small></li>
                                                            </ul>

                                                        </div>


                                                    </div>

                                                </div>
                                                <ul class="tab-nav su" role="tablist">
                                                    <li class="active"><a href="#department-updates" aria-controls="home11" role="tab" data-toggle="tab" aria-expanded="true">Updates</a></li>
                                                    <li class=""><a href="#department-projects" aria-controls="profile11" role="tab" data-toggle="tab" aria-expanded="true">Projects</a></li>
                                                    <li class=""><a href="#department-forum" aria-controls="messages11" role="tab" data-toggle="tab" aria-expanded="true">Forum</a></li>
                                                    <li class=""><a href="#department-jobs" aria-controls="settings11" role="tab" data-toggle="tab" aria-expanded="true">Jobs</a></li>
                                                    <li class=""><a href="#department-members" aria-controls="settings11" role="tab" data-toggle="tab" aria-expanded="true">Members</a></li>
                                                    <li class="su more-setting pull-right">
                                                        <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                                                        <ul class="dropdown-menu dm-icon pull-right">
                                                            <li class="skin-switch hidden-xs">
                                                                <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                                                <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                                                <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                                                <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                                                <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                                                <span class="ss-skin bgm-blue" data-skin="blue"></span>
                                                            </li>
                                                            <li class="divider hidden-xs"></li>
                                                            <li class="hidden-xs">
                                                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                                                            </li>
                                                            <li>
                                                                <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="card-body card-padding su">
                                                <div role="tabpanel">
                                                    <div class="tab-content">
                                                        <div role="tabpanel animated fadeInRight" class="tab-pane active" id="department-updates">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel animated fadeInRight" class="tab-pane" id="department-projects">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div role="tabpanel animated fadeInRight" class="tab-pane" id="department-forum">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel animated fadeInRight" class="tab-pane" id="department-jobs">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div role="tabpanel animated fadeInRight" class="tab-pane" id="department-members">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
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
                                    <div role="tabpanel" class="tab-pane" id="university-tab">
                                        <div class="card toogle-group-pane">
                                            <div class="card-header su toggle-group">
                                                <div class="media toggle-group">
                                                    <div class="pull-left">
                                                        <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                    </div>

                                                    <div class="media-body m-t-5">
                                                        <!--  <div class="pull-left">
                                                              <ul class="info_aligner">
                                                                  <li class="username-highlighted">John Doe</li>
                                                                  <li><small>Manipal University</small></li>
                                                                  <li class="time_notify"><small>13 mins ago</small></li>
                                                              </ul>
                                                              &lt;!&ndash;  <span class="time_notify">13 mins ago</span>&ndash;&gt;
                                                          </div>-->
                                                        <div class="pull-right">
                                                            <ul class="info_aligner2">
                                                                <li><button class="btn btn-primary btn-sm waves-effect">ENROLLED</button></li>
                                                                <li><small>12,345,6789 enrolled</small></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                </div>
                                                <ul class="tab-nav su" role="tablist">
                                                    <li class="active"><a href="#university-updates" aria-controls="home11" role="tab" data-toggle="tab" aria-expanded="true">Updates</a></li>
                                                    <li class=""><a href="#university-events" aria-controls="profile11" role="tab" data-toggle="tab" aria-expanded="true">Events</a></li>
                                                    <li class=""><a href="#university-news" aria-controls="messages11" role="tab" data-toggle="tab" aria-expanded="true">News</a></li>
                                                    <li class=""><a href="#university-library" aria-controls="settings11" role="tab" data-toggle="tab" aria-expanded="true">Library</a></li>
                                                    <li class=""><a href="#university-members" aria-controls="settings11" role="tab" data-toggle="tab" aria-expanded="true">Members</a></li>
                                                    <li class="su more-setting pull-right">
                                                        <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon zmdi zmdi-more-vert"></i></a>
                                                        <ul class="dropdown-menu dm-icon pull-right">
                                                            <li class="skin-switch hidden-xs">
                                                                <span class="ss-skin bgm-lightblue" data-skin="lightblue"></span>
                                                                <span class="ss-skin bgm-bluegray" data-skin="bluegray"></span>
                                                                <span class="ss-skin bgm-cyan" data-skin="cyan"></span>
                                                                <span class="ss-skin bgm-teal" data-skin="teal"></span>
                                                                <span class="ss-skin bgm-orange" data-skin="orange"></span>
                                                                <span class="ss-skin bgm-blue" data-skin="blue"></span>
                                                            </li>
                                                            <li class="divider hidden-xs"></li>
                                                            <li class="hidden-xs">
                                                                <a data-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                                                            </li>
                                                            <li>
                                                                <a data-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                                                            </li>
                                                            <li>
                                                                <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="card-body card-padding su">
                                                <div role="tabpanel">
                                                    <div class="tab-content">
                                                        <div role="tabpanel" class="tab-pane active " id="university-updates">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="university-events">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="university-news">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img feed_image" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="university-library">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div role="tabpanel" class="tab-pane " id="university-members">
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="card animated fadeInRight">
                                                                <div class="card-header su">
                                                                    <div class="media">
                                                                        <div class="pull-left">
                                                                            <img class="lv-img" src="../assets/../assets/img/profile-pics/1.jpg" alt="">
                                                                        </div>

                                                                        <div class="media-body m-t-5">
                                                                            <div class="pull-left">
                                                                                <ul class="info_aligner">
                                                                                    <li class="username-highlighted">John Doe</li>
                                                                                    <li><small>Manipal University</small></li>
                                                                                    <li class="time_notify"><small>13 mins ago</small></li>
                                                                                </ul>
                                                                                <!--  <span class="time_notify">13 mins ago</span>-->
                                                                            </div>
                                                                            <!--    <div class="pull-right">
                                                                                    <ul class="info_aligner">
                                                                                        <li><button class="btn btn-primary btn-sm">ENROLLED</button></li>
                                                                                        <li><small>12,345,6789 enrolled</small></li>
                                                                                    </ul>
                                                                                </div>-->
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <div class="card-body">

                                                                    <div class="wall-comment-list su">
                                                                        <div class="row document_details">
                                                                            <div class="details_wrapper">
                                                                                <i class="zmdi zmdi-file-text zmdi-hc-fw display-icon su"></i>
                                                                                <ul>
                                                                                    <li>Name of document.pdf</li>
                                                                                    <li>Chapter 2: Name of Chapter</li>
                                                                                    <li>Enviroment and Technology with urban Development</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="row">
                                                                                <button class="btn btn-primary waves-effect">View Document</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div class="card-header footer">
                                                                    <p class="feed_message">This is assiagnment is a major factor which enable student of the physicial electonic department
                                                                    </p>
                                                                    <ul class="wall-attrs clearfix list-inline list-unstyled">
                                                                        <li class="wa-stats">
                                                                            <span><i class="zmdi zmdi-comments"></i> 536</span>
                                                                            <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                                                            <span><i class="glyphicon glyphicon-share"></i> 220</span>
                                                                        </li>
                                                                        <li class="wa-users dropdown">
                                                                            <a data-toggle="dropdown" href="" aria-expanded="false"><i class="tm-icon su zmdi zmdi-more-vert"></i></a>
                                                                            <ul class="dropdown-menu dm-icon su pull-right">
                                                                                <li class="divider hidden-xs"></li>
                                                                                <li class="hidden-xs">
                                                                                    <a href=""><i class="zmdi zmdi-favorite-outline"></i> Favorite post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-delete"></i> Hide Post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-flag"></i> Report post</a>
                                                                                </li>
                                                                                <li>
                                                                                    <a href=""><i class="zmdi zmdi-settings"></i> Embed</a>
                                                                                </li>
                                                                            </ul>
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
                    <div class="card col-lg-3 col-md-3 col-sm-3 hidden-xs right-bar su righthandedbar">
                        <div class="card result col-lg-12 c-overflow">
                            <div class="listview">
                                <div class="lv-header">
                                    Related Post
                                </div>
                                <div class="lv-header subheading">
                                    User Filter
                                </div>
                                <div class="lv-body">
                                <span class="lv-item su" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm su_icon" src="../assets/../assets/img/icon-set-png/screen.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">David Belle</div>
                                            <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                        </div>
                                    </div>
                                </span>
                                <span class="lv-item su" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm su_icon" src="../assets/../assets/img/icon-set-png/hands.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Jonathan Morris</div>
                                            <small class="lv-small ">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                        </div>
                                    </div>
                                </span>
                                <span class="lv-item su" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm su_icon" src="../assets/../assets/img/icon-set-png/screen.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Fredric Mitchell Jr.</div>
                                            <small class="lv-small ">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                        </div>
                                    </div>
                                </span>
                                <span class="lv-item su" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm su_icon" src="../assets/../assets/img/icon-set-png/newspaper.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Glenn Jecobs</div>
                                            <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                        </div>
                                    </div>
                                </span>
                                <span class="lv-item su" href="">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img class="lv-img-sm su_icon" src="../assets/../assets/img/icon-set-png/notebook.png" alt="">
                                        </div>
                                        <div class="media-body">
                                            <div class="lv-title">Bill Phillips</div>
                                            <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                        </div>
                                    </div>
                                </span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
    </section>
</section>


<!-- Javascript Libraries -->
@include('partials.scripts')

</body>
</html>