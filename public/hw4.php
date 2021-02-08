<?php
include_once __DIR__ . "/../config/main.php";
include_once ENGINE_DIR . "filesystem.php";

$files = scandir(PUBLIC_DIR . "img");

$images = getFiles(PUBLIC_DIR . "img");

?>

<?php
$dir = 'img/';
$images = scandir($dir);
for ($i = 0; $i < count($images); $i++) {
  if ($images[$i] != '.' && $images[$i] != '..') {
    echo '<body style="display: flex; justify-content: space-between;">
    <a href="' . $dir . $images[$i] . '" target="_blank"><img src=' . $dir . $images[$i] . ' style="width: 150px;"></a>
    </body>';
  }
}
?>