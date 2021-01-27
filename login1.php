<?php
include('./header.php');
?>

<style type="text/css">
	th{
		text-align: right;
	}
	h2{
		text-align: center;
	}

</style>
<table cellpadding="5" cellspacing="10" align="center">
	<h2>Student LOGIN</h2>
	<form method="post" action="login2.php">
		<tr><th>Email</th><td><input type="email" name="email"></td></tr>
         <tr><th>Password</th><td><input type="password" name="password"></td></tr>
         <tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
         <tr><td colspan="2" align="center"><input type="submit" value="login" name="login"></td></tr>

         </form>
</table>