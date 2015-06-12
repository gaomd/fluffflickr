<?php

namespace Farmr;

class Farmr
{

    /**
     * @var string
     */
    protected $endpoint = 'https://api.flickr.com/services/rest';

    /**
     * @param $childResource
     * @return \Farmr\Resource
     */
    public function __get($childResource)
    {
        return new Resource($this, 'flickr', $childResource);
    }

    /**
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @return array
     */
    public function getOverrideParams()
    {
        return [
            'api_key'        => getenv('FLICKR_API_KEY'),
            'format'         => 'json',
            'nojsoncallback' => 1,
        ];
    }
}
