<?php
    require("BloodGlucose1.html");

if($_GET["Name"] && $_GET["Glucose"]&& $_GET["Feeling"] )


    
    $servername="localhost";
    $username="root";
    $conn=  mysql_connect("devweb2014.cis.strath.ac.uk","rqb11168", "plaisdal")
    or die(mysql_error());
    mysql_select_db("rqb11168",$conn);
    $sql="insert into BloodG_Details (Name, Date, Glucose, Feeling)
    values('$_GET[Name]',now(),'$_GET[Glucose]','$_GET[Feeling]')";
    $result=mysql_query($sql,$conn) or die(mysql_error());		
    if (!$result) {
        die('Invalid query: ' . mysql_error());
    }
?>