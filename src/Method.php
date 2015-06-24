<?php

namespace Fluentickr;

class Method
{

    /**
     * @var \Fluentickr\MethodCaller
     */
    protected $methodCaller;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param \Fluentickr\MethodCaller $methodCaller
     * @param string $name
     */
    public function __construct(MethodCaller $methodCaller, $name)
    {
        $this->methodCaller = $methodCaller;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function lastSegment()
    {
        return end($this->name);
    }

    /**
     * @param array $arguments
     * @return \Fluentickr\Resource
     */
    public function call(array $arguments = [])
    {
        return $this->methodCaller->call($this, $arguments);
    }

}
