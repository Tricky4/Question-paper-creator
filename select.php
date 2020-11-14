<?php
$con=mysqli_connect("localhost","root","","questionpaper");
$sql="select * from questionpaper1";
$records=mysqli_query($con,$sql);
?>
<html>
<head>
<title>Question paper</title>
  <link rel="icon" type="image/png" href="logo.png" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script>
     function printlayer(layer)
	 {
	    var generator=window.open(",'name',");
        var layertext=document.getElementById(layer);
		generator.document.write(layertext.innerHTML.replace("print Me"));
		generator.document.close();
		generator.print();
		generator.close();	
	 }
  </script>
</head>
<body id="print">
<div class="container-fluid" id="div-id-name">
 <?php
  while($questionpaper1=mysqli_fetch_assoc($records)){
	 echo "<h1><center>ANJALAI AMMAL MAHALINGHAM ENGINEERING COLLEGE</center></h1><br>
<h2><center>CYCLE TEST</center></h2>";
	 echo "<h3><center>PART-A</center></h3>";
	 echo "<h4 style='align-right;padding-left:100px;'>1)".$questionpaper1['q1']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>2)".$questionpaper1['q2']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>3)".$questionpaper1['q3']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>4)".$questionpaper1['q4']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>5)".$questionpaper1['q5']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>6)".$questionpaper1['q6']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>7)".$questionpaper1['q7']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>8)".$questionpaper1['q8']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>9)".$questionpaper1['q9']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>10)".$questionpaper1['q10']."</h4>";
	 echo "<h3><center>PART-B</center></h3>";
	 echo "<h4 style='align-right;padding-left:100px;'>11a)".$questionpaper1['q11a']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>(OR)</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>11b)".$questionpaper1['q11b']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>12a)".$questionpaper1['q12a']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>(OR)</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>12b)".$questionpaper1['q12b']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>13a)".$questionpaper1['q13a']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>(OR)</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>13b)".$questionpaper1['q13b']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>14a)".$questionpaper1['q14a']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>(OR)</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>14b)".$questionpaper1['q14b']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>15a)".$questionpaper1['q15a']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>(OR)</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>15b)".$questionpaper1['q15b']."</h4>";
	 echo "<h3><center>PART-C</center></h3>";
	 echo "<h4 style='align-right;padding-left:100px;'>16a)".$questionpaper1['q16a']."</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>(OR)</h4>";
	 echo "<h4 style='align-right;padding-left:100px;'>16b)".$questionpaper1['q16b']."</h4>";
  }
?>
</div>
<h3>
<a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</p>
</h3>
<!--<div style="align-right">
<h3>
<a href="http://localhost/phpmyadmin/sql.php">Empty database<h5>(use only if pages occurs again)</h5></p>
</h3>
</div>-->
</body>
</html>