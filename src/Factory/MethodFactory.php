<?php

namespace Fluentickr\Factory;

use Fluentickr\Method;

class MethodFactory
{

    /**
     * @param $name
     * @return \Fluentickr\Method
     */
    public static function create($name)
    {
        return new Method($name);
    }

}
