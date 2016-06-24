
<html>
<head>
</head>

</html>

<?php
shell_exec('commands/grab.py');
header("refresh: 1; url=wait_for_nxt.php");
?>
