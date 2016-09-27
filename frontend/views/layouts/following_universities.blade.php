@section('university')
    active
@endsection
@section('university.following')
    active
@endsection

@extends('app')
@section('body')



    <section id="main" class="p-0">



        <section id="content ">

            <div class="content_wrapper">

                <!-------------------------------------side panel--------------------------------------->
                @include('partials.sidebar')


                <div class="scrollable">
                    <div class="content_scroable-wrapper">
                        <!--------------------------------------subject section starts here------------------------>
                        <div class="tab-pane fade active in" id="toggle-subject">
                            <div class="tab-content">
                                <div class="tab-pane fade active in" id="tab-mysubject">
                                    <div class="col-md-12 col-sm-12 col-lg-12">
                                        <div class="header_sub hi hidden-xs home">
                                            <div class="header_padding">
                                                <h5 class="text-muted p-l-10">FOLLOWING UNIVERSITIES </h5>
                                            </div>
                                        </div>
                                    </div>

                                    @foreach(user()->followings->where('followed.type', 'university') as $university)
                                        <a href="/university/{!! $university->followed->id !!}">
                                        <div class="card col-lg-3 col-md-3 col-sm-3 added2 no-padding grid_card">
                                            <div class="grid_image-holder">
                                                    <img src="{!!  assets('img/google_io_blog.png') !!}" alt="" class="grid_image-cover">
                                            </div>
                                            <div class="grid_head-info">
                                                <div class="feed_user_info">
                                                    <ul class="cancel_factory pl-10">
                                                        <li><a class="f-15">{!! $university->followed->name !!}</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>

@endsection