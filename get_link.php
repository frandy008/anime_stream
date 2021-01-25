<?php
// URL TARGET
//$judul = str_replace(' ', '+', $_POST['judul']);
$url = $_POST['link'];

$get = file_get_contents($url);

$content = explode('<source src="' , $get);
$data = explode('" type="video/mp4">' , $content[1]);

echo json_encode(
	array(
		'data' => $data[0], 
	)
);
?>