 <?php

$con = mysql_connect("devweb2014.cis.strath.ac.uk","rqb11168", "plaisdal");
mysql_select_db("rqb11168",$con);
$bg_sql = "SELECT * FROM BloodG_Details WHERE Glucose  > 10";
$bg_query = mysql_query($bg_sql) or die(mysql_error());
$bgNews = mysql_fetch_assoc($bg_query);

?>
 <html>
 <body>

 <link href="App.css" rel="stylesheet">
  <font color = "#FF0000">
 <CENTER><h1> When was my child's blood glucose high? </h1>
<p>Glucose, or sugar, is the body's main fuel source. That means your body - including your brain - needs glucose to work properly. But even though we need glucose for energy, too much glucose in the blood can be unhealthy.</p>
 
<table width= "600" border= "1" cellpadding="1" cellspacing="1">
<tr>
</br>

<td><h4><b>Date</b></h4></td>
<td><h4><b>Glucose</b></h4></td>
<td><h4><b>Feeling</b></h4></td>
</tr>
<?php do{?>
<tr>
<td><?php echo $bgNews['Date'];?></td>
<td><?php echo $bgNews['Glucose'];?> mmol/L</td>
<td><?php echo $bgNews['Feeling'];?></td>
<?php } while ($bgNews = mysql_fetch_assoc($bg_query))?>
</table>
<br>
</br>
<font size="6"><font color="blue"><u>The Causes of High Blood Sugar</u></font>
<font size="4"><p>In general, higher than normal blood glucose levels can be caused by:<br>

</br><p>1. Not taking your diabetes medicine when you're supposed to or not taking the right amounts</p>
<p>2. Eating more food than your meal plan allows (without adjusting your insulin or diabetes pills)</p>
not getting enough exercise
<p>3.having an illness, like the flu</p>
<p>4.taking other kinds of medicines that affect how your diabetes medicines work<br></p>

</br>Keeping blood sugar levels close to normal can be hard sometimes, and nobody's perfect. Grown-ups can help you stay in balance if you have diabetes. Sometimes blood sugar levels can be high because you're growing and your doctor needs to make some changes in your diabetes treatment plan.
</font></p>


 </CENTER>

 </body>
 <a href="https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/BloodGlucoseParent.php" target="_blank">Back!</a> 
 </html>