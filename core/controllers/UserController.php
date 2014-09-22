<?php

### Controller file for users related actions rev 1.0 ###

class UserController
{
    private $_params;
 
    public function __construct($params)
    {
        $this->_params = $params;
    }
 
    public function createAction()
    {
        #create a new user
    }
 
    public function readAction()
    {
        #read all the user data
    }
 
    public function updateAction()
    {
        #update a user
    }
 
    public function deleteAction()
    {
        #delete a user
    }
}