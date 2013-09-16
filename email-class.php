<?php
	 class email {

	 	var $email = '';
	

	 	/**
	 	 * This function validates whether or not a given email address is in good format via regular expression.
	 	 * @param  string $email The email addres you want to validate
	 	 * @return bool 		 
	 	 */
	 	function validate_reg($email) {
	 		
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


	 	function if_edu($email) {
	 		if (preg_match('/^[a-z0-9_\-]+(\.[_a-z0-9\-]+)*@([_a-z0-9\-]+\.)+edu$/i', $email)) {
	 			return TRUE;
	 		}
	 	}


	}
?>