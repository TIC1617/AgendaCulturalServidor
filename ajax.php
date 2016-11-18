<?php
	/* Includes */
	include "controllers/EventsValidationController.php";
	include "controllers/LoginController.php";
	
	/* Ajax options */
	switch ($_POST['action']){
		case "eventsValidation":
			$event = new EventValidation();
			echo $event->check();
			break;
		case "loginValidation":
			$login = new Login();
			echo $login->check();
			break;
		default:
			echo "Error: action param incorrect.";
	}
?>