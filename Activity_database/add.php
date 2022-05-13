<?php
 echo "Hi 😊🖐👋" . "<br>" ;
 $connect = mysqli_connect('localhost','root','','emp');
 
 if($_SERVER['REQUEST_METHOD'] === "POST"){ 
    echo "Hi 😊🖐👋" . "<br>" ;
   extract($_POST);
   $data ="INSERT INTO contact VALUES('$lname' , '$fname' , '$email' ,'$homePhone','$addresss','$comments') ";
   $query = mysqli_query($connect,$data );
   if(!$query){
    echo mysqli_error($connect);
        
   }

}


if(!$connect){
    die(mysqli_connect_error());
}
# $row['fname'];
#$row = mysqli_fetch_assoc($query)

?>





