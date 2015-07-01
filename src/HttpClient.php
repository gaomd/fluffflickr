<?php

namespace Fluentickr;

use Fluentickr\Contracts\HttpClientInterface;
use GuzzleHttp\ClientInterface;

class HttpClient implements HttpClientInterface
{

    /**
     * @var \GuzzleHttp\ClientInterface
     */
    protected $client;

    /**
     * @param \GuzzleHttp\ClientInterface $client
     */
    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * {@inheritdoc}
     */
    public function request($method, $url, array $queryParams = [])
    {
        return $this->client->request($method, $url, ['query' => $queryParams]);
    }
}
