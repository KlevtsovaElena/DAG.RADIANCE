<?php 
echo "перешли из формы загрузки изображений 2.php";
echo '<pre>';
var_dump($_FILES) ;
echo '</pre>' ;

echo ($_FILES["newImgTitle"]['full_path']);

$data = base64_encode($img);


?>
<img style="width: 150px; height: 200px;" src="<?= $_FILES["newImgTitle"]['tmp_name'] . '/' . $_FILES["newImgTitle"]['name']; ?>">;
