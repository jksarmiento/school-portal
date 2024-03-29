$(document).ready(function () {
});

$(document).ready(function () {
    $(document).on('click', '#students_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save Student?',
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
                                url: 'students/service/Students_service/students_save',
                                selector: '.form-control',
                                data: {
                                    SchoolID: $('#SchoolID').val(),
                                    Fname: $('#Fname').val(),
                                    Mname: $('#Mname').val(),
                                    Lname: $('#Lname').val(),
                                    Birthday: $('#Birthday').val(),
                                    Address: $('#Address').val(),
                                    City: $('#City').val(),
                                    Province: $('#Province').val(),
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
            content: 'Delete Students?',
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
                            url: 'students/service/Students_service/delete',
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
            content: 'Update Students Details?',
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
                            url: 'students/service/Students_service/update',
                            selector: '.form-control',
                            data: {
                                ID            : $('#ID').val(),
                                SchoolID: $('#SchoolID').val(),
                                Fname: $('#Fname').val(),
                                Mname: $('#Mname').val(),
                                Lname: $('#Lname').val(),
                                Birthday: $('#Birthday').val(),
                                Address: $('#Address').val(),
                                City: $('#City').val(),
                                Province: $('#Province').val(),
                                
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

    $(document).on('click', '#students_search', function () {
        $(document).gmLoadPage({
            url: 'students/service/Students_service/students_search',
            data: {
                Search_text: $('#students_search_text').val()
            },
            load_on: '#load_students'
        });
    }); 
});