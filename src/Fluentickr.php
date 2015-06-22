<?php

namespace Fluentickr;

use Fluentickr\Traits\IntermediateMethodHintTrait;

class Fluentickr
{

    use IntermediateMethodHintTrait;

    /**
     * @var \Fluentickr\Method
     */
    protected $rootMethod;

    public function __construct(Method $rootMethod)
    {
        $this->rootMethod = $rootMethod;
    }

    public static function getInstance()
    {
        return new static(new Method('flickr', new MethodCaller()));
    }

    /**
     * @param $name
     * @return \Fluentickr\Method
     */
    public function __get($name)
    {
        return $this->rootMethod->child($name);
    }

}
