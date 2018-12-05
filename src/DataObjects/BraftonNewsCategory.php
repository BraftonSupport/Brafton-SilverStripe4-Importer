<?php

namespace textagroup\brafton_api\DataObjects;

use SilverStripe\Security\Security;
use SilverStripe\ORM\DataObject;

/**
* @author Kirk Mayo kirk.mayo@solnet.co.nz
* Brafton News Category dataobject
*/

class BraftonNewsCategory extends DataObject
{
    private static $singular_name = 'News Category';
    private static $plural_name = 'News Categories';
    private static $table_name = 'BraftonNewsCategory';

    private static $db = array(
        'CategoryID' => 'Text',
        'Title' => 'Varchar'
    );
}
