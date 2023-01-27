<?php
	$path = $_SERVER["SCRIPT_NAME"]; 
		$page=basename($path);
		switch($page) {
		
		case "listings.php":
			$CURRENT_PAGE = "Listings"; 
			$PAGE_TITLE = "Property Management | Listings";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Property Management | Home";
	}
?>