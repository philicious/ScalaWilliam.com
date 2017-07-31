<?php

function process_file($filename) {
    libxml_use_internal_errors(true);
    $dom = new \DOMDocument();
    $dom->loadHTMLFile($filename);
    $xpath = new \DOMXpath($dom);
    $elements = $xpath->query('//pre[@data-code-include]');
    foreach ($elements as $element) {
        $codefile = pathinfo($filename, PATHINFO_DIRNAME)
            . DIRECTORY_SEPARATOR
            . $element->getAttribute('data-code-include');
        $language = '';
        if ($element->hasAttribute('data-code-language')) {
            $language = $element->getAttribute('data-code-language');
        } elseif ($element->hasAttribute('class')) {
            $classes = explode(' ', $element->getAttribute('class'));
            foreach ($classes as $class) {
                if (strpos($class, 'language-') === 0) {
                    $language = substr($class, 9);
                    break;
                }
            }
        }
        if ($language === '') {
            $extension = pathinfo($codefile, PATHINFO_EXTENSION);
            $extensionsMap = [
                'py' => 'python',
                'sh' => 'bash',
                'js' => 'javascript',
            ];
            if (array_key_exists($extension, $extensionsMap)) {
                $language = $extensionsMap[$extension];
            } else {
                $language = $extension;
            }
        }
        $code = $dom->createElement('code');
        $code->setAttribute('class', 'language-' . $language);
        $code->appendChild($dom->createTextNode(rtrim(file_get_contents($codefile),"\n\r")));
        $element->appendChild($code);
    }
    echo $dom->saveHTML();
}

$failed = false;
foreach(array_slice($argv, 1) as $filename) {
    if (pathinfo($filename, PATHINFO_EXTENSION) === 'html') {
        process_file($filename);
    } else {
        $failed = true;
        error_log("Cannot process file $filename because no .html extension.");
    }
}
if ( $failed ) {
    exit(1);
}
