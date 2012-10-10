<?php
/**
 * User: maxoumask
 * Date: 10/10/12
 * Time: 08:35
 */
$xmlPath = dirname(__FILE__) . '/library.xml';

$simpleXML = simplexml_load_file($xmlPath);

$domElement = dom_import_simplexml($simpleXML);

$domDocument = new DOMDocument();
$node = $domDocument->importNode($domElement, true);
$domDocument->appendChild($node);

echo $domDocument->saveXML();


$dom = new DOMDocument();
$dom->load($xmlPath);

$simpleXML = simplexml_import_dom($dom);

echo $simpleXML->book[0]->title . PHP_EOL;