<?php
$con = new mysqli("localhost:3308" , "root" , "", "db_contact");

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

$sql = "INSERT INTO `tbl_contact` (`fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

if ($con -> connect_errno){
		echo $con->connect_errno;
}	

$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>