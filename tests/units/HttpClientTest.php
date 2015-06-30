<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\HttpClient;
use GuzzleHttp\Client;
use Mockery as m;

class HttpClientTest extends \PHPUnit_Framework_TestCase
{

    public function testRequest()
    {
        $method = 'GET';
        $url = 'http://localhost';
        $queryParams = [
            'foo' => 'bar',
            'bar' => 'baz',
        ];
        $clientMock = m::mock(Client::class);
        $clientMock->shouldReceive('request')
            ->with($method, $url, ['query' => $queryParams])
            ->once();

        $httpClient = new HttpClient($clientMock);
        $httpClient->request($method, $url, $queryParams);
    }

    public function tearDown()
    {
        m::close();
    }
}
