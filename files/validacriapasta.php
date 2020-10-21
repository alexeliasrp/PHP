<?php

$name = "images";


if(!is_dir($name)){
	mkdir($name);
	echo "Pasta criada.";
}
else{
	rmdir($name);
	echo "Pasta $name já existia. Ela foi removida.";
}

?>