<?php
include('./header2.php');
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

  
  <h2>CONTACT WITH US</h2>
  <form method="post" action="contactphp.php">
     

     <tr><th>Name</th><td><input type="text" name="name" placeholder="name"></td></tr>
     <tr><th>Subject</th><td><input type="text" name="subject" placeholder="subject"></td></tr>
     <tr><th>Email</th><td><input type="email" name="email" placeholder="email"></td></tr>
     <tr><th>Message</th><td><input type="text" name="help" placeholder="Do you need any help?"></td></tr>
     
     
     
         <tr><td colspan="2" align="center"><input type="submit" value="register" name="register"></td></tr>

         

         
  </form>
</table>


