<?php
// URL TARGET
//$judul = str_replace(' ', '+', $_POST['judul']);
$url = 'https://anoboy.tube/';

$get = file_get_contents($url);

$content = explode('<div class="clear"></div>' , $get);
$data = explode('</a>' , $content[4]);

echo json_encode(
	array(
		'data' => $data, 
	)
);
?>