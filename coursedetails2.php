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

       echo '


    
    <div class="row">
        <div class="col-md-4">
            <img src="'.str_replace('..','.', $row['image']).'" alt="card-img-top" alt="course">
        </div>

        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">Course Name: '.$row['title'].'</h5>
                <p class="card-text">'.$row['description'].'</p>
                <p class="card-text">Duration: 10 days</p>




                <form action="login1.php" method="post">
                    <p class="card-text d-inline">Price: <small><del>2000 BDT</del></small> <span 
                     class="font-weight-bolder">FREE</span></p>


                     

       
                    <a class="btn btn-primary text-white font-weight-bolder float-right" href="intro.php?id='.$id.'">Start</a>

       
                </form>
            </div>
        </div>
    </div>
';
     }
   }
}
  ?>


    <div class="container">
        <div class="row">

            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">Lesson No.</th>
                        <th scope="col">Lesson Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Introduction</td>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th scope="row">2</th>
                        <td>Details</td>
                    </tr>
                </tbody>


            </table>

        </div>
       

   

</div>
 </div>


<!--end-->
