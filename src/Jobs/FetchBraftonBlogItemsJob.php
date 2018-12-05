<?php

namespace textagroup\brafton_api\Jobs;

use SilverStripe\DEV\BuildTask;
//use textagroup\brafton_api\Service\BraftonService;

/**
 * A job for fetching blog items from the Brafton API
 *
 * Connects to Brafton API and fetches blog items
 *
 * @author kirk.mayo@solnet.co.nz
*/


class FetchBraftonBlogItemsJob extends BuildTask {
    protected $title = 'Brafton API Job';

    protected $description = 'Fetches potential blog items form the Brafton API';

    public function run($request) {
        $service = new \textagroup\brafton_api\Service\BraftonService();
        $api = $service->getApi();
        if ($api) {
            $newsItems = $api->getNewsHTML();
            foreach ($newsItems as $item) {
                $service->addNews($item);
            }
        }   
    }   
}  
