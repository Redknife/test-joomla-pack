<?php defined('_JEXEC') or die;
?>

<div class="reviews"> 
    <div class="reviews-wrapper">
      <div class="row-fluid">
        <div class="span12">
          <div class="page-header">
            <h1>Отзывы</h1>
          </div>
            <ul class="unstyled reviews-list">
            <?php foreach($this->items as $review) : $date = JFactory::getDate($review->date); ?>
                <li class="one-review white-box">
                    <div class="review-text-wrapper">
                        <p class="review-text">
                          <?php echo strip_tags($review->text); ?>
                        </p>
                    </div>
                    <div class="reviewer-info">
                        <?php if(!empty($review->organization)): ?>
                            <span class="reviewer-org">
                                <?php echo '('.$review->organization.')'; ?>
                            </span>
                        <?php endif; ?>

                        <div class="star-rating">
                            <span class="rate-stars star<?php echo $review->rate; ?>"></span>
                        </div>

                        <span class="reviewer-name">
                            <?php echo $review->fio; ?>
                        </span>
                        -
                        <span class="review-date">
                            <?php echo JHTML::_('date', $review->date, JText::_('d M') ); ?>
                        </span>
                    </div>
                </li>
            <?php endforeach; ?>
            </ul>
            <?php echo $this->loadTemplate('form'); ?>
        </div>
      </div>  
    </div>
</div>