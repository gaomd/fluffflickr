<?php

namespace Fluffflickr\Contracts;

interface MethodCallerInterface
{

    /**
     * @param \Fluffflickr\Contracts\MethodInterface $method
     * @param array $arguments
     * @return \Fluffflickr\Contracts\ResourceInterface
     */
    public function call(MethodInterface $method, array $arguments = []);
}
