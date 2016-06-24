
<html>
<head>
</head>
<body><meta http-equiv="refresh" content="1" ></body>
</html>

<?php
$output =  shell_exec('wget -qO- http://127.0.0.1:8080/rest/input/1/value');
$output = substr($output, -2, 1);

$input_one = shell_exec('wget -qO- http://127.0.0.1:8080/rest/relay/1/value');
$input_one = substr($input_one, -2, 1);
$input_third = shell_exec('wget -qO- http://127.0.0.1:8080/rest/relay/3/value');
$input_third = substr($input_third, -2, 1);

if ($output == 1){
	
	shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/1 --post-data="value=0"');
	
}


$output_sec =  shell_exec('wget -qO- http://127.0.0.1:8080/rest/input/2/value');
$output_sec = substr($output_sec, -2, 1);
echo $output_sec;

if ($output_sec == 1){

	shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/3 --post-data="value=0"');

}
if ($input_one == 0 && $input_third == 0){
	
	shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/2 --post-data="value=1"');
	
}
else {
	
	shell_exec ('wget -qO- http://127.0.0.1:8080/rest/relay/2 --post-data="value=0"');
	
}

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
