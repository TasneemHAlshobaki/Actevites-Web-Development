<?php

/*
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

}elseif(count($errors) < 2 && count($errors) != 0){
     header('Location: http://localhost/Projects/Projects/Lab/formlab.php');
}
else{
    foreach($errors as $k => $v){
        echo $v;
    }
}*/


?>