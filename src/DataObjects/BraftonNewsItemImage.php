<?php

namespace textagroup\brafton_api\DataObjects;

use SilverStripe\Security\Security;
use SilverStripe\ORM\DataObject;

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
        'News' => 'BraftonNewsItem',
        'Image' => 'Image',
        'Thumb' => 'Image'
    );
}
