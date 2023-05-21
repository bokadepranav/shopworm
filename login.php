<!DOCTYPE html>
<html>
<head>
	<title>login backend</title>
</head>
<body>

<?php
	
	$con = mysqli_connect("localhost" , "root" , "" , "shopworm");
	if(!$con) {
		print("not connected");
	}
	$em = $_REQUEST['email'];
	$pwd = $_REQUEST['password'];
	
	$count = mysqli_query($con , "select * from users where email='$em' and password='$pwd' ");
	if(mysqli_num_rows($count)>=1) {
		?>
		<script type="text/javascript">
			alert("Login successfully!");
		</script>
		<?php
		include("index.html");
	}
	else {
		?>
		<script type="text/javascript">
			alert("Invalid email or password");
		</script>
		<?php
		include("login.html");
	}

?>

</body>
</html>