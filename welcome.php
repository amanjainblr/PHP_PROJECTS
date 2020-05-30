<?php
session_start();
echo "welcome " .$_SESSION['email'];
echo 'click here to  <a href="logout.php"> logout</a> ';
?>

<!-- <form onclick="dothis()">;
<input type="submit" onclick="dothis()" value="logout" name="logout">;
</form>

<script> ;
function dothis(){
    location.href="loginForm.php";
}
</script> -->
