<?php

$images = scandir("images");

//var_dump($images);

$data = array();

foreach ($images as $img) {
	if(!in_array($img, array(".",".."))){
		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		$info = pathinfo($filename);
		$info["size"] = filesize($filename) . " bytes";
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = 
		array_push($data, $info);

		//echo "<br><br>"
	}
}

echo json_encode($data);

?>