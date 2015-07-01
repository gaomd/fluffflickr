<?php

namespace Fluentickr\Factory;

use Fluentickr\Fluent;
use Fluentickr\HttpClient;
use Fluentickr\MethodCaller;
use GuzzleHttp\Client;

class FluentFactory
{

    /**
     * @return \Fluentickr\Fluent
     */
    public static function create()
    {
        return new Fluent(new MethodCaller(new HttpClient(new Client())));
    }
}
