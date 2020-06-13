<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script type="text/javascript" >
        function test(){
            $.ajax({url:"echo.php",success:function(result)
            {
                alert(result);
            }
            })
        }
    </script>
</head>
<body>

<button onclick="test()">
    click
</button>
    
</body>
</html>