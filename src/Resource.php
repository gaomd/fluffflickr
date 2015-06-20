<?php

namespace Fluentickr;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

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
 * @method \Fluentickr\Results add(array $params = [])
 * @method \Fluentickr\Results addComment(array $params = [])
 * @method \Fluentickr\Results addPhoto(array $params = [])
 * @method \Fluentickr\Results addTags(array $params = [])
 * @method \Fluentickr\Results approveSuggestion(array $params = [])
 * @method \Fluentickr\Results batchCorrectLocation(array $params = [])
 * @method \Fluentickr\Results browse(array $params = [])
 * @method \Fluentickr\Results checkTickets(array $params = [])
 * @method \Fluentickr\Results checkToken(array $params = [])
 * @method \Fluentickr\Results correctLocation(array $params = [])
 * @method \Fluentickr\Results create(array $params = [])
 * @method \Fluentickr\Results delete(array $params = [])
 * @method \Fluentickr\Results deleteComment(array $params = [])
 * @method \Fluentickr\Results deleteCoords(array $params = [])
 * @method \Fluentickr\Results echo (array $params = [])
 * @method \Fluentickr\Results edit(array $params = [])
 * @method \Fluentickr\Results editComment(array $params = [])
 * @method \Fluentickr\Results editCoords(array $params = [])
 * @method \Fluentickr\Results editMeta(array $params = [])
 * @method \Fluentickr\Results editPhoto(array $params = [])
 * @method \Fluentickr\Results editPhotos(array $params = [])
 * @method \Fluentickr\Results find(array $params = [])
 * @method \Fluentickr\Results findByEmail(array $params = [])
 * @method \Fluentickr\Results findByLatLon(array $params = [])
 * @method \Fluentickr\Results findByUsername(array $params = [])
 * @method \Fluentickr\Results getAccessToken(array $params = [])
 * @method \Fluentickr\Results getAllContexts(array $params = [])
 * @method \Fluentickr\Results getBrandModels(array $params = [])
 * @method \Fluentickr\Results getBrands(array $params = [])
 * @method \Fluentickr\Results getCSVFiles(array $params = [])
 * @method \Fluentickr\Results getChildrenWithPhotosPublic(array $params = [])
 * @method \Fluentickr\Results getClusterPhotos(array $params = [])
 * @method \Fluentickr\Results getClusters(array $params = [])
 * @method \Fluentickr\Results getCollectionDomains(array $params = [])
 * @method \Fluentickr\Results getCollectionReferrers(array $params = [])
 * @method \Fluentickr\Results getCollectionStats(array $params = [])
 * @method \Fluentickr\Results getContactsPhotos(array $params = [])
 * @method \Fluentickr\Results getContactsPublicPhotos(array $params = [])
 * @method \Fluentickr\Results getContentType(array $params = [])
 * @method \Fluentickr\Results getContext(array $params = [])
 * @method \Fluentickr\Results getCounts(array $params = [])
 * @method \Fluentickr\Results getExif(array $params = [])
 * @method \Fluentickr\Results getFavorites(array $params = [])
 * @method \Fluentickr\Results getFrob(array $params = [])
 * @method \Fluentickr\Results getFullToken(array $params = [])
 * @method \Fluentickr\Results getGeoPerms(array $params = [])
 * @method \Fluentickr\Results getGroup(array $params = [])
 * @method \Fluentickr\Results getGroups(array $params = [])
 * @method \Fluentickr\Results getHidden(array $params = [])
 * @method \Fluentickr\Results getHotList(array $params = [])
 * @method \Fluentickr\Results getInfo(array $params = [])
 * @method \Fluentickr\Results getInfoByUrl(array $params = [])
 * @method \Fluentickr\Results getInstitutions(array $params = [])
 * @method \Fluentickr\Results getLimits(array $params = [])
 * @method \Fluentickr\Results getList(array $params = [])
 * @method \Fluentickr\Results getListForPhoto(array $params = [])
 * @method \Fluentickr\Results getListPhoto(array $params = [])
 * @method \Fluentickr\Results getListRecentlyUploaded(array $params = [])
 * @method \Fluentickr\Results getListUser(array $params = [])
 * @method \Fluentickr\Results getListUserPopular(array $params = [])
 * @method \Fluentickr\Results getListUserRaw(array $params = [])
 * @method \Fluentickr\Results getLocation(array $params = [])
 * @method \Fluentickr\Results getMethodInfo(array $params = [])
 * @method \Fluentickr\Results getMethods(array $params = [])
 * @method \Fluentickr\Results getMostFrequentlyUsed(array $params = [])
 * @method \Fluentickr\Results getNamespaces(array $params = [])
 * @method \Fluentickr\Results getNotInSet(array $params = [])
 * @method \Fluentickr\Results getPairs(array $params = [])
 * @method \Fluentickr\Results getPerms(array $params = [])
 * @method \Fluentickr\Results getPhotoDomains(array $params = [])
 * @method \Fluentickr\Results getPhotoReferrers(array $params = [])
 * @method \Fluentickr\Results getPhotoStats(array $params = [])
 * @method \Fluentickr\Results getPhotos(array $params = [])
 * @method \Fluentickr\Results getPhotosOf(array $params = [])
 * @method \Fluentickr\Results getPhotosetDomains(array $params = [])
 * @method \Fluentickr\Results getPhotosetReferrers(array $params = [])
 * @method \Fluentickr\Results getPhotosetStats(array $params = [])
 * @method \Fluentickr\Results getPhotostreamDomains(array $params = [])
 * @method \Fluentickr\Results getPhotostreamReferrers(array $params = [])
 * @method \Fluentickr\Results getPhotostreamStats(array $params = [])
 * @method \Fluentickr\Results getPlaceTypes(array $params = [])
 * @method \Fluentickr\Results getPopularPhotos(array $params = [])
 * @method \Fluentickr\Results getPredicates(array $params = [])
 * @method \Fluentickr\Results getPrivacy(array $params = [])
 * @method \Fluentickr\Results getPublicGroups(array $params = [])
 * @method \Fluentickr\Results getPublicList(array $params = [])
 * @method \Fluentickr\Results getPublicPhotos(array $params = [])
 * @method \Fluentickr\Results getRecent(array $params = [])
 * @method \Fluentickr\Results getRecentForContacts(array $params = [])
 * @method \Fluentickr\Results getRecentValues(array $params = [])
 * @method \Fluentickr\Results getRelated(array $params = [])
 * @method \Fluentickr\Results getSafetyLevel(array $params = [])
 * @method \Fluentickr\Results getServices(array $params = [])
 * @method \Fluentickr\Results getShapeHistory(array $params = [])
 * @method \Fluentickr\Results getSizes(array $params = [])
 * @method \Fluentickr\Results getSubscriptions(array $params = [])
 * @method \Fluentickr\Results getTaggingSuggestions(array $params = [])
 * @method \Fluentickr\Results getToken(array $params = [])
 * @method \Fluentickr\Results getTopPlacesList(array $params = [])
 * @method \Fluentickr\Results getTopics(array $params = [])
 * @method \Fluentickr\Results getTotalViews(array $params = [])
 * @method \Fluentickr\Results getTree(array $params = [])
 * @method \Fluentickr\Results getUntagged(array $params = [])
 * @method \Fluentickr\Results getUploadStatus(array $params = [])
 * @method \Fluentickr\Results getUserPhotos(array $params = [])
 * @method \Fluentickr\Results getUserProfile(array $params = [])
 * @method \Fluentickr\Results getValues(array $params = [])
 * @method \Fluentickr\Results getWithGeoData(array $params = [])
 * @method \Fluentickr\Results getWithoutGeoData(array $params = [])
 * @method \Fluentickr\Results join(array $params = [])
 * @method \Fluentickr\Results joinRequest(array $params = [])
 * @method \Fluentickr\Results leave(array $params = [])
 * @method \Fluentickr\Results login(array $params = [])
 * @method \Fluentickr\Results lookupGallery(array $params = [])
 * @method \Fluentickr\Results lookupGroup(array $params = [])
 * @method \Fluentickr\Results lookupUser(array $params = [])
 * @method \Fluentickr\Results null(array $params = [])
 * @method \Fluentickr\Results orderSets(array $params = [])
 * @method \Fluentickr\Results photosForLocation(array $params = [])
 * @method \Fluentickr\Results placesForBoundingBox(array $params = [])
 * @method \Fluentickr\Results placesForContacts(array $params = [])
 * @method \Fluentickr\Results placesForTags(array $params = [])
 * @method \Fluentickr\Results placesForUser(array $params = [])
 * @method \Fluentickr\Results postPhoto(array $params = [])
 * @method \Fluentickr\Results recentlyUpdated(array $params = [])
 * @method \Fluentickr\Results rejectSuggestion(array $params = [])
 * @method \Fluentickr\Results remove(array $params = [])
 * @method \Fluentickr\Results removeLocation(array $params = [])
 * @method \Fluentickr\Results removePhoto(array $params = [])
 * @method \Fluentickr\Results removePhotos(array $params = [])
 * @method \Fluentickr\Results removeSuggestion(array $params = [])
 * @method \Fluentickr\Results removeTag(array $params = [])
 * @method \Fluentickr\Results reorderPhotos(array $params = [])
 * @method \Fluentickr\Results resolvePlaceId(array $params = [])
 * @method \Fluentickr\Results resolvePlaceURL(array $params = [])
 * @method \Fluentickr\Results rotate(array $params = [])
 * @method \Fluentickr\Results search(array $params = [])
 * @method \Fluentickr\Results setContentType(array $params = [])
 * @method \Fluentickr\Results setContext(array $params = [])
 * @method \Fluentickr\Results setDates(array $params = [])
 * @method \Fluentickr\Results setLicense(array $params = [])
 * @method \Fluentickr\Results setLocation(array $params = [])
 * @method \Fluentickr\Results setMeta(array $params = [])
 * @method \Fluentickr\Results setPerms(array $params = [])
 * @method \Fluentickr\Results setPrimaryPhoto(array $params = [])
 * @method \Fluentickr\Results setSafetyLevel(array $params = [])
 * @method \Fluentickr\Results setTags(array $params = [])
 * @method \Fluentickr\Results subscribe(array $params = [])
 * @method \Fluentickr\Results suggestLocation(array $params = [])
 * @method \Fluentickr\Results tagsForPlace(array $params = [])
 * @method \Fluentickr\Results unsubscribe(array $params = [])
 * @method \Fluentickr\Results userComments(array $params = [])
 * @method \Fluentickr\Results userPhotos(array $params = [])
 */
class Resource
{

    /**
     * @var \Fluentickr\Fluentickr
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
     * @param \Fluentickr\Fluentickr $flickr
     * @param string $parentResource
     * @param string $resource
     */
    public function __construct(Fluentickr $flickr, $parentResource, $resource)
    {
        $this->flickr = $flickr;
        $this->method = "$parentResource.$resource";
    }

    /**
     * @param $childResource
     * @return \Fluentickr\Resource
     */
    public function __get($childResource)
    {
        return new Resource($this->flickr, $this->method, $childResource);
    }

    /**
     * @param $childResource
     * @param $args
     * @return \Fluentickr\Results
     */
    public function __call($childResource, $args)
    {
        return call_user_func_array($this->{$childResource}, $args);
    }

    /**
     * @param array $parameters
     * @return \Fluentickr\Results
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
