<?php

namespace Fluentickr\Contracts;

interface MethodInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @return string
     */
    public function getLastSegment();
}
