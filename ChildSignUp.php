<?php
 session_start();session_destroy();
 session_start();
if($_GET["FirstName"] &&  $_GET["LastName"] && $_GET["Email"] && $_GET["Password"] 
&& $_GET["Country"] )
{
	if($_GET["Password"]==$_GET["Re-enterpassword"])
	{
	$servername="localhost";
    $username="root";
    $conn=  mysql_connect("devweb2014.cis.strath.ac.uk","rqb11168", "plaisdal")
    or die(mysql_error());
    mysql_select_db("rqb11168",$conn);
    $sql="insert into Child_Details (FirstName, LastName, Email, Password, Country)
    values('$_GET[FirstName]','$_GET[LastName]','$_GET[Email]','$_GET[Password]', 
    '$_GET[Country]')";
    $result=mysql_query($sql,$conn) or die(mysql_error());		
    print "<h1>Sign Up Successful! </h1>";
   
    print "<a href='Homepage.html'>go to login page</a>";
	}
	else print "passwords do not match";
}
else print"invaild input data";

?>
