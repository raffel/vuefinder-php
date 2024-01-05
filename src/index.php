<?php
require '../vendor/autoload.php';

use Ozdemir\VueFinder\VueFinder;
use League\Flysystem\Local\LocalFilesystemAdapter;

$vuefinder = new VueFinder([
  'data' => new LocalFilesystemAdapter('/opt'),
]);

$config = [
  'publicLinks' => [
    'data:public' => 'http://localhost:3000',
  ],
];

$vuefinder->init($config);
?>
