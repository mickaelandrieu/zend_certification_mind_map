<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$domDocument = new DOMDocument();
$domDocument->load($xmlPath);

$xPath = new DOMXPath($domDocument);
$xPath->registerNamespace('lib', 'http://ceetmax.com/library');

$result = $xPath->query('//lib:title/text()');

foreach($result as $book){
    echo $book->data . PHP_EOL;
}