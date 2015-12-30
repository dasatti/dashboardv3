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
	} );

	
	// Setup - add a text input to each footer cell
	$( '#'+table_id+' tfoot th' ).each( function () {
		var title = $('#'+table_id+' thead th').eq( $(this).index() ).text();
		$(this).html( '<input type="text" class="form-control" placeholder="Search ' + title + '" />' );
	} );
	
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