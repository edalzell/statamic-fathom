<?php

namespace Edalzell\Fathom\Widgets;

use BeyondCode\FathomAnalytics\FathomAnalytics;
use Illuminate\Support\Carbon;
use Statamic\Widgets\Widget;

class FathomWidget extends Widget
{
    public function html()
    {
        $email = '';
        $password = '';
        $siteId = '';

        $analytics = new FathomAnalytics($email, $password);

        // $sites = $analytics->getSites();

        $analytics->getCurrentVisitors($siteId);

        // Returns the visitor data for today
        $analytics->getData($siteId);

        // Returns the visitor data for the whole week until today
        $analytics->getData($siteId, Carbon::now()->startOfWeek());

        // Returns the visitor data for two days ago until yesterday.
        $analytics->getData($siteId, Carbon::now()->subDays(2), Carbon::now()->subDays(1));

        return view('fathom::widgets.fathom', []);
    }
}
