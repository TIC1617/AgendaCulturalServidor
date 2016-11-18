<?php
	/* Includes */
	include "controllers/EventsValidationController.php";
	
	/* Ajax options */
	switch ($_POST['action']){
		case "eventsValidation":
			$event = new EventValidation();
			echo $event->check();
			break;
		default:
			echo "Error: action param incorrect.";
	}
?>