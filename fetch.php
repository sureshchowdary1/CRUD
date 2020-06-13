<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M_CRUD</title>

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
        function insert(){
            $.ajax({url:"insert.php",success:function(result)
            {
               $("l").html(result);
            }
            })
        }
    </script>

</head>
<body>
    
    <div class="container ">
        <div class="col-lg-12">
            <h1 class="bg-dark text-center text-warning "> DETAILS OF CLIENTS
            <button class="btn btn-warning btn-md fa fa-plus pull-right mr-5 mt-1 "  onclick="insert()" >  
                          </a></button> </h3>
            </h1>
                <table class="table table-striped table-hover table-bordered ">
                    <tr class="container  col-lg-12 bg-dark text-white" >
                        <th > SNO </th>
                        <th > NAME </th>
                        <th > EMAIL </th>
                        <th>  PHONE </th>
                        <th >QUIRY </th>
                        <th >MESSAGE </th>
                        <th > PASSWORD </th>
                        <th > CON_PAS </th>
                        <th > UPDATE</th>
                       <th > DELETE </th>

                    </tr>
    <?php

                    include 'conn.php';


                    $fetchquery= "SELECT * FROM details";

                    $iquery = mysqli_query($con,$fetchquery);

                    

                            while($res = mysqli_fetch_array($iquery)){
                    ?>

                <tr class="container  col-lg-12" >
                    <td> <?php echo $res['SNO']?> </td>
                    <td> <?php echo $res['NAME']?> </td>
                    <td> <?php echo $res['EMAIL']?> </td>
                    <td> <?php echo $res['PHONE']?> </td>
                    <td> <?php echo $res['ENQUIRY']?> </td>
                    <td> <?php echo $res['MESSAGE']?> </td>
                    <td> <?php echo $res['PASSWORD']?> </td>
                    <td> <?php echo $res['CON_PASSWORD']?> </td>
                    <td> <button class="btn btn-primary btn-md "> <a href="update.php?SNO= <?php echo $res['SNO']; ?>" class="text-white fa fa-pencil"> 
                        update </a></button> </td>
                    <td> <button class="btn btn-danger btn-md "> <a href="delete.php?SNO= <?php echo $res['SNO']; ?>"class="text-white fa fa-trash" >
                         delete </a></button> </td>
                </tr>

                <?php
                            }
                ?>
                </table>
        </div>
        <l>
        </l>

    </div>
</body>
</html>     