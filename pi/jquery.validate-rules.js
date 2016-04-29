	$(document).ready(function() {
			
				jQuery.validator.addMethod("lettersonly", function(value, element) {
					return this.optional(element) || /^[a-z]+$/i.test(value);
					}, "Please enter only letters without space."); 
					
			// validate contact form on keyup and submit
			$("#form").validate({
			
			 errorElement: "span", 
			 
			 
			//set the rules for the fields
			rules: {
			
				name: {
					required: true,
					minlength: 4,
					maxlength:25,
					lettersonly: true
				},
				user_name: {
					required: true,
					minlength: 4,
					maxlength:25,
					lettersonly: true
				},
				email: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5,
					maxlength:15
				},
				password1: {
					required: true,
					minlength: 5,
					maxlength:15
				},
				
				dob : {
					required :true
				},
				
				type : {
					required :true
				},
				
				address : {
					required :true
				},	
				
				phone_no : {
					required :true
				},	

				
			},
			//set messages to appear inline
			messages: {
			
				name: {
					required: "Name is required..",
				},
				
				user_name: {
					required: "User Name is required..",
				},
				
				password: {
				required: "Please provide a password.",
				minlength: "Your password must be at least 5 characters long",
				maxlength: "Password can not be more than 15 characters",
				},
				
				password1: {
				required: "Please retype your password.",
				
				},
				
				email: {
				"Valid email is required.",
				},
				
				type: {
				"Your type is required.",
				},
				
				
				dob:{
				"Your date of birth is required.",
				},
				
				
				
				
				
			},
			
		errorPlacement: function(error, element) {               
					error.appendTo(element.parent());     
				}

		});
	});