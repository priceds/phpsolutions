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
				<label for="g_female">Employee ID &nbsp;&nbsp;&nbsp;&nbsp;</label>
				<input type="text" name="emp_id" id="txt_empid"></input>
				</br></br>
				<label for="g_female">Employee Name </label>
				<input type="text" name = "emp_name" id="txt_empname"></input>
				</br></br>
				&nbsp;&nbsp;<label for="g_male">Male</label>
				<input type="radio" name="gender" id="g_male" value="male"></input>
				&nbsp;
				<label for="g_female">Female</label>

				<input type="radio" name ="gender" id="g_female" value="female"></input>
				<br><br><br>
				<label for="post_select">Choose Role :</label>
				<select name ="role_option" id="post_select">
         <option value="Manager">Manager</option>
         
         <option value="Admin">Admin</option>
       </select>
				</br></br>
				<input type="submit" name="submit"></input>
			</form>
        </div>
      <div class="col container">
      <?php

if(isset($_POST['submit']))
{


$data=array("empid"=>$_POST['emp_id'],"empname"=>$_POST['emp_name'],"gender"=>$_POST['gender'],"roleoption"=>$_POST['role_option']);
foreach($data as $key=>$val)
{

    echo "</br> $key"." "."$val";
 
}
}






?>
</div>
        


</body>

</html>
