<?php
include('./header2.php');
?>

<?php
include('db.php');

$sql = "select * from videos";
$res = mysqli_query($conn,$sql);

echo "<h1>See Details in this video</h1>";

while($row = mysqli_fetch_assoc($res)){
	$id = $row['id'];
	$name = $row['name'];

	echo "<h4><a href='watch.php?id=$id'>".$name."</a></h4>";
}


?>