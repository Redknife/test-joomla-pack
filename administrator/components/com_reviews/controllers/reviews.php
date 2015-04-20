<?php

defined('_JEXEC') or die;

class ReviewsControllerReviews extends JControllerAdmin
{
	public function __construct($config = array())
	{
		parent::__construct($config);
	}
	
	public function getModel($name = 'Review', $prefix = 'ReviewsModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
		return $model;
	}
        
    public function edit()
    {
        $id = JRequest::getVar('id', 0);
        $this->setRedirect('index.php?option=com_reviews&view=review&layout=edit&id='.$id);
    }
}