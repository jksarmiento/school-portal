$(document).ready(function () {
    $(document).on('click', '#user_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save User?',
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
                                url: 'user/service/User_service/user_save',
                                selector: '.form-control',
                                data: {
                                    Fname: $('#fname').val(),
                                    Lname: $('#lname').val(),
                                    User_type: $('#user_type').val(),
                                    Username: $('#username').val(),
                                    Password: $('#password').val(),
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
});