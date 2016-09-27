<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social University Backoffice</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{!! asset('assets/vendor/animate.css/animate.min.css') !!}">
    <link rel="stylesheet"
          href="{!! asset('assets/vendor/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') !!}">
    <link rel="stylesheet"
          href="{!! asset('assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') !!}">
    <!-- CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/app.min.1.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/app.min.2.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/css/socialuniversity-custom.css') !!}">

</head>

<body class="landing-page">
<div class="universal_wrapper">
    <div class="card col-lg-4 col-md-4 col-sm-6 col-xs-11 landing-page">
        <div class="card-header landing-page">
            <h2>Super Admin Login</h2>
        </div>

        <div class="card-body landing-page p-t-25">

            <div class="tab-content p-20 landing-page">

                @if ($errors->has('email'))
                    <span class="help-block" style="color: red;">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                @if ($errors->has('password'))
                    <span class="help-block" style="color: red;">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

                @if ($errors->has('message'))
                    <span class="help-block" style="color: red;">
                    <strong>{{ $errors->first('message') }}</strong>
                </span>
                @endif

                <div role="tabpanel" class="tab-pane animated fadeIn in active" id="tab-1">
                    <form method="post" action="{!! url('backoffice/login') !!}">
                        <div class="form-group">
                            <input type="email" name="email" class="custom_form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="custom_form-control" placeholder="Password">
                        </div>
                        <div class="form-group landing-page">
                            <button type="submit" class="btn landing-page waves-effect">SIGN IN</button>
                        </div>
                        <div class="form-group landing-form-question">
                            <a href="">Forgot Password ?</a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Javascript Libraries -->
<script src="{!! asset('assets/vendor/jquery/dist/jquery.min.js') !!}"></script>
<script src="{!! asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') !!}"></script>


<script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
<script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

<!-- Placeholder for IE9 -->
<!--[if IE 9 ]>
<script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->


</body>
</html>