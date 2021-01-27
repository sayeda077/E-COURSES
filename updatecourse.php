<?php
include('./header4.php');
?>
   
<style type="text/css">
	th{
		text-align: right;
	}
	h3{
		text-align: center;
	}
	h2{
		text-align: center;
	}

</style>

<table cellpadding="5" cellspacing="10" align="center">
	
	<h2>UPDATE COURSE</h2>
	<form method="post" action="updatecourse.php" enctype="multipart/form-data">
		 

		 <tr><th>Image</th><td><input type="text" name="image"></td></tr>
		 <tr><th>Title</th><td><input type="text" name="title"></td></tr>
		 <tr><th>Description</th><td><input type="text" name="description"></td></tr>
		 <tr><th>Introduction</th><td><input type="text" name="introduction"></td></tr>
		 <tr><th>Video</th><td><input type="file" name="file"></td></tr>
		 
		 
		 
         <tr><td colspan="2" align="center"><input type="submit" name="update" value="update"></td></tr>

         
	</form>
</table>
<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./image/books.jpg" alt="courses" style="height: 500px; width:100%; object-fit:cover; box-shadow:10px;">

    </div>
</div>



<?php 

$host="localhost";
$dbuser="root";
$pass="";
$dbname="project";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
 
    
    
    if(isset($_POST['update'])){
      
      $image = $_POST['image'];
      $title = $_POST['title'];
      $description = $_POST['description'];
      $introduction = $_POST['introduction'];
      $name = $_FILES['file']['name'];
	  $tmp = $_FILES['file']['tmp_name'];

	  move_uploaded_file($tmp, "videos/".$name);
    	
       

      //$sql="insert into courseall(image,title,description,introduction,name)values('$image','$title','$description','$introduction','$name')";
      $sql="UPDATE courseall SET image='$image' WHERE title='$title'";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
          die("queri failed error.....!!!!!!!!");
        }

        else{
         echo "successfully updated";
             }

       

       
 }
?>
