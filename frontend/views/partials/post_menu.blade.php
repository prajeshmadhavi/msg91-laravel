@if(is_student())

    <ul class="dropdown-menu postsomething_menu" role="menu">
        <li data-toggle="modal" href="#modal-note">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/pencil-1.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">note</span>
                    </td>
                </tr>
            </table>

        </li>
        <li data-toggle="modal" href="#modal-postprojects">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/screen.png') !!}"
                             alt="">
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
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/hands.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">topic</span>
                    </td>
                </tr>
            </table>
        </li>

    </ul>

    <div class="panel-group static-menu" data-collapse-color="red" id="postnonmobile" role="tablist"
         aria-multiselectable="true">
        <div class="panel panel-collapse static-menu">
            <div class="panel-heading" role="tab">

            </div>
            <div id="postnonmobile-one" class="collapse" role="tabpanel" aria-expanded="false" style="height: 0px;">
                <div class="panel-body">
                    <ul class="cancel_factory post_category-menu">
                        <li data-toggle="modal" href="#modal-note">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/pencil-1.png') !!}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text_align-center">
                                        <span class="post_title">note</span>
                                    </td>
                                </tr>
                            </table>

                        </li>

                        <li data-toggle="modal" href="#modal-postprojects">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/screen.png') !!}" alt="">
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
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/hands.png') !!}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text_align-center">
                                        <span class="post_title">topic</span>
                                    </td>
                                </tr>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif


@if(is_faculty())

    <ul class="dropdown-menu postsomething_menu" role="menu">
        <li data-toggle="modal" href="#modal-note">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/pencil-1.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">note</span>
                    </td>
                </tr>
            </table>

        </li>
        <li data-toggle="modal" href="#modal-postprojects">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/screen.png') !!}"
                             alt="">
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
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/hands.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">topic</span>
                    </td>
                </tr>
            </table>
        </li>
        <li data-toggle="modal" href="#modal-news">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/newspaper.png') !!}"
                             alt="">
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
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/calendar.png') !!}"
                             alt="">
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
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/grades.png') !!}"
                             alt="">
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
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/desk-lamp.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">Assignment</span>
                    </td>
                </tr>
            </table>
        </li>
    </ul>

    <div class="panel-group static-menu" data-collapse-color="red" id="postnonmobile" role="tablist"
         aria-multiselectable="true">
        <div class="panel panel-collapse static-menu">
            <div class="panel-heading" role="tab">

            </div>
            <div id="postnonmobile-one" class="collapse" role="tabpanel" aria-expanded="false"
                 style="height: 0px;">
                <div class="panel-body">
                    <ul class="cancel_factory post_category-menu">
                        <li data-toggle="modal" href="#modal-note">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/pencil-1.png') !!}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text_align-center">
                                        <span class="post_title">note</span>
                                    </td>
                                </tr>
                            </table>

                        </li>

                        <li data-toggle="modal" href="#modal-postprojects">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/screen.png') !!}" alt="">
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
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/hands.png') !!}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text_align-center">
                                        <span class="post_title">topic</span>
                                    </td>
                                </tr>
                            </table>
                        </li>
                        <li data-toggle="modal" href="#modal-news">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/newspaper.png') !!}"
                                             alt="">
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
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/calendar.png') !!}" alt="">
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
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/grades.png') !!}" alt="">
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
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/desk-lamp.png') !!}" alt="">
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
            </div>
        </div>
    </div>

@endif

@if(is_university())

    <ul class="dropdown-menu postsomething_menu" role="menu">
        <li data-toggle="modal" href="#modal-news">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/newspaper.png') !!}"
                             alt="">
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
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/calendar.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">events</span>
                    </td>
                </tr>
            </table>
        </li>

        <li data-toggle="modal" href="#modal-question">
            <table>
                <tr>
                    <td class="post_category-images">
                        <img class="lv-img-sm su_icon post" src="{!! asset('assets/img/icon-set-png/hands.png') !!}"
                             alt="">
                    </td>
                </tr>
                <tr>
                    <td class="text_align-center">
                        <span class="post_title">topic</span>
                    </td>
                </tr>
            </table>
        </li>

    </ul>

    <div class="panel-group static-menu" data-collapse-color="red" id="postnonmobile" role="tablist"
         aria-multiselectable="true">
        <div class="panel panel-collapse static-menu">
            <div class="panel-heading" role="tab">

            </div>
            <div id="postnonmobile-one" class="collapse" role="tabpanel" aria-expanded="false"
                 style="height: 0px;">
                <div class="panel-body">
                    <ul class="cancel_factory post_category-menu">
                        <li data-toggle="modal" href="#modal-note">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/pencil-1.png') !!}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text_align-center">
                                        <span class="post_title">note</span>
                                    </td>
                                </tr>
                            </table>

                        </li>
                        <li data-toggle="modal" href="#modal-news">
                            <table>
                                <tr>
                                    <td class="post_category-images">
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/newspaper.png') !!}" alt="">
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
                                        <img class="lv-img-sm su_icon post"
                                             src="{!! assets('img/icon-set-png/calendar.png') !!}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text_align-center">
                                        <span class="post_title">events</span>
                                    </td>
                                </tr>
                            </table>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endif


