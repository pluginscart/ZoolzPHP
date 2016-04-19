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

	$config_wsdl_url = 'your_wsdl_service_url_HERE'
	$config_authToken = 'your_auth_token_HERE'
	$zoolz = new ZoolzPHP($config_wsdl_url, $config_authToken);
	
	// Tell the library to output debug info
	$zoolz->debug(true);
	
```

#Methods
After creating a new instance of ZoolzPHP call any of the methods below 

##GetPlanInfo(int $plan_ID)

This method takes an int value `$plan_ID` and will attempt to get information of that Plan in Zoolz reseller account.

```php

	$zoolz->GetPlanInfo('331');
	print "<pre>\n";
	print_r($users);
	print "</pre>";
	
```