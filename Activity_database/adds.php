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
                <form method="post" action="add.php" id="my-form" enctype="multipart/form-data">
                    <div class="form_group">
                        <label>First name:*</label>
                        <input type="text" placeholder="first name" name="fname">
                    </div>
                    <div class="form_group">
                        <label>Last name:*</label>
                        <input type="text" placeholder="last name" name="lname">
                    </div>
                    <div class="form_group">
                        <label>Email:*</label>
                        <input type="text" placeholder="enter email" name="email">
                    </div>
                    <div class="form_group">
                        <label>Home Phone:*</label>
                        <input type="text" placeholder="enter Home Phone" name="homePhone">
                    </div>
                    <div class="form_group">
                        <label>Address:*</label>
                        <input type="text" placeholder="enter your Address" name="addresss">
                    </div>
                    <div class="form_group">
                        <label>Comment:</label>
                        <input type="text"  name="comments">
                    </div>
                    <button class="btn btn_primary" id="save-btn">Add</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


<script type="text/javascript">
	$('#save-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$('#my-form').submit();
		}
	});
</script>
