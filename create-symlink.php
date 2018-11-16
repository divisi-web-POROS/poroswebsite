<?php 
$target = '/hosting/porosfilkom/poros/storage/app/public';
$link = '/hosting/porosfilkom/storage';
symlink($target, $link);

echo readlink($link);
?>