$(document).ready(function () {
});

$(document).ready(function () {
    $(document).on('click', '#school_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save School Name?',
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
                                url: 'school/service/School_service/save',
                                selector: '.form-control',
                                data: {
                                    School: $('#School').val(),
                                    Level: $('#Level').val(),
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

    $(document).on('click', '.delete', function () {
        var id = $(this).data('id');
        $.confirm({
            containerFluid: true,
            columnClass: 'col-md-5 offset-md-4',
            title: '',
            content: 'Delete School?',
            theme: 'modern',
            closeIcon: true,
            animation: 'scale',
            type: 'red',
            alignMiddle: true,
            buttons: {

                okay: {
                    btnClass: 'btn-red',
                    keys: [
                        'enter'
                    ],
                    action: function () {
                        $(document).gmPostHandler({
                            url: 'school/service/School_service/delete',
                            selector: '.form-control',
                            data: { 
                                ID: id,
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

    $(document).on('click', '#edit', function () {
        $.confirm({
            containerFluid: true,
            columnClass: 'col-md-5 offset-md-4',
            title: '',
            content: 'Update School Details?',
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
                            url: 'school/service/School_service/update',
                            selector: '.form-control',
                            data: {
                                ID            : $('#ID').val(),
                                School: $('#School').val(),
                                Level: $('#Level').val(),
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
                    }
                },
                cancel: {
                }
            },
        });
    });

    $(document).on('click', '#school_search', function () {
        $(document).gmLoadPage({
            url: 'school/service/School_service/search',
            data: {
                Search_text: $('#School_search').val()
            },
            load_on: '#index'
        });
    }); 
});