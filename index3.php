<!DOCTYPE html>
<html>
<head>
	<title>Video Upload</title>
</head>
<body>
	<h1><a href="video.php">VIDEOS</a></h1>
	<form method="post" action="index3.php" enctype="multipart/form-data">
		<input type="file" name="file">
		<input type="submit" name="add" value="ADD">
		
	</form>

</body>
</html>

<?php
include('db.php');

if (isset($_POST['add'])) {
	
	$name = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];

	move_uploaded_file($tmp, "videos/".$name);

	$sql = "insert into videos(name) values('$name')";

	$res = mysqli_query($conn,$sql);
	if($res == 1){
		echo "<h1>video inserted successfully<h1>";
	}
}

?>