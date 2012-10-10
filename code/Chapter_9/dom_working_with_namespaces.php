<?php
/**
 * User: maxoumask
 * Date: 10/10/12
 * Time: 08:24
 */

$dom = new DOMDocument();
$node = $dom->createElementNS('http://exemple.org/ns1', 'ns1:someNode');
$node->setAttributeNS('http://exemple.org/ns2', 'ns2:someNode', 'someValue');

$node2 = $dom->createElementNS('http://exemple.org/ns3', 'ns3:someNode');
$node3 = $dom->createElementNS('http://exemple.org/ns1', 'ns1:someNode');

$node->appendChild($node2);
$node->appendChild($node3);

$dom->appendChild($node);

echo $dom->saveXML();