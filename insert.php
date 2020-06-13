<?php

session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include 'conn.php';

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $enquiry = mysqli_real_escape_string($con, $_POST['enquiry']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
    $insertquery= "INSERT INTO details (NAME, EMAIL, PHONE, ENQUIRY, MESSAGE, PASSWORD, CON_PASSWORD) VALUES ('$name','$email','$phone','$enquiry','$message','$password','$cpassword')";

    $iquery = mysqli_query($con,$insertquery);

    if($iquery){
        ?>
             <script>
                alert("inserted successful");
            </script>
        <?php
    }else{
        ?>
           <script>
                alert("NOT inserted");
            </script>
        <?php
    }
}


?>

    <div class="container col-lg-6 m-auto">
    
    <form action="insert.php" method="POST">

    <h2 class="bg-dark text-white text-center">  CRUD OPERTION </h2>
			<div class="form-group">
				<label> NAME </label>
				<input class="form-control" type="text" id="name" name="name" placeholder="NAME"  required>
			</div>

			<div class="form-group">
				<label> EMAIL</label>
				<input class="form-control" type="email" id="email" name="email" placeholder="EMAIL" required>
			</div>

			<div class="form-group">
				<label> PHONE</label>
				<input class="form-control" type="number" id="phone" name="phone" placeholder="PHONE" required>
			</div>

			<div class="form-group">
				<label> ENQUIRY</label>
				<input class="form-control" type="text" id="enquiry" name="enquiry" placeholder="ENQUIRY" required >
			</div>

			<div class="form-group">
				<label> MESSAGE </label>
				<input class="form-control" type="text" id="message" name="message" placeholder="MESSAGE" required>
			</div>

            <div class="form-group">
				<label> PASSWORD </label>
				<input class="form-control" type="password" id="password" name="password" placeholder="PASSWORD"required >
			</div>

            <div class="form-group">
				<label> CON_PASSWORD </label>
				<input class="form-control" type="password" id="cpassword" name="cpassword" placeholder="CONFORM PASSWORD" required >
			</div>

            <button class="btn btn-success btn-sm text-center " type="submit" name="submit" > INSERT
            </button>
            <br>
		</form>

    </div>


</body>
</html>