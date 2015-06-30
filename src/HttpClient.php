<?php

namespace Fluentickr;

use GuzzleHttp\Client;

class HttpClient
{

    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @param \GuzzleHttp\Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param $method
     * @param $url
     * @param array $queryParams
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function request($method, $url, array $queryParams = [])
    {
        return $this->client->request($method, $url, ['query' => $queryParams]);
    }

}
