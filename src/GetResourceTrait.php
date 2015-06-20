<?php

namespace Fluentickr;

/**
 * @property-read \Fluentickr\Resource $activity
 * @property-read \Fluentickr\Resource $auth
 * @property-read \Fluentickr\Resource $blogs
 * @property-read \Fluentickr\Resource $cameras
 * @property-read \Fluentickr\Resource $collections
 * @property-read \Fluentickr\Resource $comments
 * @property-read \Fluentickr\Resource $commons
 * @property-read \Fluentickr\Resource $contacts
 * @property-read \Fluentickr\Resource $discuss
 * @property-read \Fluentickr\Resource $favorites
 * @property-read \Fluentickr\Resource $galleries
 * @property-read \Fluentickr\Resource $geo
 * @property-read \Fluentickr\Resource $groups
 * @property-read \Fluentickr\Resource $interestingness
 * @property-read \Fluentickr\Resource $licenses
 * @property-read \Fluentickr\Resource $machinetags
 * @property-read \Fluentickr\Resource $members
 * @property-read \Fluentickr\Resource $notes
 * @property-read \Fluentickr\Resource $oauth
 * @property-read \Fluentickr\Resource $panda
 * @property-read \Fluentickr\Resource $people
 * @property-read \Fluentickr\Resource $photos
 * @property-read \Fluentickr\Resource $photosets
 * @property-read \Fluentickr\Resource $places
 * @property-read \Fluentickr\Resource $pools
 * @property-read \Fluentickr\Resource $prefs
 * @property-read \Fluentickr\Resource $push
 * @property-read \Fluentickr\Resource $reflection
 * @property-read \Fluentickr\Resource $replies
 * @property-read \Fluentickr\Resource $stats
 * @property-read \Fluentickr\Resource $suggestions
 * @property-read \Fluentickr\Resource $tags
 * @property-read \Fluentickr\Resource $test
 * @property-read \Fluentickr\Resource $topics
 * @property-read \Fluentickr\Resource $transform
 * @property-read \Fluentickr\Resource $upload
 * @property-read \Fluentickr\Resource $urls
 */
trait GetResourceTrait
{

    protected function getResource(Fluentickr $flickr, $resource)
    {
        return new Resource($flickr, $resource);
    }

}
