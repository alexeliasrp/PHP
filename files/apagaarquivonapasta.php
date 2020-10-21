<?php

if(!is_dir("images")){
	mkdir("images");
}

foreach (scandir("images") as $arq) {
	if(!in_array($arq, array(".", ".."))){
		unlink("images/" . $arq);
	}
}

echo "apagados"

?>