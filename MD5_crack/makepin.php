<!DOCTYPE html>
<html>
<head>
	<title>Aman Bagrecha PIN code</title>
</head >
<body>
<h1>MD5 PIN Maker</h1>
<?php
if (!empty($_GET)) {
 			
if (strlen( $_GET['pin'])!==4 && is_numeric($_GET['pin'])	) {
	# code...
		echo "<pre > <span style='color:red;text-align:center;'> Input must be exactly four characters </span> </pre>"."\n";
}

else{
	$val=hash('md5',$_GET['pin']);
	echo $val ."		\n";
	echo "<pre> </pre>";	
}
 	} 	

 ?>
<form>
	<input type="text" name="pin">
	<input type="submit" value='compute md5 for PIN'>

</form>
<ul>
	<li><a href="makepin.php">reset the page</a> </li>
		<li><a href="index.php">back to cracking</a> </li>	
</ul>

</body>
</html>