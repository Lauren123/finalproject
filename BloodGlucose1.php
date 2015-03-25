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

 <font color = "#FF0000">
 <h1> Blood Glucose Diary!</h1>
<!---some of this text came from: http://www.diabetes.org.uk/Guide-to-diabetes/Kids/Me-and-my-diabetes/Good-to-eat/The-glucose-gang/ --->
<p>It is very important to keep track of your blood glucose levels! Certain foods are very
good at helping you keep your blood glucose around the right level! </p>

<p>Your body is a bit like a factory. Food goes in, gets processed and is turned into energy. 
Your body processes some foods more quickly than others, like sweets, sugary drinks, white bread
 and mashed potato. They get turned into energy very quickly so your blood glucose (sugar) levels 
 go up very quickly. We call these 'fast-acting' carbohydrate foods.</p>
<p>
Your body processes some foods more slowly, like sweet potatoes, pasta, basmati rice, porridge, 
fruit and milk. So they get turned into energy more slowly so your blood glucose (sugar) levels 
go up more slowly. We call these 'slow-acting' carbohydrate foods.
</p>

<p>Balancing the carbohydrates you eat and the insulin you take will help you manage your blood glucose levels. </p>

<FORM ACTION="BloodGlucoseStore.php" METHOD=get>
<h2><u>Recording your blood glucose!</h2></u>

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
<CENTER><input type="submit" value="Save!"></input>
<br>
<p> Your latest blood glucose reading is shown in the table below! </p>
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
<br>
</br><p>To check times when your blood glucose has been too high or too low click the buttons below.</p> <!---http://www.computerhope.com/issues/ch000076.htm--->
<FORM>
<p><INPUT Type="BUTTON" VALUE="Too High" ONCLICK="window.location.href='https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/BloodGlucoseHigh1.php'"> 
</FORM>
<FORM>
<INPUT Type="BUTTON" VALUE="Too Low" ONCLICK="window.location.href='https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/BloodGlucoseLow1.php'"> 
</FORM>
</p>

</FORM>
</body>
</CENTER>
</CENTER><a href="https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/Page1Child.html" target="_blank">HOME!</a> 
</html>


      
