<?php
$upload_dir = "../faces/";
$payload = $_POST['payload'];
if($payload){
$success = file_put_contents($upload_dir.'labeledFaceDescriptors.json', $payload);
print($success);
} else
{
print('no payload');
}
?>