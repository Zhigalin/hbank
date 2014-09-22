<?php

###########################################################
### Front controller file rev 1.2                       ###
### Implements routing to needed controller,            ###
###  works second the MVC scheme,                       ###
###   supports the CRUD action scheme                   ###
###########################################################

require 'sys/setup.inc';

#Define our id-key pairs
$api_users = array(
    'USER001' => 'bevVedyarAys6lufECofsyikViud', #randomly generated app key
);

#wrap the whole thing in a try-catch block to catch any wayward exceptions!
try {
	#get the encrypted request
	$enc_request = $_REQUEST['enc_request'];

   #get the provided app id
   $app_id = $_REQUEST['app_id'];

   #check first if the app id exists in the list of applications
   if( !isset($api_users[$app_id]) ) {
		throw new Exception('Application does not exist!');
   }
 
   #decrypt the request
   $params = json_decode(trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $api_users[$app_id], base64_decode($enc_request), MCRYPT_MODE_ECB)), true);
 
   #check if the request is valid by checking if it's an array and looking for the controller and action
   if( $params == false || isset($params['controller']) == false || isset($params['action']) == false ) {
		throw new Exception('Request is not valid');
   }
 
   #get the controller and format it correctly so the first
   #letter is always capitalized, and append 'Controller'
   $controller = ucfirst(strtolower($params['controller'])).'Controller';
 
   #get the action and format it correctly so all the
   #letters are not capitalized, and append 'Action'
   $action = strtolower($params['action']).'Action';
 
   #check if the controller exists. if not, throw an exception
   if( file_exists("controllers/{$controller}.php") ) {
		include_once "controllers/{$controller}.php";
   } else {
		throw new Exception('Controller is invalid. debug: '.$params['controller']);
   }
 
   #create a new instance of the controller, and pass0
   #it the parameters from the request
   $controller = new $controller($params);
 
   #check if the action exists in the controller. if not, throw an exception.
   if( method_exists($controller, $action) === false ) {
		throw new Exception('Action is invalid.');
   }
 
   #execute the action
	$data = $controller->$action();
	$result = array();
	$result['success'] = $data['success'];
   $result['data'] = $data;
	
} catch( Exception $e ) {
   #catch any exceptions and report the problem
   $result['success'] = false;
   $result['errormsg'] = $e->getMessage();
}
 
#echo the result of the API call
echo json_encode($result);
exit();