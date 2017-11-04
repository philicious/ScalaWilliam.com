<!doctype html>
<html>
<head>
<title>What is Scala?</title>
</head>
<body>
<article>
<?php

$file = __DIR__ . "/what-is-scala.md";
$md = file_get_contents($file);
$Parsedown = new Parsedown();
$out = $Parsedown->text($md);
echo $out;

?>
</article>
</body>
</html>