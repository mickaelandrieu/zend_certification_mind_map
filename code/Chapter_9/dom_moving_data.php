<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$domDocument = new DOMDocument();
$domDocument->load($xmlPath);

$xpath = new DOMXPath($domDocument);
$xpath->registerNamespace('lib', 'http://ceetmax.com/library');

//$result = $xpath->query('//lib:book');
//
////Move second item to first position
//$result->item(1)->parentNode->insertBefore($result->item(1), $result->item(0));
//
//echo $domDocument->saveXML();
//
//$result = $xpath->query('//lib:book');
//
////Move first item to end
//$result->item(1)->parentNode->appendChild($result->item(0));
//
//echo $domDocument->saveXML();

$result = $xpath->query('//lib:book');

//Copy first item to the end
$clone = $result->item(0)->cloneNode(true);
$result->item(1)->parentNode->appendChild($clone);

echo $domDocument->saveXML();