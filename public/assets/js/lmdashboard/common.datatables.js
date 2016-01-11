/**
*
*	File: common.datatables.js
*	Package: lmdashboard
*	Author: Danish
*
*	Description: This script contains datatables helper functions for Dashboard Project
*
**/




function init_datatable(table_id){
    var table = jQuery("#"+table_id);

    var table_dt = table.DataTable( {
        //initialize here
        dom: 'lBfr<"#dt_status.col-sm-12"<"alert alert-default">>tip',
        buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );

	
    // Setup - add a text input to each footer cell
    $( '#'+table_id+' tfoot th' ).each( function () {
        var title = $('#'+table_id+' thead th').eq( $(this).index() ).text();
        $(this).html( '<input type="text" class="form-control" placeholder="Search ' + title + '" />' );
    } );
    
    $('#dt_status .alert').html('Loading...');
    $('#dt_status').hide();
    table_dt.loading = function(status){
        if(status) $('#dt_status').show();
        else $('#dt_status').hide();
    }
	
    // Apply the search
    table_dt.columns().every( function () {
        var that = this;
	
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                .search( this.value )
                .draw();
            }
        } );
    } );
}

