<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$domDocument = new DOMDocument();
$domDocument->load($xmlPath);

$book = $domDocument->createElement('book');
$book->setAttribute('meta:isbn', '0123456999');

$title = $domDocument->createElement('title');
$text = $domDocument->createTextNode('An awesome & title that goes here');

$title->appendChild($text);
$book->appendChild($title);

$author = $domDocument->createElement('author', 'Mabikas Mabielas');
$book->appendChild($author);

$publisher = $domDocument->createElement('pub:publisher', 'R. Gabon');
$book->appendChild($publisher);

$domDocument->documentElement->appendChild($book);

echo $domDocument->saveXML();