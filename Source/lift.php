
<html>
<head>
</head>

</html>

<?php
shell_exec('commands/lift.py');
header("refresh: 2; url=wait_for_chef2.php");
?>
