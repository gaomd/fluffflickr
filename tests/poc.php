<?php

require(dirname(dirname(__FILE__)) . '/vendor/autoload.php');

$flickr = new \Farmr\Farmr();

$dotEnv = new Dotenv\Dotenv(dirname(dirname(__FILE__)));
$dotEnv->load();
$dotEnv->required('FLICKR_API_KEY');

/** @var \Farmr\Results $results */
$results = $flickr->test->echo(['foo' => 'bar']);

if ($results->isOk() && isset($results['foo']['_content']) && $results['foo']['_content'] === 'bar') {
    echo "=======\nPasses!\n=======\n";
}

exit();

$parameters = ['user_id' => 'me'];

/**
 * Get results
 */
$photosResults = $flickr->people->getPhotos($parameters);

/**
 * Alternative way to get results
 */
$photosResource = $flickr->people->getPhotos;
$photosResults = $photosResource(['user_id' => 'me']);

