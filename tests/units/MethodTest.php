<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\Method;

class MethodTest extends \PHPUnit_Framework_TestCase
{

    public function testGetName()
    {
        $method = new Method('flickr.foo');
        $nestedMethod = new Method('flickr.foo.bar');

        $this->assertEquals('flickr.foo', $method->getName());
        $this->assertEquals('flickr.foo.bar', $nestedMethod->getName());
    }

    public function testInvalidName()
    {
        $this->setExpectedException(\InvalidArgumentException::class, 'Invalid method name.');

        // Should throws exception
        new Method('flickr/foo/bar');
    }

    public function testInvalidName2()
    {
        $this->setExpectedException(\InvalidArgumentException::class, 'Invalid method name.');

        // Should throws exception
        new Method('flickr.foo.bar.');
    }

    public function testInvalidName3()
    {
        $this->setExpectedException(\InvalidArgumentException::class, 'Invalid method name.');

        // Should throws exception
        new Method('.flickr.foo.bar.');
    }

    public function testGetLastSegment()
    {
        $method = new Method('flickr.foo.bar.baz');

        $this->assertEquals('baz', $method->getLastSegment());
    }
}
