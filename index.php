<?php
	include 'includes/DatabaseCon.inc.php';
	include 'includes/UserDetails.inc.php';
	include 'includes/showUsers.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$views = new ShowAllUsers();
	$views->showAllUserData();
?>
</body>
</html>