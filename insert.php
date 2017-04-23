<?php
 // just so we know it is broken
 error_reporting(E_ALL ^ E_DEPRECATED);
 // some basic sanity checks
 
 if(ISSET($_GET["btn"]))
 {
 	$usn=$_GET["USN"];
 	$name=$_GET["Name"];
     //connect to the db
    $con=mysql_connect('us-cdbr-iron-east-03.cleardb.net','bb8ff899f74f6a','ff6ca091')  or die ("Con Error".mysql_error());
    mysql_select_db('ad_254e48c6f6af81f',$con);
     $sql = "Insert into studentinfo2 values('$usn','$name')";
     echo $sql;
     // the result of the query
     $result = mysql_query($sql,$con) or die("Invalid query: " . mysql_error());
   
     if($result)
     echo "Saved";
     echo "<a href=\"/index.php\">Home Page</a></br>";
     else
	 echo "Error".mysql_error();
     mysql_close($con);
 }
?>