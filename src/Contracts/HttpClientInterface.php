<?php

namespace Fluffflickr\Contracts;

interface HttpClientInterface
{

    /**
     * @param $method
     * @param $url
     * @param array $queryParams
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function request($method, $url, array $queryParams = []);
}
