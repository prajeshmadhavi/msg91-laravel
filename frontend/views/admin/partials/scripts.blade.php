<script src="{!! assets('vendor/jquery/dist/jquery.min.js') !!}"></script>
<script src=" {!! assets('vendor/bootstrap/dist/js/bootstrap.min.js') !!}"></script>

<script src="{!! assets('vendor/flot/jquery.flot.js') !!}"></script>
<script src="{!! assets('vendor/flot/jquery.flot.resize.js') !!}"></script>
<script src="{!! assets('vendor/flot.curvedlines/curvedLines.js') !!}"></script>
<script src="{!! assets('vendor/jquery.sparkline/jquery.sparkline.min.js') !!}"></script>
<script src="{!! assets('vendor/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js') !!}"></script>

<script src="{!! assets('vendor/moment/min/moment.min.js') !!}"></script>
<script src="{!! assets('vendor/fullcalendar/dist/fullcalendar.min.js') !!} "></script>
<script src="{!! assets('vendor/simpleWeather/jquery.simpleWeather.min.js') !!}"></script>
<script src="{!! assets('vendor/Waves/dist/waves.min.js') !!}"></script>
<script src="{!! assets('vendor/bootstrap-growl/jquery.bootstrap-growl.js') !!}"></script>
<script src="{!! assets('vendor/bootstrap-sweetalert/lib/sweet-alert.min.js') !!}"></script>
<script src="{!! assets('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js') !!}"></script>

<script src="{!! assets('vendor/jquery.bootgrid/dist/jquery.bootgrid.min.js') !!}"></script>

<script src="{!! assets('vendor/bootstrap-select/dist/js/bootstrap-select.js') !!}"></script>
<script src="{!! assets('vendor/nouislider/distribute/jquery.nouislider.all.min.js') !!}"></script>

<script src="{!! assets('vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') !!}"></script>
<script src="{!! assets('vendor/typeahead.js/dist/typeahead.bundle.min.js') !!}"></script>
<script src="{!! assets('vendor/summernote/dist/summernote.min.js') !!}"></script>


<!-- Placeholder for IE9 -->
<!--[if IE 9 ]-->
<script src="../vendor/jquery-placeholder/jquery.placeholder.min.js"></script>
<![endif]-->
<script src="../vendor/chosen/chosen.jquery.min.js"></script>
<script src="../assets/plugins/fileinput/fileinput.min.js"></script>
<script src="../vendor/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
<script src="../vendor/farbtastic/src/farbtastic.js"></script>

<script src="../vendor/autosize/dist/autosize.min.js"></script>
<script src="../vendor/mediaelement/build/mediaelement-and-player.js"></script>

<script src="../assets/js/flot-charts/curved-line-chart.js"></script>
<script src="../assets/js/flot-charts/line-chart.js"></script>
<script src="../assets/js/charts.js"></script>
<script src="{!! assets('vendor/multiselect/js/multiselect.js') !!}"></script>

<script src="{!! assets('vendor/angular/angular.min.js') !!}"></script>
<script src="{!! assets('vendor/angular-chosen-js/angular-chosen.min.js') !!}"></script>
<script src="{!! assets('app/components/admin/main.js') !!}"></script>



<script src="../assets/js/functions.js"></script>
{{--<script src="js/demo.js"></script>--}}


<!-- Following is only for demo purpose to trigger colored modals. You may ignore this when you implement -->
<script type="text/javascript">
    $(document).ready(function(){
        $('body').on('click', '#btn-color-targets > .btn', function(){
            var color = $(this).data('target-color');
            $('#modalColor').attr('data-modal-color', color);
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){
        //Basic Example
       // $('#multiselect').multiselect();
        //$('#multiselect2').multiselect();


        $(".table-dashboard").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
        });

        //Selection
        $("#data-table-selection").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            selection: true,
            multiSelect: true,
            rowSelect: true,
            keepSelection: true
        });

        //Command Buttons
        $("#data-table-command").bootgrid({
            css: {
                icon: 'zmdi icon',
                iconColumns: 'zmdi-view-module',
                iconDown: 'zmdi-expand-more',
                iconRefresh: 'zmdi-refresh',
                iconUp: 'zmdi-expand-less'
            },
            formatters: {
                "commands": function(column, row) {
                    return "<button type=\"button\" class=\"btn btn-icon command-edit waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-edit\"></span></button> " +
                            "<button type=\"button\" class=\"btn btn-icon command-delete waves-effect waves-circle\" data-row-id=\"" + row.id + "\"><span class=\"zmdi zmdi-delete\"></span></button>";
                }
            }
        });
    });
</script>