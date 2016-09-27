<div class="card static-menu">
    <ul class="main-menu">
        <li class="@yield('home', '')">
            <a href="/">Home</a>
        </li>
        <li class="sub-menu @yield('subjects', '')">
            <a>Subject</a>
            <ul>
                <li class="@yield('subjects', '')">
                    <a target="_self" href="/subjects">My Subject</a>
                </li>
                <li><a href="#">Browse Subject</a></li>
                <li><a href="#">Features</a></li>
            </ul>
        </li>
        <li class="sub-menu @yield('university', '')">
            <a>University</a>
            <ul>
                <li class="@yield('my.university', '')">
                    <a target="_self" href="/university">My University</a>
                </li>
                <li class="@yield('university.following', '')">
                    <a target="_self" href="/universities/following">Following University</a>
                </li>
                <li><a href="">Browse University</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a>Projects</a>
            <ul>
                <li class="@yield('projects', '')">
                    <a target="_self" href="/projects">Browse Projects</a>
                </li>
                <li class="@yield('myprojects', '')">
                    <a target="_self" href="/me/projects">My Projects</a>
                </li>
                <li><a href="">Featured Project</a></li>
            </ul>
        </li>
        <li class="sub-menu">
            <a>Topics</a>
            <ul>
                <li class="@yield('forums', '')">
                    <a target="_self" href="/topics">Browse Topics</a>
                </li>
                <li><a target="_self" href="/me/topics">My Topics</a></li>
                <li><a href="">Featured Topics</a></li>
            </ul>
        </li>
    </ul>
</div>


{{--<div class="header_sub hidden-xs">--}}
    {{--<div class="container header_padding">--}}

        {{--<ul class="tab-nav text-center">--}}
            {{--<li class="@yield('home', '')">--}}
                {{--<a href="/">--}}
                    {{--<img src="{!! asset('assets/img/icon-set-png/teacher-desk.png') !!}" class="su_icon header" alt="">--}}
                    {{--<span class="hidden-sm hidden-xs">HOME</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="@yield('university', '')">--}}
                {{--<a href="/university">--}}
                    {{--<img src="{!! asset('assets/img/icon-set-png/high-school.png') !!}" class="su_icon header" alt="">--}}
                    {{--<span class="hidden-sm hidden-xs">UNIVERSITY</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@if(is_student() || is_faculty())--}}
                {{--<li class="@yield('subjects', '')">--}}
                    {{--<a href="/subjects">--}}
                        {{--<img src="{!! asset('assets/img/icon-set-png/agenda.png') !!}" class="su_icon header" alt="">--}}
                        {{--<span class="hidden-sm hidden-xs">SUBJECTS</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--@endif--}}
            {{--<li class="@yield('projects', '')">--}}
                {{--<a href="/projects">--}}
                    {{--<img src="{!! asset('assets/img/icon-set-png/screen.png') !!}" class="su_icon header" alt="">--}}
                    {{--<span class="hidden-sm hidden-xs">PROJECTS</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="@yield('forums', '')">--}}
                {{--<a href="/forums">--}}
                    {{--<img src="{!! asset('assets/img/icon-set-png/hands.png') !!}" class="su_icon header" alt="">--}}
                    {{--<span class="hidden-sm hidden-xs">FORUMS</span>--}}
                {{--</a>--}}
            {{--</li>--}}

        {{--</ul>--}}
    {{--</div>--}}
{{--</div>--}}