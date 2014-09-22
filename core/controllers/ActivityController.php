<?php

### Controller file for activitys related actions rev 1.0 ###

class ActivityController
{
    private $_params;
 
    public function __construct($params)
    {
        $this->_params = $params;
    }
 
    public function createAction()
    {
        #create a new activity item
    }
 
    public function readAction()
    {
        #read all the activity items
    }
 
    public function updateAction()
    {
        #update a activity item
    }
 
    public function deleteAction()
    {
        #delete a activity item
    }
}