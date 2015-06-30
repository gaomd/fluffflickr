<?php

namespace Fluentickr\Tests\Units;

use Exception;
use Fluentickr\FlickrErrorException;
use Fluentickr\Resource;
use Mockery as m;
use Psr\Http\Message\ResponseInterface;
use RuntimeException;

class ResourceTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var array
     */
    protected $success;

    /**
     * @var array
     */
    protected $error;

    /**
     * @var string
     */
    protected $malformedBody;

    public function setUp()
    {
        $this->success = [
            'stat' => 'ok',
            'foo'  => 'bar',
            'bar'  => 'baz',
        ];

        $this->error = [
            'stat'    => 'fail',
            'code'    => 99,
            'message' => 'Insufficient permissions. Method requires read privileges; none granted.',
        ];

        $this->malformedBody = 'whatthef...';
    }

    public function testConstruct()
    {
        $response = m::mock(ResponseInterface::class);
        $response->shouldReceive('getStatusCode')
            ->andReturn(200);
        $response->shouldReceive('getBody')
            ->andReturn(json_encode($this->success));

        return new Resource($response);
    }

    public function testConstructErrorBodyThrowsException()
    {
        $this->setExpectedException(
            FlickrErrorException::class,
            $this->error['message'],
            $this->error['code']
        );

        $response = m::mock(ResponseInterface::class);
        $response->shouldReceive('getStatusCode')
            ->andReturn(200);
        $response->shouldReceive('getBody')
            ->andReturn(json_encode($this->error));

        // Should throws exception
        new Resource($response);
    }

    public function testConstructFailedRequestThrowsException()
    {
        $this->setExpectedException(
            RuntimeException::class,
            'Failed to call Flickr API.'
        );

        $response = m::mock(ResponseInterface::class);
        $response->shouldReceive('getStatusCode')
            ->andReturn(500);
        $response->shouldNotHaveReceived('getBody');

        // Should throws exception
        new Resource($response);
    }

    public function testConstructUnlikelyGonnaHappenMalformedBodyThrowsException()
    {
        $this->setExpectedException(
            RuntimeException::class,
            'Unable to parse Flickr API response.'
        );

        $response = m::mock(ResponseInterface::class);
        $response->shouldReceive('getStatusCode')
            ->andReturn(200);
        $response->shouldReceive('getBody')
            ->andReturn(json_encode($this->malformedBody));

        // Should throws exception
        new Resource($response);
    }

    /**
     * @depends testConstruct
     */
    public function testArrayAccess()
    {
        $resource = $this->testConstruct();

        foreach ($this->success as $k => $v) {
            $this->assertTrue(isset($resource[$k]));
            $this->assertEquals($v, $resource[$k]);
        }

        $this->assertEquals($this->success, $resource->toArray());
    }

    /**
     * @depends testConstruct
     */
    public function testSettingArrayValueThrowsException()
    {
        $this->setExpectedException(Exception::class, 'Results are read only.');

        $resource = $this->testConstruct();

        $resource['new'] = 'value';
    }

    /**
     * @depends testConstruct
     */
    public function testDeletingArrayValueThrowsException()
    {
        $this->setExpectedException(Exception::class, 'Results are read only.');

        $resource = $this->testConstruct();

        unset($resource['new']);
    }

    public function tearDown()
    {
        m::close();
    }
}
