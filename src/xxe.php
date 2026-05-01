<?php

// XML External Entity (XXE)
// External entities are enabled — allows reading local files or SSRF
$xml = $_POST['xml'] ?? '';

$doc = new DOMDocument();
$doc->loadXML($xml, LIBXML_NOENT);

echo $doc->saveXML();
