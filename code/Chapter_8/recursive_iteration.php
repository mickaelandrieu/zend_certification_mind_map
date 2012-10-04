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
        echo '--> ' . __METHOD__ . PHP_EOL;
        echo '$this->getDepth() : ' . $this->getDepth() . PHP_EOL;
        if ($this->getDepth() >= 3) {
            echo str_repeat("\t", $this->getDepth() - 1);
            echo '<ul>' . PHP_EOL;
        }
        echo '<-- ' . __METHOD__ . PHP_EOL;
    }

    public function endChildren()
    {
        echo '--> ' . __METHOD__ . PHP_EOL;
        if ($this->getDepth() >= 3) {
            echo str_repeat("\t", $this->getDepth() - 1);
            echo '</ul>' . PHP_EOL;
        }
        echo '<-- ' . __METHOD__ . PHP_EOL;
    }
}

class RecursiveArrayObject extends ArrayObject
{
    public function getIterator()
    {
        return new RecursiveArrayIterator($this);
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