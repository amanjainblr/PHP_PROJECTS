<?php
session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table align="center" cellspacing="10" style="padding: 20px;">

<form method="post" action ="validate.php">
<tr> <th> email</th>
 <td>
<input type="text" id="email" name="email">
 </td>
 <tr> <th> password</th>
 <td>
<input id="password"type="password" name="password">
 </td>

 <tr> 
 <td colspan="2" align="center">
<input type="checkbox" name="remember" value="1">
remember me
 </td>

 <tr> 
 <td colspan="4" align="center" >
<input type="submit" name="submit" value="login">
 </td>


</table>


</form>
    
</body>
</html>

<?php
if(isset($_COOKIE['email']) and isset($_COOKIE['password']))
{
    $email=$_COOKIE['email'];
    $password=$_COOKIE['password'];
    echo "<script> 
    document.getElementById('email').value='$email';
    document.getElementById('password').value='$password';
    </script>";
}

?>