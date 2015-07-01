<?php

namespace Fluentickr\Factory;

use Fluentickr\Resource;
use Psr\Http\Message\ResponseInterface;

class ResourceFactory
{

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return \Fluentickr\Resource
     */
    public static function create(ResponseInterface $response)
    {
        return new Resource($response);
    }
}
