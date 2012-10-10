<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xml = <<<XML
<xml>
    <text type="misc">some text here</text>
    <text type="misc">some text here</text>
    <text type="misc">some text here</text>
</xml>
XML;

$domDocument = new DOMDocument();
$domDocument->loadXML($xml);

$xPath = new DOMXPath($domDocument);
$result = $xPath->query('//text');

var_dump($result->item(0));

$result = $xPath->query('text()', $result->item(2));
var_dump($result->item(0));
