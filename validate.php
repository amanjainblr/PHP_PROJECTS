<?php
session_start();
$emailT='amanbagrecha.cv17@rvce.edu.in';
$passT="12345";
if(isset($_POST['email']) && isset($_POST['password']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
   
    #echo $email;
    #echo $password;
}
else {
    header("location: loginForm.php");
}

if($emailT==$email and $password==$passT)
{
    $_SESSION['email']=$email;
        if(isset($_POST['remember']))
        {
            setcookie('email',$email,time() +60*60*60);
            setcookie('password',$password,time() +60*60*60);  
        }
        header("location: welcome.php");

}
else{
    # how to load error mesage when location is set to loginForm.php, check it out
    echo "invalid";
    echo "<script>location.href ='loginForm.php';    </script> ";
     
}


?>