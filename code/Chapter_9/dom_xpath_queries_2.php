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
echo 'Nb node : ' . $result->length . PHP_EOL;

if ($result->length > 0) {
    echo  'Random access' . PHP_EOL;
    $book = $result->item(0);
    echo $book->data . PHP_EOL;
    echo PHP_EOL;
    echo  'Iterate access' . PHP_EOL;
    foreach ($result as $book) {
        echo $book->data . PHP_EOL;
    }
}

