<?php

namespace Farmr;

/**
 * @property-read \Farmr\Resource $activity
 * @property-read \Farmr\Resource $auth
 * @property-read \Farmr\Resource $blogs
 * @property-read \Farmr\Resource $cameras
 * @property-read \Farmr\Resource $collections
 * @property-read \Farmr\Resource $comments
 * @property-read \Farmr\Resource $commons
 * @property-read \Farmr\Resource $contacts
 * @property-read \Farmr\Resource $discuss
 * @property-read \Farmr\Resource $favorites
 * @property-read \Farmr\Resource $galleries
 * @property-read \Farmr\Resource $geo
 * @property-read \Farmr\Resource $groups
 * @property-read \Farmr\Resource $interestingness
 * @property-read \Farmr\Resource $licenses
 * @property-read \Farmr\Resource $machinetags
 * @property-read \Farmr\Resource $members
 * @property-read \Farmr\Resource $notes
 * @property-read \Farmr\Resource $oauth
 * @property-read \Farmr\Resource $panda
 * @property-read \Farmr\Resource $people
 * @property-read \Farmr\Resource $photos
 * @property-read \Farmr\Resource $photosets
 * @property-read \Farmr\Resource $places
 * @property-read \Farmr\Resource $pools
 * @property-read \Farmr\Resource $prefs
 * @property-read \Farmr\Resource $push
 * @property-read \Farmr\Resource $reflection
 * @property-read \Farmr\Resource $replies
 * @property-read \Farmr\Resource $stats
 * @property-read \Farmr\Resource $suggestions
 * @property-read \Farmr\Resource $tags
 * @property-read \Farmr\Resource $test
 * @property-read \Farmr\Resource $topics
 * @property-read \Farmr\Resource $transform
 * @property-read \Farmr\Resource $upload
 * @property-read \Farmr\Resource $urls
 */
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
