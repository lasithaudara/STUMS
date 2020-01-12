<?php
echo"<h1>Update</h1>";
if(isset($_POST['update'])){
	$name=$_POST['txtName'];
	$pswd = $_POST['txtPassword'];	
	$regno=$_POST['txtRegNo'];	
	$epno=$_POST['txtEPNo'];	
	$address=$_POST['txtAddress'];	
	$contactno=$_POST['txtContactNo'];	
	$deprt=$_POST['txtDept'];
	$year=$_POST['txtYear'];	
	if($name && $regno && $epno && $address && $contactno && $deprt && $year){	
	
			if(strlen($name)>25){
				echo "Length of full name is too long!";
			}else{

					include "dbConfig.php";

					$sql = "UPDATE student SET name='$name', regNo='$regno', epNo='$epno', address='$address', contactNo='$contactno', dept='$deprt', year='$year' WHERE regNO='$regno'";


					if ($conn->query($sql) === TRUE) {
    					echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					//mysqli_query($db, $queryreg);					
					//die("You have been registered !<a href='index.php'>retrun to login page</a>");
				
			}
		
	}else{
		echo "please fill in<b> all </b> Fields !<p>";
	}
}
$conn->close();
?>
	

