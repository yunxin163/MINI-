<?php
$servername = "localhost";
$username = "root";
$password = "crb";
$dbname = "myDB";

// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// �������
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 
$result = $conn->query("set names 'gbk'");
// ʹ�� sql �������ݱ�
$sql = "select * from data";
$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()){
			echo "id: " . $row["username"]. " - Name: " . $row["time"]. " - Name: " . $row["zhuti"]. " - Name: " . $row["message"].  "<br>";
			
			echo "<a href='4get4.php'>4<a>";

			}
			
	}


$conn->close();
?>