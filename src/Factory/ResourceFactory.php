<?php

namespace Fluffflickr\Factory;

use Fluffflickr\Resource;
use Psr\Http\Message\ResponseInterface;

class ResourceFactory
{

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     * @return \Fluffflickr\Resource
     */
    public static function create(ResponseInterface $response)
    {
        return new Resource($response);
    }
}
