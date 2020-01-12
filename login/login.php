<?php 
	session_start();
	if(isset($_POST['login'])){
			$regno=$_POST['regno'];
			$pswd=$_POST['pswd'];
			$auth=$_POST['authentication'];
			
			
			
			//include 'dbconfig.php';
			$servername = "localhost";
			$username = "root";
			$password = "root";
			$dbname = "stums";
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			if($auth=='admin'){
				//admin DB
				$sql = "SELECT adminRegno, name, password FROM admin WHERE adminRegno='$regno'";
				$result=$conn->query($sql);
				if($result!=NULL){
					while($row = $result->fetch_assoc()){
						$dbregno=$row['adminRegno'];
						$dbname=$row['name'];
						$dbpassword=$row['password'];											
					}
					
					if($dbregno==$regno && $dbpassword==$pswd){
							$_SESSION['name']=$dbname;
							$_SESSION['auth']=$auth;
							header('Location: http://localhost/Project/admin/index.php');
					}else{
						$_SESSION['error']="Error: Type correct Password and Student Registor Number";
						header('Location: http://localhost/Project/login/sign_up.php');
					}
				}else{
						$_SESSION['error']="Error: No data in the database";
						header('Location: http://localhost/Project/login/sign_up.php');
				}
					
			}else if($auth=='student'){
				//student DB
				$sql = "SELECT name, regNo, password FROM student WHERE regNo='$regno'";
				$result=$conn->query($sql);
				if($result!=NULL){
					while($row = $result->fetch_assoc()){
						$dbname=$row['name'];
						$dbregno=$row['regNo'];
						$dbpassword=$row['password'];					
					}
					if($dbregno==$regno && $dbpassword==$pswd){
							$_SESSION['name']=$dbname;
							$_SESSION['auth']=$auth;
							header('Location: http://localhost/Project/student/index.php');
					}else{
						$_SESSION['error']="Error: Type correct Password and Admin Registor Number";
						header('Location: http://localhost/Project/login/sign_up.php');
					}
				}else{	
						$_SESSION['error']="Error: No data in the database";
						header('Location: http://localhost/Project/login/sign_up.php');
						
				}
			}
		}
	

		
	
?>