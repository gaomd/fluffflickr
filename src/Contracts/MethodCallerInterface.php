<?php

namespace Fluentickr\Contracts;

interface MethodCallerInterface
{

    /**
     * @param \Fluentickr\Contracts\MethodInterface $method
     * @param array $arguments
     * @return \Fluentickr\Contracts\ResourceInterface
     */
    public function call(MethodInterface $method, array $arguments = []);
}
