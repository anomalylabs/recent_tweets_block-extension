<?php namespace Anomaly\RecentTweetsBlockExtension;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\View\ViewIncludes;

/**
 * Class RecentTweetsBlockExtensionServiceProvider
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RecentTweetsBlockExtensionServiceProvider extends AddonServiceProvider
{

    /**
     * Register the addon.
     *
     * @param ViewIncludes $includes
     */
    public function register(ViewIncludes $includes)
    {
        $includes->add('scripts', 'anomaly.extension.recent_tweets_block::widgets');
    }

}
