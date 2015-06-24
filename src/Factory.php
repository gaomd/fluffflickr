<?php

namespace Fluentickr;

class Factory
{

    public static function create()
    {
        return new Fluent(new MethodCaller());
    }
}
