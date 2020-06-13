<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2_CRUD</title>

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
    $SNO =$_GET['SNO'];
    $name =$_POST['name'];
    $email =$_POST['email'];
    $phone =$_POST['phone'];
    $enquiry =$_POST['enquiry'];
    $message =$_POST['message'];
    $password =$_POST['password'];
    $cpassword =$_POST['cpassword'];


    $updatequery= "UPDATE details SET SNO =$SNO , NAME = '$name' , EMAIL='$email' , PHONE='$phone' ,ENQUIRY='$enquiry' ,MESSAGE='$message' ,PASSWORD='$password' ,CON_PASSWORD='$cpassword'  WHERE SNO='$SNO' ";

    $iquery = mysqli_query($con,$updatequery);

    if($iquery){
        ?>
             <script>
                alert("updated successful");
            </script>
        <?php
    }else{
        ?>
           <script>
                alert("NOT updated");
            </script>
        <?php
    }


    header('location:fetch.php');

}
?>

    <div class="container col-lg-6 m-auto">
    
    <form method="POST">

    <h2 class="bg-dark text-white text-center">  UPDATE OPERTION </h2>
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

            <button class="btn btn-success btn-sm text-center " type="submit" name="submit" > UPDATE
            </button>
            <br>
		</form>

    </div>


</body>
</html>