<?php

namespace Phlickr;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class Resource
{

    /**
     * @var \Phlickr\Phlickr
     */
    protected $flickr;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var array
     */
    protected $postMethods = [
        'postPhoto',
        'add',
        'remove',
        'create',
        'editMeta',
        'editPhoto',
        'editPhotos',
        'join',
        'joinRequest',
        'leave',
        'delete',
        'edit',
        'removeTag',
        'setContentType',
        'setDates',
        'setMeta',
        'setPerms',
        'setSafetyLevel',
        'setTags',
        'deleteComment',
        'editComment',
        'batchCorrectLocation',
        'correctLocation',
        'removeLocation',
        'setLicense',
        'deleteCoords',
        'editCoords',
        'approveSuggestion',
        'rejectSuggestion',
        'removeSuggestion',
        'suggestLocation',
        'rotate',
        'orderSets',
        'removePhoto',
        'removePhotos',
        'reorderPhotos',
        'setPrimaryPhoto',
        'addComment',
        // Should be POST: 'subscribe',
        // Should be POST: 'unsubscribe',
    ];

    /**
     * @param \Phlickr\Phlickr $flickr
     * @param string $parentResource
     * @param string $resource
     */
    public function __construct(Phlickr $flickr, $parentResource, $resource)
    {
        $this->flickr = $flickr;
        $this->method = "$parentResource.$resource";
    }

    /**
     * @param $childResource
     * @return \Phlickr\Resource
     */
    public function __get($childResource)
    {
        return new Resource($this->flickr, $this->method, $childResource);
    }

    /**
     * @param $childResource
     * @param $args
     * @return \Phlickr\Results
     */
    public function __call($childResource, $args)
    {
        return call_user_func_array($this->{$childResource}, $args);
    }

    /**
     * @param array $parameters
     * @return \Phlickr\Results
     */
    public function __invoke(array $parameters = [])
    {
        $parameters = array_merge(
            $parameters,
            ['method' => $this->method],
            $this->flickr->getOverrideParams()
        );

        $client = new Client();
        $url = $this->flickr->getEndpoint() . '?' . \GuzzleHttp\Psr7\build_query($parameters);
        $request = new Request($this->determineHttpMethod(), $url);
        $response = $client->send($request);

        return new Results($this, $response);
    }

    /**
     * @return string
     */
    protected function determineHttpMethod()
    {
        $resourceSegment = preg_replace('/\.([a-zA-Z])$/', '$1', $this->method);

        return in_array($resourceSegment, $this->postMethods, true) ? 'POST' : 'GET';
    }
}
