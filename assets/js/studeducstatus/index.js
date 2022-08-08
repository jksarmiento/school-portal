$(document).ready(function () {
});

$(document).ready(function () {
    $(document).on('click', '#studeducstatus_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save Status?',
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
                                url: 'studeducstatus/service/Studeducstatus_service/studeducstatus_save',
                                selector: '.form-control',
                                data: {
                                    SchoolID: $('#SchoolID').val(),
                                    Start_year: $('#Start_year').val(),
                                    End_year: $('#End_year').val(),
                                    StudentID: $('#StudentID').val(),
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
                            // setTimeout(function(){
                            //     window.location.reload();
                            // }, 2000);
                        }
                    },
                    cancel: {
                    }
                },
            });
    }); 

    $(document).on('click', '#studeducstatus_delete', function () {
        var id = $(this).data('id');
        $.confirm({
            containerFluid: true,
            columnClass: 'col-md-5 offset-md-4',
            title: '',
            content: 'Delete Status?',
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
                            url: 'studeducstatus/service/Studeducstatus_service/studeducstatus_delete',
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

    $(document).on('click', '#studeducstatus_edit', function () {
        $.confirm({
            containerFluid: true,
            columnClass: 'col-md-5 offset-md-4',
            title: '',
            content: 'Update Students Status?',
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
                            url: 'studeducstatus/service/Studeducstatus_service/studeducstatus_update',
                            selector: '.form-control',
                            data: {
                                ID            : $('#ID').val(),
                                
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

    $(document).on('click', '#studeducstatus_search', function () {
        $(document).gmLoadPage({
            url: 'studeducstatus/service/Studeducstatus_service/studeducstatus_search',
            data: {
                Search_text: $('#studeducstatus_search_text').val()
            },
            load_on: '#load_studeducstatus'
        });
    }); 
});