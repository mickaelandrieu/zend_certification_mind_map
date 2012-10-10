<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xml = <<<XML
<xml>
    <text>some text here</text>
</xml>
XML;

$domDocument = new DOMDocument();
$domDocument->loadXML($xml);

$xPath = new DOMXPath($domDocument);
$node = $xPath->query('//text/text()')->item(0);

$node->data = ucwords($node->data);

echo $domDocument->saveXML();