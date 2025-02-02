<?php
// return json obj = {path, name, category}
require_once '../m/image.php';
$image = new Image();
$data = $image->select();
echo json_encode($data);
?>