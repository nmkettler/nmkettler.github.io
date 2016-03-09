<html>
<body>
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "leavecomment";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check Connection
if(!$conn) {
	die("Connection failed" . mysqli_connect_error());
}



$uname = mysqli_real_escape_string($conn, $_POST['uname']);
$uemail = mysqli_real_escape_string($conn, $_POST['uemail']);
$ucomment = mysqli_real_escape_string($conn, $_POST['ucomment']);

$sql = "INSERT INTO form (name, email, comment)
		VALUES 
		('$uname', '$uemail', '$ucomment')";

		if(mysqli_query($conn, $sql)){
			echo 'Comment Successfull!';
			header('Location: index.php');
		}else{
			echo "Error " . $sql . "<br>" . mysqli_error($conn);
		}

		mysqli_close($conn);

?>

</body>
</html>