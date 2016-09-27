<div ng-controller="sideBarNotifyController">
    <script type="text/ng-template" id="assignmentModal.html">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="p-20">
                    <div class="card-body">
                        <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" alt="" class="su_icon"><span class="form_title">ASSIGNMENT QUIZ</span>
                        <hr>
                        <ul class="landing-page two_button_switch-container cancel_factory" role="tablist">
                            <li role="presentation" class="active button_switch-item" href="#quiz" role="tab" data-toggle="tab" aria-expanded="true">
                                <a class=" landing-page">
                                @{{ quiz.title }}
                            </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class=" tab-pane animated fadeIn active" id="quiz-question">
                                <form>
                                    <div class="form-group">
                                        <h4 class="text-muted center">@{{ quiz.due_date  }}</h4>
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility p-l-30">Quiz Questions</span>
                                    </div>
                                    <div>
                                        <div class="listview">
                                            <div class="lv-body modal-view c-overflow question" id="quiz-question">
                                                <div id="quiz-block">
                                                    <div class="borderd m-b-10">
                                                        <div class="question_holder default">
                                                            <div class="modal-view question m-b-10" ng-repeat="index in quiz.quiz">
                                                                <p class="text-justify">
                                                                    @{{ index.question }}
                                                                </p>
                                                                <ul class="cancel_factory">
                                                                    <li class="answer__option--item" ng-repeat="options in index.options">
                                                                        <div class="answer__input--holder flex" ng-if="options.option">
                                                                            <label class="answer__input--list cancel_factory">
                                                                                <input type="checkbox" name="correct_answer[]" class="correct_answer-tick">
                                                                                <span></span>
                                                                                <input type="hidden" class="corectvalue-holder">
                                                                            </label>
                                                                            <p>@{{ options.option }}</p>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <hr />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page waves-effect"  style="margin-right: 15px; background-color: #9B9B9B;" ng-click="cancel()">CANCEL</button>
                                        <button type="submit" class="btn landing-page wa
                                    ves-effect" ng-click="ok()">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
</div>


<script type="text/ng-template" id="assignmentUploadModal.html">
<div ng-controller="sideBarNotifyController">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="p-20">
                    <div class="card-body">
                        <img src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}" alt="" class="su_icon"><span class="form_title">UPLOAD ASSIGNMENT FILE</span>
                        <hr>
                        <ul class="landing-page two_button_switch-container cancel_factory" role="tablist">
                            <li role="presentation" class="active button_switch-item" href="#quiz" role="tab" data-toggle="tab" aria-expanded="true">
                                <a class=" landing-page">
                                    @{{ quiz.title }}
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class=" tab-pane animated fadeIn active" id="quiz-question">
                                    <form action="/submitFileAssignment" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <input type="file" name="assignment_file" accept="application/pdf"/>
                                        <input type="hidden" name="assignment_id" value="@{{ quiz.id }}"/>
                                    </div>

                                    <div class="form-group landing-page-footer-modalright">
                                        {{--<button ng-click="cancel()" class="btn landing-page waves-effect" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>--}}
                                        <button type="submit" class="btn landing-page waves-effect">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</script>

<!-------------------------------------------------------------------Note Modal----------------------------------------------------------->

<script type="text/ng-template" id="noteView.html">
        <div ng-controller="feedTimeLineController">
    <div class="modal-dialog pdf" ng-cloak>
        <div class="modal-content pdf_content white">
            <div class="no-padding grid_card col-md-7 col-sm-7 m-r-10">
                <div class="grid_head-info head_subject_view bgm-blue">
                    <div class="feed_user_info">
                        <div>
                            <ul class="cancel_factory pl-10 ">
                                <li class="username-highlighted c-white">@{{ note.title }}</li>
                            </ul>
                        </div></div>
                    <div class="feed_icon_holder pull-right f-20">
                        <span class="f-13 p-r-10 c-white">Page 12</span>
                        <span><a href=""><i class="zmdi zmdi-caret-left zmdi-hc-fw add"></i></a></span>
                        <span><a href=""><i class="zmdi zmdi-caret-right zmdi-hc-fw add"></i></a></span>
                    </div>
                </div>
                <div class="grid_image-holder">
                    {{--<img src="{!! asset('assets/img/cal-header.jpg') !!}" alt="" class="grid_image-cover">--}}
                    <object data="@{{ note.files }}" type="application/pdf" class="grid_image-cover"></object>
                </div>
                <div class="grid_head-info p-5">
                    <div class="feed_user_info side">
                        <div class="grid_footer-info p center_pager">
                            <div class="pull-left">
                                <ul>
                                    <li>
                                        <a href=""><i class="zmdi zmdi-plus-circle-o zmdi-hc-fw add_down"></i></a>
                                    </li>
                                    <li>
                                        <a href=""><i class="zmdi zmdi-minus-circle-outline zmdi-hc-fw add_down"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feed_user_info side">
                        <div class="grid_footer-info p center_pager">
                            <div class="pull-left">
                                <ul>
                                    <li>
                                        <a  href="" class="zmdi zmdi-caret-left zmdi-hc-fw add_down"></a>
                                        <span class="f-15 position"> Page 12 </span>
                                        <a href="" class="zmdi zmdi-caret-right zmdi-hc-fw add_down"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="feed_user_info side1">
                        <div class="grid_footer-info p center_pager">
                            <div class="pull-right">
                                <ul>
                                    <li>
                                        <a href="" class="zmdi zmdi-file-text zmdi-hc-fw add_down"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wcl-form">
                    <div class="wc-comment">
                        {{--<div class="wcc-inner wcc-toggle comment__input--feed">--}}
                            {{--Comment here...--}}
                        {{--</div>--}}

                        <form ng-keypress="postComment($event)">
                            <div class="wcc-inner comment__input--feed">
                                <textarea ng-model="commentData.body" class="wcc-inner comment__input--feed wcci-text" placeholder="Comment here..."></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="listview" ng-if="note.comments">
                    <div class="lv-body modal-view c-overflow bgm-white">
                        <div class="wcl-list comments_list m-0 p-0" ng-repeat="comment in comments">
                            <div class="media p-l-10 p-t-b-5">
                                <a href="" class="pull-left">
                                    <img src="@{{ comment.poster.avatar }}" alt="" class="lv-img-sm">
                                </a>
                                <div class="media-body">
                                    <a href="" class="a-title">@{{ comment.poster.name }}</a>
                                    <small class="c-gray m-l-10"><span> | </span>@{{ comment.time }}</small>
                                    <p class="m-t-5 m-b-0 commented_contents">
                                        @{{ comment.body }}
                                         <a href=""> Read more</a>
                                    </p><br>
                                    <div class="pull-left">
                                        <a href="">
                                            <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                                                <li>
                                                    <button ng-click="likePost('comment', comment.id)">
                                                        <i class="zmdi zmdi-favorite zmdi-hc-fw feed_card-file-btn"></i>
                                                        <span class="feed_counter" style="margin-left: 10px;" ng-if="comment.likes.length > 0">@{{ comment.likes.length }}</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-------------------------aside pdf---------------------------->
            <div class="no-padding grid_card col-md-3 col-sm-3 p-b-10">
                <div class="grid_head-info head_subject_view">
                    <div class="feed_user_info">
                        <div>
                           <a href="/student/profile/@{{ note.poster.id }}"><img src="@{{ note.poster.avatar }}" class="lv-img feed_image" alt="@{{ note.poster.title }}"></a>
                        </div>
                        <div>
                            <ul class="cancel_factory pl-10 text-uppercase">
                                <li class="username-highlighted"><a href="/student/profile/@{{ note.poster.id }}">@{{ note.poster.name }}</a></li>
                               <li> <a href="/university/@{{ note.poster.university.id }}">@{{ note.poster.university.name }}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="feed_icon_holder">
                        <img src="{!! asset('assets/img/icons/file.svg') !!}" class="su_icon notify" alt="">
                    </div>
                </div>
                <div class="grid_footer-info p p-l-15">
                    @{{ note.poster.title }}
                </div>
                <div class="feed_actions enroll_action-button m-b-0">
                    <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                        <li>
                            <button ng-click="likePost(note.id)">
                                <img src="{!! asset('assets/img/icons/heart.svg') !!}" class="su_icon notify" alt=""><span></span>
                            <span ng-if="likes.length > 0">
                                <span class="feed_counter" style="margin-left: 10px;">@{{ likes.length }}</span>
                            </span>
                            </button>

                        </li>
                        <li>
                            <button>
                                <img src="{!! asset('assets/img/icons/chat.svg') !!}" class="su_icon notify" alt="">
                                <span class="feed_counter" style="margin-left: 10px;" ng-if="comments.length > 0">
                                    @{{ comments.length }}
                                </span>
                            </button>
                        </li>
                        <li>
                            <button>
                                <img src="{!! asset('assets/img/icons/bookmark.svg') !!}" class="su_icon notify" alt="">
                                <span class="feed_counter" style="margin-left: 2px;"></span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="grid_footer-info p p-l-15">
                    Related Posts
                </div>
                <hr class="m-0 c-blue" />
                <div class="listview h">
                    <div class="lv-body modal-view c-overflow">
                        <!--<div class="grid_head-info rad">
                            <div class="feed_user_info rad">
                                <div>
                                    <img src="assets/img/shawaz.jpg" class="lv-img feed_image rad" alt=""></div>
                                <div>
                                    <ul class="cancel_factory pl-20">
                                        <li class="">Tittle of the post given here </li>
                                        <li>
                                            <img src="assets/img/shawaz.jpg" class="lv-img feed_image small" alt="">
                                            <span class="small">24,4555 views</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="feed_icon_holder">
                                <img src="assets/img/icon-set-png/agenda.png" class="su_icon notify" alt="">
                            </div>
                        </div>-->
                        <div class="grid_footer-info ">
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------end aside--------------------------->
            <div class="no-padding grid_card col-md-1 col-sm-1">
                <a class="cancel_subject" ng-click="cancel()"><i class="zmdi zmdi-close zmdi-hc-fw"></i></a>
            </div>
        </div>
    </div>

</div>
    </script>

<!------------------------------------------------End Modal Note --------------------------------------->


<!---------------------------------------------Topic Popup Modal-------------------------------------------------------->

<script type="text/ng-template" id="topicView.html">
<div ng-controller="feedTimeLineController" >
    <div  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-header">
                    <img style="width:55px; height:35px;" src="@{{ topic.poster.avatar }}" alt="user-img" class="feed-profile">
                        <div class="feed-text">
                            <span><b>@{{ topic.poster.name }}</b></span>
                            <br />
                            @{{ topic.poster.my_university }}
                        </div>

                    <div style="position: absolute;
                        right: 0px;
                        top: 0;" class="no-padding grid_card col-md-1 col-sm-1">
                        <a class="cancel_subject" ng-click="cancel()"><i style="color: #000;" class="zmdi zmdi-close zmdi-hc-fw"></i></a>
                    </div> 
                </div>
                <div class=" modal-body" ng-click="viewPost(post.type, post.id)">
                    <img ng-if="post.type != 'topic' " src="@{{ topic.preview_image }}" alt="" class="img-feed">
                </div>
                <div class="modal-footer">
                    <div class="feed-footer">
                        <h5>&nbsp;&nbsp;&nbsp;@{{ topic.title}}</h5> 
                        <br />
                        <div class="part_hcb" >
                            <span>&nbsp;&nbsp;&nbsp;<img src="assets/images/heart.svg"></span><span ng-if="likes.length > 0">
                                <span class="feed_counter"">@{{ likes.length }}</span>
                            </span>
                        </div>
                        <div class="part_hcb">
                            <span><img src="assets/images/chat.svg"></span>
                            <span class="feed_counter" ng-if="answers.length > 0">
                                    @{{ answers.length }}
                                </span>
                        </div>   

                        <div class="part_hcb">
                            <span><img src="assets/images/bookmark.svg"></span>
                            <span class="feed_counter" style="margin-left: 2px;"></span>
                        </div>                     
                        <br />
                        <br />
                        <form ng-submit="postCommentAnswer()" class="ng-pristine ng-valid">
                            <div class="input-group m-t-10 m-b-10">
                                <input ng-model="commentData.body" style="padding: 0 15px;" type="text" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Comment here...">
                                <span class="input-group-btn">
                                <button type="submit" class="btn waves-effect waves-light btn-primary">Comment</button>
                                </span>
                            </div>
                        </form>
                    <div>
                    <div class="listview" ng-if="answers.length > 0">
                        <div class="lv-body modal-view c-overflow">

                            <div class="grid wcl-list comments_list" ng-repeat="answer in answers" style="margin-bottom:0; padding-bottom:0; border:0">
                                <div class="media" alt="">
                                    <a href="" class="pull-left" >
                                        <img src="@{{ answer.answerer.avatar }}" alt="" class="lv-img-sm">
                                    </a>
                                    <div class="feed-text" style="text-align:left; padding:0;">
                                        <span><b>@{{ answer.answerer.name }}</b></span>
                                        <br />
                                        <p>
                                            @{{ answer.body }}
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <a class="rmore" href="">Read more</a>
                    </div>


                    </div>
                </div>
                <br />
                <br />
        
                                              
        </div>
    </div><!-- /.modal-dialog -->
</div>
</script>


<!--------------------------------------------------- End Modal Topic ------------------------------------------------------>


<!---------------------------------------------Project Popup Modal-------------------------------------------------------->
<script type="text/ng-template" id="projectView.html">
    <div ng-controller="feedTimeLineController" ng-cloak>
    <div  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-header">
                    <img style="width:55px; height:35px;" src="@{{ project.poster.avatar }}" alt="user-img" class="feed-profile">
                        <div class="feed-text">
                            <span><b>@{{ project.poster_name }}</b></span>
                            <br />
                            @{{ project.poster.my_university }}
                        </div>

                    <div style="position: absolute;
                        right: 0px;
                        top: 0;" class="no-padding grid_card col-md-1 col-sm-1">
                        <a class="cancel_subject" ng-click="cancel()"><i style="color: #000;" class="zmdi zmdi-close zmdi-hc-fw"></i></a>
                    </div> 
                </div>
                <div class=" modal-body" ng-click="viewPost(post.type, post.id)">
                    <img ng-if="post.type != 'project' " src="@{{ project.preview_image }}" alt="" class="img-feed">
                </div>
                <div class="modal-footer">
                    <div class="feed-footer">
                        <h5>&nbsp;&nbsp;&nbsp;@{{ project.title}}</h5> 
                        <br />
                            <div class="part_hcb" >
                                <span>&nbsp;&nbsp;&nbsp;<img src="assets/images/heart.svg" class="su_icon notify" alt=""></span><span ng-if="likes.length > 0">
                                    <span class="feed_counter">@{{ likes.length }}</span>
                                </span>
                            </div>
                            <div class="part_hcb">
                                <span><img src="assets/images/chat.svg" class="su_icon notify" alt=""></span>
                                <span class="feed_counter" ng-if="answers.length > 0">
                                        @{{ answers.length }}
                                    </span>
                            </div>
                            <div class="part_hcb">
                                <span><img src="assets/images/bookmark.svg" class="su_icon notify" alt=""></span>
                                <span class="feed_counter" style="margin-left: 2px;"></span>
                            </div>
                        <br />
                        <br />
                        <div class="input-group m-t-10">
                            <input ng-model="commentData.body" style="padding: 0 15px;" type="text" id="example-input2-group2" name="example-input2-group2" class="form-control" placeholder="Comment here...">
                            <span class="input-group-btn">
                            <button ng-keypress="postAnswer($event)"  type="submit" class="btn waves-effect waves-light btn-primary">Comment</button>
                            </span>
                        </div>
                    <div>
                    <div class="listview" ng-if="answers.length > 0">
                        <div class="lv-body modal-view c-overflow">

                            <div class="grid wcl-list comments_list" ng-repeat="answer in answers">
                                <div class="media">
                                    <a href="" class="pull-left">
                                        <img src="@{{ answer.answerer.avatar }}" alt="" class="lv-img-sm">
                                    </a>
                                    <div class="feed-text" style="text-align:left">
                                        <span><b>@{{ answer.answerer.name }}</b></span>
                                        <br />
                                        <p>
                                            @{{ answer.body }}
                                       <a href="">Read more</a>
                                        </p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>


                    </div>
                </div>
                <br />
                <br />
        
                                              
        </div>
    </div><!-- /.modal-dialog -->
    </div>
</script>

<!--------------------------------------------------- End Modal Project ------------------------------------------------------>



<!---------------------------------------------News Popup Modal-------------------------------------------------------->

<script type="text/ng-template" id="newsView.html">
    <div ng-controller="feedTimeLineController" ng-cloak>
        <div class="modal-dialog pdf" >
            <div class="modal-content pdf_content white">
                <div class="no-padding grid_card col-md-7 col-sm-7 m-r-10 m-b-10 bgm-white">
                    <div class="grid_head-info head_subject_view bgm-blue">
                        <div class="feed_user_info">
                            <div>
                                <ul class="cancel_factory pl-10 ">
                                    <li class="username-highlighted c-white f-17">@{{ newses.title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-0 p-20 text-justified">

                        @{{ newses.description }}

                    </div>
                    <div class="wcl-form">
                        <div class="wc-comment">

                            <form ng-keypress="postComment($event)">
                                <div class="wcc-inner comment__input--feed">
                                    <textarea ng-model="commentData.body" class="wcc-inner comment__input--feed wcci-text" placeholder="Comment here..."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="listview" ng-if="news.comments">
                        <div class="lv-body modal-view c-overflow bgm-white">
                            <div class="wcl-list comments_list m-0 p-0" ng-repeat="comment in comments">
                                <div class="media p-l-10 p-t-b-5">
                                    <a href="" class="pull-left">
                                        <img src="@{{ comment.user.avatar }}" alt="" class="lv-img-sm">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="a-title">@{{ comment.user.name }}</a>
                                        <small class="c-gray m-l-10"><span> | </span>@{{ comment.time }}</small>
                                        <p class="m-t-5 m-b-0 commented_contents">
                                            @{{ comment.body }}
                                            <a href=""> Read more</a>
                                        </p><br>
                                        <div class="pull-left">
                                            <a href="">
                                                <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                                                    <li>
                                                        <button ng-click="likePost('comment', comment.id)">
                                                            <i class="zmdi zmdi-favorite zmdi-hc-fw feed_card-file-btn"></i>
                                                            <span class="feed_counter" style="margin-left: 10px;" ng-if="comment.likes.length > 0">@{{ comment.likes.length }}</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------------------------aside pdf---------------------------->
                <div class="no-padding grid_card col-md-3 col-sm-3 p-b-10">
                    <div class="grid_head-info head_subject_view">
                        <div class="feed_user_info">
                            <div>
                                <img src="@{{ newses.poster.avatar }}" class="lv-img feed_image" alt="">
                            </div>
                            <div>
                                <ul class="cancel_factory pl-10 text-uppercase">
                                    <li class="username-highlighted">@{{ news.poster.name }}</li>
                                    <li>@{{ newses.poster.university.name }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feed_icon_holder">
                            <img src="{!! asset('assets/img/icon-set-png/newspaper.png') !!}" class="su_icon notify" alt="">
                        </div>
                    </div>
                    <div class="grid_footer-info p p-l-15">
                        @{{ newses.poster.title }}
                    </div>
                    <div class="feed_actions enroll_action-button m-b-0">
                        <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                            <li>
                                <button ng-click="likePost(topic.id)">
                                    <i class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i><span></span>
                            <span ng-if="likes.length > 0">
                                <span class="feed_counter" style="margin-left: 10px;">@{{ likes.length }}</span>
                            </span>
                                </button>

                            </li>
                            <li>
                                <button>
                                    <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" style="margin-left: 10px;" ng-if="answers.length > 0">
                                    @{{ answers.length }}
                                </span>
                                </button>
                            </li>
                            <li>
                                <button>
                                    <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter" style="margin-left: 10px;"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="grid_footer-info p p-l-15">
                        Related Posts
                    </div>
                    <hr class="m-0 c-blue" />
                    <div class="listview h">
                        <div class="lv-body modal-view c-overflow">
                            <!--<div class="grid_head-info rad">
                                <div class="feed_user_info rad">
                                    <div>
                                        <img src="assets/img/shawaz.jpg" class="lv-img feed_image rad" alt=""></div>
                                    <div>
                                        <ul class="cancel_factory pl-20">
                                            <li class="">Tittle of the post given here </li>
                                            <li>
                                                <img src="assets/img/shawaz.jpg" class="lv-img feed_image small" alt="">
                                                <span class="small">24,4555 views</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="feed_icon_holder">
                                    <img src="assets/img/icon-set-png/agenda.png" class="su_icon notify" alt="">
                                </div>
                            </div>-->
                            <div class="grid_footer-info ">
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!------------------------------end aside--------------------------->
                <div class="no-padding grid_card col-md-1 col-sm-1">
                    <a class="cancel_subject" ng-click="cancel()"><i class="zmdi zmdi-close zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
    </div>
</script>


<!--------------------------------------------------- End Modal News ------------------------------------------------------>


<!---------------------------------------------Event popup modal ------------------------------------------------------>


<script type="text/ng-template" id="eventView.html">
    <div ng-controller="feedTimeLineController" ng-cloak>
        <div class="modal-dialog pdf" >
            <div class="modal-content pdf_content white">
                <div class="no-padding grid_card col-md-7 col-sm-7 m-r-10 m-b-10 bgm-white">
                    <div class="grid_head-info head_subject_view bgm-blue">
                        <div class="feed_user_info">
                            <div>
                                <ul class="cancel_factory pl-10 ">
                                    <li class="username-highlighted c-white f-17">@{{ event.title }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card m-b-0 p-20 text-justified" >

                       <div class="event-modal">

                           <div class="event-modal-image event-image"><img src="@{{ event.preview_image}}" width="500"> </div>
                           <div class="event-modal-image"><span class="event-details">Event Days: </span><span class="event-details2"> @{{ event.event_days }}</span></div>
                           <div class="event-modal-image"><span  class="event-details">Event Starting Time: </span><span class="event-details2">@{{ event.starts }}</span></div>
                           <div class="event-modal-image"><span class="event-details">Event Ending Time: </span><span class="event-details2">  @{{ event.ending }}</span></div>
                           <div class="event-modal-image"><span class="event-details">Event Location: </span><span class="event-details2"> @{{ event.location }}</span></div>
                       </div>

                    </div>

                    <div class="wcl-form">
                        <div class="wc-comment">

                            <form ng-keypress="postComment($event)">
                                <div class="wcc-inner comment__input--feed">
                                    <textarea ng-model="commentData.body" class="wcc-inner comment__input--feed wcci-text" placeholder="Comment here..."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="listview" ng-if="event.comments">
                        <div class="lv-body modal-view c-overflow bgm-white">
                            <div class="wcl-list comments_list m-0 p-0" ng-repeat="comment in comments">
                                <div class="media p-l-10 p-t-b-5">
                                    <a href="" class="pull-left">
                                        <img src="@{{ comment.user.avatar }}" alt="" class="lv-img-sm">
                                    </a>
                                    <div class="media-body">
                                        <a href="" class="a-title">@{{ comment.user.name }}</a>
                                        <small class="c-gray m-l-10"><span> | </span>@{{ comment.time }}</small>
                                        <p class="m-t-5 m-b-0 commented_contents">
                                            @{{ comment.body }}
                                            <a href=""> Read more</a>
                                        </p><br>
                                        <div class="pull-left">
                                            <a href="">
                                                <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                                                    <li>
                                                        <button ng-click="likePost('comment', comment.id)">
                                                            <i class="zmdi zmdi-favorite zmdi-hc-fw feed_card-file-btn"></i>
                                                            <span class="feed_counter" style="margin-left: 10px;" ng-if="comment.likes.length > 0">@{{ comment.likes.length }}</span>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-------------------------aside pdf---------------------------->
                <div class="no-padding grid_card col-md-3 col-sm-3 p-b-10">
                    <div class="grid_head-info head_subject_view">
                        <div class="feed_user_info">
                            <div>
                                <img src="@{{ event.poster.avatar }}" class="lv-img feed_image" alt="">
                            </div>
                            <div>
                                <ul class="cancel_factory pl-10 text-uppercase">
                                    <li class="username-highlighted">@{{ event.poster.name }}</li>
                                    <li>@{{ event.poster.university.name }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="feed_icon_holder">
                            <img src="{!! asset('assets/img/icons/Forum.svg') !!}" class="su_icon notify" alt="">
                        </div>
                    </div>
                    <div class="grid_footer-info p p-l-15">
                        @{{ event.poster.title }}
                    </div>
                    <div class="feed_actions enroll_action-button m-b-0">
                        <ul class="feed-counter-white enroll_group-action p-0 m-l-0">
                            <li>
                                <button ng-click="likePost(topic.id)">
                                    <i class="zmdi zmdi-favorite-outline zmdi-hc-fw feed_card-file-btn"></i><span></span>
                            <span ng-if="likes.length > 0">
                                <span class="feed_counter" style="margin-left: 10px;">@{{ likes.length }}</span>
                            </span>
                                </button>

                            </li>
                            <li>
                                <button>
                                    <i class="zmdi zmdi-comments zmdi-hc-fw feed_card-file-btn"></i>
                                <span class="feed_counter" style="margin-left: 10px;" ng-if="answers.length > 0">
                                    @{{ answers.length }}
                                </span>
                                </button>
                            </li>
                            <li>
                                <button>
                                    <i class="fa fa-share-square-o feed_card-file-btn m-r-5" aria-hidden="true"></i><span class="feed_counter" style="margin-left: 10px;"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="grid_footer-info p p-l-15">
                        Related Posts
                    </div>
                    <hr class="m-0 c-blue" />
                    <div class="listview h">
                        <div class="lv-body modal-view c-overflow">
                            <!--<div class="grid_head-info rad">
                                <div class="feed_user_info rad">
                                    <div>
                                        <img src="assets/img/shawaz.jpg" class="lv-img feed_image rad" alt=""></div>
                                    <div>
                                        <ul class="cancel_factory pl-20">
                                            <li class="">Tittle of the post given here </li>
                                            <li>
                                                <img src="assets/img/shawaz.jpg" class="lv-img feed_image small" alt="">
                                                <span class="small">24,4555 views</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="feed_icon_holder">
                                    <img src="assets/img/icon-set-png/agenda.png" class="su_icon notify" alt="">
                                </div>
                            </div>-->
                            <div class="grid_footer-info ">
                            </div>
                        </div>
                    </div>
                </div>
                <!------------------------------end aside--------------------------->
                <div class="no-padding grid_card col-md-1 col-sm-1">
                    <a class="cancel_subject" ng-click="cancel()"><i class="zmdi zmdi-close zmdi-hc-fw"></i></a>
                </div>
            </div>
        </div>
    </div>
</script>


<!--------------------------------------------------- End Modal Event ------------------------------------------------------>
