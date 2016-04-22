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
   var $client;

   // Constructor
   public function __construct($wsdl_url, $authToken)
   {
      $this->wsdl_url = $wsdl_url;
      $this->authToken = $authToken;
      $this->debug;
	  
	  $opts = array(
		'http'=>array(
		'user_agent' => 'PHPSoapClient'
		)
	);

		$context = stream_context_create($opts);
			
		$this->client = new SoapClient($this->wsdl_url,
                        array('stream_context' => $context,
                              'cache_wsdl' => WSDL_CACHE_NONE));
								   
   }



   // Enable/disable debugging
	public function debug($which)
   {
      $this->debug=$which;
   }

	

	public function CreateAccount($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				'Language'=>$Language,
		
			);
			*/
			return $this->client->CreateAccount($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}

	public function CreateAccountWithLanguage($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,	//boolean
				'Language'=>$Language,  //int
		
			);
			*/
			return $this->client->CreateAccountWithLanguage($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	
	public function CreateAccountWithNetworkDrive($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				'Language'=>$Language, //int
				'enableNetworkDrive'=>true, //Boolean
		
			);
			*/
			return $this->client->CreateAccountWithNetworkDrive($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}

	public function CreateAccountWithComputersLimit($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				'Language'=>$Language, //int
				'enableNetworkDrive'=>true, //Boolean
				'computersLimit'=>1, //int
		
			);
			*/
			return $this->client->CreateAccountWithComputersLimit($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	
	public function CreatePlan($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
				'planName'	=> 'bharat', //required 
				'instantStorageGB'=>'', //int
				'coldStorageGB'=>'', //int
				'users' => '',		// int
				'servers'=>'', //int
				'type'=>, //int
				'frequency'=>, //int
				
		
			);
			*/
			return $this->client->CreatePlan($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	
	public function UpgradeAccount($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
					'email'	=> '', //required 
				'planID'=>'', //int
			);
			*/
			return $this->client->UpgradeAccount($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	

	public function UpgradeAccountUsingAccountID($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
					'accountID'	=> '', //required 
				'planID'=>'', //int
			);
			*/
			return $this->client->UpgradeAccountUsingAccountID($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	
	public function ChangeAccountExpiryDate($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
					'email'	=> '', //required 
				'expiryDate'=>'', //int
			);
			*/
			return $this->client->ChangeAccountExpiryDate($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function ChangeAccountExpiryDateUsingAccountID($parameters){
		try{
			$parameters['authToken']=$this->authToken;
			/*
			$parameters_create_account = array (
					'accountID'	=> '', //required 
				'expiryDate'=>'', //int
			);
			*/
			return $this->client->ChangeAccountExpiryDateUsingAccountID($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function SuspendAccount($email){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['email']=$email;
			
			return $this->client->SuspendAccount($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function SuspendAccountUsingAccountID($accountID){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['accountID']=$accountID;
			
			return $this->client->SuspendAccountUsingAccountID($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function ActivateAccount($email){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['email']=$email;
			
			return $this->client->ActivateAccount($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function ActivateAccountUsingAccountID($accountID){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['accountID']=$accountID;
			
			return $this->client->ActivateAccountUsingAccountID($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function ToggleNetworkDrive($accountID, $isEnabled){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['accountID']=$accountID;
			$parameters['isEnabled']=$isEnabled;
			return $this->client->ToggleNetworkDrive($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function DeleteAccount($email){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['email']=$email;
			
			return $this->client->DeleteAccount($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function DeleteAccountUsingAccountID($accountID){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['accountID']=$accountID;
		
			return $this->client->DeleteAccountUsingAccountID($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function GetAccountInfo($email){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['email']=$email;
		
			return $this->client->GetAccountInfo($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function GetAccountInfoUsingEmailAndPass($email,$password){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['email']=$email;
			$parameters['password']=$password;
			return $this->client->GetAccountInfoUsingEmailAndPass($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function GetAccountInfoUsingAccountID($accountID){
		try{
			$parameters['authToken']=$this->authToken;
			$parameters['accountID']=$accountID;
		
			return $this->client->GetAccountInfoUsingAccountID($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}

	}
	
	public function GetPlanInfo($planID){
		try{
			
			$parameters = array (
				'authToken' => $this->authToken, // api key, to authenticate
				'planID' => $planID,		// the ID number for their plan
		
			);
									   
			return $this->client->GetPlanInfo($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	
	public function GetPlansInfo(){
		try{
			
			$parameters = array (
				'authToken' => $this->authToken, // api key, to authenticate
			//	'planID' => $planID,		// the ID number for their plan
		
			);
									   
			return $this->client->GetPlansInfo($parameters);
			
		}
		catch(Exception $e){
			
			$this->error=$e->getMessage();
			return false;
		}


	}
	
	public function ResetPassword($email, $password){
		try{
			
			$parameters = array (
				'authToken' => $this->authToken, // api key, to authenticate
				'email' => $email,		// 
				'password'=>$password, //new password.
		
			);
									   
			return $this->client->ResetPassword($parameters);
			
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