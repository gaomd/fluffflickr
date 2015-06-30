<?php

namespace Fluentickr;

/**
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
 * @method \Fluentickr\Resource add(array $arguments = [])
 * @method \Fluentickr\Resource addComment(array $arguments = [])
 * @method \Fluentickr\Resource addPhoto(array $arguments = [])
 * @method \Fluentickr\Resource addTags(array $arguments = [])
 * @method \Fluentickr\Resource approveSuggestion(array $arguments = [])
 * @method \Fluentickr\Resource batchCorrectLocation(array $arguments = [])
 * @method \Fluentickr\Resource browse(array $arguments = [])
 * @method \Fluentickr\Resource checkTickets(array $arguments = [])
 * @method \Fluentickr\Resource checkToken(array $arguments = [])
 * @method \Fluentickr\Resource correctLocation(array $arguments = [])
 * @method \Fluentickr\Resource create(array $arguments = [])
 * @method \Fluentickr\Resource delete(array $arguments = [])
 * @method \Fluentickr\Resource deleteComment(array $arguments = [])
 * @method \Fluentickr\Resource deleteCoords(array $arguments = [])
 * @method \Fluentickr\Resource echo (array $arguments = [])
 * @method \Fluentickr\Resource edit(array $arguments = [])
 * @method \Fluentickr\Resource editComment(array $arguments = [])
 * @method \Fluentickr\Resource editCoords(array $arguments = [])
 * @method \Fluentickr\Resource editMeta(array $arguments = [])
 * @method \Fluentickr\Resource editPhoto(array $arguments = [])
 * @method \Fluentickr\Resource editPhotos(array $arguments = [])
 * @method \Fluentickr\Resource find(array $arguments = [])
 * @method \Fluentickr\Resource findByEmail(array $arguments = [])
 * @method \Fluentickr\Resource findByLatLon(array $arguments = [])
 * @method \Fluentickr\Resource findByUsername(array $arguments = [])
 * @method \Fluentickr\Resource getAccessToken(array $arguments = [])
 * @method \Fluentickr\Resource getAllContexts(array $arguments = [])
 * @method \Fluentickr\Resource getBrandModels(array $arguments = [])
 * @method \Fluentickr\Resource getBrands(array $arguments = [])
 * @method \Fluentickr\Resource getCSVFiles(array $arguments = [])
 * @method \Fluentickr\Resource getChildrenWithPhotosPublic(array $arguments = [])
 * @method \Fluentickr\Resource getClusterPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getClusters(array $arguments = [])
 * @method \Fluentickr\Resource getCollectionDomains(array $arguments = [])
 * @method \Fluentickr\Resource getCollectionReferrers(array $arguments = [])
 * @method \Fluentickr\Resource getCollectionStats(array $arguments = [])
 * @method \Fluentickr\Resource getContactsPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getContactsPublicPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getContentType(array $arguments = [])
 * @method \Fluentickr\Resource getContext(array $arguments = [])
 * @method \Fluentickr\Resource getCounts(array $arguments = [])
 * @method \Fluentickr\Resource getExif(array $arguments = [])
 * @method \Fluentickr\Resource getFavorites(array $arguments = [])
 * @method \Fluentickr\Resource getFrob(array $arguments = [])
 * @method \Fluentickr\Resource getFullToken(array $arguments = [])
 * @method \Fluentickr\Resource getGeoPerms(array $arguments = [])
 * @method \Fluentickr\Resource getGroup(array $arguments = [])
 * @method \Fluentickr\Resource getGroups(array $arguments = [])
 * @method \Fluentickr\Resource getHidden(array $arguments = [])
 * @method \Fluentickr\Resource getHotList(array $arguments = [])
 * @method \Fluentickr\Resource getInfo(array $arguments = [])
 * @method \Fluentickr\Resource getInfoByUrl(array $arguments = [])
 * @method \Fluentickr\Resource getInstitutions(array $arguments = [])
 * @method \Fluentickr\Resource getLimits(array $arguments = [])
 * @method \Fluentickr\Resource getList(array $arguments = [])
 * @method \Fluentickr\Resource getListForPhoto(array $arguments = [])
 * @method \Fluentickr\Resource getListPhoto(array $arguments = [])
 * @method \Fluentickr\Resource getListRecentlyUploaded(array $arguments = [])
 * @method \Fluentickr\Resource getListUser(array $arguments = [])
 * @method \Fluentickr\Resource getListUserPopular(array $arguments = [])
 * @method \Fluentickr\Resource getListUserRaw(array $arguments = [])
 * @method \Fluentickr\Resource getLocation(array $arguments = [])
 * @method \Fluentickr\Resource getMethodInfo(array $arguments = [])
 * @method \Fluentickr\Resource getMethods(array $arguments = [])
 * @method \Fluentickr\Resource getMostFrequentlyUsed(array $arguments = [])
 * @method \Fluentickr\Resource getNamespaces(array $arguments = [])
 * @method \Fluentickr\Resource getNotInSet(array $arguments = [])
 * @method \Fluentickr\Resource getPairs(array $arguments = [])
 * @method \Fluentickr\Resource getPerms(array $arguments = [])
 * @method \Fluentickr\Resource getPhotoDomains(array $arguments = [])
 * @method \Fluentickr\Resource getPhotoReferrers(array $arguments = [])
 * @method \Fluentickr\Resource getPhotoStats(array $arguments = [])
 * @method \Fluentickr\Resource getPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getPhotosOf(array $arguments = [])
 * @method \Fluentickr\Resource getPhotosetDomains(array $arguments = [])
 * @method \Fluentickr\Resource getPhotosetReferrers(array $arguments = [])
 * @method \Fluentickr\Resource getPhotosetStats(array $arguments = [])
 * @method \Fluentickr\Resource getPhotostreamDomains(array $arguments = [])
 * @method \Fluentickr\Resource getPhotostreamReferrers(array $arguments = [])
 * @method \Fluentickr\Resource getPhotostreamStats(array $arguments = [])
 * @method \Fluentickr\Resource getPlaceTypes(array $arguments = [])
 * @method \Fluentickr\Resource getPopularPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getPredicates(array $arguments = [])
 * @method \Fluentickr\Resource getPrivacy(array $arguments = [])
 * @method \Fluentickr\Resource getPublicGroups(array $arguments = [])
 * @method \Fluentickr\Resource getPublicList(array $arguments = [])
 * @method \Fluentickr\Resource getPublicPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getRecent(array $arguments = [])
 * @method \Fluentickr\Resource getRecentForContacts(array $arguments = [])
 * @method \Fluentickr\Resource getRecentValues(array $arguments = [])
 * @method \Fluentickr\Resource getRelated(array $arguments = [])
 * @method \Fluentickr\Resource getSafetyLevel(array $arguments = [])
 * @method \Fluentickr\Resource getServices(array $arguments = [])
 * @method \Fluentickr\Resource getShapeHistory(array $arguments = [])
 * @method \Fluentickr\Resource getSizes(array $arguments = [])
 * @method \Fluentickr\Resource getSubscriptions(array $arguments = [])
 * @method \Fluentickr\Resource getTaggingSuggestions(array $arguments = [])
 * @method \Fluentickr\Resource getToken(array $arguments = [])
 * @method \Fluentickr\Resource getTopPlacesList(array $arguments = [])
 * @method \Fluentickr\Resource getTopics(array $arguments = [])
 * @method \Fluentickr\Resource getTotalViews(array $arguments = [])
 * @method \Fluentickr\Resource getTree(array $arguments = [])
 * @method \Fluentickr\Resource getUntagged(array $arguments = [])
 * @method \Fluentickr\Resource getUploadStatus(array $arguments = [])
 * @method \Fluentickr\Resource getUserPhotos(array $arguments = [])
 * @method \Fluentickr\Resource getUserProfile(array $arguments = [])
 * @method \Fluentickr\Resource getValues(array $arguments = [])
 * @method \Fluentickr\Resource getWithGeoData(array $arguments = [])
 * @method \Fluentickr\Resource getWithoutGeoData(array $arguments = [])
 * @method \Fluentickr\Resource join(array $arguments = [])
 * @method \Fluentickr\Resource joinRequest(array $arguments = [])
 * @method \Fluentickr\Resource leave(array $arguments = [])
 * @method \Fluentickr\Resource login(array $arguments = [])
 * @method \Fluentickr\Resource lookupGallery(array $arguments = [])
 * @method \Fluentickr\Resource lookupGroup(array $arguments = [])
 * @method \Fluentickr\Resource lookupUser(array $arguments = [])
 * @method \Fluentickr\Resource null(array $arguments = [])
 * @method \Fluentickr\Resource orderSets(array $arguments = [])
 * @method \Fluentickr\Resource photosForLocation(array $arguments = [])
 * @method \Fluentickr\Resource placesForBoundingBox(array $arguments = [])
 * @method \Fluentickr\Resource placesForContacts(array $arguments = [])
 * @method \Fluentickr\Resource placesForTags(array $arguments = [])
 * @method \Fluentickr\Resource placesForUser(array $arguments = [])
 * @method \Fluentickr\Resource postPhoto(array $arguments = [])
 * @method \Fluentickr\Resource recentlyUpdated(array $arguments = [])
 * @method \Fluentickr\Resource rejectSuggestion(array $arguments = [])
 * @method \Fluentickr\Resource remove(array $arguments = [])
 * @method \Fluentickr\Resource removeLocation(array $arguments = [])
 * @method \Fluentickr\Resource removePhoto(array $arguments = [])
 * @method \Fluentickr\Resource removePhotos(array $arguments = [])
 * @method \Fluentickr\Resource removeSuggestion(array $arguments = [])
 * @method \Fluentickr\Resource removeTag(array $arguments = [])
 * @method \Fluentickr\Resource reorderPhotos(array $arguments = [])
 * @method \Fluentickr\Resource resolvePlaceId(array $arguments = [])
 * @method \Fluentickr\Resource resolvePlaceURL(array $arguments = [])
 * @method \Fluentickr\Resource rotate(array $arguments = [])
 * @method \Fluentickr\Resource search(array $arguments = [])
 * @method \Fluentickr\Resource setContentType(array $arguments = [])
 * @method \Fluentickr\Resource setContext(array $arguments = [])
 * @method \Fluentickr\Resource setDates(array $arguments = [])
 * @method \Fluentickr\Resource setLicense(array $arguments = [])
 * @method \Fluentickr\Resource setLocation(array $arguments = [])
 * @method \Fluentickr\Resource setMeta(array $arguments = [])
 * @method \Fluentickr\Resource setPerms(array $arguments = [])
 * @method \Fluentickr\Resource setPrimaryPhoto(array $arguments = [])
 * @method \Fluentickr\Resource setSafetyLevel(array $arguments = [])
 * @method \Fluentickr\Resource setTags(array $arguments = [])
 * @method \Fluentickr\Resource subscribe(array $arguments = [])
 * @method \Fluentickr\Resource suggestLocation(array $arguments = [])
 * @method \Fluentickr\Resource tagsForPlace(array $arguments = [])
 * @method \Fluentickr\Resource unsubscribe(array $arguments = [])
 * @method \Fluentickr\Resource userComments(array $arguments = [])
 * @method \Fluentickr\Resource userPhotos(array $arguments = [])
 */
class Fluent
{

    /**
     * @var array
     */
    protected $methodSegments = [];

    /**
     * @var \Fluentickr\MethodCaller
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
     * @param \Fluentickr\MethodCaller $methodCaller
     */
    public function __construct(MethodCaller $methodCaller)
    {
        $this->methodCaller = $methodCaller;
        $this->reset();
    }

    /**
     * @param $method
     * @param $args
     * @return $this|\Fluentickr\Resource
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
