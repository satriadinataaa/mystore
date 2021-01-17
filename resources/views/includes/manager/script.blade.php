<script src="{{ url('backend/js/jquery-2.1.1.js') }}"></script>
    <script src="{{ url('backend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('backend/js/plugins/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ url('backend/js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ url('backend/js/plugins/jeditable/jquery.jeditable.js') }}"></script>

    <!-- Data Tables -->
    <script src="{{ url('backend/js/plugins/dataTables/jquery.dataTables.js') }}"></script>
    <script src="{{ url('backend/js/plugins/dataTables/dataTables.bootstrap.js') }}"></script>
    <script src="{{ url('backend/js/plugins/dataTables/dataTables.responsive.js') }}"></script>
    <script src="{{ url('backend/js/plugins/dataTables/dataTables.tableTools.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ url('backend/js/inspinia.js') }}"></script>
    <script src="{{ url('backend/js/plugins/pace/pace.min.js') }}"></script>

    <style>

    </style>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                "dom": 'lTfigt',
                "tableTools": {
                    "sSwfPath": "js/plugins/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.html', {
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