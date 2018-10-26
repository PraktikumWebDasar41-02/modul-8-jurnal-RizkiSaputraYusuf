<?php
class oop{
	private $user;
	private $pass;
	private $email;
	private $query;
	private $conn;

	function __construct($user1,$password1,$repassword1,$email1){
include 'koneksi.php';
if (!is_numeric($user1)) {
	$this->user =$user1;
}
if ($password1==$repassword1 || strlen($password1)<-6){
	$this->password = $password1;
}else{
	echo "password anda masih salah";
}
if (substr($email1, -10)=="@gmail.com") {
	$this->email = $email1;
	}
	if (isset($user)&&isset($pass1)&&(isset($email1)) {
		$this->conn = $conn;
		$this->query = mysqli_query($this->conn,"INSERT INTO user(id, password,username,email) VALUES('','$this->user','$this->password','$this->email')");
			if (!$this->query) {
				die("tidak bisa");
			}else{
				echo "berhasil nich";
			}

		}
	}
	if (isset($_POST['submit'])) {
		$conn = new ope[$_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['email']);
	}
}
?>