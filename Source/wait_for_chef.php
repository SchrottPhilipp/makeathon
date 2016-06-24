
<html>
<head>
</head>
<body><meta http-equiv="refresh" content="2" ></body>
</html>

<?php
$s = shell_exec('commands/wait_for_chef.py');
echo $s;

if ($s == ""){

//header('Location: lift.php');
	
header("refresh: 1; lift.php");
	
}
?>
