<?php

namespace Fluentickr\Tests\Units\Factory;

use Fluentickr\Factory\MethodFactory;
use Fluentickr\Method;

class MethodFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(Method::class, MethodFactory::create('flickr.test.login'));
    }

}
