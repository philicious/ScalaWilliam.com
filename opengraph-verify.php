<?php

function validate($domDoc, $xpath, $name) {

}

function verify_file($filename) {
    $domDoc = new DOMDocument();
    $domDoc->loadHTML($filename);
    $xpath = new DOMXPath($domDoc);
    validate($domDoc, $xpath, "//meta[@name='description']");
    validate($domDoc, $xpath, "//meta[@name='twitter:site']");
    validate($domDoc, $xpath, "//meta[@name='twitter:title']");
    validate($domDoc, $xpath, "//meta[@name='twitter:description']");
    validate($domDoc, $xpath, "//meta[@name='twitter:creator']");
    validate($domDoc, $xpath, "//meta[@name='twitter:image:src']");
    validate($domDoc, $xpath, "//meta[@name='twitter:card']");
    validate($domDoc, $xpath, "//meta[@name='og:title']");
    validate($domDoc, $xpath, "//meta[@itemprop='name']");
    validate($domDoc, $xpath, "//meta[@itemprop='description']");
    validate($domDoc, $xpath, "//meta[@itemprop='image']");
    validate($domDoc, $xpath, "//title");
    validate($domDoc, $xpath, "//link[@rel='author']");

<!-- Open Graph data -->
<meta property="og:title" content="Title Here" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://www.example.com/" />
<!-- Facebook image must be at least 600x315px -->
<meta property="og:image" content="http://example.com/image.jpg" />
<meta property="og:description" content="Description Here" />
<meta property="og:site_name" content="Site Name" />
<meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
<meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
<meta property="article:section" content="Article Section" />
<meta property="article:tag" content="Article Tag" />
<meta property="fb:admins" content="Facebook numberic ID" />

}