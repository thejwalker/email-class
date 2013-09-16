<?php
	 class email {

	 	var $email = '';
	 	var $error = '';

	 	//
	 	// VALIDATE USING REGULAR EXPRESSIONS
	 	// 
	 	function validate_reg($email) {
	 		$valid = true;
	        if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,8})$", $this->email))
	        {
	            $valid = false;
	            $this->error_html = "$this->email is not properly formatted";
	        }
	        return $valid;
	 	}


	}
?>