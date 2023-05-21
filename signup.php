<!DOCTYPE html>
<html>
<head>
	<title>signup backend</title>
</head>
<body>

<?php
	
	$con = mysqli_connect("localhost" , "root" , "" , "shopworm");
	if(!$con) {
		print("not connected");
	}
	$nm = $_REQUEST['name'];
	$em = $_REQUEST['email'];
	$pwd = $_REQUEST['password'];
	$phn = $_REQUEST['phone'];

	$count = mysqli_query($con , "insert into users values('$nm' , '$em' , '$pwd' , '$phn')");
	if($count>=1) {
		?>
		<script type="text/javascript">
			alert("Registered successfully!");
		</script>
		<?php
		include("login.html");
	}

?>

</body>
</html>