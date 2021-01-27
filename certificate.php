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
    <body bgcolor="#D5D8DC">
  <table width="700px" height="800px" align="center">
    <tr>
      <td width="200px" bgcolor="#808080" style="color: black; padding: 20px">
           <hr><h1>COURSE CERTIFICATE</h1><hr>
             
             </td>
      <td width="500px" bgcolor="#FDFEFE">
        <h1>Congratulations!</h1><hr><br>
        
        <h5 class="card-title">You have successfully completed : '.$row['title'].'</h5><br>
        <p class="card-text">'.$row['description'].'</p>
                


      </td>
    </tr>
  </table>

</body>
 </div>
';
     }
   }
}
  ?>


    