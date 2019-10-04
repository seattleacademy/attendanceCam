<?php
$upload_dir = "../faces/";
$payload = $_POST['payload'];
if($payload){
$success = file_put_contents($upload_dir.'descriptors.json', $payload);
print($success);
} else
{
print('no payload or write error');
}
?>