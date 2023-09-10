<?php
require 'vendor/autoload.php';

// import the Intervention Image Manager Class

use Intervention\Image\ImageManagerStatic as Image;
// // to finally create image instances
Image::make('1.jpeg')->resize(300, 200)->save("img/1.jpeg");
