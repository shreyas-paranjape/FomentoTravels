$(document).ready(function () {
    // Generate a simple captcha
    $('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        //                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The mobile phone number is required'
                    },
                    digits: {
                        message: 'The mobile phone number is not valid'
                    }
                }
            },
            region: {
                validators: {
                    notEmpty: {
                        message: 'The area of travel is required'
                    }
                }
            },
            ppl: {
                validators: {
                    notEmpty: {
                        message: 'The total number of people is required'
                    },
                    digits: {
                        message: 'Entered input  is not valid'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function (value, validator) {
                            var items = $('#captchaOperation').html().split(' '),
                                sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            }
        }
    });
});
