 <?php

$con = mysql_connect("devweb2014.cis.strath.ac.uk","rqb11168", "plaisdal");
mysql_select_db("rqb11168",$con);
$bg_sql = "SELECT * FROM BloodG_Details WHERE Glucose < 4";
$bg_query = mysql_query($bg_sql) or die(mysql_error());
$bgNews = mysql_fetch_assoc($bg_query);

?>
 <html>
 <body>
 <link href="App.css" rel="stylesheet">
  <font color = "#FF0000">
<CENTER> <h1> When was my blood glucose low? </h1>
 
 <p>Some things that can make low blood sugar levels more likely to happen are:</p>

<p>1. Skipping meals and snacks</p><p>2. Not eating enough food at a meal or snack</p><p>3. Exercising longer or harder than usual without eating something extra</p><p>4. Getting too much insulin</p><p>5. Not timing the insulin doses properly with meals, snacks, and exercise</p><p>6. Taking a long bath or shower right after an insulin shot</p>
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
<h2><u><p>Can You Prevent Low Blood Sugar?</p></h2></u>

<font size="4"><p>1.Try to eat all your meals and snacks on time and don't skip any.</p>
<p>2. Take the right amount of insulin. </p>
<p> 3.If you exercise longer or harder than usual, have an extra snack. </p>
<p> 4. Don't take a hot bath or shower right after an insulin shot. </p>
<p>5. Stick to your diabetes management plan.</p>

</CENTER>
<a href="https://devweb2014.cis.strath.ac.uk/~rqb11168/Project/BloodGlucose1.php" target="_blank">Back!</a> 
 </body>
 </html>