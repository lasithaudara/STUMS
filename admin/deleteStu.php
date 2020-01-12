<?php
echo"<h1>Update</h1>";
if(isset($_POST['update'])){
	
	$regno=$_POST['txtRegNo'];	
	
	if($name && $regno && $epno && $address && $contactno && $deprt && $year){	
	
			if(strlen($name)>25){
				echo "Length of full name is too long!";
			}else{

					include "dbConfig.php";
					$sql = "DELETE FROM student WHERE regNO='$regno'";
					


					if ($conn->query($sql) === TRUE) {
						echo "Record deleted successfully";
					} else {
						echo "Error deleting record: " . $conn->error;
					}
					//mysqli_query($db, $queryreg);					
					//die("You have been registered !<a href='index.php'>retrun to login page</a>");
				
			}
		
	}else{
		echo "please fill in<b> all </b> Fields !<p>";
	}
}
?>
	

