 <?php

$con = mysql_connect("devweb2014.cis.strath.ac.uk","rqb11168", "plaisdal");
mysql_select_db("rqb11168",$con);
$sql = "SELECT * FROM BloodG_Details";

$myData = mysql_query($sql, $con);
if ($myData){
	
	while($record = mysql_fetch_assoc($myData)){
	$name = $record['Name'];
	$glucose = $record['Glucose'];
	$date = $record['Date'];
	$feeling = $record['Feeling'];
	
	
	}	
}
 
?>
 


<html>
<head>
<CENTER>
<title>Blood Glucose Diary</title>
</head>
<link href="App.css" rel="stylesheet">

<h1> Blood Glucose Diary!</h1>
<!---some of this text came from: http://www.diabetes.co.uk/managing-your-childs-diabetes.html--->
 <font color = "#FF0000"><p>Managing your child's diabetes control can be a difficult and potentially stressful task for a parent. With so many things that can affect sugar levels, a little extra knowledge can go a long way. </p>

<img src="pictures/Screen Shot 2015-03-17 at 22.11.38.png" alt="Table from Diabetes UK" style="width:700px;height:200px">
<FORM ACTION="BloodGlucoseStore.php" METHOD=get>


<p>The Video below discusses blood glucose in more detail!<p>
<p><CENTER><iframe width="560" height="315" src="https://www.youtube.com/embed/UpretW35Dlc" frameborder="0" allowfullscreen></iframe></CENTER></p>
<p>
</p>
<font color="blue"><b><u>Recording your child's blood glucose!</u><b></font>

<table border="2">
<CENTER>
<tr>
<td> Name :</td><td><input name="Name" type="text" size"20"></input></td>
</tr>
<tr>
<td>Date:</td><td>
</tr>
<tr>
<td>Blood Glucose Level: <td> <input name="Glucose" type="text" size"20">mmol/L</input></td>
</tr>
<tr>
<td>How are you feeling?: <td> <input name="Feeling" type="text" size"20"></input></td>
</tr>
<tr>
</tr>
<tr>
</table><img src="pictures/bloodglucose.gif" alt="boy and girl" style="width:207px;height:169px"><img src="pictures/takinginsulin.jpg" alt="boy and girl" style="width:207px;height:169px">

</script>
</html>

</script>
<html>
<CENTER><input type="submit" value="Save!"></input>

<br>

<table width= "600" border= "1" cellpadding="1" cellspacing="1">
<tr>
</br>
<td><h4>Name</h4></td>
<td><h4>Date</h4></td>
<td><h4>Glucose</h4></td>
<td><h4>Feeling</h4></td>
</tr>
<tr>
<td><?php echo $name?></td>
<td><?php echo $date?></td>
<td><?php echo $glucose?></td>
<td><?php echo $feeling?></td>



</table>
<p>
</p>
<p>To check times when your child's blood glucose has been too high or too low click the buttons below.</p> <!---http://www.computerhope.com/issues/ch000076.htm--->
<FORM>
<p><INPUT Type="BUTTON" VALUE="Too High" ONCLICK="window.location.href='https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/BloodGlucoseHighParent.php'"> 
</FORM>
<FORM>
<INPUT Type="BUTTON" VALUE="Too Low" ONCLICK="window.location.href='https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/BloodGlucoseLowParent.php'"> 
</FORM>
</p>

</body>
</CENTER>
</CENTER><a href="https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/Page1Parent.html" target="_blank">HOME!</a> 
</html>


      
