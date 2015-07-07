<?php

namespace Fluffflickr;

use Fluffflickr\Contracts\MethodCallerInterface;
use Fluffflickr\Factory\MethodFactory;

/**
 * @property-read $this $activity
 * @property-read $this $auth
 * @property-read $this $blogs
 * @property-read $this $cameras
 * @property-read $this $collections
 * @property-read $this $comments
 * @property-read $this $commons
 * @property-read $this $contacts
 * @property-read $this $discuss
 * @property-read $this $favorites
 * @property-read $this $galleries
 * @property-read $this $geo
 * @property-read $this $groups
 * @property-read $this $interestingness
 * @property-read $this $licenses
 * @property-read $this $machinetags
 * @property-read $this $members
 * @property-read $this $notes
 * @property-read $this $oauth
 * @property-read $this $panda
 * @property-read $this $people
 * @property-read $this $photos
 * @property-read $this $photosets
 * @property-read $this $places
 * @property-read $this $pools
 * @property-read $this $prefs
 * @property-read $this $push
 * @property-read $this $reflection
 * @property-read $this $replies
 * @property-read $this $stats
 * @property-read $this $suggestions
 * @property-read $this $tags
 * @property-read $this $test
 * @property-read $this $topics
 * @property-read $this $transform
 * @property-read $this $upload
 * @property-read $this $urls
 * @method $this activity()
 * @method $this auth()
 * @method $this blogs()
 * @method $this cameras()
 * @method $this collections()
 * @method $this comments()
 * @method $this commons()
 * @method $this contacts()
 * @method $this discuss()
 * @method $this favorites()
 * @method $this galleries()
 * @method $this geo()
 * @method $this groups()
 * @method $this interestingness()
 * @method $this licenses()
 * @method $this machinetags()
 * @method $this members()
 * @method $this notes()
 * @method $this oauth()
 * @method $this panda()
 * @method $this people()
 * @method $this photos()
 * @method $this photosets()
 * @method $this places()
 * @method $this pools()
 * @method $this prefs()
 * @method $this push()
 * @method $this reflection()
 * @method $this replies()
 * @method $this stats()
 * @method $this suggestions()
 * @method $this tags()
 * @method $this test()
 * @method $this topics()
 * @method $this transform()
 * @method $this upload()
 * @method $this urls()
 * @method \Fluffflickr\Contracts\ResourceInterface add(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface addComment(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface addPhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface addTags(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface approveSuggestion(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface batchCorrectLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface browse(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface checkTickets(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface checkToken(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface correctLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface create(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface delete(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface deleteComment(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface deleteCoords(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface echo (array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface edit(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface editComment(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface editCoords(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface editMeta(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface editPhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface editPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface find(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface findByEmail(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface findByLatLon(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface findByUsername(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getAccessToken(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getAllContexts(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getBrandModels(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getBrands(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getCSVFiles(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getChildrenWithPhotosPublic(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getClusterPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getClusters(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getCollectionDomains(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getCollectionReferrers(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getCollectionStats(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getContactsPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getContactsPublicPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getContentType(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getContext(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getCounts(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getExif(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getFavorites(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getFrob(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getFullToken(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getGeoPerms(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getGroup(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getGroups(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getHidden(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getHotList(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getInfo(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getInfoByUrl(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getInstitutions(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getLimits(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getList(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getListForPhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getListPhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getListRecentlyUploaded(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getListUser(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getListUserPopular(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getListUserRaw(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getMethodInfo(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getMethods(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getMostFrequentlyUsed(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getNamespaces(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getNotInSet(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPairs(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPerms(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotoDomains(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotoReferrers(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotoStats(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotosOf(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotosetDomains(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotosetReferrers(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotosetStats(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotostreamDomains(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotostreamReferrers(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPhotostreamStats(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPlaceTypes(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPopularPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPredicates(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPrivacy(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPublicGroups(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPublicList(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getPublicPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getRecent(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getRecentForContacts(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getRecentValues(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getRelated(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getSafetyLevel(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getServices(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getShapeHistory(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getSizes(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getSubscriptions(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getTaggingSuggestions(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getToken(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getTopPlacesList(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getTopics(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getTotalViews(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getTree(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getUntagged(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getUploadStatus(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getUserPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getUserProfile(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getValues(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getWithGeoData(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface getWithoutGeoData(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface join(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface joinRequest(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface leave(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface login(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface lookupGallery(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface lookupGroup(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface lookupUser(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface null(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface orderSets(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface photosForLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface placesForBoundingBox(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface placesForContacts(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface placesForTags(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface placesForUser(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface postPhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface recentlyUpdated(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface rejectSuggestion(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface remove(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface removeLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface removePhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface removePhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface removeSuggestion(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface removeTag(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface reorderPhotos(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface resolvePlaceId(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface resolvePlaceURL(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface rotate(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface search(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setContentType(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setContext(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setDates(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setLicense(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setMeta(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setPerms(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setPrimaryPhoto(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setSafetyLevel(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface setTags(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface subscribe(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface suggestLocation(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface tagsForPlace(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface unsubscribe(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface userComments(array $arguments = [])
 * @method \Fluffflickr\Contracts\ResourceInterface userPhotos(array $arguments = [])
 */
class Fluent
{

    /**
     * @var array
     */
    protected $methodSegments = [];

    /**
     * @var \Fluffflickr\Contracts\MethodCallerInterface
     */
    protected $methodCaller;

    /**
     * @var array
     */
    protected $closingMethods = [
        'add',
        'addComment',
        'addPhoto',
        'addTags',
        'approveSuggestion',
        'batchCorrectLocation',
        'browse',
        'checkTickets',
        'checkToken',
        'correctLocation',
        'create',
        'delete',
        'deleteComment',
        'deleteCoords',
        'echo',
        'edit',
        'editComment',
        'editCoords',
        'editMeta',
        'editPhoto',
        'editPhotos',
        'find',
        'findByEmail',
        'findByLatLon',
        'findByUsername',
        'getAccessToken',
        'getAllContexts',
        'getBrandModels',
        'getBrands',
        'getCSVFiles',
        'getChildrenWithPhotosPublic',
        'getClusterPhotos',
        'getClusters',
        'getCollectionDomains',
        'getCollectionReferrers',
        'getCollectionStats',
        'getContactsPhotos',
        'getContactsPublicPhotos',
        'getContentType',
        'getContext',
        'getCounts',
        'getExif',
        'getFavorites',
        'getFrob',
        'getFullToken',
        'getGeoPerms',
        'getGroup',
        'getGroups',
        'getHidden',
        'getHotList',
        'getInfo',
        'getInfoByUrl',
        'getInstitutions',
        'getLimits',
        'getList',
        'getListForPhoto',
        'getListPhoto',
        'getListRecentlyUploaded',
        'getListUser',
        'getListUserPopular',
        'getListUserRaw',
        'getLocation',
        'getMethodInfo',
        'getMethods',
        'getMostFrequentlyUsed',
        'getNamespaces',
        'getNotInSet',
        'getPairs',
        'getPerms',
        'getPhotoDomains',
        'getPhotoReferrers',
        'getPhotoStats',
        'getPhotos',
        'getPhotosOf',
        'getPhotosetDomains',
        'getPhotosetReferrers',
        'getPhotosetStats',
        'getPhotostreamDomains',
        'getPhotostreamReferrers',
        'getPhotostreamStats',
        'getPlaceTypes',
        'getPopularPhotos',
        'getPredicates',
        'getPrivacy',
        'getPublicGroups',
        'getPublicList',
        'getPublicPhotos',
        'getRecent',
        'getRecentForContacts',
        'getRecentValues',
        'getRelated',
        'getSafetyLevel',
        'getServices',
        'getShapeHistory',
        'getSizes',
        'getSubscriptions',
        'getTaggingSuggestions',
        'getToken',
        'getTopPlacesList',
        'getTopics',
        'getTotalViews',
        'getTree',
        'getUntagged',
        'getUploadStatus',
        'getUserPhotos',
        'getUserProfile',
        'getValues',
        'getWithGeoData',
        'getWithoutGeoData',
        'join',
        'joinRequest',
        'leave',
        'login',
        'lookupGallery',
        'lookupGroup',
        'lookupUser',
        'null',
        'orderSets',
        'photosForLocation',
        'placesForBoundingBox',
        'placesForContacts',
        'placesForTags',
        'placesForUser',
        'postPhoto',
        'recentlyUpdated',
        'rejectSuggestion',
        'remove',
        'removeLocation',
        'removePhoto',
        'removePhotos',
        'removeSuggestion',
        'removeTag',
        'reorderPhotos',
        'resolvePlaceId',
        'resolvePlaceURL',
        'rotate',
        'search',
        'setContentType',
        'setContext',
        'setDates',
        'setLicense',
        'setLocation',
        'setMeta',
        'setPerms',
        'setPrimaryPhoto',
        'setSafetyLevel',
        'setTags',
        'subscribe',
        'suggestLocation',
        'tagsForPlace',
        'unsubscribe',
        'userComments',
        'userPhotos',
    ];

    /**
     * @param \Fluffflickr\Contracts\MethodCallerInterface $methodCaller
     */
    public function __construct(MethodCallerInterface $methodCaller)
    {
        $this->methodCaller = $methodCaller;
        $this->reset();
    }

    public function __get($method)
    {
        $this->methodSegments[] = $method;

        return $this;
    }

    /**
     * @param $method
     * @param $args
     * @return $this|\Fluffflickr\Contracts\ResourceInterface
     */
    public function __call($method, $args)
    {
        $this->methodSegments[] = $method;

        if ($this->isClosingMethod($method)) {
            $arguments = count($args) >= 1 ? $args[0] : [];
            $method = MethodFactory::create($this->getCallingMethodName());
            $this->reset();

            return $this->methodCaller->call($method, $arguments);
        }

        return $this;
    }

    protected function isClosingMethod($name)
    {
        return in_array($name, $this->closingMethods, true);
    }

    protected function getCallingMethodName()
    {
        return implode('.', $this->methodSegments);
    }

    protected function reset()
    {
        $this->methodSegments = ['flickr'];
    }
}
