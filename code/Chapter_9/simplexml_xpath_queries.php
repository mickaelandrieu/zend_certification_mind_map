<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$library = new SimpleXMLElement($xmlPath, NULL, true);

$results = $library->xpath('/library/book/title');

//Search the root element
foreach($results as $title){
    echo $title . PHP_EOL;
}
echo PHP_EOL;
//Search the first child element
$results = $library->book[0]->xpath('title');
foreach($results as $title){
    echo $title . PHP_EOL;
}