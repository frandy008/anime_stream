<?php
// URL TARGET
$judul = str_replace(' ', '+', $_POST['judul']);
$url = 'https://anoboy.tube/?s='.$judul;

$get = file_get_contents($url);

$content = explode('<div class="column-content" align="center" style="width: 100%;">' , $get);
$page = explode("<div class='wp-pagenavi' role='navigation'>" , $content[1]);
$data = explode('</a>', $page[0]);

echo json_encode(
	array(
		'data' => $data, 
	)
);
?>