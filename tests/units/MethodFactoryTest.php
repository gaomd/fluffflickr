<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\Method;
use Fluentickr\MethodFactory;

class MethodFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testCreate()
    {
        $this->assertInstanceOf(Method::class, MethodFactory::create('flickr.test.login'));
    }

}
