<?php

namespace textagroup\brafton_api\DataObjects;

use SilverStripe\Security\Security;
use SilverStripe\ORM\DataObject;
use textagroup\brafton_api\DataObjects\BraftonCategory;

/**
* @author Kirk Mayo kirk.mayo@solnet.co.nz
* Brafton News Item dataobject
*/


class BraftonNewsItem extends DataObject
{
    private static $singular_name = 'News Item';
    private static $plural_name = 'News Items';
    private static $table_name = 'BraftonNewsItem';

    private static $db = array(
        'ApiID' => 'Text',
        'PublishDate' => 'Datetime',
        'CreatedDate' => 'Datetime',
        'LastModifiedDate' => 'Datetime',
        'Headline' => 'Text',
        'Extract' => 'Text',
        'Categories' => 'Text',
        'HtmlTitle' => 'Text',
        'HtmlMetaDescription' => 'Text',
        'Content' => 'HTMLText'
    );

    private static $has_many = array(
        'Photos' => 'BraftonNewsItemImage'
    );

    private static $many_many = array(
        'Categories' => 'BraftonNewsCategory'
    );
}
