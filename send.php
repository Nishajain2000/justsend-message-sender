<?php
  include('send_details.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>send</title>
	<link rel="stylesheet" type="text/css" href="style.css" enctype="multipart/form-data">
	<meta name="viewport" content= "width=device-width, initial-scale=1.0"> 

</head>
<body>
	<form method="post" action="send_details.php">
	<div class="heading">
		<h2>JUstSend</h2>
	</div>

	<div class="mail">
        <input type="text" name="name" placeholder="Your name" required>
		<input type="email" name="email" placeholder="Your email address" required>
		<input type="text" name="subject" placeholder="Subject" required>
	 	<textarea name="content" placeholder="content">Content</textarea required>
		
 	<div class="button">
	 	<input type="file" name="pic" value="pic">
	 	<input type="submit" name="submit" value="submit">
	 	<button><a href="index.php">Go back</a></button>
    </div>
 </form>
</div>


</body>
</html>