<?php

define("srv", "127.0.0.1");
echo srv;

ECHO "<BR><BR>";

define(
		"BD", [
				'127.0.0.1', 
				'root', 
				'password', 
				'teste'
			]
			//,true // case insensitive
	);

print_r(BD);


ECHO "<BR><BR>";

echo PHP_VERSION;
echo DIRECTORY_SEPARATOR;
?>