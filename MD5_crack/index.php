<!DOCTYPE html>
<html>
<head>
	<title>Aman Bagrecha MD5</title>
</head>
<body style="font-family: sans-serif">
<h1>MD5 cracker</h1>
<p>This application takes an MD5 hash
of a four digit pin and check all 10,000
possible four digit PINs to determine the PIN.</p>
<pre>Debug Output:
</pre>
<!-- <p>PIN: Not found</p> -->

<?php
// microtime(true) returns the unix timestamp plus milliseconds as a float
$starttime = microtime(true);

echo "<pre>";
if (!empty($_GET) ) {
 		# code...
 	
$count=0;
$val_1=0;
$cnt=0;
$PIN='';
for ($i=0; $i <10 ; $i++) {	
	if($val_1==1){break;}
	for ($j=0; $j <10 ; $j++) { 
		if($val_1==1){break;}# code...
		for ($k=0; $k <10 ; $k++) { 
			if($val_1==1){break;}# code...
			for ($l=0; $l <10 ; $l++) { 
				# code...
						if($val_1!==1){$cnt+=1;}
				$h_n=$i.$j.$k.$l;
					if($_GET['md5']==hash('md5',$h_n)){
						// echo "PIN: " .$h_n ."\n";
						$PIN=$h_n;
						$val_1=1;
						break;
					}
						// $count+=1;
						if($count<15){
							echo  hash('md5',$h_n) ."   ".$h_n ;
							echo "<br>";
						$count+=1;			
						}

			}
						
		}

	}

}

echo "\n";
echo "count: " .$cnt ."\n";
if($val_1==1){echo "PIN: ". $PIN. "\n";}
/* do stuff here */
$endtime = microtime(true);
$timediff = $endtime - $starttime;
echo "ellapsed time:" .$timediff ."\n";		
if ($val_1!==1) {
	echo "PIN: not found";
	# code...
}
			}
echo "</pre>";


		
 ?>
<form>
	<input type="text" name="md5" size="40">
	<input type="submit" name="" value='Crack MD5'>
</form>

<ul>
	<li><a href="index.php">reset this page</a></li>
	<li><a href="makepin.php">make an MD5 pin</a></li>
	<!-- <li><a href="">md5 encoder</a></li> -->
	<!-- <li><a href="">specification for the assignment</a></li> -->
	<li><a href="https://github.com/jainaman588/projectfolder/tree/master/MD5_crack">source code to this application</a></li>
</ul>
</body>
</html>