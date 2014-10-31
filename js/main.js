$("#contact_form").submit(function(e)
{
	var postData = $(this).serializeArray();
	var formURL = $(this).attr("action");

	$.ajax(
	{
		url : formURL,
		type: "POST",
		data : postData,
		success:function(data, textStatus, jqXHR) 
		{

		},
		error: function(jqXHR, textStatus, errorThrown) 
		{
		}
	});
	 e.preventDefault();
	
    clearInput();
});
	
//SUBMIT FORM

function clearInput(){
$("#contact_form :input").each(function(){
	$(this).val('');
});	
}
