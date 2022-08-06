$(document).ready(function () {
    $(document).on('click', '#curriculum_save', function () {
            $.confirm({
                containerFluid: true,
                columnClass: 'col-md-5 offset-md-4',
                title: '',
                content: 'Save To Curriculum?',
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
                                url: 'curriculum/service/Curriculum_service/curriculum_save',
                                selector: '.form-control',
                                data: {
                                    CourseID: $('#course').val(),
                                    AYID: $('#ay').val(),
                                    Year_level: $('#year_level').val(),
                                    Term: $('#term').val(),
                                    SubjectID: $('#subject').val(),
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