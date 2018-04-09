<!-- footer content -->
<footer>
<div class="pull-right">
MOS NUTRACEUTICAL - Copyright 2018
</div>
<div class="clearfix"></div>
</footer>
<!-- /footer content -->
      </div>
    </div>

     <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Chart.js -->
    <script src="vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vendors/Flot/jquery.flot.js"></script>
    <script src="vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vendors/Flot/jquery.flot.time.js"></script>
    <script src="vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vendors/moment/min/moment.min.js"></script>
    <script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- bootstrap-datetimepicker -->    
    <script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Ion.RangeSlider -->
    <script src="vendors/ion.rangeSlider/js/ion.rangeSlider.min.js"></script>
    <!-- Bootstrap Colorpicker -->
    <script src="vendors/mjolnic-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <!-- jquery.inputmask -->
    <script src="vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <!-- jQuery Knob -->
    <script src="vendors/jquery-knob/dist/jquery.knob.min.js"></script>
    <!-- Cropper -->
    <script src="vendors/cropper/dist/cropper.min.js"></script>

    <!-- bootstrap-wysiwyg -->
    <script src="vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vendors/starrr/dist/starrr.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="build/js/custom.min.js"></script>

<!-- Initialize datetimepicker -->
<script>
$('#myDatepicker').datetimepicker();

$('#myDatepicker2').datetimepicker({
    format: 'DD.MM.YYYY'
});

$('#myDatepicker3').datetimepicker({
    format: 'hh:mm A'
});

$('#myDatepicker4').datetimepicker({
    ignoreReadonly: true,
    allowInputToggle: true
});

$('#datetimepicker6').datetimepicker();

$('#datetimepicker7').datetimepicker({
    useCurrent: false
});

$("#datetimepicker6").on("dp.change", function(e) {
    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
});

$("#datetimepicker7").on("dp.change", function(e) {
    $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
});
</script>

<!-- COLLAPSE INPUT ADD ITEM -->
<script type="text/javascript">
var room = 1;
function education() {

room++;
var objTo = document.getElementById('education')
var divtest = document.createElement("div");
divtest.setAttribute("class", "form-group removeclass"+room);
var rdiv = 'removeclass'+room;
divtest.innerHTML = '<div class="form-group"><div class="col-md-9 col-sm-9 col-xs-10" style="float: left;display: block;padding: 0 0px 0 0px;width:100%;margin-top:0%;"><label><input type="text" class="form-control" id="product_weight" name="product_weight[]" placeholder="Weight" size="20"></label>&nbsp<label><input type="text" class="form-control" id="product_color" name="product_color[]" placeholder="Color" size="17"></label>&nbsp<label><input type="text" class="form-control" id="product_price" name="product_price[]" placeholder="RM" size="3" style=""></label>&nbsp<label><input type="text" class="form-control" id="product_instock" name="product_instock[]" placeholder="Stock" size="3" style=""></label>&nbsp<label><a href=""  onclick="remove_education('+ room +');return false;"> <span class="fa fa-minus-circle" aria-hidden="true" style="color:red;"></span> </a></label><label id="education"></label></div></div>';

objTo.appendChild(divtest)
}
function remove_education(rid) {
$('.removeclass'+rid).remove();
}
</script>
<!--./COLLAPSE INPUT ADD ITEM -->

<!-- calendar -->
<!-- jQuery Version 1.11.1 -->
<script src="../js/calendar/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/calendar/bootstrap.min.js"></script>

<!-- FullCalendar -->
<script src='../js/calendar/moment.min.js'></script>
<script src='../js/calendar/fullcalendar.min.js'></script>

<script>

$(document).ready(function() {
    
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,basicWeek,basicDay'
        },
        defaultDate: '2016-01-12',
        editable: true,
        eventLimit: true, // allow "more" link when too many events
        selectable: true,
        selectHelper: true,
        select: function(start, end) {
            
            $('#ModalAdd #start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd #end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
            $('#ModalAdd').modal('show');
        },
        eventRender: function(event, element) {
            element.bind('dblclick', function() {
                $('#ModalEdit #id').val(event.id);
                $('#ModalEdit #title').val(event.title);
                $('#ModalEdit #color').val(event.color);
                $('#ModalEdit').modal('show');
            });
        },
        eventDrop: function(event, delta, revertFunc) { // si changement de position

            edit(event);

        },
        eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur

            edit(event);

        },
        events: [
        <?php foreach($events as $event): 
        
            $start = explode(" ", $event['start']);
            $end = explode(" ", $event['end']);
            if($start[1] == '00:00:00'){
                $start = $start[0];
            }else{
                $start = $event['start'];
            }
            if($end[1] == '00:00:00'){
                $end = $end[0];
            }else{
                $end = $event['end'];
            }
        ?>
            {
                id: '<?php echo $event['id']; ?>',
                title: '<?php echo $event['title']; ?>',
                start: '<?php echo $start; ?>',
                end: '<?php echo $end; ?>',
                color: '<?php echo $event['color']; ?>',
            },
        <?php endforeach; ?>
        ]
    });
    
    function edit(event){
        start = event.start.format('YYYY-MM-DD HH:mm:ss');
        if(event.end){
            end = event.end.format('YYYY-MM-DD HH:mm:ss');
        }else{
            end = start;
        }
        
        id =  event.id;
        
        Event = [];
        Event[0] = id;
        Event[1] = start;
        Event[2] = end;
        
        $.ajax({
         url: 'editEventDate.php',
         type: "POST",
         data: {Event:Event},
         success: function(rep) {
                if(rep == 'OK'){
                    alert('Saved');
                }else{
                    alert('Could not be saved. try again.'); 
                }
            }
        });
    }
    
});

</script>          
</body>
</html>
