<?php
include('read_details.php');
 $code =$_GET['code'];
?>



<!DOCTYPE html>
<html>
<head>
	<title>read the message</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 
</head>
<body>
   <?php
  	
   	
     $query = "SELECT * FROM message WHERE code='$code'";
	 $data = mysqli_query($db,$query);
	 $row=mysqli_fetch_assoc($data);
	   //echo $row["code"].'  '.$row["subject"]
	 ?>

	 <div class="heading">
		<h2>JUstSend</h2>
	</div>

	<div class="content">
		<p>Message from : <?php echo $row["name"]?></p>
	</div>

	<div class="subject">
		<p>Subject : <?php echo $row["subject"]?></p>
	</div>

	<div class="subject">
		<p><?php echo $row["content"]?></p>
	</div>

	


</body>
</html>


<!-- <img src="data:image/jpeg;base64,<?php echo base64_encode( $image_data ); ?>" /> -->