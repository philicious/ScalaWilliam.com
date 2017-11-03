<?php
require_once 'vendor/autoload.php';
$uri = $_SERVER['REQUEST_URI'];
if ( $uri == "/sitemap/" ) {include("sitemap.php");}
else if ( $uri == "/sitemap.xml") { include("sitemap-xml.php"); }
else { return false; }
?>
