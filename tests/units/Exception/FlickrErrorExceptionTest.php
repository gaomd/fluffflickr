<?php

namespace Fluentickr\Tests\Units\Exception;

use Fluentickr\Exception\FlickrErrorException;

class FlickrErrorExceptionTest extends \PHPUnit_Framework_TestCase
{

    public function testThrowsException()
    {
        $this->setExpectedException(FlickrErrorException::class);

        throw new FlickrErrorException();
    }
}
