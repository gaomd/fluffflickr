<?php

namespace Fluentickr;

use GuzzleHttp\Client;

class Factory
{

    public static function create()
    {
        return new Fluent(new MethodCaller(new HttpClient(new Client())));
    }
}
