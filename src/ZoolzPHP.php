<?php

/*

	Zoolz API warpper.
	
	Author: Bharat Kumar Dhaker
	Author Email: bharatkumardhaker@gmail.com
	

*/


class ZoolzPHP
{
   var  $wsdl_url;
   var  $authToken;
   var  $debug;
   var  $error;

   // Constructor
   public function __construct($wsdl_url, $authToken)
   {
      $this->wsdl_url = $wsdl_url;
      $this->authToken = $authToken;
      $this->debug;
   }



   // Enable/disable debugging
	public function debug($which)
   {
      $this->debug=$which;
   }

	

	public function GetPlanInfo($planID){
		try{

			$opts = array(
				'http'=>array(
				'user_agent' => 'PHPSoapClient'
				)
			);

			$context = stream_context_create($opts);
			
			$client = new SoapClient($this->wsdl_url,
                             array('stream_context' => $context,
                                   'cache_wsdl' => WSDL_CACHE_NONE));

			$parameters = array (
				'authToken' => $this->authToken, // api key, to authenticate
				'planID' => $planID,		// the ID number for their plan
		
			);
									   
			return $client->GetPlanInfo($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}



   // Debug logging
   function debuglog($message)
   {

      if($this->debug) printf("%s\n", $message);

   }


}


?>