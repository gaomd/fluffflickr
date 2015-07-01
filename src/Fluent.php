<?php

namespace Fluentickr;

use Fluentickr\Contracts\MethodCallerInterface;
use Fluentickr\Factory\MethodFactory;

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
 * @method \Fluentickr\Contracts\ResourceInterface add(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface addComment(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface addPhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface addTags(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface approveSuggestion(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface batchCorrectLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface browse(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface checkTickets(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface checkToken(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface correctLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface create(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface delete(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface deleteComment(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface deleteCoords(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface echo (array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface edit(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface editComment(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface editCoords(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface editMeta(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface editPhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface editPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface find(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface findByEmail(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface findByLatLon(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface findByUsername(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getAccessToken(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getAllContexts(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getBrandModels(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getBrands(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getCSVFiles(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getChildrenWithPhotosPublic(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getClusterPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getClusters(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getCollectionDomains(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getCollectionReferrers(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getCollectionStats(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getContactsPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getContactsPublicPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getContentType(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getContext(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getCounts(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getExif(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getFavorites(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getFrob(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getFullToken(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getGeoPerms(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getGroup(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getGroups(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getHidden(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getHotList(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getInfo(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getInfoByUrl(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getInstitutions(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getLimits(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getList(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getListForPhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getListPhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getListRecentlyUploaded(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getListUser(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getListUserPopular(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getListUserRaw(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getMethodInfo(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getMethods(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getMostFrequentlyUsed(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getNamespaces(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getNotInSet(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPairs(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPerms(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotoDomains(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotoReferrers(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotoStats(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotosOf(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotosetDomains(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotosetReferrers(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotosetStats(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotostreamDomains(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotostreamReferrers(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPhotostreamStats(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPlaceTypes(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPopularPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPredicates(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPrivacy(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPublicGroups(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPublicList(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getPublicPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getRecent(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getRecentForContacts(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getRecentValues(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getRelated(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getSafetyLevel(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getServices(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getShapeHistory(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getSizes(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getSubscriptions(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getTaggingSuggestions(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getToken(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getTopPlacesList(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getTopics(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getTotalViews(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getTree(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getUntagged(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getUploadStatus(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getUserPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getUserProfile(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getValues(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getWithGeoData(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface getWithoutGeoData(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface join(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface joinRequest(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface leave(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface login(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface lookupGallery(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface lookupGroup(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface lookupUser(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface null(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface orderSets(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface photosForLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface placesForBoundingBox(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface placesForContacts(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface placesForTags(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface placesForUser(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface postPhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface recentlyUpdated(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface rejectSuggestion(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface remove(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface removeLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface removePhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface removePhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface removeSuggestion(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface removeTag(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface reorderPhotos(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface resolvePlaceId(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface resolvePlaceURL(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface rotate(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface search(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setContentType(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setContext(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setDates(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setLicense(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setMeta(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setPerms(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setPrimaryPhoto(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setSafetyLevel(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface setTags(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface subscribe(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface suggestLocation(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface tagsForPlace(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface unsubscribe(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface userComments(array $arguments = [])
 * @method \Fluentickr\Contracts\ResourceInterface userPhotos(array $arguments = [])
 */
class Fluent
{

    /**
     * @var array
     */
    protected $methodSegments = [];

    /**
     * @var \Fluentickr\Contracts\MethodCallerInterface
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
     * @param \Fluentickr\Contracts\MethodCallerInterface $methodCaller
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
     * @return $this|\Fluentickr\Contracts\ResourceInterface
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
