<?php

namespace Fluentickr;

use Fluentickr\Contracts\MethodInterface;

class Method implements MethodInterface
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
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function getLastSegment()
    {
        $segments = explode('.', $this->getName());

        return array_pop($segments);
    }

    /**
     * @param $name
     * @return bool
     */
    protected function validMethodName($name)
    {
        return preg_match('/^flickr(\.[a-zA-Z]+)+$/', $name) === 1;
    }
}
