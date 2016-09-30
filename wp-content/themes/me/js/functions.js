(function($) {

	//alert('triggered');

	/* <![CDATA[ */
//var ajaxpagination = {"ajaxurl":"http:\/\/localhost:8080/johanwendin\/wp-admin\/admin-ajax.php"};
/* ]]> */
    
    $(document).on( 'click', '#cat-wrap li', function( event ) {
        event.preventDefault();

        console.log($(this).attr('id'));

        var id = $(this).attr('id')

        $.ajax({
        url: ajaxpagination.ajaxurl,
        type: 'post',
        data: {
            action: 'my_ajax',
            id: id
        },
        success: function( html ) {
        	console.log(html);
        	$('#ajax-response').empty();
            $('#ajax-response').append(html)
        },

        error: function(response){
        	console.log(response);
        }

    })


    })
})(jQuery)