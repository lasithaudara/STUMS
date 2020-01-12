<?php
include "dbConfig.php";

$sql = "SELECT COUNT(regNo) as total FROM attendence WHERE lectureID='1' and regNo='13/AS/085'";
$result = $conn->query($sql);
$data=$result->fetch_assoc();
echo $data['total'];

$conn->close();
?>