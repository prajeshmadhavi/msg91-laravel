<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social Universtiy</title>

    <!-- Vendor CSS -->
    <link href="{!! assets('vendor/animate.css/animate.min.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/bootstrap-sweetalert/lib/sweet-alert.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}" rel="stylesheet">

   {{-- Froala Editor--}}
    <link href="{!! assets('vendor/froala-editor/css/froala_content.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/froala-editor/css/froala_content.min.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/froala-editor/css/froala_editor.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/froala-editor/css/froala_style.css') !!}" rel="stylesheet">
    <link href="{!! assets('vendor/froala-editor/css/froala_style.min.css') !!}" rel="stylesheet">


    <!-- CSS -->
    <link href="{!! assets('css/app.min.1.css') !!}" rel="stylesheet">
    <link href="{!! assets('css/app.min.2.css') !!}" rel="stylesheet">
    <link rel="stylesheet" href="{!! assets('css/socialuniversity.css') !!}">
    <link rel="stylesheet" href="{!! assets('css/socialuniversity-customp.css') !!}">
    <link href="{!! assets('css/fixes.css') !!}" rel="stylesheet">
</head>

<style>

</style>
<body ng-app="socialUniversity" class="landing-page" id="landing" >


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="registerModal">
    <div class="modal-dialog">
        <div class="modal-content" ng-controller="registerUniversityController" ng-cloak>
            <form class="p-20" ng-submit="registerUniversity()" id="register_university_form">
                <div class="form-group">
                    University Registration
                    <hr>
                </div>
                <div class="form-group">
                    <input type="text" class="custom_form-control" placeholder="University name" id="field-1" name="name" ng-model="name">
                </div>
                <div class="form-group">
                    <input type="text" class="custom_form-control" placeholder="Location" id="address" name="address" ng-model="address">
                </div>
                <div class="form-group">
                    <input type="text" class="custom_form-control" placeholder="University E-mail" id="field-2" name="email" ng-model="email" >
                </div>
                <div class="form-group">
                    <input type="tel" class="custom_form-control" placeholder="Phone number" id="field-5" name="phone" ng-model="phone">
                </div>
                <div class="form-group">
                    <input type="tel" class="custom_form-control" placeholder="Alternate Phone number" id="field-6" name="alternate_phone" ng-model="alternate_phone">
                </div>
                <div class="form-group">
                    <textarea class="custom_form-control-textarea" rows="5" name="additional_comment" ng-model="additional_comment" placeholder="Additional comment"></textarea>
                </div>

                <div class="row m-b-15 multiselect su">
                    <div class="col-xs-5">
                        {!! Form::select('from[]', $departments->pluck('name', 'id'),[], ['class' =>'custom_form-control-textarea', 'size'=>'8', 'id'=>'multiselect', 'multiple']) !!}

                    </div>

                    <div class="col-xs-2">
                        <button type="button" id="multiselect_rightSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-right"></i></button>
                        <button type="button" id="multiselect_leftSelected" class="btn btn-block su shititem"><i class="glyphicon glyphicon-chevron-left"></i></button>
                    </div>

                    <div class="col-xs-5 {{ $errors->has('department') ? 'form-group has-error' : '' }}">
                        <select name="department[]" id="multiselect_to"  ng-model="departments" class="custom_form-control-textarea" size="8" multiple="multiple"></select>
                        @if ($errors->has('department'))
                            <span class="help-block">
                                <strong>{{ $errors->first('department') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group landing-page-footer-modalright" >
                    <button type="cancel" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                    <button type="submit" class="btn landing-page">SUBMIT</button>

                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="otpmodal">
    <div class="modal-dialog">
        <div class="modal-content" ng-controller="loginOTPCntrl" ng-cloak>
            <form class="p-20" ng-submit="loginWithOTP()">
                <div class="form-group">
                    Login with OTP
                    <hr>
                </div>
                <div class="form-group has-error">
                    <input type="text" class="custom_form-control" placeholder="Enter Mobile Number" id="field-1" name="phone" ng-model="phone">
                    <span class="help-block" ng-if="otp_error.hasOwnProperty('phone')">
                        <strong ng-cloak>@{{ otp_error.phone[0] }}</strong>
                    </span>
                </div>


                <div class="form-group landing-page-footer-modalright" >
                    <button type="cancel" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                    <button type="submit" class="btn landing-page">Request OTP</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/ng-template" id="verifyOTP.html">
    <div ng-controller="loginOTPCntrl">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20" ng-submit="verifyOTP()">
                    <div class="form-group">
                        Login with OTP
                        <hr>
                    </div>
                    <div class="form-group has-error">
                        <input type="text" class="custom_form-control" placeholder="Enter OTP Code" name="otp_code" ng-model="formData.otp_code">
                        <span class="help-block" ng-if="otp_error.hasOwnProperty('errors')">
                        <strong ng-cloak>@{{ otp_error.errors[0] }}</strong>
                    </span>
                    </div>


                <div class="form-group landing-page-footer-modalright" >
                    <button type="cancel" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                    <button type="submit" class="btn landing-page">Request OTP</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/ng-template" id="verifyOTP.html">
    <div ng-controller="loginOTPCntrl">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="p-20" ng-submit="verifyOTP()">
                    <div class="form-group">
                        Login with OTP
                        <hr>
                    </div>
                    <div class="form-group has-error">
                        <input type="text" class="custom_form-control" placeholder="Enter OTP Code" name="otp_code" ng-model="formData.otp_code">
                        <span class="help-block" ng-if="otp_error.hasOwnProperty('errors')">
                        <strong ng-cloak>@{{ otp_error.errors[0] }}</strong>
                    </span>
                    </div>


                    <div class="form-group landing-page-footer-modalright" >
                        <button type="submit" ng-click="cancel()" class="btn landing-page" data-dismiss="modal" style="margin-right: 15px; background-color: #9B9B9B;">CANCEL</button>
                        <button type="submit" class="btn landing-page">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</script>


<section>
    <div class="col-md-12 col-sm-12 col-xs-12 min">
        <div class="col-md-4 col-sm-4 col-xs-12 min_sub">
            <img src="{!! asset('assets/img/su-logowhite.png') !!}">
        </div>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 min word">
        <div class="col-md-8 col-sm-8 col-xs-12 p-t-50">
            <h3>WELCOME TO SOCIAL UNIVERSITY</h3>
            <p>Join the revolution of networking done within the college. It is focus
                to give and collect the knowledge you seek to achieve your goals. Login to the
                world of university.
            </p>
            <ul>
                <li><button class="btn btn-primary btn-lg f-13">Learn More</button></li>
                <li><button class="btn btn-default btn-lg f-13" data-toggle="modal" data-target=".bs-example-modal-lg">REGISTER YOUR UNIVERSITY</button></li>
            </ul><br>
            <i class="zmdi zmdi-play-circle-outline zmdi-hc-fw f-25"></i>
            <span class="position f-15">Watch Video</span>
        </div>




        <div class="col-lg-4  col-md-4  col-sm-6 col-xs-12 col-xs-offset-0 no-padding">
            <div class="card landing-page">
                <div class="card-header landing-page">
                    <h2>LOGIN TO YOUR UNIVERSITY</h2>
                </div>

                <div class="card-body landing-page" ng-controller="AuthController" ng-cloak>
                    <ul class="tab-nav landing-page tn-icon" role="tablist">
                        <li role="presentation" class="active">
                            <a class="col-sx-4 landing-page-tab" href="#tab-1" aria-controls="tab-1" role="tab" data-toggle="tab">
                                Student
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="col-xs-4 landing-page-tab" href="#tab-2" aria-controls="tab-2" role="tab" data-toggle="tab">
                                Faculty
                            </a>
                        </li>
                        <li role="presentation">
                            <a class="col-xs-4 landing-page-tab" href="#tab-3" aria-controls="tab-3" role="tab" data-toggle="tab">
                                Official
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content p-20 landing-page">
                        <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1">
                            <form ng-submit="studentLogin()">

                                <div class="form-group has-error">
                                    <input type="tel" class="custom_form-control" placeholder="Phone number" name="phone" ng-model="phone">
                                     <span class="help-block" ng-if="error_student.hasOwnProperty('phone')">
                                        <strong ng-cloak>@{{ error_student.phone[0] }}</strong>
                                     </span>
                                    <span class="help-block" ng-if="error_student.hasOwnProperty('message')">
                                        <strong ng-cloak>@{{ error_student.message }}</strong>
                                     </span>

                                </div>
                                <div class="form-group has-error">
                                    <input type="password" class="custom_form-control" placeholder="Password" name="password" ng-model="password">
                                     <span class="help-block" ng-if="error_student.hasOwnProperty('password')">
                                        <strong ng-cloak>@{{ error_student.password[0] }}</strong>
                                     </span>
                                </div>

                                <div class="form-group landing-page" >
                                    <button type="submit" class="btn landing-page">SIGN IN</button>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: center; margin-bottom: 0px;">
                                    <a href="#" data-toggle="modal" data-target="#otpmodal" style="margin-right: 10px;">Login with OTP</a>
                                </div>

                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-2" >
                            <form ng-submit="facultyLogin()">

                                <div class="form-group has-error">
                                    <input type="email" class="custom_form-control" placeholder="Email"  ng-model="email" name="email" id="field-2">
                                    <span class="help-block" ng-if="error_faculty.hasOwnProperty('email')">
                                        <strong ng-cloak>@{{ error_faculty.email[0] }}</strong>
                                     </span>
                                    <span class="help-block" ng-if="error_faculty.hasOwnProperty('message')">
                                        <strong ng-cloak>@{{ error_faculty.message }}</strong>
                                     </span>
                                </div>
                                <div class="form-group has-error">
                                    <input type="password" class="custom_form-control" placeholder="Password" id="field-5" ng-model="password" name="password">
                                    <span class="help-block" ng-if="error_faculty.hasOwnProperty('password')">
                                        <strong ng-cloak>@{{ error_faculty.password[0] }}</strong>
                                     </span>
                                </div>
                                <div class="form-group landing-page" >
                                    <button type="submit" class="btn landing-page">SIGN IN</button>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: center; margin-bottom: 0px;">
                                    <a href="#" data-toggle="modal" data-target="#otpmodal" style="margin-right: 10px;">Login with OTP</a>
                                </div>

                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane animated fadeIn" id="tab-3">
                            <form ng-submit="universityLogin()">
                                <div class="form-group has-error">
                                    <input type="email" class="custom_form-control" placeholder="Email" id="field-2" ng-model="college.email" name="email">
                                     <span class="help-block" ng-if="error_college.hasOwnProperty('email')">
                                        <strong ng-cloak>@{{ error_college.email[0] }}</strong>
                                     </span>
                                    <span class="help-block" ng-if="error_college.hasOwnProperty('message')">
                                        <strong ng-cloak>@{{ error_college.message }}</strong>
                                     </span>
                                </div>
                                <div class="form-group has-error">
                                    <input type="password" class="custom_form-control" placeholder="Password" id="field-5" name="password" ng-model="college.password">
                                    <span class="help-block" ng-if="error_college.hasOwnProperty('password')">
                                        <strong ng-cloak>@{{ error_college.password[0] }}</strong>
                                     </span>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: center; margin-bottom: 5px;">
                                    <button type="submit" class="btn landing-page">SIGN IN</button>
                                </div>
                                <div class="form-group" style="display: flex; justify-content: center; margin-bottom: 0px;">
                                    <a href="#" data-toggle="modal" data-target="#otpmodal" style="margin-right: 10px;">Login with OTP</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>


<!-- Javascript Libraries -->
<script src="{!! assets('vendor/jquery/dist/jquery.min.js') !!}"></script>
<script src="{!! assets('vendor/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

<script src="{!! assets('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}"></script>
<script src="{!! assets('vendor/Waves/dist/waves.min.js') !!}"></script>
<script src="{!! assets('vendor/bootstrap-growl/jquery.bootstrap-growl.min.js') !!}"></script>
<script src="{!! assets('vendor/bootstrap-sweetalert/lib/sweet-alert.min.js') !!}"></script>
<script src="{!! assets('vendor/autosize/dist/autosize.min.js') !!}"></script>
<script src="{!! assets('vendor/multiselect/js/multiselect.js') !!} "></script>
<!-- Angular -->
<script src="{!! assets('vendor/angular/angular.min.js') !!}"></script>
<script src="{!! assets('vendor/angular-bootstrap/ui-bootstrap.min.js') !!}"></script>
<script src="{!! assets('vendor/angular-bootstrap/ui-bootstrap-tpls.min.js') !!}"></script>
<script src="{!! assets('app/components/auth/login.js') !!}"></script>
<!-- Angular -->



</body>
</html>
