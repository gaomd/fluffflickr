<?php

namespace Fluentickr\Tests\Units;

use Fluentickr\FlickrErrorException;

class FlickrErrorExceptionTest extends \PHPUnit_Framework_TestCase
{

    public function test()
    {
        $this->setExpectedException(FlickrErrorException::class);

        throw new FlickrErrorException();
    }
}