<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:22
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$library = new SimpleXMLElement($xmlPath, NULL, true);
foreach($library->book as $book){
    echo $book['isbn'] . PHP_EOL;
    echo $book->title . PHP_EOL;
    echo $book->author . PHP_EOL;
    echo $book->publisher . PHP_EOL;
}