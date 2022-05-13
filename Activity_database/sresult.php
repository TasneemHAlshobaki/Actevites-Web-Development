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
            <table style="width:100%"> 
            <thead>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>Home Phone</th>
              <th>Assress</th>
              <th>comments</th>
           </tr>

            </thead>
            <tbody>
              <?php
                $id = $_POST['search'];
                
                $connect = mysqli_connect('localhost','root','','emp');
                

                 $data = "SELECT * FROM contact where email = $id ";
                  $result = mysqli_query($connect,$data);
                  if(!$result){
                    echo mysqli_error($result);
                }

                  if(mysqli_num_rows($result) > 0){
                     while ($row = mysqli_fetch_assoc($result)) {
                        echo ' <tr> '.
                        '<td>'.$row['fname'].'</td>'.
                        '<td>'.$row['lname'] .'</td>'.
                        '<td>'.$row['email'].'</td>'.
                        '<td>'.$row['homePhone'].'</td>'.
                        '<td>'.$row['address'].'</td>'.
                        '<td>'.$row['comments'].'</td>'.
                      '</tr>';
                     }
                  }

                  if($connect){
                    die(mysqli_connect_error());
                   }

              ?>
 
</tbody>
  </table>
            </div>
        </div>
    </div>
    
</body>
</html>