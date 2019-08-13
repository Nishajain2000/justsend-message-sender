<?php
include('connection.php');


$db =mysqli_connect($servername,$username,$password,$dbname);

if($db->connect_error){
	die("connection failed".$db);
}


$code='';
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$content=$_POST['content'];
	$img =$_FILES['pic'];
	

	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
	$code= substr(str_shuffle($permitted_chars), 0, 10);

	$upload = "INSERT INTO message(name,email,subject,content,img,code)VALUES('$name','$email','$subject','$content','$img','$code')";

	if(mysqli_query($db,$upload)){
		header('location:code.php?code='.$code);
	}
/*else{
	echo "error:".$upload."<br>".$db->error;
}*/
}

?>