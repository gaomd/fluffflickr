<?php

namespace Fluentickr;

use Fluentickr\Traits\CallableMethodHintTrait;
use Fluentickr\Traits\IntermediateMethodHintTrait;
use Fluentickr\Traits\TrailingMethodHintTrait;

class Method
{

    use IntermediateMethodHintTrait;
    use TrailingMethodHintTrait;
    use CallableMethodHintTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var \Fluentickr\MethodCaller
     */
    protected $caller;

    /**
     * @var \Fluentickr\Method
     */
    protected $parent;

    /**
     * @var array
     */
    protected $children = [];

    /**
     * @param string $name
     * @param \Fluentickr\MethodCaller $caller
     * @param \Fluentickr\Method $parentMethod
     */
    public function __construct($name, MethodCaller $caller, Method $parentMethod = null)
    {
        $this->name = $name;
        $this->caller = $caller;
        $this->parent = $parentMethod;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @param string $delimiter
     * @return string
     */
    public function fullMethodChain($delimiter = '.')
    {
        $chain = $this->name();
        $method = $this;

        while ($method = $method->parent()) {
            $chain = "{$method->name()}{$delimiter}{$chain}";
        }

        return $chain;
    }

    /**
     * @return \Fluentickr\Method
     */
    public function parent()
    {
        return $this->parent;
    }

    /**
     * @todo rename to newChild and no longer holding children[] array?
     * @param $name
     * @return \Fluentickr\Method
     * @throws \InvalidArgumentException
     */
    public function child($name)
    {
        if (!is_string($name) || !strlen($name)) {
            throw new \InvalidArgumentException;
        }

        if (array_key_exists($name, $this->children)) {
            return $this->children[$name];
        }

        return $this->children[$name] = new static($name, $this->caller, $this);
    }

    /**
     * @param $name
     * @return \Fluentickr\Method
     */
    public function __get($name)
    {
        return $this->child($name);
    }

    /**
     * @param $name
     * @param $arguments
     * @return \Fluentickr\Resource
     */
    public function __call($name, array $arguments = [])
    {
        return call_user_func_array($this->{$name}, $arguments);
    }

    /**
     * @param array $arguments
     * @return \Fluentickr\Resource
     */
    public function __invoke(array $arguments = [])
    {
        return $this->caller->call($this, $arguments);
    }

}
