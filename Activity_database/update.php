<?php
include_once('css.php');
include_once('js.php');
$connect = mysqli_connect('localhost','root','','emp');

if (isset($_GET['email'])) {
	$id = $_GET['email'];

	$query = "SELECT * FROM contact where email = $id LIMIT = 1";
	$result = mysqli_query($connect, $query);

	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee</title>
</head>
<body>

	<div class="container">

		<div class="row">
			<div class="col-12">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) . '?id=' . $_GET['id']; ?>" method="POST" id="my-form">
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
                    <button class="btn btn_primary" id="save-btn">Save</button>
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>
<?php
	
		$connection = mysqli_connect('localhost','root','','emp');
		if ($_SERVER['REQUEST_METHOD'] === 'GET') {
			if (isset($_GET['email'])) {
				$id = $_GET['email'];

			if ($_SERVER['REQUEST_METHOD'] == 'POST') {
				$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$homePhone = $_POST['homePhone'];
	$addresss = $_POST['addresss'];
	$comments = $_POST['comments'];

			if (!empty($id) && !empty($name) && !empty($email) && !empty($birth_date) && !empty($nationality)) {

				$query = "UPDATE `contact` SET fname = '$fname', lname = '$lname', email = '$email', homePhone = '$homePhone', address = '$addresss' where email = $id";
				$result = mysqli_query($connection, $query);

				if ($result) {
					echo '<div class="row"><div class="col-12"><div class="alert alert-success">Employee reconrd updated successfully</div></div></div>';
				} else {
					echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Failed to update this Employee</div></div></div>';
				}

			} else {
				echo '<div class="row"><div class="col-12"><div class="alert alert-danger">Some fields are missing</div></div></div>';
			}
		}else {
			echo "Request Error POST";
		}
		
	}
}
		else {
			echo "Request Error GET";
		}

		?>


<script type="text/javascript">
	$('#save-btn').click(function (event) {
		event.preventDefault();

		var result = confirm("Are you sure?");

		if (result == true) {
			$('#my-form').submit();
		}
	});
</script>