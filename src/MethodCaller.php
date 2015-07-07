<?php

namespace Fluffflickr;

use Fluffflickr\Contracts\HttpClientInterface;
use Fluffflickr\Contracts\MethodCallerInterface;
use Fluffflickr\Contracts\MethodInterface;
use Fluffflickr\Factory\ResourceFactory;

class MethodCaller implements MethodCallerInterface
{

    /**
     * @var \Fluffflickr\Contracts\HttpClientInterface
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
     * @param \Fluffflickr\Contracts\HttpClientInterface $httpClient
     */
    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * {@inheritdoc}
     */
    public function call(MethodInterface $method, array $arguments = [])
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
     * @param \Fluffflickr\Contracts\MethodInterface $method
     * @return string
     */
    protected function determineHttpMethod(MethodInterface $method)
    {
        return in_array($method->getLastSegment(), $this->methodsRequireHttpPost, true) ? 'POST' : 'GET';
    }
}
