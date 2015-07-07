<?php

namespace Fluffflickr\Tests\Units\Exception;

use Fluffflickr\Exception\FlickrErrorException;

class FlickrErrorExceptionTest extends \PHPUnit_Framework_TestCase
{

    public function testThrowsException()
    {
        $this->setExpectedException(FlickrErrorException::class);

        throw new FlickrErrorException();
    }
}
