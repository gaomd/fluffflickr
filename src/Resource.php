<?php

namespace Farmr;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

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
 * @method \Farmr\Results add(array $params = [])
 * @method \Farmr\Results addComment(array $params = [])
 * @method \Farmr\Results addPhoto(array $params = [])
 * @method \Farmr\Results addTags(array $params = [])
 * @method \Farmr\Results approveSuggestion(array $params = [])
 * @method \Farmr\Results batchCorrectLocation(array $params = [])
 * @method \Farmr\Results browse(array $params = [])
 * @method \Farmr\Results checkTickets(array $params = [])
 * @method \Farmr\Results checkToken(array $params = [])
 * @method \Farmr\Results correctLocation(array $params = [])
 * @method \Farmr\Results create(array $params = [])
 * @method \Farmr\Results delete(array $params = [])
 * @method \Farmr\Results deleteComment(array $params = [])
 * @method \Farmr\Results deleteCoords(array $params = [])
 * @method \Farmr\Results echo (array $params = [])
 * @method \Farmr\Results edit(array $params = [])
 * @method \Farmr\Results editComment(array $params = [])
 * @method \Farmr\Results editCoords(array $params = [])
 * @method \Farmr\Results editMeta(array $params = [])
 * @method \Farmr\Results editPhoto(array $params = [])
 * @method \Farmr\Results editPhotos(array $params = [])
 * @method \Farmr\Results find(array $params = [])
 * @method \Farmr\Results findByEmail(array $params = [])
 * @method \Farmr\Results findByLatLon(array $params = [])
 * @method \Farmr\Results findByUsername(array $params = [])
 * @method \Farmr\Results getAccessToken(array $params = [])
 * @method \Farmr\Results getAllContexts(array $params = [])
 * @method \Farmr\Results getBrandModels(array $params = [])
 * @method \Farmr\Results getBrands(array $params = [])
 * @method \Farmr\Results getCSVFiles(array $params = [])
 * @method \Farmr\Results getChildrenWithPhotosPublic(array $params = [])
 * @method \Farmr\Results getClusterPhotos(array $params = [])
 * @method \Farmr\Results getClusters(array $params = [])
 * @method \Farmr\Results getCollectionDomains(array $params = [])
 * @method \Farmr\Results getCollectionReferrers(array $params = [])
 * @method \Farmr\Results getCollectionStats(array $params = [])
 * @method \Farmr\Results getContactsPhotos(array $params = [])
 * @method \Farmr\Results getContactsPublicPhotos(array $params = [])
 * @method \Farmr\Results getContentType(array $params = [])
 * @method \Farmr\Results getContext(array $params = [])
 * @method \Farmr\Results getCounts(array $params = [])
 * @method \Farmr\Results getExif(array $params = [])
 * @method \Farmr\Results getFavorites(array $params = [])
 * @method \Farmr\Results getFrob(array $params = [])
 * @method \Farmr\Results getFullToken(array $params = [])
 * @method \Farmr\Results getGeoPerms(array $params = [])
 * @method \Farmr\Results getGroup(array $params = [])
 * @method \Farmr\Results getGroups(array $params = [])
 * @method \Farmr\Results getHidden(array $params = [])
 * @method \Farmr\Results getHotList(array $params = [])
 * @method \Farmr\Results getInfo(array $params = [])
 * @method \Farmr\Results getInfoByUrl(array $params = [])
 * @method \Farmr\Results getInstitutions(array $params = [])
 * @method \Farmr\Results getLimits(array $params = [])
 * @method \Farmr\Results getList(array $params = [])
 * @method \Farmr\Results getListForPhoto(array $params = [])
 * @method \Farmr\Results getListPhoto(array $params = [])
 * @method \Farmr\Results getListRecentlyUploaded(array $params = [])
 * @method \Farmr\Results getListUser(array $params = [])
 * @method \Farmr\Results getListUserPopular(array $params = [])
 * @method \Farmr\Results getListUserRaw(array $params = [])
 * @method \Farmr\Results getLocation(array $params = [])
 * @method \Farmr\Results getMethodInfo(array $params = [])
 * @method \Farmr\Results getMethods(array $params = [])
 * @method \Farmr\Results getMostFrequentlyUsed(array $params = [])
 * @method \Farmr\Results getNamespaces(array $params = [])
 * @method \Farmr\Results getNotInSet(array $params = [])
 * @method \Farmr\Results getPairs(array $params = [])
 * @method \Farmr\Results getPerms(array $params = [])
 * @method \Farmr\Results getPhotoDomains(array $params = [])
 * @method \Farmr\Results getPhotoReferrers(array $params = [])
 * @method \Farmr\Results getPhotoStats(array $params = [])
 * @method \Farmr\Results getPhotos(array $params = [])
 * @method \Farmr\Results getPhotosOf(array $params = [])
 * @method \Farmr\Results getPhotosetDomains(array $params = [])
 * @method \Farmr\Results getPhotosetReferrers(array $params = [])
 * @method \Farmr\Results getPhotosetStats(array $params = [])
 * @method \Farmr\Results getPhotostreamDomains(array $params = [])
 * @method \Farmr\Results getPhotostreamReferrers(array $params = [])
 * @method \Farmr\Results getPhotostreamStats(array $params = [])
 * @method \Farmr\Results getPlaceTypes(array $params = [])
 * @method \Farmr\Results getPopularPhotos(array $params = [])
 * @method \Farmr\Results getPredicates(array $params = [])
 * @method \Farmr\Results getPrivacy(array $params = [])
 * @method \Farmr\Results getPublicGroups(array $params = [])
 * @method \Farmr\Results getPublicList(array $params = [])
 * @method \Farmr\Results getPublicPhotos(array $params = [])
 * @method \Farmr\Results getRecent(array $params = [])
 * @method \Farmr\Results getRecentForContacts(array $params = [])
 * @method \Farmr\Results getRecentValues(array $params = [])
 * @method \Farmr\Results getRelated(array $params = [])
 * @method \Farmr\Results getSafetyLevel(array $params = [])
 * @method \Farmr\Results getServices(array $params = [])
 * @method \Farmr\Results getShapeHistory(array $params = [])
 * @method \Farmr\Results getSizes(array $params = [])
 * @method \Farmr\Results getSubscriptions(array $params = [])
 * @method \Farmr\Results getTaggingSuggestions(array $params = [])
 * @method \Farmr\Results getToken(array $params = [])
 * @method \Farmr\Results getTopPlacesList(array $params = [])
 * @method \Farmr\Results getTopics(array $params = [])
 * @method \Farmr\Results getTotalViews(array $params = [])
 * @method \Farmr\Results getTree(array $params = [])
 * @method \Farmr\Results getUntagged(array $params = [])
 * @method \Farmr\Results getUploadStatus(array $params = [])
 * @method \Farmr\Results getUserPhotos(array $params = [])
 * @method \Farmr\Results getUserProfile(array $params = [])
 * @method \Farmr\Results getValues(array $params = [])
 * @method \Farmr\Results getWithGeoData(array $params = [])
 * @method \Farmr\Results getWithoutGeoData(array $params = [])
 * @method \Farmr\Results join(array $params = [])
 * @method \Farmr\Results joinRequest(array $params = [])
 * @method \Farmr\Results leave(array $params = [])
 * @method \Farmr\Results login(array $params = [])
 * @method \Farmr\Results lookupGallery(array $params = [])
 * @method \Farmr\Results lookupGroup(array $params = [])
 * @method \Farmr\Results lookupUser(array $params = [])
 * @method \Farmr\Results null(array $params = [])
 * @method \Farmr\Results orderSets(array $params = [])
 * @method \Farmr\Results photosForLocation(array $params = [])
 * @method \Farmr\Results placesForBoundingBox(array $params = [])
 * @method \Farmr\Results placesForContacts(array $params = [])
 * @method \Farmr\Results placesForTags(array $params = [])
 * @method \Farmr\Results placesForUser(array $params = [])
 * @method \Farmr\Results postPhoto(array $params = [])
 * @method \Farmr\Results recentlyUpdated(array $params = [])
 * @method \Farmr\Results rejectSuggestion(array $params = [])
 * @method \Farmr\Results remove(array $params = [])
 * @method \Farmr\Results removeLocation(array $params = [])
 * @method \Farmr\Results removePhoto(array $params = [])
 * @method \Farmr\Results removePhotos(array $params = [])
 * @method \Farmr\Results removeSuggestion(array $params = [])
 * @method \Farmr\Results removeTag(array $params = [])
 * @method \Farmr\Results reorderPhotos(array $params = [])
 * @method \Farmr\Results resolvePlaceId(array $params = [])
 * @method \Farmr\Results resolvePlaceURL(array $params = [])
 * @method \Farmr\Results rotate(array $params = [])
 * @method \Farmr\Results search(array $params = [])
 * @method \Farmr\Results setContentType(array $params = [])
 * @method \Farmr\Results setContext(array $params = [])
 * @method \Farmr\Results setDates(array $params = [])
 * @method \Farmr\Results setLicense(array $params = [])
 * @method \Farmr\Results setLocation(array $params = [])
 * @method \Farmr\Results setMeta(array $params = [])
 * @method \Farmr\Results setPerms(array $params = [])
 * @method \Farmr\Results setPrimaryPhoto(array $params = [])
 * @method \Farmr\Results setSafetyLevel(array $params = [])
 * @method \Farmr\Results setTags(array $params = [])
 * @method \Farmr\Results subscribe(array $params = [])
 * @method \Farmr\Results suggestLocation(array $params = [])
 * @method \Farmr\Results tagsForPlace(array $params = [])
 * @method \Farmr\Results unsubscribe(array $params = [])
 * @method \Farmr\Results userComments(array $params = [])
 * @method \Farmr\Results userPhotos(array $params = [])
 */
class Resource
{

    /**
     * @var \Farmr\Farmr
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
     * @param \Farmr\Farmr $flickr
     * @param string $parentResource
     * @param string $resource
     */
    public function __construct(Farmr $flickr, $parentResource, $resource)
    {
        $this->flickr = $flickr;
        $this->method = "$parentResource.$resource";
    }

    /**
     * @param $childResource
     * @return \Farmr\Resource
     */
    public function __get($childResource)
    {
        return new Resource($this->flickr, $this->method, $childResource);
    }

    /**
     * @param $childResource
     * @param $args
     * @return \Farmr\Results
     */
    public function __call($childResource, $args)
    {
        return call_user_func_array($this->{$childResource}, $args);
    }

    /**
     * @param array $parameters
     * @return \Farmr\Results
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
