<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\HttpClient;
use Fluentickr\Method;
use Fluentickr\MethodCaller;
use Fluentickr\ResourceFactory;
use Mockery as m;
use Psr\Http\Message\ResponseInterface;

class MethodCallerTest extends \PHPUnit_Framework_TestCase
{

    public function testCall()
    {
        // Simulate Dotenv
        $_ENV['FLICKR_API_KEY'] = $_SERVER['FLICKR_API_KEY'] = 'a-flickr-api-key';
        putenv('FLICKR_API_KEY=a-flickr-api-key');
        $arguments = ['foo' => 'bar', 'bar' => 'baz'];
        $builtArguments = [
            'foo'            => 'bar',
            'bar'            => 'baz',
            'api_key'        => 'a-flickr-api-key',
            'method'         => 'flickr.blogs.postPhoto',
            'format'         => 'json',
            'nojsoncallback' => 1,
        ];

        $resourceFactory = m::mock('alias:' . ResourceFactory::class);
        $httpClientMock = m::mock(HttpClient::class);;
        $methodMock = m::mock(Method::class);
        $methodCaller = m::mock(MethodCaller::class, [$httpClientMock])
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $httpClientMock->shouldReceive('request')
            ->once()
            ->with('POST', 'https://api.flickr.com/services/rest/', $builtArguments)
            ->andReturn($response = m::mock(ResponseInterface::class));

        $resourceFactory->shouldReceive('create')
            ->with($response)
            ->once();

        $methodMock->shouldReceive('getName')
            ->once()
            ->andReturn('flickr.blogs.postPhoto');

        $methodMock->shouldReceive('getLastSegment')
            ->once()
            ->andReturn('postPhoto');

        $methodCaller->call($methodMock, $arguments);
    }

    public function tearDown()
    {
        m::close();
    }
}
