<?php

namespace Tests\VendorName\ClassName;

use PHPUnit_Framework_TestCase;
use VendorName\Package\ClassName;

class ClassNameTest extends PHPUnit_Framework_TestCase
{

    public function testConstruct()
    {

        $class = new ClassName();

        $this->assertEquals(
            get_class($class),
            'VendorName\Package\ClassName'
        );
    }
}

