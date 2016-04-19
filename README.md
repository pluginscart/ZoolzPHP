ZoolzPHP
=================

A PHP class built to interface with the Zoolz API ([http://wiki.zoolz.com/category/reseller/reseller-api/](http://wiki.zoolz.com/category/reseller/reseller-api/))

## Installation

### Using Composer

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `bkd/zoolzphp`.

	"require": {
		"bkd/zoolzphp": "1.0.*"
	}

Next, update Composer from the Terminal:

    composer update

### Non-Composer Installation

* Grab the `src/ZoolzPHP.php`file and place it into your file structure.
* Require ZoolzPHP in the location you would like to utilize it.

```php
	require('ZoolzPHP.php');
```

#Usage

Create an instance of the class while passing in an array including your wsdl service URL and the authToken to work with.
```php

	$config_wsdl_url = 'your_wsdl_service_url_HERE';
	
	//$config_wsdl_url = "http://cloud2.zoolz.com/Services/Reseller/Service.asmx?wsdl";
	
	$config_authToken = 'your_auth_token_HERE';
	
	//$config_authToken =	'0a2cbe7c787711e3931322000a1e8728';
	
	$zoolz = new ZoolzPHP($config_wsdl_url, $config_authToken);
	
	// Tell the library to output debug info
	$zoolz->debug(true);
	
```

#Methods
After creating a new instance of ZoolzPHP call any of the methods below 

##GetPlanInfo(int $plan_ID)

This method takes an int value `$plan_ID` and will attempt to get information of that Plan in Zoolz reseller account.

```php

	$return = $zoolz->GetPlanInfo('331');
	print "<pre>\n";
	print_r($return);
	print "</pre>";
	
```

##CreateAccount(array $parameters)

This method takes an array values `$parameters` for new account creation and will attempt to crate account in Zoolz reseller account.

```php

	$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required 
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				//'Language'=>$Language,
		
			);
	$return = $zoolz->CreateAccount($parameters_create_account);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##CreateAccountWithLanguage(array $parameters)

This method takes an array values `$parameters` for new account creation and will attempt to crate account in Zoolz reseller account.
Here is language code: 
1 = English
3 = French 
5 = Polish
6 = Finnish

```php

	$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required 
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				'Language'=>$Language, //int
		
			);
	$return = $zoolz->CreateAccountWithLanguage($parameters_create_account);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##CreateAccountWithNetworkDrive(array $parameters)

This method takes an array values `$parameters` for new account creation and will attempt to crate account in Zoolz reseller account.

```php

	$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required 
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				'Language'=>$Language,
				'enableNetworkDrive'=>true, //Boolean
		
			);
	$return = $zoolz->CreateAccountWithNetworkDrive($parameters_create_account);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##CreateAccountWithComputersLimit(array $parameters)

This method takes an array values `$parameters` for new account creation and will attempt to crate account in Zoolz reseller account.

```php

	$parameters_create_account = array (
				'name'	=> 'bharat', //required 
				'email'=>'bharatkumardhaker@gmail.com', //required 
				'password'=>'testbharat',
				'planID' => '331',		// the ID number for their plan
				'sendEmail'=>true,
				'Language'=>$Language,
				'enableNetworkDrive'=>true, //Boolean
				'computersLimit'=>1, //int
		
			);
	$return = $zoolz->CreateAccountWithComputersLimit($parameters_create_account);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##CreatePlan(array $parameters)

This method takes an array values `$parameters` for new plan creation and will attempt to create new plans under the reseller account, giving the ability to choose the allowed instant and cold storage space, the number of users and server allowed, and the subscription frequency.

Plan Type It determines the plan type, when set to 0 the plan type will be Home plan, and when set to 1 the plan type will be Business plan, this value must be passed as integer.

Frequency
Passed as integer, this will set the frequency time for the plan, as shown below:
0 = Trial
1 = Free 
2 = Monthly
3 = Yearly

```php

	$parameters = array (
				'planName'	=> 'bharat', //required 
				'instantStorageGB'=>'', //int
				'coldStorageGB'=>'', //int
				'users' => '',		// int
				'servers'=>'', //int
				'type'=>, //int
				'frequency'=>, //int
			);
	$return = $zoolz->CreatePlan($parameters);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```


##UpgradeAccount(array $parameters)

Use this API to update user’s storage, users by assigning a different plan to a user account.

Plan ID The plan you wish to assign/upgrade the user to. You will need to create plans on the reseller system prior using this option and pass the ID number as an integer.

Note Upgrading the account via will not change the expiry date of the account. To update this information, you will need to call the Change Account Expiry Date API.


```php

	$parameters = array (
				'email'	=> '', //required 
				'planID'=>'', //int
			);
	$return = $zoolz->UpgradeAccount($parameters);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##UpgradeAccountUsingAccountID(array $parameters)

Use this API to update user’s storage, users by assigning a different plan to a user account.

Plan ID The plan you wish to assign/upgrade the user to. You will need to create plans on the reseller system prior using this option and pass the ID number as an integer.

Note Upgrading the account via will not change the expiry date of the account. To update this information, you will need to call the Change Account Expiry Date API.


```php

	$parameters = array (
				'accountID'	=> '', //required 
				'planID'=>'', //int
			);
	$return = $zoolz->UpgradeAccountUsingAccountID($parameters);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##ChangeAccountExpiryDate(array $parameters)

Use this API if you wish to change the expiry date of the account.
Note: Accounts that have been expired for more than 30 days may be subjected to deletion.


```php

	$parameters = array (
				'email'	=> '', //required 
				'expiryDate'=>'', //int
			);
	$return = $zoolz->ChangeAccountExpiryDate($parameters);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##ChangeAccountExpiryDateUsingAccountID(array $parameters)

Use this API if you wish to change the expiry date of the account.
Note: Accounts that have been expired for more than 30 days may be subjected to deletion.


```php

	$parameters = array (
				'accountID'	=> '', //required 
				'expiryDate'=>'', //int
			);
	$return = $zoolz->ChangeAccountExpiryDateUsingAccountID($parameters);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```


##SuspendAccount(string $email)

Use this API to suspend a specific account, if it fails to commit payment for example or upon request.


```php

	$return = $zoolz->SuspendAccount($email);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##SuspendAccountUsingAccountID(int $accountID)

Use this API to suspend a specific account, if it fails to commit payment for example or upon request.


```php

	$return = $zoolz->SuspendAccountUsingAccountID($accountID);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##ActivateAccount(string $email)

Use this API to activate a suspended account.

```php

	$return = $zoolz->ActivateAccount($email);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##ActivateAccountUsingAccountID(int $accountID)

Use this API to activate a suspended account.

```php

	$return = $zoolz->ActivateAccountUsingAccountID($accountID);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##ToggleNetworkDrive(int $accountID, boolean $isEnabled)

Use this API to activate the ability to use external/network drives for a certain user.

```php

	$return = $zoolz->ToggleNetworkDrive($accountID, $isEnabled);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##DeleteAccount(string $email)

Use this API to delete a specific account.
Important: Deleting an account will remove all account information and backed up data, so use this API with caution.

```php

	$return = $zoolz->DeleteAccount($email);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##DeleteAccountUsingAccountID(int $accountID)

Use this API to delete a specific account.
Important: Deleting an account will remove all account information and backed up data, so use this API with caution.

```php

	$return = $zoolz->DeleteAccountUsingAccountID($accountID);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##GetAccountInfo(string $email)

Here you can request account information about a specific user, such as storage space, used space, registration end date and last activity.

```php

	$return = $zoolz->GetAccountInfo($email);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##GetAccountInfoUsingEmailAndPass(string $email, string password )

Here you can request account information about a specific user, such as storage space, used space, registration end date and last activity.

```php

	$return = $zoolz->GetAccountInfoUsingEmailAndPass($email, $password);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##GetAccountInfoUsingAccountID(int $accountID)

Here you can request account information about a specific user, such as storage space, used space, registration end date and last activity.

```php

	$return = $zoolz->GetAccountInfoUsingAccountID($accountID);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```

##ResetPassword(string $email, string password )

To change user password using email id. 

```php

	$return = $zoolz->ResetPassword($email, $password);
	print "<pre>\n";
	print_r($return);
	 print "</pre>";	
	
```