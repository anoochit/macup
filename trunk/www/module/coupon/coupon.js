	jQuery(function() {
		// show a simple loading indicator
		var loader = jQuery('<div id="loader">loading...</div>')
			.css({position: "relative", top: "1em", left: "25em"})
			.appendTo("body")
			.hide();
		jQuery().ajaxStart(function() {
			loader.show();
		}).ajaxStop(function() {
			loader.hide();
		}).ajaxError(function(a, b, e) {
			throw e;
		});
		
		var v = jQuery("#coupon").validate({
			
			rules: {
				postcode: {
	                    required: true,
	                    maxlength: 5                            
	            }
			},

	        messages: {
	        	fname: {
	        		required: " !"
	        	},
	            lname: {
	            	required: " !"                       
	            },
	            address: {
	            	required: " !"                       
	            },
	            postcode: {
	            	required: " !",
	            	number: " !",
	            	maxlength: " !"
	            },
	            tel: {
	            	required: " !",
	            	number: " !"
	            },
	            email: {
	            	required: " !",
	            	email: " !"
	            }     
	        },
			
			submitHandler: function(form) {
				jQuery(form).ajaxSubmit({
					target: "#result"
				});
			}
		});
		
		jQuery("#reset").click(function() {
			v.resetForm();
		});
		
		// check firstname and lastname for integrity
		jQuery("#lname").change(function() {
			$.ajax({
				  url: "/coupon/check",
				  type: "POST",
				  data: "fname="+ $("#fname").val() + "lname=" + $("#lname").val(),
				  success: function(data) {
					  if (data=='no') {
						  alert("Data Intetrity, Click button below to enter new record!");
						  document.location='/coupon';
					  }
				  }
				});
		});

	});
	

		