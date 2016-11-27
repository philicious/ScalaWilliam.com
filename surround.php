<?php
$file = array_pop($argv);
ob_start();
require(dirname(__FILE__).'/shared/render.inc.php');
readfile($file);
echo $foot;
file_put_contents($file, ob_get_contents());
ob_end_clean();