<?php

namespace textagroup\brafton_api\DataObjects;

use SilverStripe\Security\Security;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

/**
* @author Kirk Mayo kirk.mayo@solnet.co.nz
* Brafton News Item Images dataobject
*/

class BraftonNewsItemImage extends DataObject
{
    private static $singular_name = 'News Item Image';
    private static $plural_name = 'News Item Images';
    private static $table_name = 'BraftonNewsItemImage';

    private static $db = array(
    );

    private static $has_one = array(
        'News' => 'textagroup\brafton_api\DataObjects\BraftonNewsItem',
        'Image' => Image::class,
        'Thumb' => Image::class
    );
}
