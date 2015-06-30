<?php

namespace Fluentickr;

class MethodCaller
{

    /**
     * @var \Fluentickr\HttpClient
     */
    protected $httpClient;

    /**
     * @var string
     */
    protected $baseUrl = 'https://api.flickr.com/services/rest/';

    /**
     * @var array
     */
    protected $methodsRequireHttpPost = [
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
     * @param \Fluentickr\HttpClient $httpClient
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param \Fluentickr\Method $method
     * @param array $arguments
     * @return \Fluentickr\Resource
     */
    public function call(Method $method, array $arguments = [])
    {
        $httpMethod = $this->determineHttpMethod($method);
        $httpQueryParams = array_merge(
            $arguments,
            ['method' => $method->getName()],
            $this->getOverrideQueryParams()
        );
        $response = $this->httpClient->request($httpMethod, $this->baseUrl, $httpQueryParams);

        return ResourceFactory::create($response);
    }

    /**
     * @return array
     */
    protected function getOverrideQueryParams()
    {
        return [
            'api_key'        => getenv('FLICKR_API_KEY'),
            // Required params to get JSON response
            'nojsoncallback' => 1,
            'format'         => 'json',
        ];
    }

    /**
     * @param \Fluentickr\Method $method
     * @return string
     */
    protected function determineHttpMethod(Method $method)
    {
        return in_array($method->getLastSegment(), $this->methodsRequireHttpPost, true) ? 'POST' : 'GET';
    }

}
