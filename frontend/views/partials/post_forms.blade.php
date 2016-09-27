@if(is_student())

    <div class="modal fade" id="modal-note" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="postNoteController">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">
                                <!-- <div role="tabpanel" class="tab-pane animated fadeIn in active" id="note-phase1">
                                    <form class="p-20" id="note_file_form">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/pencil-1.png" alt=""
                                                 class="su_icon"><span class="form_title">POST NOTE</span>
                                            <hr>
                                        </div>
                                        <div class="file_content_area">
                                            <input type="file" name="note_additional_files" id="filer_input"
                                                   multiple="multiple" class=" col-sm-0 col-xs-8">
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="button" class="btn landing-page" href="#note-phase2"
                                                    aria-controls="tab-2" role="tab" data-toggle="tab">NEXT
                                            </button>
                                        </div>
                                    </form>

                                </div> -->

                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="note-phase2">
                                    <form class="p-20" ng-submit="post_note()" id="note_form">
                                        <div class="form-group ihe">
                                           
                                            <img src="../assets/img/icon-set-png/pencil-1.png" alt="" class="su_icon">
                                            <span class="form_title">POST NOTE</span>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="postnote-header-wrapper">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail"
                                                         data-trigger="fileinput"></div>
                                                    <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" accept="image/*" name="preview_image"
                                                           id="preview_image" ng-model="preview_image"
                                                           onchange="angular.element(this).scope().fileNameChanged()">
                                                </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <input type="text" placeholder="NOTE TITLE"
                                                       class="custom-invisi     ble-form col-xs-9" name="note_title"
                                                       ng-model="note_title">
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label">Lecture Related</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom_form-control lb" data-placeholder="Select Subject"
                                                        ng-options="index.id as index.name for index in subjects"
                                                        ng-change="getSubjectLecture()" ng-model="subject">
                                                    <option value="" ng-if="true" disabled selected>Select Subject
                                                    </option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <select ng-options="index.id as index.name for index in lectures"
                                                        class="custom_form-control lb" data-placeholder="Select Lecture"
                                                        ng-model="lecture">
                                                    <option value="" ng-if="true" disabled selected>Select Lecture
                                                    </option>
                                                    <option ng-repeat="index in lectures" value="@{{ index.id }}">
                                                        @{{ index.name }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Visibility</span>
                                        </div>

                                        <div class="form-group">
                                            <select class="chosen su"
                                                    ng-options="index.id as index.name for index in taggable"
                                                    options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                    chosen multiple>

                                            </select>
                                        </div>


                                        <div class="form-group">
                                            <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                            <div class="privacy_container">
                                                <span>Privacy</span>
                                                <div class="privacy_dropdown">
                                                    <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                    <select class="privary_list" ng-model="privacy"
                                                            ng-init="privacy='everyone'">

                                                        <option value="everyone" selected="selected">Show Everyone
                                                        </option>
                                                        <option value="followers">Only Friends</option>
                                                        <option value="department">Only Department</option>
                                                        <option value="university">Only University</option>
                                                        <option value="only_me">Only me can see this</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="submit" class="btn landing-page" id="post_note_btn"
                                                    ng-disabled="post_status">SUBMIT
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-question" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="postQuestionController">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20" ng-submit="postQuestion()">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/hands.png" alt="" class="su_icon"><span class="form_title">POST TOPIC</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="qData.title" name="title"
                               placeholder="Question Title">
                    </div>
                    <div class="form-group">
                    <textarea class="custom_form-control-textarea" ng-model="qData.description" name="description"
                              rows="5" placeholder="Question Description"></textarea>
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su" ng-options="index.id as index.name for index in taggable"
                                options="taggable" data-placeholder="Tag Members" ng-model="qData.tags" chosen multiple>
                        </select>
                    </div>
                    <div class="form-group">

                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select class="privary_list" name="privacy" ng-model="qData.privacy"
                                        ng-init="qData.privacy='everyone'">
                                    <option value="everyone" selected="selected">Show Everyone</option>
                                    <option value="followers">Only Friends</option>
                                    <option value="department">Only Department</option>
                                    <option value="university">Only University</option>
                                    <option value="only_me">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright">
                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                        </button>
                        <button type="submit" class="btn landing-page" ng-disabled="post_status">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endif


@if(is_faculty())

    <div class="modal fade" id="modal-note" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="postNoteController">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">
                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="note-phase1">
                                    <form class="p-20" id="note_file_form">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/pencil-1.png" alt=""
                                                 class="su_icon"><span class="form_title">POST NOTE</span>
                                            <hr>
                                        </div>
                                        <div class="file_content_area">
                                            <input type="file" name="note_additional_files" id="filer_input"
                                                   multiple="multiple" class=" col-sm-0 col-xs-8">
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="button" class="btn landing-page" href="#note-phase2"
                                                    aria-controls="tab-2" role="tab" data-toggle="tab">NEXT
                                            </button>
                                        </div>
                                    </form>

                                </div>

                                <div role="tabpanel" class="tab-pane animated fadeIn" id="note-phase2">
                                    <form class="p-20" ng-submit="post_note()" id="note_form">
                                        <div class="form-group">
                                            <a href="#note-phase1" role="tab" data-toggle="tab" aria-expanded="true">
                                                <i class="zmdi zmdi-chevron-left zmdi-hc-fw"></i>
                                            </a>
                                            <img src="../assets/img/icon-set-png/pencil-1.png" alt="" class="su_icon">
                                            <span class="form_title">POST NOTE</span>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="postnote-header-wrapper">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail"
                                                         data-trigger="fileinput"></div>
                                                    <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" accept="image/*" name="preview_image"
                                                           id="preview_image" ng-model="preview_image"
                                                           onchange="angular.element(this).scope().fileNameChanged()">
                                                </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <input type="text" placeholder="NOTE TITLE"
                                                       class="custom-invisible-form col-xs-9" name="note_title"
                                                       ng-model="note_title">
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label">Lecture Related</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom_form-control lb" data-placeholder="Select Subject"
                                                        ng-options="index.id as index.name for index in subjects"
                                                        ng-change="getSubjectLecture()" ng-model="subject">
                                                    <option value="" ng-if="true" disabled selected>Select Subject
                                                    </option>
                                                </select>

                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <select ng-options="index.id as index.name for index in lectures"
                                                        class="custom_form-control lb" data-placeholder="Select Lecture"
                                                        ng-model="lecture">
                                                    <option value="" ng-if="true" disabled selected>Select Lecture
                                                    </option>
                                                    <option ng-repeat="index in lectures" value="@{{ index.id }}">
                                                        @{{ index.name }}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Visibility</span>
                                        </div>

                                        <div class="form-group">
                                            <select class="chosen su"
                                                    ng-options="index.id as index.name for index in taggable"
                                                    options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                    chosen multiple>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                            <div class="privacy_container">
                                                <span>Privacy</span>
                                                <div class="privacy_dropdown">
                                                    <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                    <select class="privary_list" ng-model="privacy"
                                                            ng-init="privacy='everyone'">
                                                        <option value="everyone" selected="selected">Show Everyone
                                                        </option>
                                                        <option value="department">Only Department</option>
                                                        <option value="university">Only University</option>
                                                        <option value="only_me">Only me can see this</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="submit" class="btn landing-page" ng-disabled="post_status">
                                                SUBMIT
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-question" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="postQuestionController">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20" ng-submit="postQuestion()">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/hands.png" alt="" class="su_icon"><span class="form_title">POST TOPIC</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="qData.title" name="title"
                               placeholder="Question Title">
                    </div>
                    <div class="form-group">
                    <textarea class="custom_form-control-textarea" ng-model="qData.description" name="description"
                              rows="5" placeholder="Question Description"></textarea>
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su" ng-options="index.id as index.name for index in taggable"
                                options="taggable" data-placeholder="Tag Members" ng-model="qData.tags" chosen multiple>
                        </select>
                    </div>
                    <div class="form-group">

                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select class="privary_list" name="privacy" ng-model="qData.privacy"
                                        ng-init="qData.privacy='everyone'">
                                    <option value="everyone" selected="selected">Show Everyone</option>
                                    <option value="department">Only Department</option>
                                    <option value="university">Only University</option>
                                    <option value="only_me">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright">
                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                        </button>
                        <button type="submit" class="btn landing-page" ng-disabled="post_status">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="postReportController">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">

                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="file-report">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="{!! assets('img/icon-set-png/grades.png') !!}" alt=""
                                                 class="su_icon"><span class="form_title">POST REPORT</span>
                                            <hr>
                                        </div>
                                        <ul class="landing-page two_button_switch-container cancel_factory p-b-10"
                                            role="tablist">
                                            <li role="presentation" class="active button_switch-item" id="attend_tab"
                                                aria-controls="tab-1" role="tab" data-toggle="tab"
                                                aria-expanded="false">
                                                <a class=" landing-page">
                                                    Attendance
                                                </a>
                                            </li>
                                            <li role="presentation" class="button_switch-item" href="#file-report2"
                                                aria-controls="tab-2" role="tab" data-toggle="tab"
                                                aria-expanded="false">
                                                <a class="landing-page">
                                                    Results
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="p-t-10">
                                            <div class="form-group">
                                                <select name="period" class="custom_form-control" ng-model="period">
                                                    <option disabled selected value="" ng-if="true">Choose Month
                                                    </option>
                                                    @foreach(year_month() as $key => $value)
                                                        <option value="{!! $key !!}"> {!! $value !!} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="p-t-b-10">
                                            <div class="form-group">
                                                <select ng-model="subject"
                                                        ng-options="index.id as index.name for index in subjects"
                                                        ng-change="getSubjectStudent()" class="custom_form-control"
                                                        style="margin-top: 4px">
                                                    <option disabled selected value="" ng-if="true">Select Subject
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="submit" class="btn landing-page" href="#attendance_tab"
                                                    id="next" role="tab" data-toggle="tab">NEXT
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane animated fadeIn" id="file-report2">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="{!! assets('img/icon-set-png/grades.png') !!}" alt=""
                                                 class="su_icon"><span class="form_title">POST REPORT</span>
                                            <hr>
                                        </div>
                                        <ul class="landing-page two_button_switch-container cancel_factory p-b-10"
                                            role="tablist">
                                            <li role="presentation" class="button_switch-item" href="#file-report"
                                                aria-controls="tab-1" role="tab" data-toggle="tab"
                                                aria-expanded="false">
                                                <a class=" landing-page">
                                                    Attendance
                                                </a>
                                            </li>
                                            <li role="presentation" class="active button_switch-item" id="rest_tab"
                                                aria-controls="tab-2" role="tab" data-toggle="tab"
                                                aria-expanded="false">
                                                <a class="landing-page">
                                                    Results
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="p-t-10">
                                            <div class="form-group">
                                                <input name="title" ng-model="title" type="text"
                                                       class="custom_form-control lb" placeholder="Result Title">
                                            </div>
                                        </div>
                                        <div class="p-t-b-10">
                                            <div class="form-group">
                                                <select ng-model="subject"
                                                        ng-options="index.id as index.name for index in subjects"
                                                        ng-change="getSubjectStudent()" class="custom_form-control"
                                                        style="margin-top: 4px">
                                                    <option disabled selected value="" ng-if="true">Select Subject
                                                    </option>
                                                </select>

                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="submit" class="btn landing-page" href="#result_tab" role="tab"
                                                    data-toggle="tab">NEXT
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div role="tabpanel" class="tab-pane animated fadeIn" id="attendance_tab">
                                    <form class="p-20" method="post" action="{!! url('/postAttendance') !!}">
                                        <div class="form-group ihe">
                                            <a href="#file-report" role="tab" data-toggle="tab">
                                                <i class="zmdi zmdi-chevron-left zmdi-hc-fw">
                                                </i>
                                            </a>
                                            <img src="../assets/img/icon-set-png/grades.png" alt=""
                                                 class="su_icon"><span class="form_title">POST REPORT</span>
                                            <hr>
                                        </div>
                                        <form>
                                            <div class="form-group i-w-hr p-l-30">
                                                <div class="horizontal-line"></div>
                                                <span class="field-label visibility">Attendance Overview</span>
                                            </div>
                                            <div class="report-content">
                                                <div class="report__content&#45;&#45;sub">
                                                    <img src="{!! user()->avatar !!}" class="report_img" alt="">
                                                    <ul class="cancel_factory">
                                                        <li> @{{ period }} </li>
                                                        <input type="hidden" value="@{{ period }}" name="period">
                                                        <input type="hidden" value="@{{ subject}}" name="subject">
                                                        <li><span class="text-muted">@{{ subject_text }}</span></li>
                                                    </ul>
                                                </div>
                                                <div class="report__content&#45;&#45;sub">
                                                    <div class="score_container">
                                                        <span>Total Classes</span>
                                                        <input type="text" class="score_input" name="total_class">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group i-w-hr pl-20">
                                                <div class="horizontal-line"></div>
                                                <span class="field-label visibility">Member List</span>


                                            </div>
                                            <div>
                                                <div class="listview">
                                                    <div class="lv-body modal-view c-overflow">

                                                        <div class="lv-item memberlist" ng-repeat="index in students">
                                                            <div class="media">
                                                                <div class="member_container">
                                                                    <div class="member_info">
                                                                        <img class="lv-img-sm" src="@{{ index.avatar }}"
                                                                             alt="">
                                                                        <span class="pl-10">@{{ index.name }}</span>
                                                                        <input type="hidden" class="score_input"
                                                                               name="student_id[]"
                                                                               value="@{{ index.id }}">
                                                                    </div>

                                                                    <div class="report__content--sub">
                                                                        <div class="score_container no-margin">
                                                                            <input type="text" class="score_input"
                                                                                   name="class_attended[]">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group i-w-hr">
                                                <div class="horizontal-line"></div>
                                                <span class="field-label visibility">Feedback</span>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="custom_form-control-textarea" rows="5"
                                                          placeholder="Feedback comment"></textarea>
                                            </div>
                                            <div class="form-group landing-page-footer-modalright">
                                                <button type="submit" class="btn landing-page waves-effect"
                                                        data-dismiss="modal"
                                                        style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                                </button>
                                                <button type="submit" class="btn landing-page waves-effect">SUBMIT
                                                </button>
                                            </div>
                                        </form>
                                    </form>
                                </div>
                                <div role="tabpanel" class="tab-pane animated fadeIn" id="result_tab">
                                    <form class="p-20" method="post" action="{!! url('/postResult"') !!}">
                                        <div class="form-group ihe">
                                            <a href="#file-report" role="tab" data-toggle="tab">
                                                <i class="zmdi zmdi-chevron-left zmdi-hc-fw">
                                                </i>
                                            </a>
                                            <img src="../assets/img/icon-set-png/grades.png" alt=""
                                                 class="su_icon"><span class="form_title">POST REPORT</span>
                                            <hr>
                                        </div>

                                        <div class="form-group i-w-hr pl-20">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Result Overview</span>
                                        </div>
                                        <div class="report-content">
                                            <div class="report__content--sub">
                                                <img src="{!! user()->avatar !!}" class="report_img" alt="">
                                                <ul class="cancel_factory">
                                                    <li> @{{ title }} </li>
                                                    <input type="hidden" value="@{{ title }}" name="title">
                                                    <input type="hidden" value="@{{ subject }}" name="subject">
                                                    <li>
                                                        <span class="text-muted">@{{ subject_text }}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="report__content--sub">
                                                <div class="score_container">
                                                    <span>Pass</span>
                                                    <input type="text" class="score_input" name="pass_mark">
                                                </div>
                                                <div class="score_container">
                                                    <span>Total</span>
                                                    <input type="text" class="score_input" name="total_mark">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr pl-20">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Member List</span>
                                        </div>
                                        <div>
                                            <div class="listview">
                                                <div class="lv-body modal-view c-overflow">

                                                    <div class="lv-item  memberlist" ng-repeat="index in students">
                                                        <div class="media">
                                                            <div class="member_container">
                                                                <div class="member_info">
                                                                    <img class="lv-img-sm" src="@{{ index.avatar }}"
                                                                         alt="">
                                                                    <span class="pl-10">@{{ index.name }}</span>
                                                                    <input type="hidden" class="score_input"
                                                                           name="student[]" value="@{{ index.id }}">
                                                                </div>

                                                                <div class="report__content--sub">
                                                                    <div class="score_container no-margin">

                                                                        <input type="text" class="score_input"
                                                                               name="result_mark[]">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Feedback</span>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="feedback_comment" class="custom_form-control-textarea"
                                                      rows="5" placeholder="Feedback comment"></textarea>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button type="submit" class="btn landing-page waves-effect"
                                                    data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
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
    </div>

    <div class="modal fade" id="modal-event" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" ng-controller="eventController">
            <div class="modal-content">
                <form class="p-20" ng-submit="postEvent()">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon"><span
                                class="form_title">POST EVENT</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <div class="postnote-header-wrapper">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" accept="image/*" name="preview_image"
                                               id="preview_image3" ng-model="preview_image">
                                             </span>
                                    <a href="#" class="btn btn-danger fileinput-exists"
                                       data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                            <input type="text" class="custom_form-control lb" ng-model="event_title" name="title"
                                   placeholder="Event Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="location" placeholder="Location">
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Timings</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="event_days" placeholder="All Day">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="starts" placeholder="Starts">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="ending" placeholder="End">
                    </div>

                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su"
                                ng-options="index.id as index.name for index in taggable"
                                options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                chosen multiple>
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select class="privary_list" ng-model="privacy"
                                        ng-init="privacy='everyone'">

                                    <option value="everyone" selected="selected">Show Everyone
                                    </option>
                                    <option value="followers">Only Friends</option>
                                    <option value="department">Only Department</option>
                                    <option value="university">Only University</option>
                                    <option value="only_me">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright">
                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                        </button>
                        <button type="submit" class="btn landing-page" ng-disabled="post_status">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-assignment" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="p-20">

                    <div class="card-body">
                        <img src="../assets/img/icon-set-png/desk-lamp.png" alt="" class="su_icon"><span
                                class="form_title">POST ASSIGNMENT</span>
                        <hr>
                        <ul class="landing-page two_button_switch-container cancel_factory" role="tablist">
                            <li role="presentation" class="active button_switch-item" href="#assignment_note" role="tab"
                                data-toggle="tab" aria-expanded="true">
                                <a class=" landing-page">
                                    NOTE
                                </a>
                            </li>
                            <li role="presentation" class="button_switch-item" href="#assignment-quiz" role="tab"
                                data-toggle="tab" aria-expanded="false">
                                <a class="landing-page">
                                    QUIZ
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content" ng-controller="postAssignmentController">

                            <div role="tabpanel" class=" tab-pane animated fadeIn active" id="assignment_note">
                                <form method="post" action="{!! url('/postAssignment') !!}">

                                    <div class="form-group">
                                        <input type="text" name="title" class="custom_form-control lb"
                                               placeholder="Assignment Title">
                                    </div>
                                    <div class="form-group i-w-hr p-10">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Attach Files</span>
                                    </div>
                                    <div class="form-group toggle__button--holder p-10">
                                        <div class="toggle-switch su" data-ts-color="blue">
                                            <label for="ts3" class="ts-label">Student should upload file to
                                                submit</label>
                                            <input id="ts3" type="checkbox" name="has_file" hidden="hidden">
                                            <label for="ts3" class="ts-helper"></label>
                                        </div>
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Visibilty</span>
                                    </div>
                                    <div class="form-group">
                                        <select class="chosen" name="subject_id" data-placeholder="Select Subject">
                                            <option selected disabled>Select Subject</option>
                                            @foreach(user()->subjects as $index)
                                                <option value="{!! $index->id !!}"> {!! $index->name !!} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="dtp-container su fg-line">
                                            <input type="text" name="due_date" class="form-control su date-picker"
                                                   placeholder="Due date">
                                        </div>

                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                        </button>
                                        <button type="submit" class="btn landing-page">SUBMIT</button>
                                    </div>
                                </form>

                            </div>

                            <div role="tabpanel" class="tab-pane animated fadeIn" id="assignment-quiz">
                                <form ng-submit="postAssignment()">
                                    <div class="form-group">
                                        <input type="text" name="title" ng-model="formData.title"
                                               class="custom_form-control lb" placeholder="Assignment Title">
                                        <input type="hidden" name="has_quiz" ng-model="formData.has_quiz"
                                               value="has_quiz">
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility" style="padding-left: 7px">Quiz List</span>
                                    </div>
                                    <div>
                                        <div class="listview">
                                            <div class="lv-body modal-view c-overflow question" id="questionlist">
                                                <div id="question_block" ng-repeat="index in questions_count">
                                                    <div class="borderd m-b-15">
                                                        <button type="button" class="closethisbutton"
                                                                ng-hide="index > 1 ? false : true"
                                                                ng-click="remove_question()">
                                                            <i class="zmdi zmdi-close-circle-o zmdi-hc-fw"></i>
                                                        </button>
                                                        <div class="question_holder default">
                                                            <div class="modal-view question borderd m-b-10">
                                                                <textarea name="question[]"
                                                                          ng-model="formData.questions_[index]"
                                                                          cols="30" rows="3" class="question__textatrea"
                                                                          placeholder="Enter Question"></textarea>
                                                            </div>
                                                            <ul class="cancel_factory">

                                                                <li class="answer__option--item">
                                                                    <div class="answer__input--holder">
                                                                        <label class="answer__input--list cancel_factory">
                                                                            <input type="checkbox" name="is_correct[]"
                                                                                   ng-model="formData.answer_one_q_[index]"
                                                                                   ng-init="formData.answer_one_q_[index]=false"
                                                                                   ng-true-value="true"
                                                                                   ng-false-value="false"
                                                                                   class="correct_answer-tick">
                                                                            <span></span>
                                                                            <input type="hidden" name="correct[]"
                                                                                   class="corectvalue-holder">
                                                                        </label>
                                                                        <input type="text" name="options[]"
                                                                               ng-model="formData.op_one_[index]"
                                                                               class="answer__input--item"
                                                                               placeholder="Option 1">
                                                                    </div>
                                                                </li>

                                                                <li class="answer__option--item">
                                                                    <div class="answer__input--holder">
                                                                        <label class="answer__input--list cancel_factory">
                                                                            <input type="checkbox" name="is_correct[]"
                                                                                   ng-model="formData.answer_two_q_[index]"
                                                                                   ng-init="formData.answer_two_q_[index]=false"
                                                                                   ng-true-value="true"
                                                                                   ng-false-value="false"
                                                                                   class="correct_answer-tick">
                                                                            <span></span>
                                                                            <input type="hidden"
                                                                                   class="corectvalue-holder">
                                                                        </label>
                                                                        <input type="text" name="options[]"
                                                                               ng-model="formData.op_two_[index]"
                                                                               class="answer__input--item"
                                                                               placeholder="Option 2">
                                                                    </div>
                                                                </li>

                                                                <li class="answer__option--item">
                                                                    <div class="answer__input--holder">
                                                                        <label class="answer__input--list cancel_factory">
                                                                            <input type="checkbox" name="is_correct[]"
                                                                                   ng-model="formData.answer_three_q_[index]"
                                                                                   ng-init="formData.answer_three_q_[index]=false"
                                                                                   ng-true-value="true"
                                                                                   ng-false-value="false"
                                                                                   class="correct_answer-tick">
                                                                            <span></span>
                                                                            <input type="hidden"
                                                                                   class="corectvalue-holder">
                                                                        </label>
                                                                        <input type="text" name="options[]"
                                                                               ng-model="formData.op_three_[index]"
                                                                               class="answer__input--item"
                                                                               placeholder="Option 3">
                                                                    </div>
                                                                </li>

                                                                <li class="answer__option--item">
                                                                    <div class="answer__input--holder">
                                                                        <label class="answer__input--list cancel_factory">
                                                                            <input type="checkbox" name="is_correct[]"
                                                                                   ng-model="formData.answer_four_q_[index]"
                                                                                   ng-init="formData.answer_four_q_[index]=false"
                                                                                   ng-true-value="true"
                                                                                   ng-false-value="false"
                                                                                   class="correct_answer-tick">
                                                                            <span></span>
                                                                            <input type="hidden"
                                                                                   class="corectvalue-holder">
                                                                        </label>
                                                                        <input type="text" name="options[]"
                                                                               ng-model="formData.op_four_[index]"
                                                                               class="answer__input--item"
                                                                               placeholder="Option 4 (optional)">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" id="addquestion" ng-click="add_question()"
                                                class="addmorequestion-button">ADD MORE QUESTION
                                        </button>
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Visibility</span>
                                    </div>
                                    <div class="form-group">
                                        <select class="custom_form-control lb" ng-model="formData.subject_id"
                                                data-placeholder="Select Subject">
                                            <option value="" ng-if="true" selected disabled>Select Subject</option>
                                            @foreach(user()->subjects as $index)
                                                <option value="{!! $index->id !!}"> {!! $index->name !!} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class="dtp-container su fg-line">
                                            <input type="text" id="due_date" class="form-control su date-picker"
                                                   placeholder="Due date">
                                        </div>
                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page waves-effect" data-dismiss="modal"
                                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                        </button>
                                        <button type="submit" class="btn landing-page waves-effect"
                                                ng-disabled="post_status">SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endif

@if(is_university())


    {{--University Posts--}}
    <div class="modal fade" id="modal-member" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="homeController">
        <div class="modal-dialog">

            <div class="modal-content">
                <ul class="nav nav-tabs navtab-custom2 nav-justified">
                    <li class="active">
                        <a href="#home-12" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">Student</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#profile-12" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Instructor</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#messages-12" data-toggle="tab" aria-expanded="true">
                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span>
                            <span class="hidden-xs">Admin</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="home-12">
                        <form method="post" action="{!! url('university/inviteStudent') !!}" name="form" class="p-20"
                              novalidate>
                            <div class="modal-body">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input name="name" type="text" placeholder="Name"
                                                   class="custom_form-control lb" id="field-2" required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="email" name="email"
                                                   class="custom_form-control lb" placeholder="Email" id="field-3"
                                                   required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="text" name="phone"
                                                   class="custom_form-control lb" placeholder="Phone" id="field-3"
                                                   required>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            {{--<label for="field-2" class="control-label">Department</label>--}}

                                            <select name="department_id" class="custom_form-control lb">
                                                <option disabled selected>Select Department</option>
                                                @foreach(user()->university->department as $index)
                                                    <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="batch_year" ng-model="student.batch"
                                                   placeholder="Batch year" class="custom_form-control lb" id="field-5">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            {{--<label for="field-2" class="control-label">Gender</label>--}}
                                            <select name="gender" class="custom_form-control lb">
                                                <option disabled selected>Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control su date-picker" id="field-8"
                                                   placeholder="Date Of Birth DD/MM/YYYY" name="dob">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field-9" class="form-control">Upload CSV</label>
                                            <input type="file" class="form-control" id="field-9" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Invite
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="profile-12">
                        <form action="{!! url('university/inviteFaculty') !!}" name="instForm" class="p-20"
                              method="post"
                              novalidate>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" name="name"
                                                   class="custom_form-control lb" placeholder="Name" id="field-2">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="custom_form-control lb" id="field-3" name="email"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            {{--<label for="field-4" class="control-label">Department</label>--}}

                                            <select name="department" class="custom_form-control lb" id="field-4"
                                                    ng-change="showSubject()" ng-model="department_id" required>
                                                <option value="" ng-if="true" disabled selected>Select Department
                                                </option>
                                                @foreach(university()->department as $index)
                                                    <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select name="subject" class="custom_form-control lb" required>
                                                <option disabled selected>Select Subject</option>
                                                <option ng-repeat="index in subject"
                                                        value="@{{ index.id }}"> @{{ index.name }}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control su date-picker" id="field-8"
                                                   placeholder="Date Of Birth DD/MM/YYYY" name="dob">
                                        </div>
                                    </div>
                                </div>


                                {{--<div class="row m-b-15 multiselect su">--}}
                                {{--<div class="col-xs-5">--}}
                                {{--<select name="form[]" class="form-control" id="multiselect" size="10" required--}}
                                {{--multiple >--}}
                                {{--<option ng-repeat="index in subject" value="@{{ index.id }}">--}}
                                {{--@{{ index.name }}</option>--}}
                                {{--</select>--}}
                                {{--</div>--}}

                                {{--<div class="col-xs-2">--}}
                                {{--<button type="button" id="multiselect_rightSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-right"></i></button>--}}
                                {{--<button type="button" id="multiselect_leftSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-left"></i></button>--}}
                                {{--</div>--}}

                                {{--<div class="col-xs-5 {{ $errors->has('department') ? 'form-group has-error' : '' }}">--}}
                                {{--<select name="subject[]" id="multiselect_to" class="custom_form-control-textarea" size="8" multiple="multiple"></select>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<select name="subject" class="custom_form-control lb" id="field-4" ng-change="showSubject()" ng-model="department_id" required>--}}
                                {{--<option disabled selected>Select Department</option>--}}
                                {{--@foreach($department as $index)--}}
                                {{--<option value="{!! $index->id !!}">{!! $index->name !!}</option>--}}
                                {{--@endforeach--}}
                                {{--</select>--}}


                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                            </div>
                        </form>
                    </div>

                    <div class="tab-pane" id="messages-12">
                        <form action="{!! url('university/inviteAdmin') !!}" name="" class="p-20" method="post"
                              novalidate>
                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">

                                            <input type="text" class="custom_form-control lb" id="field-2" name="name"
                                                   placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="custom_form-control lb" id="field-3" name="email"
                                                   placeholder="Email">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close
                                </button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modal-subject" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog">

            <div class="modal-content">
                <ul class="nav nav-tabs navtab-custom2 nav-justified">
                    <li class="active">
                        <a href="#university-subject" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-home"></i></span>
                            <span class="hidden-xs">University Subject</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#online-subject" data-toggle="tab" aria-expanded="false">
                            <span class="visible-xs"><i class="fa fa-user"></i></span>
                            <span class="hidden-xs">Online Subject</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="university-subject">

                        <div class="modal-body">
                            <div class="card mm-top">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">CREATE A NEW PRIVATE SUBJECT</span>
                                        <small>
                                            It's just that simple ! Create a subject and assign it to a faculty .
                                        </small>
                                    </h2>
                                </div>

                                <form class="p-20" method="post" action="{!! url('university/addSubject') !!}">
                                    <input type="hidden" name="private" value="private"/>

                                    <div class="form-group">
                                        <input name="name" type="text" class="custom_form-control lb"
                                               placeholder="Subject Name" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="department" class="chosen" required>
                                            <option disabled selected>Select Department</option>
                                            @foreach(user()->university->department as $index)
                                                <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select name="faculty" class="chosen" required>
                                            <option disabled selected>Select Faculty</option>
                                            @foreach(user()->university->faculty as $index)
                                                <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                            @endforeach
                                        </select>

                                    </div>


                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                        </button>
                                        <button type="submit" class="btn landing-page">SUBMIT</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="tab-pane" id="online-subject">
                        <div class="modal-body">
                            <div class="card mm-top">
                                <div class="card-header">
                                    <h2><span class="username-highlighted">CREATE A NEW COURSE</span>
                                        <small>
                                            An open course anyone can enroll to.
                                        </small>
                                    </h2>
                                </div>

                                <form class="p-20" method="post" action="{!! url('university/addSubject') !!}">
                                    <input type="hidden" name="public" value="public"/>
                                    <div class="form-group">
                                        <input name="name" type="text" class="custom_form-control lb"
                                               placeholder="Course Name" required>
                                    </div>
                                    <div class="form-group">
                                        <select name="department" class="chosen" required>
                                            <option disabled selected>Select Department</option>
                                            @foreach(university()->department as $index)
                                                <option value="{!! $index->id !!}">{!! $index->name !!}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                        </button>
                                        <button type="submit" class="btn landing-page">SUBMIT</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="modal fade" id="modal-news" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog large">
            <div class="modal-content" ng-controller="newsController">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">
                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="project-phase1">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/screen.png" alt=""
                                                 class="su_icon"><span
                                                    class="form_title">POST NEWS</span>
                                            <hr>
                                        </div>
                                        <div class="list_button-container">

                                        </div>


                                        <div class="form-group">

                                            <div name="description" ng-model="description" medium-editor
                                                 bind-options="{'toolbar': {'buttons': ['bold', 'italic', 'underline', 'header1', 'header2', 'quote', 'orderedlist', 'unorderedlist']}}">
                                                <div medium-insert insert-addons="insertAddons"></div>
                                            </div>
                                        </div>


                                        <div class="form-group i-w-hr">
                                            <div class="form-group landing-page-footer-modalright">
                                                <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                        style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                                </button>
                                                <button class="btn landing-page" href="#project-phase2"
                                                        aria-controls="tab-2"
                                                        role="tab" data-toggle="tab">NEXT
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>

                                <div role="tabpanel" class="tab-pane animated fadeIn" id="project-phase2">
                                    <form class="p-20" ng-submit="postNews()" id="post_news">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon">POST
                                            NEWS
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="postnote-header-wrapper">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail"
                                                         data-trigger="fileinput"></div>
                                                    <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                         <input type="file" accept="image/*" name="preview_image"
                                                id="preview_image2" ng-model="preview_image">
                                    </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <input type="text" class="custom_form-control lb" ng-model="news_title"
                                                       name="title"
                                                       placeholder="News Title">
                                            </div>
                                        </div>


                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Visibility</span>
                                        </div>
                                        <div class="form-group">
                                            <select class="chosen su"
                                                    ng-options="index.id as index.name for index in taggable"
                                                    options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                    chosen multiple>
                                            </select>
                                        </div>

                                        {{--  <div class="form-group i-w-hr">
                                              <div class="horizontal-line" style="width:80%;"></div>
                                              <span class="field-label visibility">If Group Project</span>
                                          </div>
                                          <div class="form-group">
                                              <select class="chosen su"
                                                      ng-options="index.id as index.name for index in taggable"
                                                      options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                      chosen multiple>

                                              </select>
                                          </div>
      --}}
                                        <div class="form-group">
                                            <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                            <div class="privacy_container">
                                                <span>Privacy</span>
                                                <div class="privacy_dropdown">
                                                    <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                    <select class="privary_list" ng-model="privacy"
                                                            ng-init="privacy='everyone'">

                                                        <option value="everyone" selected="selected">Show Everyone
                                                        </option>
                                                        <option value="followers">Only Friends</option>
                                                        <option value="department">Only Department</option>
                                                        <option value="university">Only University</option>
                                                        <option value="only_me">Only me can see this</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="submit" class="btn landing-page">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-event" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog" ng-controller="eventController">
            <div class="modal-content">
                <form class="p-20" ng-submit="postEvent()">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon"><span
                                class="form_title">POST EVENT</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <div class="postnote-header-wrapper">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" accept="image/*" name="preview_image"
                                               id="preview_image3" ng-model="preview_image">
                                             </span>
                                    <a href="#" class="btn btn-danger fileinput-exists"
                                       data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                            <input type="text" class="custom_form-control lb" ng-model="event_title" name="title"
                                   placeholder="Event Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="location" placeholder="Location">
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Timings</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="event_days" placeholder="All Day">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="starts" placeholder="Starts">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" ng-model="ends" placeholder="End">
                    </div>

                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su"
                                ng-options="index.id as index.name for index in taggable"
                                options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                chosen multiple>
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select class="privary_list" ng-model="privacy"
                                        ng-init="privacy='everyone'">

                                    <option value="everyone" selected="selected">Show Everyone
                                    </option>
                                    <option value="followers">Only Friends</option>
                                    <option value="department">Only Department</option>
                                    <option value="university">Only University</option>
                                    <option value="only_me">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright">
                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                        </button>
                        <button type="submit" class="btn landing-page" ng-disabled="post_status">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-note" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false" ng-controller="postAdminNoteController">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">
                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="note-phase1">
                                    <form class="p-20" id="note_file_form">
                                        <div class="form-group">
                                            <img src="{!! assets('img/icons/file.svg') !!}" alt=""
                                                 class="su_icon"><span class="form_title">POST NOTE</span>
                                            <hr>
                                        </div>
                                        <div class="file_content_area">
                                            <input type="file" name="note_additional_files" id="filer_input"
                                                   multiple="multiple" class=" col-sm-0 col-xs-8">
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="button" class="btn landing-page" href="#note-phase2"
                                                    aria-controls="tab-2" role="tab" data-toggle="tab">NEXT
                                            </button>
                                        </div>
                                    </form>
                                </div>

                                <div role="tabpanel" class="tab-pane animated fadeIn" id="note-phase2">
                                    <form class="p-20" ng-submit="post_note()" id="note_form">
                                        <div class="form-group ihe">
                                            <a href="#note-phase1" role="tab" data-toggle="tab" aria-expanded="true">
                                                <i class="zmdi zmdi-chevron-left zmdi-hc-fw"></i>
                                            </a>
                                            <img src="{!! assets('img/icons/file.svg') !!}" alt="" class="su_icon">
                                            <span class="form_title">POST NOTE</span>
                                            <hr>
                                        </div>
                                        <div class="form-group">
                                            <div class="postnote-header-wrapper">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-preview thumbnail"
                                                         data-trigger="fileinput"></div>
                                                    <div>
                                                <span class="btn btn-info btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" accept="image/*" name="preview_image" data-file
                                                           id="preview_image" ng-model="preview_image"
                                                           onchange="angular.element(this).scope().fileNameChanged()">
                                                </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <input type="text" placeholder="NOTE TITLE"
                                                       class="custom-invisible-form col-xs-9" name="note_title"
                                                       ng-model="note_title">
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label">Department Related</span>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-group">
                                                <select class="custom_form-control lb" ng-model="department_id">
                                                    <option value="" ng-if="true" disabled selected>Select Department
                                                    </option>

                                                    @foreach(university()->department as $department)
                                                        <option value="{!! $department->id !!}">
                                                            {!! $department->name !!}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Visibility</span>
                                        </div>

                                        <div class="form-group">
                                            <select class="chosen su"
                                                    ng-options="index.id as index.name for index in taggable"
                                                    options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                    chosen multiple>

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                            <div class="privacy_container">
                                                <span>Privacy</span>
                                                <div class="privacy_dropdown">
                                                    <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                    <select class="privary_list" ng-model="privacy"
                                                            ng-init="privacy='everyone'">

                                                        <option value="everyone" selected="selected">Show Everyone
                                                        </option>
                                                        <option value="department">Only Department</option>
                                                        <option value="university">Only University</option>
                                                        <option value="only_me">Only me can see this</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright">
                                            <button class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button type="submit" class="btn landing-page" ng-disabled="post_status">SUBMIT</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endif

<div class="modal fade" id="modal-postprojects" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
     data-keyboard="false">
    <div class="modal-dialog large" ng-controller="projectController">
        <div class="modal-content">
            <div class="no-padding">
                <div class="card landing-page">
                    <div class="card-body landing-page">
                        <div class="tab-content landing-page no-padding">
                            <!-- <div role="tabpanel" class="tab-pane animated fadeIn in active" id="project-phase1">
                                <form class="p-20">
                                    <div class="form-group">
                                        <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon"><span
                                                class="form_title">POST PROJECT</span>
                                        <hr>
                                    </div>
                                    <div class="list_button-container">

                                    </div>


                                    <div class="form-group">

                                        {{--<div name="description" ng-model="description" medium-editor
                                             bind-options="{'toolbar': {'buttons': ['bold', 'italic', 'underline', 'header1', 'header2', 'quote', 'orderedlist', 'unorderedlist']}}">
                                            <div medium-insert insert-addons="insertAddons"></div>
                                            <div style="visibility:hidden;">Test COntent</div>
                                        </div>
--}}
                                    <div id="edit">

                                        
                                    </div>


                                    </div>


                                    <div class="form-group i-w-hr">
                                        <div class="form-group landing-page-footer-modalright">
                                            <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                    style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                            </button>
                                            <button class="btn landing-page" href="#project-phase2"
                                                    aria-controls="tab-2"
                                                    role="tab" data-toggle="tab">NEXT
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div> -->

                            <div role="tabpanel" class="tab-pane animated fadeIn in active" id="project-phase2">
                                <form class="p-20" ng-submit="postProject()" id="post_project">
                                    <div class="form-group">
                                        <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon">
                                        <span class="form_title">POST PROJECT</span>
                                        <hr>
                                    </div>
                                    <div class="form-group">
                                        <div class="postnote-header-wrapper">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput"></div>
                                                <div>
                                    <span class="btn btn-info btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                         <input type="file" accept="image/*" name="preview_image"
                                                id="preview_image1" ng-model="preview_image">
                                    </span>
                                                    <a href="#" class="btn btn-danger fileinput-exists"
                                                       data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                            <input type="text" class="custom_form-control lb" ng-model="project_title"
                                                   name="title"
                                                   placeholder="Project Title">
                                        </div>
                                    </div>


                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Visibility</span>
                                    </div>
                                    <div class="form-group">
                                        <select class="chosen su"
                                                ng-options="index.id as index.name for index in taggable"
                                                options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                chosen multiple>
                                        </select>
                                    </div>

                                    {{--  <div class="form-group i-w-hr">
                                          <div class="horizontal-line" style="width:80%;"></div>
                                          <span class="field-label visibility">If Group Project</span>
                                      </div>
                                      <div class="form-group">
                                          <select class="chosen su"
                                                  ng-options="index.id as index.name for index in taggable"
                                                  options="taggable" data-placeholder="Tag followers" ng-model="tags"
                                                  chosen multiple>

                                          </select>
                                      </div>
  --}}
                                    <div class="form-group">
                                        <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                        <div class="privacy_container">
                                            <span>Privacy</span>
                                            <div class="privacy_dropdown">
                                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                <select class="privary_list" ng-model="privacy"
                                                        ng-init="privacy='everyone'">
                                                    <option value="everyone" selected="selected">Show Everyone</option>
                                                    <option value="followers">Only Friends</option>
                                                    <option value="department">Only Department</option>
                                                    <option value="university">Only University</option>
                                                    <option value="only_me">Only me can see this</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page" data-dismiss="modal"
                                                style="margin-right: 15px; background-color: #9B9B9B;">CANCEL
                                        </button>
                                        <button type="submit" class="btn landing-page" ng-disabled="post_status">
                                            SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@if(session()->has('otp_requested_approved'))

    <div class="modal fade" id="reset-password" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static"
         data-keyboard="false">
        <div class="modal-dialog large">
            <div class="modal-content">

                <div class="panel panel-default">

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                            {!! csrf_field() !!}

                            <input type="hidden" name="token" value="{{ reset_token() }}">

                            <input type="hidden" name="email" value="{!! user()->email !!}">

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label class="col-md-4 control-label">Confirm New Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password_confirmation">

                                        @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-refresh"></i>Reset Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endif





