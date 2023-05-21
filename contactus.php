<!DOCTYPE html>
<html>
<head>
	<title>contact us backend</title>
</head>
<body>

<?php
	
	$con = mysqli_connect("localhost" , "root" , "" , "shopworm");
	if(!$con) {
		print("not connected");
	}
	$nm = $_REQUEST['name'];
	$em = $_REQUEST['email'];
	$sub = $_REQUEST['subject'];
	$msg = $_REQUEST['message'];

	$count = mysqli_query($con , "insert into contactus values('$nm' , '$em' , '$sub' , '$msg')");
	if($count>=1) {
		?>
		<script type="text/javascript">
			alert("Message sent successfully!");
		</script>
		<?php
		include("contact.html");
	}

?>

</body>
</html>