<?php
	 class email {

	 	var $email = '';
	 	var $error = '';

	 	/**
	 	 * [validate_reg description]
	 	 * @param  string $email The email addres you want to validate
	 	 * @return bool 		 
	 	 */
	 	function validate_reg($email) {
	 		$valid = true;
	        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,8})$", $this->email))
	        {
	            $valid = false;
	            $this->error = "$this->email is not properly formatted";
	        }
	        return $valid;
	 	}


	}
?>