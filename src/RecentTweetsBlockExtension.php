<?php namespace Anomaly\RecentTweetsBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;

/**
 * Class RecentTweetsBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class RecentTweetsBlockExtension extends BlockExtension
{

    /**
     * The block category.
     *
     * @var string
     */
    protected $category = 'social';

    /**
     * This extension provides a simple recent
     * tweets block for the blocks module.
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.blocks::block.recent_tweets';

    /**
     * The content view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.recent_tweets_block::content';

}
