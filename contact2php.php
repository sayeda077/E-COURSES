<?php 

$host="localhost";
$dbuser="root";
$pass="";
$dbname="project";
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
if($conn){
  echo "connection successful ";
}else{
  echo "no connection";
}  
    
    
    if(isset($_POST['register'])){
      
    	$name = $_POST['name'];
      $subject = $_POST['subject'];
      $email = $_POST['email'];
      $help = $_POST['help'];
    	
       

   $sql="insert into contact(name,subject,email,help)values('$name','$subject','$email','$help')";
        $res=mysqli_query($conn,$sql);

        if(!$res)
        {
          die("queri failed error.....!!!!!!!!");
        }

        else{
         echo "successfully added data";
             }

       

       
 }
?>