<?php
/**
 * User: maxoumask
 * Date: 04/10/12
 * Time: 08:29
 */

$company = array(
    array(
        'Acme Anvil Co.',
        array(
            'Human resources',
            array(
                'Tom',
                'Dick',
                'Harry'
            )
        ),
        array(
            'Accounting',
            array(
                'Zoe',
                'Duncan',
                'Jack',
                'Jane'
            )
        )
    ),
);

class CompanyIterator extends RecursiveIteratorIterator
{
    public function beginChildren()
    {
//        echo '--> ' . __METHOD__ . PHP_EOL;
//        echo '$this->getDepth() : ' . $this->getDepth() . PHP_EOL;
        if ($this->getDepth() >= 3) {
            echo str_repeat("\t", $this->getDepth() - 1);
            echo '<ul>' . PHP_EOL;
        }
//        echo '<-- ' . __METHOD__ . PHP_EOL;
    }

    public function endChildren()
    {
//        echo '--> ' . __METHOD__ . PHP_EOL;
        if ($this->getDepth() >= 3) {
            echo str_repeat("\t", $this->getDepth() - 1);
            echo '</ul>' . PHP_EOL;
        }
//        echo '<-- ' . __METHOD__ . PHP_EOL;
    }

    public function rewind()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::rewind();
    }

    public function valid()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::valid();
    }

    public function key()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::key();
    }

    public function current()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::current();
    }

    public function next()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::next();
    }

    public function getDepth()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::getDepth();
    }

    public function getSubIterator($level)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::getSubIterator($level);
    }

    public function getInnerIterator()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::getInnerIterator();
    }

    public function beginIteration()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::beginIteration();
    }

    public function endIteration()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::endIteration();
    }

    public function callHasChildren()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::callHasChildren();
    }

    public function callGetChildren()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::callGetChildren();
    }

    public function nextElement()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::nextElement();
    }

    public function setMaxDepth($max_depth = -1)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::setMaxDepth($max_depth);
    }

    public function getMaxDepth()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return parent::getMaxDepth();
    }
}

class RecursiveArrayObject extends ArrayObject
{
    public function getIterator()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        return new RecursiveArrayIterator($this);
    }

    public function offsetExists($index)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::offsetExists($index);
    }

    public function offsetGet($index)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::offsetGet($index);
    }

    public function offsetSet($index, $newval)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::offsetSet($index, $newval);
    }

    public function offsetUnset($index)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::offsetUnset($index);
    }

    public function append($value)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::append($value);
    }

    public function getArrayCopy()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::getArrayCopy();
    }

    public function count()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::count();
    }

    public function getFlags()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::getFlags();
    }

    public function setFlags($flags)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::setFlags($flags);
    }

    public function asort()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::asort();
    }

    public function ksort()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::ksort();
    }

    public function uasort($cmp_function)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::uasort($cmp_function);
    }

    public function uksort($cmp_function)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::uksort($cmp_function);
    }

    public function natsort()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::natsort();
    }

    public function natcasesort()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::natcasesort();
    }

    public function unserialize($serialized)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::unserialize($serialized);
    }

    public function serialize()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::serialize();
    }

    public function exchangeArray($input)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::exchangeArray($input);
    }

    public function setIteratorClass($iterator_class)
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::setIteratorClass($iterator_class);
    }

    public function getIteratorClass()
    {
        echo '-- ' . __METHOD__ . PHP_EOL;
        parent::getIteratorClass();
    }
}

$it = new CompanyIterator(new RecursiveArrayObject($company));

$inList = false;
foreach ($it as $item) {
    echo str_repeat("\t", $it->getDepth());
    switch ($it->getDepth()) {
        case 1:
            echo '<h1>Company Name : ' . $item . '</h1>' . PHP_EOL;
            break;
        case 2:
            echo '<h2>Department Name : ' . $item . '</h2>' . PHP_EOL;
            break;
        default:
            echo '<li>' . $item . '</li>' . PHP_EOL;
    }
}