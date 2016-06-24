
<html>
<head>
</head>
<body><meta http-equiv="refresh" content="1" ></body>
</html>

<?php
$s = shell_exec('commands/wait_for_chef.py');
echo $s;


if ($s == ""){
	
	header('Location: stapler2.php');
	
}
?>
