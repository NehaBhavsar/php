function formValidation() {
    "use strict";
    /*----------- BEGIN validationEngine CODE -------------------------*/
    $('#popup-validation').validationEngine();
    /*----------- END validationEngine CODE -------------------------*/

    /*----------- BEGIN validate CODE -------------------------*/
    $('#inline-validate').validate({
        rules: {
            c_name: "required",
			org: "required",
			event_type: "required",
			event_name: "required",
			start_date: "required",
			end_date: "required",
			reg_start_date: "required",
			reg_end_date: "required",
			address:"required",
			
            email: {
                required: true,
                email: true
            },
			f_name:{ required: true,
					 minlength: 3
					},
			l_name:{ required: true,
					 minlength: 3
					},
			// fa_name:{ required: true,
					 // minlength: 3
					// },
			// nationality:{ required: true,
					 // minlength: 3
					// },
			
			ph_no: {
                required: true,
                digits: true,minlength: 5
				
            },
			mo_no: {
                required: true,
                digits: true,minlength: 10
            },
			c_mobile: {
                required: true,
                digits: true,minlength: 10
            },
			 sport:{ required: true
					 
					},
			term:{ required: true					 
					},
			// edu:{ required: true
					 
					// },
					
			age:{ required: true
					 
					},
			best:{ required: true
					 
					},
			license:{ required: true
					 
					},
			employee:{ required: true
					 
					},
			language:{ required: true
					 
					},
			work:{ required: true
					 
					},
			
			postbox:{ required: true,
                digits: true,minlength: 6
					},
            birthdate: {
                required: true,
                date: true
            },
            url: {
                required: true,
                url: true
            },
            password: {
                required: true,
                minlength: 5
            },
            confirm_password: {
                required: true,
                minlength: 5,
                equalTo: "#password"
            },
            agree: "required",
            minsize: {
                required: true,
                minlength: 3
            },
            maxsize: {
                required: true,
                maxlength: 6
            },
            minNum: {
                required: true,
                min: 3
            },
            maxNum: {
                required: true,
                max: 16
            }
        },
        errorClass: 'help-block col-lg-6',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });


    $('#block-validate').validate({
        rules: {
            required2: "required",
            email2: {
                required: true,
                email: true
            },
            date2: {
                required: true,
                date: true
            },
            url2: {
                required: true,
                url: true
            },
            password2: {
                required: true,
                minlength: 5
            },
            confirm_password2: {
                required: true,
                minlength: 5,
                equalTo: "#password2"
            },
            agree2: "required",
            digits: {
                required: true,
                digits: true
            },
            range: {
                required: true,
                range: [5, 16]
            }
        },
        errorClass: 'help-block',
        errorElement: 'span',
        highlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).parents('.form-group').removeClass('has-error').addClass('has-success');
        }
    });
    /*----------- END validate CODE -------------------------*/
}