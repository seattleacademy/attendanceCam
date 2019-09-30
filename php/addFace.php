<?php
$upload_dir = "../faces/";
$img = $_POST['img'];
$person = $_POST['person'];
if(substr( $img, 11, 4 ) === "jpeg"){
	$img = str_replace('data:image/jpeg;base64,', '', $img);
	$imageFileType = 'jpeg';
}
else{
	$img = str_replace('data:image/png;base64,', '', $img);
	$imageFileType = 'png';
}
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$imgHash = md5($data);
$counter = 1;

$files = scandir($upload_dir);

unset($files[array_search('.',$files)],$files[array_search('..',$files)]);

    foreach ($files as $file) {
    $fileHash = md5_file($upload_dir.$file);
	if($fileHash == $imgHash){
		print($file);
		unlink($upload_dir.$file);
	}
    

    }

while(file_exists($upload_dir . $person . "." . $counter . "."  . $imageFileType)) {
    $counter++;
}

$file = $upload_dir . $person . "." . $counter . "."  . $imageFileType;
$success = file_put_contents($file, $data);



print(md5($data));
//print $success ? $file : 'Unable to save the file.';
?>