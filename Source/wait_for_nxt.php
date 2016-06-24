
<html>
<head>
</head>
<body><meta http-equiv="refresh" content="1" ></body>
</html>

<?php
$s = shell_exec('commands/check_nxt.py');
echo $s;

if ($s == ""){
	
	header('Location: hanse2.php');
	
}

?>
