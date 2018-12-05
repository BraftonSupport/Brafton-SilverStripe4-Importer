<?php

namespace textagroup\brafton_api\Extensions;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;

/**
 * Adds a Brafton settings tab
 */

class BraftonFactoryExtension extends Extension
{
    public function updateFormFields(FieldList $fields){
        $fields->insertAfter(
            'Title',
            TextareaField::create('BraftonApiUrl', _t('BraftonApi.BRAFTONAPIURL', 'Brafton Api Url'))
        );
        $fields->insertAfter(
            'Title',
            TextareaField::create('BraftonApiKey', _t('BraftonApi.BRAFTONAPIKEY', 'Brafton Api Key'))
        );
        // $fields->addfieldToTab('Root.Brafton',
        //     TextField::create(
        //         'BraftonApiUrl',
        //         _t('BraftonApi.BRAFTONAPIURL', 'Brafton Api Url')
        //     )
        // );
        // $fields->addfieldToTab('Root.Brafton',
        //     TextField::create(
        //         'BraftonApiKey',
        //         _t('BraftonApi.BRAFTONAPIKEY', 'Brafton Api Key')
        //     )
        // );
    }
}