$(document).ready(function() {

    var groupingTable = $('.row-grouping').DataTable({
        responsive: true,
        rowReorder: true,
        "columnDefs": [
            { "visible": false, "targets": 0 },
        ],
        // "order": [[ 2, 'desc' ]],
        "displayLength": 25,
        /*"drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;

            api.column(0, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );

                    last = group;
                }
            } );
        }*/
    } );
});
