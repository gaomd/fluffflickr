<?php

namespace Fluentickr;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class MethodCaller
{

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
     * @param \Fluentickr\Method $method
     * @param array $arguments
     * @return \Fluentickr\Resource
     */
    public function call(Method $method, array $arguments = [])
    {
        $httpMethod = $this->determineHttpMethod($method);
        $queryParams = array_merge(
            $arguments,
            ['method' => $method->name()],
            $this->getOverrideArguments()
        );
        $url = $this->baseUrl . '?' . \GuzzleHttp\Psr7\build_query($queryParams);

        $client = new Client();
        $request = new Request($httpMethod, $url);
        $response = $client->send($request);

        return new Resource($response, $method, $arguments);
    }

    /**
     * @return array
     */
    protected function getOverrideArguments()
    {
        return [
            'api_key'        => getenv('FLICKR_API_KEY'),
            // Get JSON response
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
        return in_array($method->lastSegment(), $this->methodsRequireHttpPost, true) ? 'POST' : 'GET';
    }

}
