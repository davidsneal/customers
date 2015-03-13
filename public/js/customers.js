jQuery( document ).ready( function( $ ) {
	
	// customer edit/create form submit
    $( '#form-customer' ).validator().on( 'submit', function(e) {
	    
	    // serialise all inputs ready
	    var inputs = $(this).serialize();
	    
	    // form failed validation
	    if (e.isDefaultPrevented()) {
			// do nothing
		} else {
			// the form passed validation, but don't submit yet
			e.preventDefault();
        
	        // disable all the form's fields
	        $("#form-customer :input").attr("disabled", true);
	
	        // replace submit button with a spinner to show progress
	        $("button.btn-submit").html('<i class="fa fa-spinner fa-spin"></i>');

			// prepare the data and post it
	        $.post(
	            $( this ).prop( 'action' ),
	            {
	                data: inputs,
	                "_token": $( this ).find( 'input[name=_token]' ).val()
	            },
	            function( data ) {

	                // clear possible classes for the alert
	                $('#custom-alert').removeClass( 'alert-danger alert-success alert-warning' );
	
	                // set alert
	                $("#alert-content").html( data.message );
	                $('#custom-alert').addClass( data.alert_class );
	                $('#custom-alert').fadeIn(100).delay(2500).fadeOut(200);
	                
	                // if successful
	                if( data.status === 'success' ) {

	                    // delay then redirect
	                    setTimeout(function(){ window.location = data.redirect; }, 1500);
	                } else { // not successful

		                // reset submit button content
	                    $("button.btn-submit").html('Submit');
	                    
	                    // re-enable all the form's fields
						$("#form-customer :input").attr("disabled", false);
	                }
	            },
	            'json'
	        ); // end post
	    } // end else for validation pass
    }); // end form submit

}); // end doc ready