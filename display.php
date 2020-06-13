<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DETAILS</title>

    <!-- font awsome cdm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script type="text/javascript" >
        function fetch(){
            $.ajax({url:"fetch.php",success:function(result)
            {
               $("m").html(result);
            }
            })
        }
    </script>

</head>
<body>

<br><br>
    
    <div class="container jumbotron">


    <div class="col-lg-12" style="display: inline-block;">
            <h3 class="one">To check data of our Agents and to edit them click here
            <button class="btn btn-primary btn-md fa fa-plus" onclick="fetch()" >  
                          </a></button> </h3>
    </div>
    <m>
    </m>
    </div>


</body>
</html>