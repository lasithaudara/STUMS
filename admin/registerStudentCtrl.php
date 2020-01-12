<?php


	$name=$_POST['name'];
	$pswd = $_POST['password'];	
	$regno=$_POST['regno'];	
	$epno=$_POST['epno'];	
	$address=$_POST['address'];	
	$contactno=$_POST['contactno'];	
	$deprt=$_POST['deprt'];
	$year=$_POST['year'];	
				
			
			
				
								
				include "dbConfig.php";
				$sql = "INSERT INTO student (name, regNo, epNo,password, address, contactNo, dept, year) VALUES ('$name', '$regno', '$epno', '$pswd', '$address','$contactno','$deprt','$year');";
					
				if ($conn->query($sql) === TRUE) {
					echo ("1");

				} else {
					echo ("ERROR!");
				}

				$conn->close();
			
	

?>
	

