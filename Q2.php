<html>

<head>
	<meta charset="UTF-8">
	<script src="script.js"></script>
	<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
	<div class="row">
		<div class="col container">
			<form action="" method="POST">
                <label for="std_name">Student Name :</label>
                <input type="text" name="std_name"></input>
                <br><br>
                <label for="std_roll">Student Roll Number :</label>
                <input type="text" name="std_roll"></input>
                <br><br>
                
                <label for="std_phone">Subject 1 Mark :</label>
                <input type="text" name="sub1"></input>
                <br><br>
                <label for="std_phone">Subject 2 Mark :</label>
                <input type="text" name="sub2"></input>
                <br><br>
                <label for="std_phone">Subject 3 Mark :</label>
                <input type="text" name="sub3"></input>
                <br><br>
                <label for="std_phone">Subject 4 Mark :</label>
                <input type="text" name="sub4"></input>
                <br><br>
                <label for="std_phone">Subject 5 Mark :</label>
                <input type="text" name="sub5"></input>
                <br><br>
                <input type="submit" name="submit" value="submit"></input>
			</form>
        </div>
      <div class="col container">
      <?php

if(isset($_POST['submit']))
{

    $name=$_POST['std_name'];
    $roll=$_POST['std_roll'];
    $sub1=$_POST['sub1'];
    $sub2=$_POST['sub2'];
    $sub3=$_POST['sub3'];
    $sub4=$_POST['sub4'];
    $sub5=$_POST['sub5'];
    $total=$sub1+$sub2+$sub3+$sub4+$sub5;
    $avg=$total/5;

    echo "</br> Roll No :"."$roll "."Name :"." $name ";
    echo "</br>Total Marks ="."$total";
    echo "</br>Average ="."$avg";
    
    


}






?>
</div>
        


</body>

</html>
