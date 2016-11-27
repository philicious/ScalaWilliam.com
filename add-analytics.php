<?php
define('ANALYTICS_PATH', dirname(__FILE__) . "/shared/analytics.html");
libxml_use_internal_errors(true);
function process_file($filename) {
    $targetDom = new DOMDocument();
    $targetDom->loadHTMLFile($filename);

    $analyticsDom= new DOMDocument();
    $analyticsDom->load(ANALYTICS_PATH);

    $analyticsNode = $targetDom->importNode($analyticsDom->documentElement, true);

    $body = $targetDom->getElementsByTagName("body")->item(0);
    $body->appendChild($analyticsNode);
    $targetDom->saveHTMLFile($filename);
}

$failed = false;
foreach(array_slice($argv, 1) as $filename) {
    if ( strpos($filename, ".html")) {
        error_log("Processing file $filename");
        process_file($filename);
    } else {
        $failed = true;
        error_log("Cannot process file $filename because no .html extension.");
    }
}
if ( $failed ) {
    exit(1);
}
