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
	
	<h2>DELETE COURSE </h2>
	<form method="post" action="deletecourse.php" enctype="multipart/form-data">
		 

		 
		 <tr><th>Id</th><td><input type="number" name="id"></td></tr>
		 
		 
		 
		 
         <tr><td colspan="2" align="center"><input type="submit" name="delete" value="delete"></td></tr>

         
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
 
    
    
    if(isset($_POST['delete'])){
      
      $id = $_POST['id'];
      

	 
    	
       

      $sql="DELETE FROM courseall WHERE id='$id'";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
          die("queri failed error.....!!!!!!!!");
        }

        else{
         echo "successfully deleted";
             }

       

       
 }
?>
