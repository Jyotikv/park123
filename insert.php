<?php

$usn=$_REQUEST['USN'];
$name=$_REQUEST['Name'];



//connect to mysql
$server="us-cdbr-iron-east-03.cleardb.net";
$username="bb8ff899f74f6a";
$password="ff6ca091";

$connection=mysql_connect($server,$username,$password);

if(!$connection)
{
    echo "connection failed";
}
else
{
    mysql_select_db("ad_254e48c6f6af81f");
    
    $query="insert into studentinfo2 values('$usn','$name')";
    
    $result=mysql_query($query,$connection);
    
    if(!$result)
    {
     echo "insertion failed";
    }
    else
    {
     echo "inserted successfully";
  	 }
    mysql_close($connection);
}
