<?php

	class User {

		public $email;
		public $name;

		public function __construct($name, $email){
			// $this->name = 'mario';
			// $this->email = 'mario@thenetninja.co.uk';
			$this->name = $name;
			$this->email = $email;
		}

		public function login(){
			// echo 'the user logged in';
			echo $this->name . ' logged in';
		}

	}

	// $userOne = new User();
	
	// $userOne->login();
	// echo $userOne->name;

	$userTwo = new User('yoshi', 'yoshi@thenetninja.co.uk');

	// echo $userTwo->email;
	$userTwo->login();



?>
