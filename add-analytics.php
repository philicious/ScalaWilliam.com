<?php
define('ANALYTICS_PATH', dirname(__FILE__) . "/shared/analytics.html");
define('BODY_CLOSE', "</body>");
define('ANALYTICS_BODY', file_get_contents(ANALYTICS_PATH));
libxml_use_internal_errors(true);
function process_file($filename) {
    $contents = file_get_contents($filename);
    $contents = str_replace(BODY_CLOSE, ANALYTICS_BODY.BODY_CLOSE, $contents);
    file_put_contents($filename, $contents);
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
