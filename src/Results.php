<?php

namespace Phlickr;

use Phlickr\Exception\FlickrErrorException;
use Psr\Http\Message\ResponseInterface;

class Results implements \ArrayAccess
{

    /**
     * @var \Phlickr\Resource
     */
    protected $resource;

    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    protected $response;

    /**
     * @var array
     */
    protected $container = [];

    /**
     * @param \Phlickr\Resource $resource
     * @param \Psr\Http\Message\ResponseInterface $response
     */
    public function __construct(Resource $resource, ResponseInterface $response)
    {
        $this->resource = $resource;
        $this->response = $response;

        $this->decodeResponse();
    }

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
            throw new FlickrErrorException($data['message'], $data['code']);
        }

        $this->container = $data;
    }

    /**
     * @return bool
     */
    public function isOk()
    {
        return (isset($this->container['stat']) && $this->container['stat'] === 'ok');
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
}
