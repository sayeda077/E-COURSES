<?php
include('./db.php');
include('./header2.php');
?>
    
<!--start course banner-->

<!--end course banner-->


<!--start text banner-->

<!--end text banner-->


<!--start popular course-->
<div class="container mt-5">
  <h1 class="text-center">All Courses</h1>


<div class="row mt-4">
<?php
   $sql = "select * from courseall";
   $result = $conn->query($sql);
   if($result->num_rows > 0){
     while ($row = $result->fetch_assoc()) {
       $id = $row['id'];

       echo '
        <div class= "col-sm-4 mb-4">
        <a href="coursedetails.php?id='.$id.'" class="btn" style="text-align: left; padding: 0px; margin: 0px;"><div class = "card">
        <img class="card-img-top" src="'.str_replace('..','.', $row['image']).'" alt="tensorflow">
        <div class="card-body">
         <h5 class="card-title">'.$row['title'].'</h5>
         <p class="card-text">'.$row['description'].'</p>
         </div>

      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del>2000 BDT</del></small> <span 
        class="font-weight-bolder">Free</span></p>
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails2.php?id='.$id.'">Enroll</a>
      </div>

      </div> </a>
      </div>



       ';
     }
   }

  ?>
  
</div>

  
  
    
</div>

<!--end popular course-->




    
<?php
include('./footer.php');
?>
