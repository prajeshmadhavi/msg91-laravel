$(document).ready(function () {


    var editor = new MediumEditor('.editable');

        $('.editable').mediumInsert({
            editor: editor
        });


    $(window).scroll(function () {
        if ($(window).scrollTop() > 100) {
            $('.mobile_menu-container').css({'display': 'none'});
            $('#header.header_mobile').addClass('strinker_headerbar').addClass('animated pulse');
        }
        else {
            $('.mobile_menu-container').css({'display': 'flex'});
            $('#header.header_mobile').removeClass('strinker_headerbar').removeClass('animated pulse');
        }
    });



    $('.feed_panel-toggler').click(function () {
        $(this).closest('.feed_panel-head').next('.card_collapse').toggle('animate bounceIn');
    });

    /****Note Upload Plugin *****/
    $("#filer_input").filer({
        limit: 1,
        maxSize: 20,
        extensions: ['pdf'],
        changeInput: '<div class="jFiler-input-dragDrop"><div class="jFiler-input-inner"><div class="jFiler-input-icon"><i class="icon-jfi-cloud-up-o"></i></div><div class="jFiler-input-text"><h3>Drag&Drop files here</h3> <span style="display:inline-block; margin: 15px 0">or</span></div><a class="jFiler-input-choose-btn blue">Browse Files</a></div></div>',
        showThumbs: true,
        theme: "dragdropbox",
        templates: {
            box: '<ul class="jFiler-items-list jFiler-items-grid"></ul>',
            item: '<li class="jFiler-item">\
                        <div class="jFiler-item-container">\
                            <div class="jFiler-item-inner">\
                                <div class="jFiler-item-thumb">\
                                    <div class="jFiler-item-status"></div>\
                                    <div class="jFiler-item-info">\
                                        <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                        <span class="jFiler-item-others">{{fi-size2}}</span>\
                                    </div>\
                                    {{fi-image}}\
                                </div>\
                                <div class="jFiler-item-assets jFiler-row">\
                                    <ul class="list-inline pull-left">\
                                        <li>{{fi-progressBar}}</li>\
                                    </ul>\
                                    <ul class="list-inline pull-right">\
                                        <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                    </ul>\
                                </div>\
                            </div>\
                        </div>\
                    </li>',
            itemAppend: '<li class="jFiler-item">\
                            <div class="jFiler-item-container">\
                                <div class="jFiler-item-inner">\
                                    <div class="jFiler-item-thumb">\
                                        <div class="jFiler-item-status"></div>\
                                        <div class="jFiler-item-info">\
                                            <span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
                                            <span class="jFiler-item-others">{{fi-size2}}</span>\
                                        </div>\
                                        {{fi-image}}\
                                    </div>\
                                    <div class="jFiler-item-assets jFiler-row">\
                                        <ul class="list-inline pull-left">\
                                            <li><span class="jFiler-item-others">{{fi-icon}}</span></li>\
                                        </ul>\
                                        <ul class="list-inline pull-right">\
                                            <li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
                                        </ul>\
                                    </div>\
                                </div>\
                            </div>\
                        </li>',
            progressBar: '<div class="bar"></div>',
            itemAppendToEnd: false,
            removeConfirmation: true,
            _selectors: {
                list: '.jFiler-items-list',
                item: '.jFiler-item',
                progressBar: '.bar',
                remove: '.jFiler-item-trash-action'
            }
        },
        dragDrop: {
            dragEnter: null,
            dragLeave: null,
            drop: null,
        },
        uploadFile: {
            url: "/uploadNoteFile",
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            beforeSend: function(){},
            success: function(data, el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-success\"><i class=\"icon-jfi-check-circle\"></i> Success</div>").hide().appendTo(parent).fadeIn("slow");
                });
                localStorage.setItem('tmp_files', data);
            },
            error: function(el){
                var parent = el.find(".jFiler-jProgressBar").parent();
                el.find(".jFiler-jProgressBar").fadeOut("slow", function(){
                    $("<div class=\"jFiler-item-others text-error\"><i class=\"icon-jfi-minus-circle\"></i> Error</div>").hide().appendTo(parent).fadeIn("slow");
                });
            },
            statusCode: null,
            onProgress: null,
            onComplete: null
        },
        files: null,
        addMore: false,
        clipBoardPaste: true,
        excludeName: null,
        beforeRender: null,
        afterRender: null,
        beforeShow: null,
        beforeSelect: null,
        onSelect: null,
        afterShow: null,
        onRemove: function(itemEl, file, id, listEl, boxEl, newInputEl, inputEl){
            // var file = file.name;
            var file = localStorage.getItem('tmp_files');
            $.post('/removeNoteFile', {file: file});
            localStorage.removeItem('tmp_files');
        },
        onEmpty: null,
        options: null,
        captions: {
            button: "Choose Files",
            feedback: "Choose files To Upload",
            feedback2: "files were chosen",
            drop: "Drop file here to Upload",
            //removeConfirmation: "Are you sure you want to remove this file?",
            errors: {
                filesLimit: "Only {{fi-limit}} file is allowed to be uploaded.",
                filesType: "Only PDFs are allowed to be uploaded.",
                filesSize: "{{fi-name}} is too large! Please upload file up to {{fi-maxSize}} MB.",
                filesSizeAll: "Files you've choosed are too large! Please upload files up to {{fi-maxSize}} MB."
            }
        }
    });

    $(window).scroll(function () {
        if ($(window).scrollTop() > 292) {

            $('div.parent__wrapper--content').addClass('sticky-wrappper');
            $('div.lefthandedbar').addClass('leftbar_sticky');
            $('div.middlefeed').addClass('sticky-mode');
            $('div.righthandedbar').addClass('rightbar_sticky');
        }
        else {
            $('div.parent__wrapper--content').removeClass('sticky-wrappper');
            $('div.lefthandedbar').removeClass('leftbar_sticky');
            $('div.middlefeed').removeClass('sticky-mode');
            $('div.righthandedbar').removeClass('rightbar_sticky');
        }
    });


    $('body').on('click', '#btn-color-targets > .btn', function () {
        var color = $(this).data('target-color');
        $('#modalColor').attr('data-modal-color', color);
    });

    handler = function(data){
        console.log("content saved");
    };

    $('#reset-password').modal('show');

    $('body').on('click', '[data-ma-action]', function (e) {
        e.preventDefault();

        var action = $(this).data('ma-action');
        var $this = $(this);

        switch (action) {

            /*-------------------------------------------
             Mainmenu and Notifications open/close
             ---------------------------------------------*/

            /* Open Sidebar */
            case 'sidebar-open':

                var target = $(this).data('ma-target');

                $this.addClass('toggled');
                $('#main').append('<div data-ma-action="sidebar-close" class="sidebar-backdrop animated fadeIn" />')

                if (target == 'main-menu') {
                    $('#s-main-menu').addClass('toggled');
                }
                if (target == 'user-alerts') {
                    $('#s-user-alerts').addClass('toggled');
                }

                $('body').addClass('o-hidden');

                break;

            /* Close Sidebar */
            case 'sidebar-close':

                $('[data-ma-action="sidebar-open"]').removeClass('toggled');
                $('.sidebar').removeClass('toggled');
                $('.sidebar-backdrop').remove();
                $('body').removeClass('o-hidden');

                break;



            /*----------------------------------
             Header Search
             -----------------------------------*/

            /* Clear Search */
            case 'search-clear':

                /* For mobile only */
                $('.h-search').removeClass('toggled');

                /* For all */
                $('.hs-input').val('');
                $('.h-search').removeClass('focused');

                break;

            /* Open search */
            case 'search-open':

                $('.h-search').addClass('toggled');
                $('.hs-input').focus();

                break;



            /*----------------------------------
             Main menu
             -----------------------------------*/

            /* Toggle Sub menu */
            case 'submenu-toggle':

                $this.next().slideToggle(200);
                $this.parent().toggleClass('toggled');

                break;



            /*----------------------------------
             Messages
             -----------------------------------*/
            case 'message-toggle':

                $('.ms-menu').toggleClass('toggled');
                $this.toggleClass('toggled');

                break;



            /*-------------------------------------------------
             Action Header Search (used in listview.html)
             -------------------------------------------------*/
            //Open action header search
            case 'ah-search-open':
                x = $(this).closest('.action-header').find('.ah-search');

                x.fadeIn(300);
                x.find('.ahs-input').focus();

                break;

            //Close action header search
            case 'ah-search-close':
                x.fadeOut(300);
                setTimeout(function(){
                    x.find('.ahs-input').val('');
                }, 350);
                break;

        }
    });




});

