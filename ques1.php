<?php
$con=mysqli_connect("localhost","root","","questionpaper");
if($con)
	echo "Connected";
else
	echo "Not connected";

$question1=$_POST['Question1'];
$question2=$_POST['Question2'];
$question3=$_POST['Question3'];
$question4=$_POST['Question4'];
$question5=$_POST['Question5'];
$question6=$_POST['Question6'];
$question7=$_POST['Question7'];
$question8=$_POST['Question8'];
$question9=$_POST['Question9'];
$question10=$_POST['Question10'];
$question11a=$_POST['Question11a'];
$question11b=$_POST['Question11b'];
$question12a=$_POST['Question12a'];
$question12b=$_POST['Question12b'];
$question13a=$_POST['Question13a'];
$question13b=$_POST['Question13b'];
$question14a=$_POST['Question14a'];
$question14b=$_POST['Question14b'];
$question15a=$_POST['Question15a'];
$question15b=$_POST['Question15b'];
$question16a=$_POST['Question16a'];
$question16b=$_POST['Question16b'];
/*$answer1=$_POST['answer1'];
$answer2=$_POST['answer2'];
$answer3=$_POST['answer3'];
$answer4=$_POST['answer4'];
$answer5=$_POST['answer5'];
$answer6=$_POST['answer6'];
$answer7=$_POST['answer7'];
$answer8=$_POST['answer8'];
$answer9=$_POST['answer9'];
$answer10=$_POST['answer10'];
$answer11a=$_POST['answer11a'];
$answer11b=$_POST['answer11b'];
$answer12a=$_POST['answer12a'];
$answer12b=$_POST['answer12b'];
$answer13a=$_POST['answer13a'];
$answer13b=$_POST['answer13b'];
$answer14a=$_POST['answer14a'];
$answer14b=$_POST['answer14b'];
$answer15a=$_POST['answer15a'];
$answer15b=$_POST['answer15b'];
$answer16a=$_POST['answer16a'];
$answer16b=$_POST['answer16b'];*/

echo "<br>";
echo $question1;
echo "<br>";
echo $question2;
echo "<br>";
echo $question3;
echo "<br>";
echo $question4;
echo "<br>";
echo $question5;
echo "<br>";
echo $question6;
echo "<br>";
echo $question7;
echo "<br>";
echo $question8;
echo "<br>";
echo $question9;
echo "<br>";
echo $question10;
echo "<br>";
echo $question11a;
echo "<br>";
echo $question11b;
echo "<br>";
echo $question12a;
echo "<br>";
echo $question12b;
echo "<br>";
echo $question13a;
echo "<br>";
echo $question13b;
echo "<br>";
echo $question14a;
echo "<br>";
echo $question14b;
echo "<br>";
echo $question15a;
echo "<br>";
echo $question15b;
echo "<br>";
echo $question16a;
echo "<br>";
echo $question16b;
/*echo "<br>";
echo $answer1;
echo "<br>";
echo $answer2;
echo "<br>";
echo $answer3;
echo "<br>";
echo $answer4;
echo "<br>";
echo $answer5;
echo "<br>";
echo $answer6;
echo "<br>";
echo $answer7;
echo "<br>";
echo $answer8;
echo "<br>";
echo $answer9;
echo "<br>";
echo $answer10;
echo "<br>";
echo $answer11a;
echo "<br>";
echo $answer11b;
echo "<br>";
echo $answer12a;
echo "<br>";
echo $answer12b;
echo "<br>";
echo $answer13a;
echo "<br>";
echo $answer13b;
echo "<br>";
echo $answer14a;
echo "<br>";
echo $answer14b;
echo "<br>";
echo $answer15a;
echo "<br>";
echo $answer15b;
echo "<br>";
echo $answer16a;
echo "<br>";
echo $answer16b;
echo "<br>";*/
$sql="TRUNCATE TABLE questionpaper1";
$sql="insert into questionpaper1 values('$question1','$question2','$question3','$question4','$question5','$question6','$question7','$question8','$question9','$question10','$question11a','$question11b','$question12a','$question12b','$question13a','$question13b','$question14a','$question14b','$question15a','$question15b','$question16a','$question16b');";
if(mysqli_query($con,$sql))
	echo "<script>window.alert('Data inserted')</script>";
else
	echo "<script>window.alert('Data not inserted')</script>";
?>
<html>
<body>
<a href="select.php">VIEW</a>
</body>
</html>