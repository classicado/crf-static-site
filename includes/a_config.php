<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			break;
		case "/php-template/rates.php":
			$CURRENT_PAGE = "Rates"; 
			$PAGE_TITLE = "Rates";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Comfort Rides Fleet";
	}
?>