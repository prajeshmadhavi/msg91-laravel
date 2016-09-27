@include('partials.header')
<body>

    <div class="modal fade" id="modal-postprojects" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">
                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="project-phase1">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon"><span class="form_title">POST PROJECT</span>
                                            <hr>
                                        </div>
                                        <div class="list_button-container">
                                            <ul class="list_button">
                                                <li>
                                                    <button type="button" class="btn btn-primary"><img src="../assets/img/icon-set-png/yearbook.png" alt="" class="post_icon">Add Media</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary"><img src="../assets/img/icon-set-png/marker.png" alt="" class="post_icon flipped">Add Media</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="custom_form-control-textarea n-br-t" rows="10" placeholder="Additional comment"></textarea>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright" >
                                            <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                                            <button  class="btn landing-page" href="#project-phase2" aria-controls="tab-2" role="tab" data-toggle="tab">NEXT</button>
                                        </div>
                                    </form>

                                </div>

                                <div role="tabpanel" class="tab-pane animated fadeIn" id="project-phase2">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon">POST PROJECT
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
                                            <input type="file" name="...">
                                        </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <input type="text" placeholder="PROJECT TITLE" class="custom-invisible-form col-xs-9">
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Visibility</span>
                                        </div>
                                        <div class="form-group">
                                            <select class="chosen su"  multiple data-placeholder="Tag">
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                            <div class="privacy_container">
                                                <span>Privacy</span>
                                                <div class="privacy_dropdown">
                                                    <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                    <select name=""  class="privary_list">
                                                        <option value="">Show Everyone</option>
                                                        <option value="">Only Friends</option>
                                                        <option value="">Only Department</option>
                                                        <option value="">Only University</option>
                                                        <option value="">Only me can see this</option>
                                                    </select>
                                                </div>
                                            </div>
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
        </div>
    </div>
    <div class="modal fade" id="modal-postfile" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/pencil-1.png" alt="" class="su_icon"><span class="form_title">POST NOTE</span>
                        <hr>
                    </div>
                    <div class="file_content_area">
                        <input type="file" name="files[]" id="filer_input2" multiple="multiple" class=" col-sm-0 col-xs-8">
                    </div>
                    <div class="form-group landing-page-footer-modalright" >
                        <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                        <button type="submit" class="btn landing-page">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-note" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20" >
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/pencil-1.png" alt="" class="su_icon"><span class="form_title">POST NOTE</span>
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
                                            <input type="file" name="...">
                                        </span>
                                    <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                            <input type="text" placeholder="NOTE TITLE" class="custom-invisible-form col-xs-9">
                        </div>
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label">Lecture Related</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="Select Subject">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="Select Lectures">
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su"  multiple data-placeholder="Tag followers">
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select name=""  class="privary_list">
                                    <option value="">Show Everyone</option>
                                    <option value="">Only Friends</option>
                                    <option value="">Only Department</option>
                                    <option value="">Only University</option>
                                    <option value="">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright" >
                        <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                        <button  class="btn landing-page" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-event" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon"><span class="form_title">POST EVENT</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="News Title">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="Location">
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Timings</span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="All Day">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="Starts">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="End">
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="Location">
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su"  multiple data-placeholder="Tag">
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select name="" id="" class="privary_list">
                                    <option value="">Show Everyone</option>
                                    <option value="">Only Friends</option>
                                    <option value="">Only Department</option>
                                    <option value="">Only University</option>
                                    <option value="">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright" >
                        <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                        <button type="submit" class="btn landing-page">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-news" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="no-padding">
                    <div class="card landing-page">
                        <div class="card-body landing-page">
                            <div class="tab-content landing-page no-padding">
                                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="news-phase1">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon"><span class="form_title">POST NEWS</span>
                                            <hr>
                                        </div>
                                        <div class="list_button-container">
                                            <ul class="list_button">
                                                <li>
                                                    <button type="button" class="btn btn-primary"><img src="../assets/img/icon-set-png/yearbook.png" alt="" class="post_icon">Add Media</button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary"><img src="../assets/img/icon-set-png/marker.png" alt="" class="post_icon flipped">Add Media</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="form-group">
                                            <textarea class="custom_form-control-textarea n-br-t" rows="10" placeholder="Additional comment"></textarea>
                                        </div>
                                        <div class="form-group landing-page-footer-modalright" >
                                            <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                                            <button  class="btn landing-page" href="#news-phase2" aria-controls="tab-2" role="tab" data-toggle="tab">NEXT</button>
                                        </div>

                                    </form>

                                </div>

                                <div role="tabpanel" class="tab-pane animated fadeIn" id="news-phase2">
                                    <form class="p-20">
                                        <div class="form-group">
                                            <img src="../assets/img/icon-set-png/screen.png" alt="" class="su_icon">POST NEWS
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
                                            <input type="file" name="...">
                                        </span>
                                                        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                                <input type="text" placeholder="NEWS TITLE" class="custom-invisible-form col-xs-9">
                                            </div>
                                        </div>
                                        <div class="form-group i-w-hr">
                                            <div class="horizontal-line"></div>
                                            <span class="field-label visibility">Visibility</span>
                                        </div>
                                        <div class="form-group">
                                            <select class="chosen su"  multiple data-placeholder="Tag">
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                                <option value="Kelechi">Kelechi</option>
                                                <option value="Akeem">Akeem</option>
                                                <option value="kolade">Kolade</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <!--<input type="tel" class="custom_form-control lb" placeholder="Privacy">-->
                                            <div class="privacy_container">
                                                <span>Privacy</span>
                                                <div class="privacy_dropdown">
                                                    <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                                    <select name="" id="" class="privary_list">
                                                        <option value="">Show Everyone</option>
                                                        <option value="">Only Friends</option>
                                                        <option value="">Only Department</option>
                                                        <option value="">Only University</option>
                                                        <option value="">Only me can see this</option>
                                                    </select>
                                                </div>
                                            </div>
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
        </div>
    </div>
    <div class="modal fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="p-20">

                    <div class="card-body">
                        <img src="../assets/img/icon-set-png/grades.png" alt="" class="su_icon"><span class="form_title">POST REPORT</span>
                        <hr>
                        <ul class="landing-page two_button_switch-container cancel_factory" role="tablist">
                            <li role="presentation" class="active button_switch-item">
                                <a class=" landing-page" href="#report_attendance" aria-controls="tab-1" role="tab" data-toggle="tab" aria-expanded="true">
                                    Attendance
                                </a>
                            </li>
                            <li role="presentation" class="button_switch-item">
                                <a class="landing-page" href="#report_result" aria-controls="tab-2" role="tab" data-toggle="tab" aria-expanded="false">
                                    Results
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class=" tab-pane animated fadeIn active" id="report_attendance">
                                <form>
                                    <div class="form-group i-w-hr pl-20">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Result Overview</span>
                                    </div>
                                    <div class="report-content">
                                        <div class="report__content--sub">
                                            <img src="../assets/img/shawaz.jpg" class="report_img" alt="">
                                            <ul class="cancel_factory">
                                                <li>January 2016</li>
                                                <li>Subject name</li>
                                            </ul>
                                        </div>
                                        <div class="report__content--sub">
                                            <div class="score_container">
                                                <span>Total Classes</span>
                                                <div class="score_display"></div>
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
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
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
                                        <textarea class="custom_form-control-textarea" rows="5" placeholder="Feedback comment"></textarea>
                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page waves-effect" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                                        <button type="submit" class="btn landing-page waves-effect">SUBMIT</button>
                                    </div>
                                </form>
                            </div>

                            <div role="tabpanel" class="tab-pane animated fadeIn" id="report_result">
                                <form>
                                    <div class="form-group i-w-hr pl-20">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Result Overview</span>
                                    </div>
                                    <div class="report-content">
                                        <div class="report__content--sub">
                                            <img src="../assets/img/shawaz.jpg" class="report_img" alt="">
                                            <ul class="cancel_factory">
                                                <li>Result Title</li>
                                                <li>Subject name</li>
                                            </ul>
                                        </div>
                                        <div class="report__content--sub">
                                            <div class="score_container">
                                                <span>Pass</span>
                                                <div class="score_display"></div>
                                            </div>
                                            <div class="score_container">
                                                <span>Total</span>
                                                <div class="score_display"></div>
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
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="lv-item  memberlist" href="">
                                                    <div class="media">
                                                        <div class="member_container">
                                                            <div class="member_info">
                                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                                                <span class="pl-10"> Member Name</span>
                                                            </div>

                                                            <div class="report__content--sub">
                                                                <div class="score_container no-margin">
                                                                    <span>Total Classes</span>
                                                                    <div class="score_display"></div>
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
                                        <textarea class="custom_form-control-textarea" rows="5" placeholder="Feedback comment"></textarea>
                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page waves-effect" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
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
    <div class="modal fade" id="modal-assignment" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="p-20">

                    <div class="card-body">
                        <img src="../assets/img/icon-set-png/desk-lamp.png" alt="" class="su_icon"><span class="form_title">POST ASSIGNMENT</span>
                        <hr>
                        <ul class="landing-page two_button_switch-container cancel_factory" role="tablist">
                            <li role="presentation" class="active button_switch-item">
                                <a class=" landing-page" href="#assignment_note" aria-controls="tab-1" role="tab" data-toggle="tab" aria-expanded="true">
                                    NOTE
                                </a>
                            </li>
                            <li role="presentation" class="button_switch-item">
                                <a class="landing-page" href="#assignment-quiz" aria-controls="tab-2" role="tab" data-toggle="tab" aria-expanded="false">
                                    QUIZ
                                </a>
                            </li>

                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class=" tab-pane animated fadeIn active" id="assignment_note">
                                <form>

                                    <div class="form-group">
                                        <input type="text" class="custom_form-control lb" placeholder="Assignment Title">
                                    </div>
                                    <div class="form-group i-w-hr p-10">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Attach Files</span>
                                    </div>
                                    <div class="form-group toggle__button--holder p-10">
                                        <div class="toggle-switch su" data-ts-color="blue">
                                            <label for="ts3" class="ts-label">Student should upload file to submit</label>
                                            <input id="ts3" type="checkbox" hidden="hidden">
                                            <label for="ts3" class="ts-helper"></label>
                                        </div>
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Visibilty</span>
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
                                    <div class="form-group">
                                        <div class="dtp-container su fg-line">
                                            <input type="text" class="form-control su date-picker" placeholder="Due date">
                                        </div>

                                    </div>
                                    <div class="form-group landing-page-footer-modalright" >
                                        <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                                        <button type="submit" class="btn landing-page">SUBMIT</button>
                                    </div>
                                </form>

                            </div>

                            <div role="tabpanel" class="tab-pane animated fadeIn" id="assignment-quiz">
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="custom_form-control lb" placeholder="Assignment Title">
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility" style="padding-left: 7px">Quiz List</span>
                                    </div>
                                    <div>
                                        <div class="listview">
                                            <div class="lv-body modal-view c-overflow">
                                                <div class="lv-item borderd mb-20" href="">
                                                    <div class="media">
                                                        <ul class="question_title-header cancel_factory">
                                                            <li>Question Title</li>
                                                            <li><i class="zmdi zmdi-close zmdi-hc-fw close_button"></i></li>
                                                        </ul>
                                                        <div class="question__list">
                                                            <label><input type="radio" class="custom_fancy-radio" name="question1"><span>Question1</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question1"><span>Question1</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question1"><span>Question1</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question1"><span>Question1</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question1"><span>Question1</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lv-item borderd mb-20" href="">
                                                    <div class="media">
                                                        <ul class="question_title-header cancel_factory">
                                                            <li>Question Title</li>
                                                            <li><i class="zmdi zmdi-close zmdi-hc-fw close_button"></i></li>
                                                        </ul>
                                                        <div class="question__list">
                                                            <label><input type="radio" class="custom_fancy-radio" name="question2"><span>Question2</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question2"><span>Question2</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question2"><span>Question2</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question2"><span>Question2</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question2"><span>Question2</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lv-item borderd mb-20" href="">
                                                    <div class="media">
                                                        <ul class="question_title-header cancel_factory">
                                                            <li>Question Title</li>
                                                            <li><i class="zmdi zmdi-close zmdi-hc-fw close_button"></i></li>
                                                        </ul>
                                                        <div class="question__list">
                                                            <label><input type="radio" class="custom_fancy-radio" name="question3"><span>Question3</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question3"><span>Question3</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question3"><span>Question3</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question3"><span>Question3</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question3"><span>Question3</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lv-item borderd mb-20" href="">
                                                    <div class="media">
                                                        <ul class="question_title-header cancel_factory">
                                                            <li>Question Title</li>
                                                            <li><i class="zmdi zmdi-close zmdi-hc-fw close_button"></i></li>
                                                        </ul>
                                                        <div class="question__list">
                                                            <label><input type="radio" class="custom_fancy-radio" name="question4"><span>Question4</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question4"><span>Question4</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question4"><span>Question4</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question4"><span>Question4</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question4"><span>Question4</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="lv-item borderd mb-20" href="">
                                                    <div class="media">
                                                        <ul class="question_title-header cancel_factory">
                                                            <li>Question Title</li>
                                                            <li><i class="zmdi zmdi-close zmdi-hc-fw close_button"></i></li>
                                                        </ul>
                                                        <div class="question__list">
                                                            <label><input type="radio" class="custom_fancy-radio" name="question5"><span>Question5</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question5"><span>Question5</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question5"><span>Question5</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question5"><span>Question5</span></label>
                                                            <label><input type="radio" class="custom_fancy-radio" name="question5"><span>Question5</span></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="addmorequestion-button">ADD MORE QUESTION</button>
                                    </div>
                                    <div class="form-group i-w-hr">
                                        <div class="horizontal-line"></div>
                                        <span class="field-label visibility">Visibilty</span>
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
                                    <div class="form-group">
                                        <div class="dtp-container su fg-line">
                                            <input type="text" class="form-control su date-picker" placeholder="Due date">
                                        </div>

                                    </div>
                                    <div class="form-group landing-page-footer-modalright">
                                        <button type="submit" class="btn landing-page waves-effect" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
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
    <div class="modal fade" id="modal-question" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20">
                    <div class="form-group">
                        <img src="../assets/img/icon-set-png/hands.png" alt="" class="su_icon"><span class="form_title">POST QUESTION</span>
                        <hr>
                    </div>
                    <div class="form-group">
                        <input type="text" class="custom_form-control lb" placeholder="Question Title">
                    </div>
                    <div class="form-group">
                        <textarea class="custom_form-control-textarea" rows="5" placeholder="Question Description"></textarea>
                    </div>
                    <div class="form-group i-w-hr">
                        <div class="horizontal-line"></div>
                        <span class="field-label visibility">Visibility</span>
                    </div>
                    <div class="form-group">
                        <select class="chosen su"  multiple data-placeholder="Tag">
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                            <option value="Kelechi">Kelechi</option>
                            <option value="Akeem">Akeem</option>
                            <option value="kolade">Kolade</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <div class="privacy_container">
                            <span>Privacy</span>
                            <div class="privacy_dropdown">
                                <i class="zmdi zmdi-globe zmdi-hc-fw privacy_setting"></i>
                                <select name="" id="" class="privary_list">
                                    <option value="">Show Everyone</option>
                                    <option value="">Only Friends</option>
                                    <option value="">Only Department</option>
                                    <option value="">Only University</option>
                                    <option value="">Only me can see this</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group landing-page-footer-modalright" >
                        <button type="submit" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                        <button type="submit" class="btn landing-page">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div class="modal fade" id="modal-member" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static" data-keyboard="false">
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

            <div class="tab-content" ng-controller="MyController">
                <div class="tab-pane active" id="home-12">
                    <form method="post" action="{!! url('university/inviteStudent') !!}" name="form" class="p-20" novalidate>
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <input type="text" ng-model="student.register_id" name="registration_id" placeholder="Registration Id"  class="custom_form-control lb" id="field-1" required/>

                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-md-12">
                                    <div class="form-group">

                                        <input name="name" ng-model="student.name"  type="text" placeholder="Name" class="custom_form-control lb" id="field-2" required/>


                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <input type="email" name="email" ng-model="student.email" class="custom_form-control lb" placeholder="Email" id="field-3" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <input type="text" name="phone" ng-model="student.email" class="custom_form-control lb" placeholder="Phone" id="field-3" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">

                                        <label for="field-2" class="control-label">Department</label>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" name="batch_year" ng-model="student.batch" placeholder="Batch year" class="custom_form-control lb" id="field-5">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" class="custom_form-control lb" id="field-6" name="gender" placeholder="Gender">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="custom_form-control lb" id="dob" placeholder="Date Of Birth DD/MM/YYYY" name="dob">

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
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                            </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane" id="profile-12">
                <form action="{!! url('university/inviteFaculty') !!}" name="instForm" class="p-20" method="post" novalidate>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" name="name" ng-model="inst.name" class="custom_form-control lb" palceholder="Name" id="field-2">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="custom_form-control lb" id="field-3" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="field-4" class="control-label">Department</label>
                                    </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="custom_form-control lb" id="field-8" placeholder="Date Of Birth DD/MM/YYYY" name="dob">                                                   </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="row">
                                <div class="col-xs-5">
                                    {!! Form::select('from[]', getSubjects(),[], ['class' =>'form-control', 'id'=>'multi_d', 'size'=>10, 'multiple']) !!}
                                    {{--<select name="from[]" id="multi_d" class="form-control" size="10" multiple="multiple">--}}
                                    {{--<option value="1">Plant Science </option>--}}
                                    {{--<option value="2">Bachelor of Business Management</option>--}}
                                    {{--<option value="3">Bachelor of Computer Application</option>--}}
                                    {{--<option value="4">Aeronautic Engineering</option>--}}
                                    {{--<option value="5">Mechanical Engineering</option>--}}
                                    {{--<option value="6"> Bachelor of Commerce </option>--}}
                                    {{--<option value="7"> Bachelor of Art </option>--}}

                                    {{--</select>--}}
                                </div>

                                <div class="col-xs-2">
                                    <button type="button" id="multi_d_rightAll" class="btn btn-default btn-block" style="margin-top: 20px;"><i class="glyphicon glyphicon-forward"></i></button>
                                    <button type="button" id="multi_d_rightSelected" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-right"></i></button>
                                    <button type="button" id="multi_d_leftSelected" class="btn btn-default btn-block"><i class="glyphicon glyphicon-chevron-left"></i></button>
                                    <button type="button" id="multi_d_leftAll" class="btn btn-default btn-block"><i class="glyphicon glyphicon-backward"></i></button>

                                </div>

                                <div class="col-xs-5">
                                    <select name="to[]" id="multi_d_to" class="form-control" size="10" multiple="multiple"></select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="messages-12">
                <form action="{!! url('university/inviteAdmin') !!}" name="" class="p-20" method="post" novalidate>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">

                                    <input type="text" class="custom_form-control lb" id="field-2" name="name" placeholder="Name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="email" class="custom_form-control lb" id="field-3" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Invite</button>
                    </div>
                </form>
            </div>

        </div>




    </div></div>
</div>

<header id="header" class="clearfix" data-current-skin="white">
    <div class="container item-header top-head" style="">
        <ul class="header__row cancel_factory">
            <li class="header__row--item">
                <ul class="header-inner no-padding su">
                    <li id="menu-trigger" data-trigger="#sidebar" class="visible-xs">
                        <div class="line-wrap">
                            <div class="line top header"></div>
                            <div class="line center header"></div>
                            <div class="line bottom header"></div>
                        </div>
                    </li>
                    <li class="hidden-xs">
                        <a href="" class="su-title"><img src="../assets/img/su-logo.png" alt=""><span>Social University</span></a>
                    </li>
                </ul>
            </li>
            <li class="header__row--item">
                <div class="custom_search-header">
                    <button type="submit" class="search_box-button-header"><i class="zmdi zmdi-search zmdi-hc-fw search_box-icon"></i></button>
                    <input type="search" class="search_box-header col-xs-11" placeholder="Search University Name Media">
                </div>
            </li>
            <li class="header__row--item">
                <ul class="top-menu">
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <i class="zmdi zmdi-notifications zmdi-hc-fw head-icon"></i>
                            <i class="tmn-counts">6</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <i class="glyphicon glyphicon-book head-icon book"></i>
                            <i class="tmn-counts">9</i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification

                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="zmdi zmdi-check-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="../assets/img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <a class="lv-footer" href="">View Previous</a>
                            </div>

                        </div>
                    </li>
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <i class="zmdi zmdi-local-post-office zmdi-hc-fw head-icon"></i>
                            <i class="tmn-counts">2</i>
                        </a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>

                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown hidden-xs ">
                        <a data-toggle="dropdown" href="">
                            <img src="../assets/img/shawaz.jpg" class="su_icon notify bus atom-buttom" alt="">
                        </a>
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
                    <li class="dropdown hidden-lg hidden-md hidden-sm">
                        <a data-toggle="dropdown" href="" aria-expanded="false">
                            <img src="../assets/img/icon-set-png/atom.png" class="su_icon notify bus atom-buttom" alt="">
                        </a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="card-body">
                                <ul class="tab-nav tn-justified tn-icon" role="tablist">
                                    <li role="presentation" class="active">
                                        <a class="col-sx-4" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                            <img src="../assets/img/icon-set-png/desk-lamp.png" alt="" class="tab_icon">
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                                            <img src="../assets/img/icon-set-png/grades.png" alt="" class="tab_icon">
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a class="col-xs-4" href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                                            <img src="../assets/img/icon-set-png/calendar.png" alt="" class="tab_icon">
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content p-20 left_side-bar">
                                    <div role="tabpanel" class="tab-pane animated fadeIn in active left_side-bar" id="tab-1">
                                        <div class="tl-body left_side-bar c-overflow mCustomScrollbar _mCS_1 mCS-autoHide" style="overflow: visible;"><div id="mCSB_1" class="mCustomScrollBox mCS-minimal-dark mCSB_vertical_horizontal mCSB_outside" style="max-height: 280px;" tabindex="0"><div id="mCSB_1_container" class="mCSB_container mCS_y_hidden mCS_no_scrollbar_y" style="position: relative; top: 0px; left: -100px; width: 100%;" dir="ltr">
                                                    <div class="checkbox media">
                                                        <div class="media-body assignment_panel-text ">
                                                            <label>
                                                                <input type="checkbox">
                                                                <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="checkbox media">
                                                        <div class="media-body assignment_panel-text ">
                                                            <label>
                                                                <input type="checkbox">
                                                                <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="checkbox media">
                                                        <div class="media-body assignment_panel-text ">
                                                            <label>
                                                                <input type="checkbox">
                                                                <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="checkbox media">
                                                        <div class="media-body assignment_panel-text ">
                                                            <label>
                                                                <input type="checkbox">
                                                                <i class="input-helper su"></i>
                                            <span class="assignment_info">
                                               <ul class="assignment_item">
                                                   <li class="username-highlighted">Bachelors of Computer Applications</li>
                                                   <li>Assignment Description</li>
                                                   <li class="due_date">Due Date : June 27 2016</li>
                                               </ul>
                                            </span>

                                                            </label>
                                                        </div>
                                                    </div>
                                                </div></div><div id="mCSB_1_scrollbar_vertical" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_vertical" style="display: none;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 50px; top: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 50px;"></div></div><div class="mCSB_draggerRail"></div></div></div><div id="mCSB_1_scrollbar_horizontal" class="mCSB_scrollTools mCSB_1_scrollbar mCS-minimal-dark mCSB_scrollTools_horizontal" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_1_dragger_horizontal" class="mCSB_dragger" style="position: absolute; min-width: 50px; display: block; width: 0px; left: 0px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div>
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2">
                                        <img src="../assets/img/headers/sm/2.png" class="img-responsive m-b-15" alt="">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sit amet dapibus tellus. Nullam aliquet dignissim semper. Cras sit amet ligula congue, dapibus enim id, dapibus tellus.
                                    </div>

                                    <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3">
                                        <img src="../assets/img/headers/sm/4.png" class="img-responsive m-b-15" alt="">
                                        Serhoncus quis est sit amete in nisl molestie fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna massa.
                                    </div>
                                </div>
                            </div>
                            <!--    <div class="listview">
                                    <div class="lv-header">
                                        Tasks
                                    </div>
                                    <div class="lv-body">
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">HTML5 Validation Report</div>

                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                    <span class="sr-only">95% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Google Chrome Extension</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (success)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Social Intranet Projects</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Bootstrap Admin Template</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                    <span class="sr-only">60% Complete (warning)</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lv-item">
                                            <div class="lv-title m-b-5">Youtube Client App</div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                    <span class="sr-only">80% Complete (danger)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <a class="lv-footer" href="">View All</a>
                                </div>-->
                        </div>
                    </li>

                </ul>
            </li>
        </ul>
    </div>

    <!-- Top Search Content -->
</header>
<div class="header_sub">
    <div class="container header_padding">
        <ul class="header-inner hidden-xs group_switcher dashboard">
            <li class="icon-group-header ">
                <ul class="toggle_header-icon-items">
                    <li class="active toggle_item first-child">
                        <a href="#subject-updates"

                           aria-controls="home11" role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/teacher-desk.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">HOME</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#subject-reports" aria-controls="settings11" role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/high-school.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">UNIVERSITY</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a href="#subject-lectures" aria-controls="profile11" role="tab" data-toggle="tab" aria-expanded="true">
                            <img src="../assets/img/icon-set-png/teacher-desk.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">DASHBOARD</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <a  data-toggle="modal" href="#modal-member">
                            <img src="../assets/img/icon-set-png/uniform.png" class="su_icon header" alt="">
                            <span class="hidden-sm hidden-xs">ADD MEMBER</span>
                        </a>
                    </li>
                    <li class="toggle_item">
                        <div class="btn-group post_something-button">
                            <button type="button" class="btn btn-primary btn-block dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                Post Something
                            </button>
                            <ul class="dropdown-menu postsomething_menu" role="menu">
                                <li data-toggle="modal" href="#modal-note">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/pencil-1.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">note</span>
                                            </td>
                                        </tr>
                                    </table>

                                </li>
                                <li data-toggle="modal" href="#modal-postfile">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/notebook.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">file</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-postprojects">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/screen.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">projects</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-question">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/hands.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">question</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-news">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/newspaper.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">news</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-event">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/calendar.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">events</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-report">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/grades.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">Report</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                                <li data-toggle="modal" href="#modal-assignment">
                                    <table>
                                        <tr>
                                            <td class="post_category-images">
                                                <img class="lv-img-sm su_icon post" src="../assets/img/icon-set-png/desk-lamp.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text_align-center">
                                                <span class="post_title">ASSIGNMENT</span>
                                            </td>
                                        </tr>
                                    </table>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

<section id="content">
    <div class="container padding-top grid-dashboard">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/chemistry.png" class="su_icon" alt="">
                    <span>DASHBOARD</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/writing.png" class="su_icon" alt="">
                    <span>PAYMENT</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/graduate.png" class="su_icon" alt="">
                    <span>UNIVERSITY MEMBERS</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/agenda.png" class="su_icon" alt="">
                    <span>UNIVERSITY SUBJECTS</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/briefcase.png" class="su_icon" alt="">
                    <span>JOBS</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/pencil-1.png" class="su_icon" alt="">
                    <span>UNIVERSITY FILES</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/calendar.png" class="su_icon" alt="">
                    <span>UNIVERSITY EVENTS</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/newspaper.png" class="su_icon" alt="">
                    <span>UNIVERSITY NEWS</span>
                </div>
                <hr class="su">
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 p-15">
            <div class="card db n-m-b n-b-s col-xs-12">
                <div class="p-10">
                    <img src="img/icon-set-png/diploma-1.png" class="su_icon" alt="">
                    <span>UNIVERSITY ALUMNI</span>
                </div>
                <hr class="su">
            </div>
        </div>
    </div>
</section>

</body>

@include('partials.scripts')