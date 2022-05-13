<?php
    include_once('css.php');
    include_once('js.php');
    


    $connect = mysqli_connect('localhost','root','','emp');
    if($_SERVER['REQUEST_METHOD'] === "POST"){ 

        $id = $_POST['fname'];
        if (!empty($id)) {
            $query = "DELETE FROM contact WHERE fname = $id";
            $result = mysqli_query($connect, $query);
    
            if ($result) {
                echo "Deleted successfully";
            } else {
                echo "Failed to delete";
            }
    
            mysqli_close($connect);
        } else {
            echo "ID is missing";
        }
    }





?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="listAll.php">View Employee</a>
</body>
</html>


