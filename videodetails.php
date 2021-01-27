<?php
include('./db.php');
include('./header2.php');
?>
    





<!--start-->
<div class="container mt-5">
    <?php
       if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql ="select * from courseall where id='$id'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()) {
       $id = $row['id'];
       $name = $row['name'];

  //echo "<h4><a href='watch.php?id=$id'>".$name."</a></h4>";

       echo '


    
    <div class="row">
        

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: '.$row['title'].'</h5>
                 <p class="card-text">'.$row['name'].'</p>
                <h4><a href="watch.php?id='.$id.'">'.$row['name'].'</a></h4>




                
                           
                    

       
                </form>
            </div>
        </div>
    </div>
';
     }
   }
}
  ?>


    