<!DOCTYPE html>
<html>
<head>
	<title>sis</title>
</head>
<body>
	<form action="insertphp.php" method="post" id="myform">
	<label>name</label>
	<input type="text" name="fname">

	<label>Username</label>
	<input type="text" name="username1">

	<label>password</label>
	<input type="password" name="password1">
	



	<input type="submit" name=" submit" id="submit">
</form>

	<script type="text/javascript">
		(document).ready(function()
		{
			var form =$('#myform');
			$('#submit').click(function(){
				$.ajax({
					url:form.attr("action"),
					type:post,
					data:$("#myform input").serialize(),
					success:function(data)
					{
						console.log(data);
					}

				})

			})
			
		})
	</script>



</body>
</html>