$('document').ready(function()
{
	$('#contact_form').validate(
	{
		rules:
		{
			"name":{
				required:true,
				maxlength:40
			},
			"email":{
				required:true,
				email:true,
				maxlength:100
			},
			"message":{
				required:true
			}},

			messages:
			{
				"name":{
					required:"Please Enter your Name"
				},
				"email":{
					required:"This field is required",
					email:"Please enter a valid email address"
				},
				"message":{
					required:"Please Enter a Message"
				}},

				submitHandler: function(form){
					$(form).ajaxSubmit({
						target: '#preview', 
						success: function() { 
							$('#formbox').slideUp('fast'); 
						} 
					}); 
				}

			})
});
