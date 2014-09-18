<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
date_default_timezone_set('Australia/Melbourne');


// Establish a connection to the database
function db_connect() {
	// Local
	if (strpos(curPageURL(), "localhost") > 0) {
		if (!($db = mysql_connect("localhost", "root", ""))) {
			report_error($db, "db_connect()", "mysql_connect()");
			exit;
		} else {
			mysql_select_db("barham_realestate", $db);
			return $db;
		}

	// Remote
	} else {
		if (!($db = mysql_connect("localhost", "barham_stephen", "1Chaille1"))) {
			report_error($db, "db_connect()", "mysql_connect()");
			die('Failed to connect to barham database!');
		} else {
			if (!mysql_select_db("barham_realestate", $db)) {
				report_error($db, "db_connect()", "mysql_select_db()");
				die('Failed to select barham_realestate database!');
			} else {
				return $db;
			}
		}
	}
}



// This function gets the URL of the current page
function curPageURL() {
	$pageURL = 'http';
	if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") { $pageURL .= "s"; }
	$pageURL .= "://";
	if ($_SERVER["SERVER_PORT"] != "80") {
		$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	} else {
		$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	}
	return $pageURL;
}



// This function just executes the passed in query
function execute($db, $Q, $location) {
	if (!mysql_query($Q, $db)) {
		report_error($db, $location." (common.execute.1)".$Q, $Q);
		return(0);
	} else {
		return(1);
	}
}



function rexecute($db, $Q, $location) {
	if (!($res = mysql_query($Q, $db))) {
		report_error($db, $location." (common.rexecute.1): ".$Q, $Q);
		return(0);
	} else if (mysql_num_rows($res) == 0) {
		return(0);
	} else if (mysql_num_rows($res) == 1) {
		$row = mysql_fetch_row($res);
		return($row[0]);
	} else if (mysql_num_rows($res) > 1) {
		report_error($db, $location." (common.rexecute.2)".$Q, $Q);
	}
}



function arexecute($db, $Q, $location) {
	$array = array();
	if (!($res = mysql_query($Q, $db))) {
		report_error($db, $location." (common.arexecute.1): ".$Q, $Q);
	} else if (mysql_num_rows($res) > 0) {
		while($row = mysql_fetch_row($res)) {
			$array[] = $row[0];
		}
	}
	return($array);
}



function aarexecute($db, $Q, $location) {
	$array = array();
	if (!($res = mysql_query($Q, $db))) {
		report_error($db, $location." (common.aarexecute.1): ".$Q, $Q);
	} else if (mysql_num_rows($res) > 0) {
		while($row = mysql_fetch_array($res, MYSQL_NUM)) {
			$array[] = $row;
		}
	}
	return($array);
}



// This function reports an error
function report_error($db, $location, $Query) {
	//print("alert('errno: ".mysql_errno($db)." error: ".mysql_error($db)."');");
	if (mysql_errno($db) == 1062) {
		$str = mysql_error($db);
		if (strpos($str, "number") > 0 || strpos($str, "key 2") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database with that Account Number. Please try again.";
		} else if (strpos($str, "phone") > 0 || strpos($str, "key 3") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database with that Phone Number. Please try again.";
		} else if (strpos($str, "fax") > 0 || strpos($str, "key 4") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database with that Fax Number. Please try again.";
		} else if (strpos($str, "del_street") > 0 || strpos($str, "key 5") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database with that Street & No. Please try again.";
		} else if (strpos($str, "make") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database for Make with the same value. Please try again.";
		} else if (strpos($str, "model") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database for Model with the same value. Please try again.";
		} else if (strpos($str, "detail") > 0) {
			$estr = "ERROR(".$location."): There is already an entry in the database for Detail with the same value. Please try again.";
		} else {
			$estr = "ERROR(".$location.") ".mysql_errno($db).": ".mysql_error($db);
		}
	} else {
		$estr = "ERROR(".$location.") ".mysql_errno($db).": ".mysql_error($db);
	}
	$estr = rem_item($estr, "'");
	//if ($Query != "-1") {
	//	print("alert('".$estr."');
	//	");
	//}
	//print($Query);

	// Don't try to email if we're on a local machine
	if (strpos(curPageURL(), "localhost") == 0) {
		mail("stephenlansell@gmail.com", "Nationwide Auto Parts Error", $estr." QUERY: ".$Query, "Nationwide Auto Parts");
	} else {
		print($location." ".$Query);
		exit;
	}
}



function serious_error($db, $location, $text) {
	if (strpos(curPageURL(), "nationwideautoparts") != 0) {
		$to		= GetEnviro($db, 'error_email');
		$to2	= GetEnviro($db, 'order_email');
		mail($to,  $location.$text, "Nationwide Autoparts");
		mail($to2, $location.$text, "Nationwide Autoparts");
	}
}



// This function removes the passed in character from the passed in string
function rem_item($str, $char) {
	$newstr = "";
	for ($i = 0; $i < strlen($str); $i++) {
		if (($cchar = substr($str, $i, 1)) != $char) {
			$newstr .= $cchar;
		}
	}
	return $newstr;
}

?>
