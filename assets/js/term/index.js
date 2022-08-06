$(document).ready(function () {
    $(document).on('change', '#start_year', function() {
        $('#end_year').val(parseInt($('#start_year').val()) + 1);
    });

    $(document).on('click', '#term_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save Term?',
                theme: 'modern',
                closeIcon: true,
                animation: 'scale',
                type: 'blue',
                alignMiddle: true,
                buttons: {

                    okay: {
                        btnClass: 'btn-blue',
                        keys: [
                            'enter'
                        ],
                        action: function () {
                            $(document).gmPostHandler({
                                url: 'term/service/Term_service/term_save',
                                selector: '.form-control',
                                data: {
                                    AYID: $('#ay').val(),
                                    Term: $('#term').val(),
                                },
                                field: 'field',
                                function_call: true,
                                function: success,
                                parameter: true,
                                alert_on_error: false,
                                errorsend: true,
                                errorsend_function: [{
                                    function: error_connection,
                                    msg: "Please check your connection and try again."
                                }],
                                function_call_on_error: true,
                                error_function: [{
                                    function: error,
                                    parameter: true,
                                }]
                            });
                            setTimeout(function(){
                                window.location.reload();
                            }, 2000);
                        }
                    },
                    cancel: {
                    }
                },
            });
    }); 
});