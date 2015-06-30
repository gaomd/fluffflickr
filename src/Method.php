<?php

namespace Fluentickr;

class Method
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     */
    public function __construct($name)
    {
        if (!$this->validMethodName($name)) {
            throw new \InvalidArgumentException('Invalid method name.');
        }

        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getLastSegment()
    {
        $segments = explode('.', $this->getName());

        return array_pop($segments);
    }

    protected function validMethodName($name)
    {
        return preg_match('/^flickr(\.[a-zA-Z]+)+$/', $name) === 1;
    }

}
