<?php
	 class email {

	 	var $email = '';
	
	 	/**
	 	 * This function validates using PHP's filter_var function
	 	 * PHP >= 5.2.0
	 	 * @param  string $email This is the email address you are verifying		
	 	 * @return [type]        [description]
	 	 */
	 	function validate($email) {
	 		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 			return TRUE;
	 		}
	 	}


	 	function validateDNS($email) {
	 		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 			$domain = substr(strchr($email, '@'), 1);
	 			if(checkdnsrr($domain, 'MX')) {
	 				return true;
	 			}
	 		}
	 	}


	 	/**
	 	 * This function validates whether or not a given email address is in good format via regular expression.
	 	 * @param  string $email The email addres you want to validate
	 	 * @return bool 		 
	 	 */
	 	function validateRegEx($email) {
	        if (eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,8})$", $email))
	        {
	            return TRUE;
	        } 
	 	}
	 	
	 	/**
	 	 * This function returns The domain of a given email
	 	 * @param  string $email The email address you want to check
	 	 * @return string        The domain you are looking for
	 	 */
	 	function domain($email) {
	 		if(strpos($email, "@")) {
	 			$dat = explode("@", $email);
	 			return $dat[1];
	 		} 
	 	}

	 	/**
	 	 * Checks whether or not a given email address is for an educational institutioin
	 	 * @param  string $email The Email Address
	 	 * @return bool        IS EDU / IS NOT EDU
	 	 */
	 	function ifEdu($email) {
	 		if (preg_match('/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+edu$/i', $email)) {
	 			return TRUE;
	 		}
	 	}

	 	/**
	 	 * Checks whether or not a given email address is for a government entity
	 	 * @param  string $email The Email Address
	 	 * @return bool        IS GOV / IS NOT GOV
	 	 */
	 	function ifGov($email) {
	 		if (preg_match('/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+gov$/i', $email)) {
	 			return TRUE;
	 		}
	 	}

	 	/**
	 	 * Checks whether or not a given email address is from a military entity
	 	 * @param  string $mail The Email Address
	 	 * @return bool       IS MIL / IS NOT MIL
	 	 */
	 	function ifMil($mail) {
	 		if (preg_match('/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+mil$/i', $email)) {
	 			return TRUE;
	 		}
	 	}



	}
?>