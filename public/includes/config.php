<?php
	$path = $_SERVER["SCRIPT_NAME"]; 
	$page=basename($path);
	switch($page) {
		case "listings.php":
			$CURRENT_PAGE = "Listings"; 
			$PAGE_TITLE = "Property Management | Listings";
			break;
		case "myAdvertisements.php":
			$CURRENT_PAGE = "My Advertisements";
			$PAGE_TITLE = "Property Management | My Advertisements";
			break;
		case "newAdvertisement.php":
			$CURRENT_PAGE = "Create Advertisement";
			$PAGE_TITLE = "Property Management | Advertise";
			break;
		case "login.php":
			$CURRENT_PAGE = "Sign-In";
			$PAGE_TITLE = "Property Management | Sign-In";
			break;
		case "register.php":
			$CURRENT_PAGE = "Register";
			$PAGE_TITLE = "Property Management | Register";
			break;
		case "adminPortal.php":
			$CURRENT_PAGE = "Admin Portal";
			$PAGE_TITLE = "Property Management | Admin Portal";
			break;
		case "payment.php":
			$CURRENT_PAGE = "Payment";
			$PAGE_TITLE = "Property Management | Payment";
			break;
		case "profile.php":
			$CURRENT_PAGE = "Profile";
			$PAGE_TITLE = "Property Management | Profile";
			break;
		case "propertyInfo.php":
			$CURRENT_PAGE = "Info";
			$PAGE_TITLE = "Property Management | Info";
			break;
		case "submit.php":
			$CURRENT_PAGE = "Submit";
			$PAGE_TITLE = "Property Management | Form";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Property Management | Home";
	}
?>