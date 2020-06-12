$(document).ready(function() 
{
	$("#btn").click(function() 
	{
		var username = $("#user").val();
		var email 	 = $("#email").val();
		/*$.post("process.php",{name:username,uemail:email},function(data)
		{
			$("#msg").html(data);
		})*/

	$.ajax
	(
	{
		type 		:  'post',
		url			:  'process.php',
		data 		:  {name:username,uemail:email},
		success 	:  function(data)
		{
			$('#msg').html(data);
		}
	}
		)	
	})
})