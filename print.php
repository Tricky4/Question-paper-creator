<!DOCTYPE html>
<html lang="en">
<head>
  <title>Q/A generator</title>
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
<body>
<h3>
<a href="#" id="print" onclick="javascript:printlayer('div-id-name')">Print</p>
</h3>
<div class="container-fluid" id="div-id-select.php"><?php
$con=mysqli_connect("localhost","root","","questionpaper");
$sql="select 'question1','question2','question3','question4','question5','question6','question7','question8','question9','question10','question11a','question11b','question12a','question12b','question13a','question13b','question14a','question14b','question15a','question15b','question16a','question16b' from questionpaper1;"
?>
</body>
</html>