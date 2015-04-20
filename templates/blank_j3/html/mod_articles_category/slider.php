<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_category
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<div class="category-module<?php echo $moduleclass_sfx; ?> slider">
	<?php foreach ($list as $item) : ?>
	    <div class="slide">
			<div class="article-wraper">

				<?php if ($params->get('show_author')) :?>
					<span class="mod-articles-category-writtenby">
					<?php echo $item->displayAuthorName; ?>
					</span>
				<?php endif;?>
				<?php if ($item->displayCategoryTitle) :?>
					<span class="mod-articles-category-category">
					(<?php echo $item->displayCategoryTitle; ?>)
					</span>
				<?php endif; ?>
				<?php if ($item->displayDate) : ?>
					<span class="mod-articles-category-date"><?php echo $item->displayDate; ?></span>
				<?php endif; ?>
				
                                <?php
                                        $images = new JRegistry();
                                        $images->loadString($item->images);
                                ?>
                                
                                <?php if ($images->get('image_intro')) :?>
                                
                                <img class="mod-articles-slide-image" src="<?php echo $images->get('image_intro') ?>" alt="<?php echo $images->get('image_intro_alt') ?>" style="float: <?php echo $images->get('float_intro') ?>" />
                                
                                <?php endif ?>
                                
                                <div class="slide-text">
                                    <h2>
                                    <?php if ($params->get('link_titles') == 1) : ?>
                                            <a class="mod-articles-slider-title <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
                                            <?php echo $item->title; ?>
                                    <?php else: ?>
                                        <?php echo $item->title; ?>
                                    <?php endif; ?></a>
                                            
                                    </h2>
                                
                                    <?php if ($params->get('show_introtext')) :?>
                                        <p class="mod-articles-slider-introtext">
                                            <?php echo $item->displayIntrotext; ?>
                                        </p>
                                    <?php endif; ?>
				
                                </div>
				
				<?php if ($params->get('show_readmore')) :?>
					<div class="mod-articles-category-readmore">
						<a class="readmore accent-btn <?php echo $item->active; ?>" href="<?php echo $item->link; ?>">
						<?php if ($item->params->get('access-view') == false) :
								echo JText::_('MOD_ARTICLES_CATEGORY_REGISTER_TO_READ_MORE');
							elseif ($readmore = $item->alternative_readmore) :
								echo $readmore;
								echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
							elseif ($params->get('show_readmore_title', 0) == 0) :
								echo JText::sprintf('MOD_ARTICLES_CATEGORY_READ_MORE_TITLE');
							else :
								echo JText::_('MOD_ARTICLES_CATEGORY_READ_MORE');
								echo JHtml::_('string.truncate', $item->title, $params->get('readmore_limit'));
							endif; ?>
						</a>
					</div>
				<?php endif; ?>
		</div>
	</div>
	<?php endforeach; ?>

</div>
