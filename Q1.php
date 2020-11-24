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
                <label for="std_marks">Student Marks :</label>
                <input type="text" name="std_marks"></input>
                <br><br>
                <label for="std_phone">Student Phone Number :</label>
                <input type="text" name="std_phone"></input>
                <br><br>
                <input type="submit" name="submit" value="submit"></input>
			</form>
        </div>
      <div class="col container">
      <?php

if(isset($_POST['submit']))
{

    $data=array("Student_Name"=>$_POST['std_name'],"Student_RollNo"=>$_POST['std_roll'],"Student_Marks"=>$_POST['std_marks'],"Student_PhoneNo"=>$_POST['std_phone']);
    foreach($data as $key=>$val)
    {
    
        echo "</br> $key"." "."$val";
     
    }


}






?>
</div>
        


</body>

</html>
