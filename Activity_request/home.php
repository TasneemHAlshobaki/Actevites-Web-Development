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
                <form method="post" action="">
                    <div class="form_group">
                        <label>User name</label>
                        <input type="text" placeholder="full name" name="name">
                    </div>
                    <div class="form_group">
                        <label>Password</label>
                        <input type="password" placeholder="enter Password" name="pass">
                    </div>
                    <div class="form_group">
                        <label>choose file </label>
                        <input type="file"  name="img">
                    </div>
                    <button class="btn btn_primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>

<?php


echo "Hi 😊🖐👋" . "<br>" ;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name = $_POST["name"];
    $pass = $_POST["pass"];
    $errors [""]= "" ;
    if(!empty($name) && !empty($pass)){
        if(filter_var($name , FILTER_VALIDATE_EMAIL)){
            if($name == "tasneem@gmail.com" && $pass == "t123"){
                
                    echo "login successfully 👍🏻😄"; 
               
             }else{
              $errors ["name or password error"] ="name or password error";
             }
            }else{
                $errors ["syntax email error"] = "syntax email error";
            }
    }else{
        $errors ["Empty data"] = "User name & password is requre";
    }
}else{
    $errors ["request error"] = "Request error";
}





if(count($errors) == 0){
    echo "login successfully 👍🏻😄";
}elseif(count($errors) > 2){
    echo "Your accaount has loced!!";

}else{
    foreach($errors as $k => $v){
        echo $v;
    }
}


?>