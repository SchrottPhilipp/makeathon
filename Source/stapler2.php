
<html>
<head>
</head>

</html>

<?php
shell_exec('commands/stapler2.py');
header("refresh: 3; url=wait_for_chef3.php");
?>
