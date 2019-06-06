<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/php-template/about.php":
			$CURRENT_PAGE = "About"; 
			$PAGE_TITLE = "About Us";
			$PAGE_DESCRIPTION = "";
			break;
		case "/php-template/contact.php":
			$CURRENT_PAGE = "Contact"; 
			$PAGE_TITLE = "Contact Us";
			$PAGE_DESCRIPTION = "";
			break;
		case "/php-template/rates.php":
			$CURRENT_PAGE = "Rates"; 
			$PAGE_TITLE = "Rates";
			$PAGE_DESCRIPTION = "";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "Comfort Rides Fleet";
			$PAGE_DESCRIPTION = "Trusted name for luxury and economical car service. We have new Sedan, SUV and Taxi family vans at highly competitive prices.";
	}
?>