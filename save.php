<?php
//create a connection with database
$con = mysqli_connect("localhost", "root", "", "cman_db");

//set variables for the input
$fname = $_POST['fname'];
$sname = $_POST['sname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$residence= $_POST['residence'];
$pob = $_POST['pob'];
$ministry = $_POST['ministry'];
$mobile= $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_POST['id'];

//create a MYSQL command to INSERT data into data table
$sql = "INSERT INTO members (fname, sname, lname, gender, birthday, residence, pob, ministry, mobile, email, password, id) VALUES ('$fname', '$sname', '$lname', '$gender', '$birthday', '$residence', '$pob', '$ministry', '$mobile', '$email', '$password', '$id')";

//now insert data into database
//check if data is inserted or not
if (!mysqli_query($con, $sql)) {
	echo "Data is not saved";
} else{
	echo "<?php <div class='form'><h3>You are registered successfully.</h3><br/><strong>Click here to <a href='members/index.php'>Login</a></strong></div>";
}
?>