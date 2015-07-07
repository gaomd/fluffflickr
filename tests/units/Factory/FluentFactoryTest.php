<?php

namespace Fluffflickr\Tests\Units\Factory;

use Fluffflickr\Factory\FluentFactory;
use Fluffflickr\Fluent;

class FluentFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(Fluent::class, FluentFactory::create());
    }
}
