<?php
include_once('css.php');
include_once('js.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


    <div class="containe">
        <div class="row">
            <div class="col_12">
            <form   method="post" action="sresult.php"  enctype="multipart/form-data">
            <div >
                        
                        <input type="text" placeholder="Search" name="search">
                    </div>

                    <button type="button" class="btn btn-primary" id="save-btn" >Search</button>

</form>
            </div>
        </div>
    </div>
    
</body>
</html>