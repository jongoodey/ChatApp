<?php 

session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

//require 'core/classes/Core.php';
//require 'core/classes/Chat.php';

//$chat = new Chat();
//$chat->throwMessage(2, 'please work tester');
//echo $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ajax Chat</title>
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<div class="chat">
		<div class="messages"></div>

		<textarea class="entry" placeholder="type shift here and return. Use shift + return to start a new line"></textarea>
	</div>

	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/chat.js"></script>
</body>
</html>