<?php
include ('config.php');
if ($_POST['save']) {

	// to get name as input
	if (!empty($_POST['first'])) {
		$name = $_POST['first'];
	} else {
		echo 'Name is empty';
	}

	// to get dept as input
	if (!empty($_POST['date'])) {
		$dob = $_POST['date'];
	} else {'
		echo 'Dept is empty';
	}

	// insert the data
	$sql = mysqli_query($con, "Insert into test(Name, DoB) value('$name', '$dob')");

	if($sql){
		echo 'Inserted !';
		header('Location: index.php');

	} else {
		echo 'try again';
	}

}
 ?>