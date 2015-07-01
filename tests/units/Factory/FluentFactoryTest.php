<?php

namespace Fluentickr\Tests\Units\Factory;

use Fluentickr\Factory\FluentFactory;
use Fluentickr\Fluent;

class FluentFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(Fluent::class, FluentFactory::create());
    }
}
