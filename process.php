<?php
$con = mysqli_connect('localhost', 'root', '', 'test');
if(isset($_POST['name']) || issset($_POST['uemail'])) {

	$name = $_POST['name'];
	$mail = $_POST['uemail'];

	$qu = "INSERT into record(`usname`, `email`) values('$name', '$mail')";
	$res = mysqli_query($con, $qu);

	if($res) {
		header("loaction: me.php");
	} else {
		echo "error";
	}
}
?>