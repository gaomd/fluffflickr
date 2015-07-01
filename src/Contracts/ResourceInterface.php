<?php

namespace Fluentickr\Contracts;

interface ResourceInterface extends \ArrayAccess
{

    /**
     * @return array
     */
    public function toArray();
}
