              
                <div class="footer">
                    <div class="pull-right">
                        10GB of <strong>250GB</strong> Free.
                    </div>
                    <div>
                        <strong>Copyright</strong> Example Company &copy; 2014-2015
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>

    <script src="<?php echo base_url('assets/admin/js/plugins/bootstrap-fileupload/bootstrap-fileupload.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery/jquery-1.8.3.min.js'); ?>" type="text/javascript"></script>
    <!-- Mainly scripts -->
    <script src="<?php echo base_url('assets/admin/js/jquery-2.1.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/metisMenu/jquery.metisMenu.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/slimscroll/jquery.slimscroll.min.js'); ?>"></script>

    <!-- Flot -->
    <script src="<?php echo base_url('assets/admin/js/plugins/flot/jquery.flot.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/flot/jquery.flot.tooltip.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/flot/jquery.flot.spline.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/flot/jquery.flot.resize.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/flot/jquery.flot.pie.js'); ?>"></script>

    <!-- Peity -->
    <script src="<?php echo base_url('assets/admin/js/plugins/peity/jquery.peity.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/demo/peity-demo.js'); ?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('assets/admin/js/inspinia.js'); ?>"></script>
    <script src="<?php echo base_url('assets/admin/js/plugins/pace/pace.min.js'); ?>"></script>

    <!-- jQuery UI -->
    <script src="<?php echo base_url('assets/admin/js/plugins/jquery-ui/jquery-ui.min.js'); ?>"></script>

    <!-- GITTER -->
    <script src="<?php echo base_url('assets/admin/js/plugins/gritter/jquery.gritter.min.js'); ?>"></script>

    <!-- EayPIE -->
    <script src="<?php echo base_url('assets/admin/js/plugins/easypiechart/jquery.easypiechart.js'); ?>"></script>

    <!-- Sparkline -->
    <script src="<?php echo base_url('assets/admin/js/plugins/sparkline/jquery.sparkline.min.js'); ?>"></script>

    <!-- Sparkline demo data  -->
    <script src="<?php echo base_url('assets/admin/js/demo/sparkline-demo.js'); ?>"></script>

    <!-- ChartJS-->
    <script src="<?php echo base_url('assets/admin/js/plugins/chartJs/Chart.min.js'); ?>"></script>

        <!-- Data Tables -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.responsive.js"></script>
    <script src="<?php echo base_url();?>assets/admin/js/plugins/dataTables/dataTables.tableTools.min.js"></script>

    <!-- Input Mask-->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/jasny/jasny-bootstrap.min.js"></script>
    
    <script src="<?php echo base_url();?>assets/admin/js/plugins/validate/jquery.validate.min.js"></script>
    <!-- Steps -->
    <script src="<?php echo base_url();?>assets/admin/js/plugins/staps/jquery.steps.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.dataTables-example').dataTable({
                responsive: true,
                "dom": 'T<"clear">lfrtip',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').dataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( 'http://webapplayers.com/example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
<style>
    body.DTTT_Print {
        background: #fff;

    }
    .DTTT_Print #page-wrapper {
        margin: 0;
        background:#fff;
    }

    button.DTTT_button, div.DTTT_button, a.DTTT_button {
        border: 1px solid #e7eaec;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }
    button.DTTT_button:hover, div.DTTT_button:hover, a.DTTT_button:hover {
        border: 1px solid #d2d2d2;
        background: #fff;
        color: #676a6c;
        box-shadow: none;
        padding: 6px 8px;
    }

    .dataTables_filter label {
        margin-right: 5px;

    }
</style>
    </script>
</body>
</html>
