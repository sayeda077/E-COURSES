<?php
include('./header.php');
?>
<html>
<head>
<style type="text/css">
.error {color: #FF0000;}

</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr =$passErr=$mErr= "";
$name = $email = $gender =$pass = $phone="";



if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
   else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]{2,20}$/i",$name)) {
      $nameErr = "Username must be 2-20 chars long"; 
    }
  }


  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  }
   else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["phone"])) {
    $mErr = "mobile is required";
  } 
  else {
    $phone = test_input($_POST["phone"]);

    if (!preg_match("/^(01)[3456789][0-9]{8}/",$phone)) {
      $mErr = "Use valid mobile number"; 
    }
}



  if (empty($_POST["password"])) {
    $passErr = "password is required";
  } 
  else {
    $pass = test_input($_POST["password"]);
    
    if (!preg_match("/\d/", $pass)) {
         $passErr = "Password should contain at least one number";
          }
          if (!preg_match("/[A-Z]/", $pass)) {
            $passErr = "Password should contain at least one uppercase Letter";
          } 
          if (!preg_match("/[a-z]/", $pass)) {
            $passErr= "Password should contain at least one lowercase Letter";
          }
         
          
  }

  if (empty($_POST["cpassword"])) {
    $passErr = "password is required";
  } 
  else {
    $cpass = test_input($_POST["cpassword"]);
    
    if ($cpass!=$pass) {
         $passErr = "Password did not match";
          }
         
         
          
  }






  
  


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 
  else {
    $gender = test_input($_POST["gender"]);
  }

  







 


if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["phone"])&& !empty($_POST["password"]) && !empty($_POST["cpassword"])  && !empty($_POST["gender"]) ) 
 
 { 


   // Attempt insert query execution


$con = mysqli_connect("localhost", "root", "", "project");  
  
  $sql = "INSERT INTO reg(name,email,phone,password,cpassword,gender) VALUES ('$name', '$email','$phone', '$pass', '$cpass', '$gender')";
  
  if(mysqli_query($con, $sql)){
    echo "Records inserted successfully.";
  } 
  else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  }
   
 }

} 

        
 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<h2>Registration</h2>
<p><span class="error">* required field</span></p>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  

<table>


<tr>
  <td> Name: </td>
  <td> <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span> </td>
</tr>

 
  <tr>
    <td> Email: </td> 
    <td> <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span> </td>
   </tr>

   <tr>
      <td>  Mobile Number: </td>
      <td> <input type="text" name="phone">
      <span class="error">* <?php echo $mErr;?></span> </td>
  </tr>

  
  <tr>
     <td> Password:  </td>
     <td> <input type="password" name="password" value="<?php echo $pass;?>">
          <span class="error">* <?php echo $passErr;?></span> </td>
   </tr>

   <tr>
     <td> Confirm Password:  </td>
     <td> <input type="password" name="cpassword" value="<?php echo $pass;?>">
          <span class="error">* <?php echo $passErr;?></span> </td>
   </tr>
          
 

  
            
 

  
          
 
 <tr>
    <td> Gender: </td>
    <td> <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
         <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
          
        <span class="error">* <?php echo $genderErr;?></span> </td>
  </tr>
        

  
  

           
<tr>
 <td colspan="2" align="center"> <input type="submit" name="submit" value="Register"> </td>
</tr>

 </table>    
</form>



</body>
</html>