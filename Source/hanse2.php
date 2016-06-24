

<?php


shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/1 --post-data="value=1"');
shell_exec ('commands/hanse2.py');


header("refresh: 3; url=wait_for_hanse2.php");
// 
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/1 --post-data="value=0"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/2 --post-data="value=1"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/2 --post-data="value=0"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/3 --post-data="value=1"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/3 --post-data="value=0"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/1 --post-data="value=1"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/1 --post-data="value=0"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/2 --post-data="value=1"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/2 --post-data="value=0"');
// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/3 --post-data="value=1"');

// sleep(1);
// shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/3 --post-data="value=0"');

?>
