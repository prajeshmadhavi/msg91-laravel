<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/socialuniversitty.css">
    <link href="assets/css/core.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/css/custom.css">


</head>
<body class="main_body">
<div class="gray-scale"></div>
<div class="content__container su__holder">
    <div class="landing_message landing-items col-lg-8 col-md-8   hidden-sm hidden-xs">
        <div class="intro__message--holder">
            <div class="intro__message">WELCOME TO SOCIALUNIVERSITTY</div>
            <div class="intro__message--sub">A SOCIAL NETWORKING PLATFORM FOR UNIVERSITIES</div>
        </div>
    </div>
    <div class="landing_form col-lg-4 col-md-4 col-sm-8 col-lg-offset-0 col-md-offset-0 col-xs-10 col-sm-offset-2 col-xs-offset-1">
        <div class="su__landingpage--container">
            <img src="assets/images/sulogo.png" alt="" class="su__landingpage--logo">
        </div>

        <form class="inputcontent__container su__landing__form" role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}


            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="text" class="form-control su_input" placeholder="Registration Number" name="email"
                       value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control su_input" placeholder="Password" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif

            </div>
            <div class="sulanding__send--button">
                <button type="submit" class="btn btn-default btn-default__landing su__landing__page--button">Submit
                </button>
            </div>
        </form>
    </div>
</div>

<footer class="su__landing--footer">
    <div class="landing__page-hotlink">
        <ul class="hotlink__items--holder">
            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Register University</h4>
                        </div>

                        {!! Form::open(['url'=> 'registerUniversity']) !!}
                        <div class="modal-body">

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-1" class="control-label colored">University name/Id</label>
                                        <input type="text" class="form-control" id="field-1">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-2" class="control-label colored">Email</label>
                                        <input type="email" class="form-control" id="field-2">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address" class="control-label colored">Address</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="address">
                                            <span class="input-group-addon"><i
                                                        class=" md-location-searching"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-5" class="control-label colored">Phone Number</label>
                                        <input type="tel" class="form-control" id="field-5">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="field-6" class="control-label colored">Alternate Number</label>
                                        <input type="tel" class="form-control" id="field-6">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <select name="from[]" id="multi_d" class="form-control" size="10"
                                                multiple="multiple">
                                            <option value="1">C++</option>
                                            <option value="2">C#</option>
                                            <option value="3">Haskell</option>
                                            <option value="4">Java</option>
                                            <option value="5">JavaScript</option>
                                            <option value="6">Lisp</option>
                                            <option value="7">Lua</option>
                                            <option value="8">MATLAB</option>
                                            <option value="9">NewLISP</option>
                                            <option value="10">PHP</option>
                                            <option value="11">Perl</option>
                                            <option value="12">SQL</option>
                                            <option value="13">Unix shell</option>
                                        </select>
                                    </div>

                                    <div class="col-xs-2">
                                        <button type="button" id="multi_d_rightAll" class="btn btn-default btn-block"
                                                style="margin-top: 20px;"><i class="glyphicon glyphicon-forward"></i>
                                        </button>
                                        <button type="button" id="multi_d_rightSelected"
                                                class="btn btn-default btn-block"><i
                                                    class="glyphicon glyphicon-chevron-right"></i></button>
                                        <button type="button" id="multi_d_leftSelected"
                                                class="btn btn-default btn-block"><i
                                                    class="glyphicon glyphicon-chevron-left"></i></button>
                                        <button type="button" id="multi_d_leftAll" class="btn btn-default btn-block"><i
                                                    class="glyphicon glyphicon-backward"></i></button>

                                    </div>

                                    <div class="col-xs-5">
                                        <b>Known languages</b>
                                        <select name="to[]" id="multi_d_to" class="form-control" size="10"
                                                multiple="multiple"></select>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-info waves-effect waves-light">Submit</button>
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div><!-- /.modal -->

            <li class="hotlink__items"><a href="">About Us</a></li>
            <li class="hotlink__items"><a href="">Support</a></li>
            <li class="hotlink__items"><a href="">Blog</a></li>
            <li class="hotlink__items"><a href="" data-toggle="modal" data-target="#con-close-modal">Register
                    University</a></li>
            <li class="hotlink__items"><a href="">Careers</a></li>
            <li class="hotlink__items"><a href="">Terms</a></li>
            <li class="hotlink__items"><a href="">Privacy</a></li>
            <li class="hotlink__items"><a href="">Language</a></li>
        </ul>
        <div class="hotlink__items--holder padded">
            Copyright 2016 Social University
        </div>
    </div>

</footer>
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/multiselect.min.js"></script>

<!-- Modal-Effect -->
<script src="assets/plugins/custombox/dist/custombox.min.js"></script>
<script src="assets/plugins/custombox/dist/legacy.min.js"></script>

<!-- Custom main Js -->
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#multi_d').multiselect({
            right: '#multi_d_to, #multi_d_to_2',
            rightSelected: '#multi_d_rightSelected, #multi_d_rightSelected_2',
            leftSelected: '#multi_d_leftSelected, #multi_d_leftSelected_2',
            rightAll: '#multi_d_rightAll, #multi_d_rightAll_2',
            leftAll: '#multi_d_leftAll, #multi_d_leftAll_2',

            search: {
                left: '<input type="text" name="q" class="form-control" placeholder="Search..." />'
            },

            moveToRight: function (Multiselect, $options, event, silent, skipStack) {
                var button = $(event.currentTarget).attr('id');

                if (button == 'multi_d_rightSelected') {
                    var $left_options = Multiselect.$left.find('> option:selected');
                    Multiselect.$right.eq(0).append($left_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$right.eq(0).find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$right.eq(0));
                    }
                } else if (button == 'multi_d_rightAll') {
                    var $left_options = Multiselect.$left.children(':visible');
                    Multiselect.$right.eq(0).append($left_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$right.eq(0).find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$right.eq(0));
                    }
                } else if (button == 'multi_d_rightSelected_2') {
                    var $left_options = Multiselect.$left.find('> option:selected');
                    Multiselect.$right.eq(1).append($left_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$right.eq(1).find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$right.eq(1));
                    }
                } else if (button == 'multi_d_rightAll_2') {
                    var $left_options = Multiselect.$left.children(':visible');
                    Multiselect.$right.eq(1).append($left_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$right.eq(1).eq(1).find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$right.eq(1));
                    }
                }
            },

            moveToLeft: function (Multiselect, $options, event, silent, skipStack) {
                var button = $(event.currentTarget).attr('id');

                if (button == 'multi_d_leftSelected') {
                    var $right_options = Multiselect.$right.eq(0).find('> option:selected');
                    Multiselect.$left.append($right_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$left.find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$left);
                    }
                } else if (button == 'multi_d_leftAll') {
                    var $right_options = Multiselect.$right.eq(0).children(':visible');
                    Multiselect.$left.append($right_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$left.find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$left);
                    }
                } else if (button == 'multi_d_leftSelected_2') {
                    var $right_options = Multiselect.$right.eq(1).find('> option:selected');
                    Multiselect.$left.append($right_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$left.find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$left);
                    }
                } else if (button == 'multi_d_leftAll_2') {
                    var $right_options = Multiselect.$right.eq(1).children(':visible');
                    Multiselect.$left.append($right_options);

                    if (typeof Multiselect.callbacks.sort == 'function' && !silent) {
                        Multiselect.$left.find('> option').sort(Multiselect.callbacks.sort).appendTo(Multiselect.$left);
                    }
                }
            }
        });
    });
</script>

</body>
</html>