<?php

namespace Fluffflickr\Tests\Units\Factory;

use Fluffflickr\Factory\MethodFactory;
use Fluffflickr\Method;

class MethodFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(Method::class, MethodFactory::create('flickr.test.login'));
    }

}
