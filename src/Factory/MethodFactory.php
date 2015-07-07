<?php

namespace Fluffflickr\Factory;

use Fluffflickr\Method;

class MethodFactory
{

    /**
     * @param $name
     * @return \Fluffflickr\Method
     */
    public static function create($name)
    {
        return new Method($name);
    }
}
