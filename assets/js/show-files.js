(function($) {
    $(document).ready(function() {
        $( '.js-input-file' ).on( 'change', function() {
            let message = $(this).siblings()[1]
            message.innerText = $(this).val()
        })
    })
})(jQuery)