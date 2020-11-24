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
                <label for="ascn">Enter ASCII Number :</label>
                <input type="text" name="ascn"></input>
               <br><br>
                <input type="submit" name="submit" value="submit"></input>
			</form>
        </div>
      <div class="col container">
      <?php

if(isset($_POST['submit']))
{

    $ascn=$_POST['ascn'];
    $chrval = chr($ascn);  
    echo"</br> The Character is : "."$ascn"." "."ASCII VALUE OF CHARACTER IS :"."$chrval";


}






?>
</div>
        


</body>

</html>
