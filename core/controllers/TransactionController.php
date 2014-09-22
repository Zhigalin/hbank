<?php

### Controller file for transactions related actions rev 1.0 ###

class TransactionController
{
    private $_params;
 
    public function __construct($params)
    {
        $this->_params = $params;
    }
 
    public function createAction()
    {
        #create a new transaction item
    }
 
    public function readAction()
    {
        #read all the transaction items
    }
 
    public function updateAction()
    {
        #update a transaction item
    }
 
    public function deleteAction()
    {
        #delete a transaction item
    }
}