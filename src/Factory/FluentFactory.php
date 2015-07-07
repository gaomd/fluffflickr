<?php

namespace Fluffflickr\Factory;

use Fluffflickr\Fluent;
use Fluffflickr\HttpClient;
use Fluffflickr\MethodCaller;
use GuzzleHttp\Client;

class FluentFactory
{

    /**
     * @return \Fluffflickr\Fluent
     */
    public static function create()
    {
        return new Fluent(new MethodCaller(new HttpClient(new Client())));
    }
}
