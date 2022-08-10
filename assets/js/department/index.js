$(document).ready(function () {
});

$(document).ready(function () {
    $(document).on('click', '#department_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save Department Name?',
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
                                url: 'department/service/Department_service/save',
                                selector: '.form-control',
                                data: {
                                    Department: $('#Department').val(),
                                    CollegeID: $('#CollegeID').val(),
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
            content: 'Delete Department?',
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
                            url: 'department/service/Department_service/delete',
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

    $(document).on('click', '#category_edit', function () {
        $.confirm({
            containerFluid: true,
            columnClass: 'col-md-5 offset-md-4',
            title: '',
            content: 'Update Category Details?',
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
                            url: 'category/service/Category_service/category_update',
                            selector: '.form-control',
                            data: {
                                ID            : $('#ID').val(),
                                Category_name : $('#category_name').val(),
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

    $(document).on('click', '#category_search', function () {
        $(document).gmLoadPage({
            url: 'category/service/Category_service/category_search',
            data: {
                Search_text: $('#category_search_text').val()
            },
            load_on: '#load_category'
        });
    }); 
});