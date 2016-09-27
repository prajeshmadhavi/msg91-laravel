<script id="search_suggestion_template" type="text/template">
    <div class="grid_head-info rad" style="width: 85% !important; height: 30% !important;">

    <div class="grid_head-info rad">
        <div class="feed_user_info rad">

            {{#note}}
            <div>
                <img src="{{{ preview_image }}}" class="lv-img feed_image rad" alt="" style="height: 40px; width: 40px;">
            </div>
            {{/note}}

            {{#topic}}
            <div>
                <img src="{{{ preview_image }}}" class="lv-img feed_image rad" alt="" style="height: 40px; width: 40px;">
            </div>
            {{/topic}}

            {{#project}}
            <div>
                <img src="{{{ preview_image }}}" class="lv-img feed_image rad" alt="" style="height: 40px; width: 40px;">
            </div>
            {{/project}}

            {{#event}}
            <div>
                <img src="{{{ preview_image }}}" class="lv-img feed_image rad" alt="" style="height: 40px; width: 40px;">
            </div>
            {{/event}}

            {{#news}}
            <div>
                <img src="{{{ preview_image }}}" class="lv-img feed_image rad" alt="" style="height: 40px; width: 40px;">
            </div>
            {{/news}}


            {{#student}}
            <div>
                <img src="{{{ avatar }}}" class="lv-img feed_image rad" alt=""  style="height: 40px; width: 40px;">
            </div>
            {{/student}}

            {{#university}}
            <div>
                <img src="{{{ logo }}}" class="lv-img feed_image rad" alt="">
            </div>
            {{/university}}

            <div>

                {{#note}}
                <ul class="cancel_factory pl-20">
                    <li><strong>{{{ title }}}</strong></li>
                    <li><span class="small">Posted {{{ time }}}  by {{{ poster_name }}}</span></li>
                </ul>
                {{/note}}

                {{#topic}}
                <ul class="cancel_factory pl-20">
                    <li><strong>{{{ title }}}</strong></li>
                    <li><span class="small">Posted {{{ time }}}  by {{{ poster_name }}}</span></li>
                </ul>
                {{/topic}}

                {{#project}}
                <ul class="cancel_factory pl-20">
                    <li><strong>{{{ title }}}</strong></li>
                    <li><span class="small">Posted {{{ time }}}  by {{{ poster_name }}}</span></li>
                </ul>
                {{/project}}

                {{#event}}
                <ul class="cancel_factory pl-20">
                    <li><strong>{{{ title }}}</strong></li>
                    <li><span class="small">Posted {{{ time }}}  by {{{ poster_name }}}</span></li>
                </ul>
                {{/event}}

                {{#news}}
                <ul class="cancel_factory pl-20">
                    <li><strong>{{{ title }}}</strong></li>
                    <li><span class="small">Posted {{{ time }}}  by {{{ poster_name }}}</span></li>
                </ul>
                {{/news}}


                {{#student}}
                <ul class="cancel_factory pl-20" style="width: 100% !important;">
                    <li><strong>{{{ name }}}</strong></li>
                    <li class="small">Dept of {{{ my_department }}}</li>
                    <li><span class="small">{{{ my_university }}}</span></li>
                </ul>
                {{/student}}


                {{#university}}
                <ul class="cancel_factory pl-20">
                    <li><strong>{{{ name }}}</strong></li>
                    <li><span class="small">{{{ address }}}</span></li>
                    <li><span class="small"> {{{ follower_count }}} Followers</span></li>
                </ul>
                {{/university}}

            </div>
        </div>

        <hr>

    </div>
    <hr>

    </div>


</script>


