<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\Factory\MethodFactory;
use Fluentickr\Fluent;
use Fluentickr\Method;
use Fluentickr\MethodCaller;
use Mockery as m;

class FluentTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var \Mockery\Mock
     */
    protected $flickr;

    /**
     * @var \Mockery\Mock
     */
    protected $methodCallerMock;

    /**
     * @var \Mockery\Mock
     */
    protected $methodFactory;

    public function setUp()
    {
        $this->methodCallerMock = m::mock(MethodCaller::class);
        $this->flickr = new Fluent($this->methodCallerMock);
        $this->methodFactory = m::mock('alias:' . MethodFactory::class);
    }

    public function testMagicCallIntermediateMethod()
    {
        $this->methodCallerMock->shouldNotHaveReceived('call');

        $instance = $this->flickr->people()->intermediateMethod();

        $this->assertInstanceOf(Fluent::class, $instance);
    }

    public function testMagicCallClosingMethod()
    {
        $this->methodFactory
            ->shouldReceive('create')
            ->with('flickr.people.getPhotos')
            ->andReturn($method = m::mock(Method::class));
        $this->methodCallerMock->shouldReceive('call')->once()->andReturn($mockInstance = m::mock());

        $instance = $this->flickr->people()->getPhotos();

        $this->assertEquals($mockInstance, $instance);
    }

    public function testMagicCallClosingMethodWithParameters()
    {
        $parameters = ['foo' => 'bar'];
        $this->methodFactory
            ->shouldReceive('create')
            ->with('flickr.people.getPhotos')
            ->andReturn($method = m::mock(Method::class));
        $this->methodCallerMock
            ->shouldReceive('call')
            ->with($method, $parameters)
            ->once()
            ->andReturn($mockInstance = m::mock());

        $instance = $this->flickr->people()->getPhotos($parameters);

        $this->assertEquals($mockInstance, $instance);
    }

    public function testMagicCallClosingMethodTwice()
    {
        // Calling twice ensure we have a working reset mechanism
        $this->testMagicCallClosingMethod();
        $this->testMagicCallClosingMethod();
    }

    public function tearDown()
    {
        m::close();
    }

}
