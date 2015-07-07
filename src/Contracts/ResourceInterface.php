<?php

namespace Fluffflickr\Contracts;

interface ResourceInterface extends \ArrayAccess
{

    /**
     * @return array
     */
    public function toArray();
}
