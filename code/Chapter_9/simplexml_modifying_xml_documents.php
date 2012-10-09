<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$library = new SimpleXMLElement($xmlPath, NULL, true);

$book = $library->addChild('book');
$book->addAttribute('isbn', '0923456789');
$book->addChild('title', 'Toto is certified');
$book->addChild('author', 'R. Ball');
$book->addChild('publisher', 'phpArch');

header('Content-type: text/xml');
echo $library->asXML();