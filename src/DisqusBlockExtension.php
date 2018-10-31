<?php namespace Anomaly\DisqusBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;

/**
 * Class DisqusBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class DisqusBlockExtension extends BlockExtension
{

    /**
     * The extension category.
     *
     * @var string
     */
    protected $category = 'social';

    /**
     * This extension provides a disqus
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.disqus';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.disqus_block::content';

}
