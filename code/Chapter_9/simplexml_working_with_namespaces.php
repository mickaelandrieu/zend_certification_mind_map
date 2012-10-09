<?php
/**
 * User: maxoumask
 * Date: 08/10/12
 * Time: 08:39
 */

$xmlPath = dirname(__FILE__) . '/library.xml';
$library = new SimpleXMLElement($xmlPath, NULL, true);

$namespaces = $library->getDocNamespaces();
echo 'Declared namespaces : ' . PHP_EOL;
foreach($namespaces as $key => $value){
    echo $key . ' -> ' . $value . PHP_EOL;
}
echo PHP_EOL;
$namespaces = $library->getNamespaces(true);
echo 'Used namespaces : ' . PHP_EOL;
foreach($namespaces as $key => $value){
    echo $key . ' -> ' . $value . PHP_EOL;
}