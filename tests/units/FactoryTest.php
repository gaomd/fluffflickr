<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\Factory;
use Fluentickr\Fluent;

class FactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(Fluent::class, Factory::create());
    }
}
