<?php
ob_start();
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script> -->

<!-- Latest compiled JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
	<title>search bar</title>
</head>
<body>
<div>
	<h2>Search Bar</h2>
	<form method="POST" action="details.php">
		<input type="text" name="search" id="search" placeholder="Search...">
		<input type="submit" name="submit" value="Search">
	</form>
	<div>
		<div id="show-list">
			
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	
$(document).ready(function()
{
	$("#search").keyup(function()
	{
		var st = $(this).val();
		if(st != '')
		{
			$.ajax(
			{
				url:'action.php',
				method:'POST',
				data:{query:st},
				success:function(response)
				{
					$("#show-list").html(response);
				}
			});
		}
		else
		{
			$("#show-list").html('');
		}
	});
	$(document).on('click','a',function()
	{
		$("#search").val($(this).text());
		$("#show-list").html('');
	});
});



</script>