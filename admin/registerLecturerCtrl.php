<?php


	
	$name = $_POST['name'];	
	$contactNo=$_POST['contact'];	
	$email=$_POST['email'];	
	$department=$_POST['dept'];	
		
				
			
			
								
				include "dbConfig.php";
				$sql = "INSERT INTO `lecturer`(`name`, `contactNo`, `email`, `department`) VALUES ('$name','$contactNo','$email','$department');";
					
				if ($conn->query($sql) === TRUE) {
					echo ("1");

				} else {
					echo ("ERROR!");
				}

				$conn->close();
			
	

?>
	

