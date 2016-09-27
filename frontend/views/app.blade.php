<!DOCTYPE html>
<!--[if IE 9 ]>
<html class="ie9"><![endif]-->

<head>

    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Social University</title>
    <input type="hidden" value="{!!  md5(user()->email) !!}" id="_token">
    <input type="hidden" value="{!!  user()->id !!}" id="_member">

    @include('partials.resource')
</head>


<body ng-app="socialUniversity">

@include('partials.post_forms')
@include('partials.popup_views')
@include('partials.header')
@include('flash::message')
@include('partials.algolia_template')

@yield('body')



@include('partials.scripts')
@include('partials.footer')

</body>
</html>









