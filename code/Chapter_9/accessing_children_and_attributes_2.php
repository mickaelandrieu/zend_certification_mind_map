<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:22
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$library = new SimpleXMLElement($xmlPath, NULL, true);
foreach($library->children() as $child){
    echo $child->getName() . ':' . PHP_EOL;

    //Get attributes of this element
    foreach($child->attributes() as $attribute){
        echo "\t" . $attribute->getName() . ' : ' . $attribute . PHP_EOL;
    }
    echo PHP_EOL;
    foreach($child->children() as $subChild){
        echo "\t\t" . $subChild->getName() . ' : ' . $subChild . PHP_EOL;
    }
    echo PHP_EOL;
}