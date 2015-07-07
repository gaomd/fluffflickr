<?php

namespace Fluffflickr;

use Fluffflickr\Contracts\ResourceInterface;
use Fluffflickr\Exception\FlickrErrorException;
use Psr\Http\Message\ResponseInterface;

class Resource implements ResourceInterface
{

    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected $response;

    /**
     * @var array
     */
    protected $container = [];

    /**
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(ResponseInterface $response)
    {
        $this->response = $response;

        $this->decodeResponse();
    }

    /**
     * Decode response from the Flickr API.
     */
    protected function decodeResponse()
    {
        if ($this->response->getStatusCode() !== 200) {
            throw new \RuntimeException('Failed to call Flickr API.');
        }

        $data = json_decode($this->response->getBody(), true);

        if (!is_array($data) || !isset($data['stat'])) {
            throw new \RuntimeException('Unable to parse Flickr API response.');
        }

        if ($data['stat'] === 'fail') {
            throw new FlickrErrorException($data['message'], (int) $data['code']);
        }

        $this->container = $data;
    }

    /**
     * {@inheritdoc}
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * {@inheritdoc}
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset];
    }

    /**
     * {@inheritdoc}
     */
    public function offsetSet($offset, $value)
    {
        throw new \Exception('Results are read only.');
    }

    /**
     * {@inheritdoc}
     */
    public function offsetUnset($offset)
    {
        throw new \Exception('Results are read only.');
    }

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return is_array($this->container)
            ? $this->container
            : [];
    }
}
