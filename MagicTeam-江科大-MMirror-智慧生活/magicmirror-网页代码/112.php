<?php
$servername = "localhost";
$username = "root";
$password = "crb";
$dbname = "myDB";
session_start();
// ��������
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("����ʧ��: " . $conn->connect_error);
} 
if (isset($_POST['username']) && isset($_POST['password'])
    && !empty($_POST['username']) && !empty($_POST['password'])
) {
	$username = $_POST['username'];
    $password = $_POST['password'];
	$_SESSION['views']=$username;
	$sql_select="SELECT username FROM mima WHERE username = '$username'";
	$ret = mysqli_query($conn,$sql_select);
    $row = mysqli_fetch_array($ret);
	if($username == $row['username']) {
            //�û����Ѵ��ڣ���ʾ��ʾ��Ϣ
            echo "�û����Ѵ���";
       }else{
		   $sql_insert = "INSERT INTO mima (username,password,shebei) VALUES('$username','$password','1456')";
            //ִ��SQL���
           mysqli_query($conn,$sql_insert);
           header("Location:genxin/dongtailiebiao2.php");
        }
}
mysqli_close($conn);

?>