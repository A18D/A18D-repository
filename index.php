
<?php
$dir    = 'D:/Test';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>
<?php
<<<<<<< HEAD
echo 's2'; //test
echo 'pottiagivaem';
=======
echo 's2'; //test main branch
>>>>>>> master
phpinfo();
?>