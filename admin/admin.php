<?php

include("../common.php");
$db = db_connect();

require_once("check_cron_jobs.php");

$perms = "";

// Disable some live stuff
if (strpos(curPageURL(), "localhost") > 0) {
	$dis 			= "";
	$account_num	= "";
	$pword			= "";
} else if (strpos(curPageURL(), "natautoparts") > 0) {
	$dis 			= " disabled";
	$account_num	= "stephen";
	$pword			= "chaille1";
} else {
	$dis 			= " disabled";
	$account_num	= "";
	$pword			= "";
}

if (isset($_POST['show_accounts'])) { $show_accounts = $_POST['show_accounts']; } else { $show_accounts = 0; }


function output_table_select($db, $perms, $dis) {
	if (preg_match("/.*F.*/", $perms)) {
		print("
		<td align='center'>
		<select name='table' onChange='mod_table(this);'>
        <option>Modify Table</option>
        ");

		if (preg_match("/.*Fg.*/",  $perms))  { print("<option value='about_contact_returns'>About Us</option>");	}
		if (preg_match("/.*Fa.*/",  $perms))  { print("<option value='account_status'>Account Status</option>	");	}
		if (preg_match("/.*Fx.*/",  $perms))  { print("<option value='aust_post_rates'>Aust Post Rates</option> "); }
		if (preg_match("/.*Fy.*/",  $perms))  { print("<option value='aust_post_zones'>Aust Post Zones</option> "); }
		if (preg_match("/.*FA.*/",  $perms))  { print("<option value='branches'>Branches</option>"); }
		if (preg_match("/.*Fg.*/",  $perms))  { print("<option value='about_contact_returns'>Contact Us</option>");	}
		if (preg_match("/.*Fb.*/",  $perms))  { print("<option value='coolant'>Coolant</option>"); }
		if (preg_match("/.*Fc.*/",  $perms))  { print("<option value='coolpack'>Coolpack</option>"); }
		if (preg_match("/.*Fo.*/",  $perms))  { print("<option value='couriers'>Couriers</option>"); }
		if (preg_match("/.*Fd.*/",  $perms))  { print("<option value='delivery'>Delivery</option> "); }
		if (preg_match("/.*Fd.*/",  $perms))  { print("<option value='environment'>Environment</option> "); }
		if (preg_match("/.*Fv.*/",  $perms))  { print("<option value='feedback'>Feedback</option>"); }
		if (preg_match("/.*Fm.*/",  $perms))  { print("<option value='inv_status'>Invoice Status</option>"); }
		if (preg_match("/.*Fp.*/",  $perms))  { print("<option value='parts_extras'>Parts Extras</option>"); }
		if (preg_match("/.*Fs.*/",  $perms))  { print("<option value='parts_installations'>Parts Installations</option>"); }
		if (preg_match("/.*Ft.*/",  $perms))  { print("<option value='parts_questions'>Parts Questions</option>"); }
		if (preg_match("/.*Fu.*/",  $perms))  { print("<option value='parts_warranties'>Parts Warranties</option>"); }
		if (preg_match("/.*Fe.*/",  $perms))  { print("<option value='pay_method'>Pay Method</option>"); }
		if (preg_match("/.*D.*/",   $perms))  { print("<option value='permissions'>Permissions</option>"); }
		if (preg_match("/.*Fn.*/",  $perms))  { print("<option value='price_mark_ups'>Price Mark Ups</option>"); }
		if (preg_match("/.*Fn.*/",  $perms))  { print("<option value='privacy_policy'>Privacy Policy</option>"); }
		if (preg_match("/.*Fg.*/",  $perms))  { print("<option value='about_contact_returns'>Returns Policy</option>");	}
		if (preg_match("/.*Fq.*/",  $perms))  { print("<option value='sales_methods'>Sales Methods</option>"); }
		if (preg_match("/.*Fg.*/",  $perms))  { print("<option value='states'>States</option>"); }
		if (preg_match("/.*Fw.*/",  $perms))  { print("<option value='stock_min_max'>Stock Min/Max</option> "); }
		if (preg_match("/.*Fw.*/",  $perms))  { print("<option value='stock_min_max_formula'>Stock Min/Max Formula</option>"); }
		if (preg_match("/.*Fh.*/",  $perms))  { print("<option value='supplier_names'>Suppliers</option>"); }
		if (preg_match("/.*F01.*/", $perms))  { print("<option value='supplier_branches'>Suppliers Branches</option>"); }
		if (preg_match("/.*Fr.*/",  $perms))  { print("<option value='supplier_websites'>Suppliers Websites</option>"); }
		if (preg_match("/.*Fi.*/",  $perms))  { print("<option value='terms_and_conditions'>Terms & Conditions</option>"); }
		if (preg_match("/.*Fi.*/",  $perms))  { print("<option value='todo'>To Do</option>"); }
		if (preg_match("/.*Fj.*/",  $perms))  { print("<option value='categories'>Trade Categories</option>"); }
		if (preg_match("/.*Fk.*/",  $perms))  { print("<option value='users'>Users</option>"); }
		if (preg_match("/.*Fz.*/",  $perms))  { print("<option value='user_emails'>User Emails</option>"); }
		if (preg_match("/.*Fl.*/",  $perms))  { print("<option value='warranties'>Warranties</option>"); }

		print("
		</select>
		</td>
		");
	} else {
		print("<td>&nbsp;</td>");
	}
}



function output_reports($db, $perms, $dis) {
	if (preg_match("/.*R.*/", $perms)) {
		print("
    	<td align='center'>
		<select name='reports_sel' onChange='open_report(this);' style='color: white; background-color: black;'>
		<option value=''>Reports</option>
		<option value='cooldrive_pics'>Cooldrive Pics</option>
		<option value='ebay_listing'>eBay Listing</option>
		<option value='ip_accuracy'>IP Accuracy</option>
		<option value='missing_images'>Missing Images</option>
		<option value='missing_prices'>Missing Prices</option>
		<option value='supplier_data'>Supplier Data</option>
		<option value='supplier_partnos'>Supplier Partnos</option>
		<option value='top_movers'>Top Movers</option>
        </select>
        </td>
        ");
    } else {
    	print("<td>&nbsp;</td>");
    }
}



function output_suppliers($db, $perms, $dis) {
	if (strlen($perms) > 0) {
		print("
		<td align='center'>
		<select name='suppliers' onChange='run_function(this);'>
    	<option value=0>Suppliers</option>
    	");
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='create_supp_orderf'>Create Supp Order</option>");	}
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='view_supp_ordersf'>View Supp Order</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='create_cust_invoicef' disabled>Create Cust Invoice</option>");	}
		print("
		</select>
		</td>
		");
	} else {
		print("
		<td>&nbsp;</td>
		");
	}
}



function output_import_select($db, $perms, $dis) {
	if (strlen($perms) > 0) {
		print("
		<td align='center'>
		<select name='import' onChange='run_function(this);' style='color: white; background-color: black;'>
    	<option value=''>Import Functions</option>
    	");
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='import_accountsf'>Import Accounts</option>			");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='import_files'>Import Files</option>					");	}
		if (preg_match("/.*I.*/", $perms))  { print("<option value='import_parts_data'>Import Parts Data</option>		");	}
		if (preg_match("/.*.*/", $perms))	{ print("<option value='import_parts_groupsf'>Import Parts Group</option>	");	}
		if (preg_match("/.*P.*/", $perms))	{ print("<option value='import_prices'>Import Prices</option>				");	}
		if (preg_match("/.*.*/", $perms))	{ print("<option value='import_prices_sqlf'>Import Prices SQL</option>		");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='import_xref_pricesf'>Import Prices XRef</option>	");	}
		if (preg_match("/.*.*/", $perms))	{ print("<option value='import_proexf'>Import Proex</option>				");	}
		if (preg_match("/.*.*/", $perms))	{ print("<option value='import_supp_images'>Import Supplier Images</option>	");	}
		print("
		</select>
		</td>
		");
	} else {
		print("
		<td>&nbsp;</td>
		");
	}
}



function output_other($db, $perms, $dis) {
	if (strlen($perms) > 0) {
		print("
		<td align='center'>
		<select name='other' onChange='run_function(this);'>
    	<option value=''>Other Functions</option>
    	");
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='check_imagesf'>Check Images</option>");	}
		if (preg_match("/.*M.*/", $perms)) 	{ print("<option value='marketingf'>Cust Rel Mgmnt</option>");	}
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='eBayf'>eBay</option>");	}
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='server_image_management'>Server Image Management</option>");	}
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='infusion_softf'>Infusion Soft</option>");	}
		if (preg_match("/.*I.*/", $perms)) 	{ print("<option value='integrity_check'>Integrity Check</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='move_filesf'>Move Files</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='price_matchf'>Price Match</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='repair_databasef'>Repair Database</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='stock_controlf'".$dis.">Stock Control</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='stock_takef'>Stock Take</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='update_keyword_search'>Update Keyword Search</option>");	}
		if (preg_match("/.*I.*/", $perms))	{ print("<option value='update_related_table'>Update Related Table</option>");	}
		print("
		</select>
		</td>
		");
	} else {
		print("
		<td>&nbsp;</td>
		");
	}
}



function output_database_select($db, $perms, $dis) {
	if (preg_match("/.*R.*/", $perms)) {
		$Q = "show databases";
		$databases = arexecute($db, $Q, "admin.output_database_select.1");
		print("
    	<td align='center'>
		<select name='database' onChange='select_database(this);' style='color: white; background-color: black;'>
		<option value=''>Select Database</option>
		");

		foreach ($databases as $database) {
			if (isset($_COOKIE['database']) && strlen($_COOKIE['database']) > 0 && $_COOKIE['database'] == $database) {
				$sel = " selected";
			} else {
				$sel = "";
			}

			print("<option value='".$database."'".$sel.">".$database."</option>");
		}

		print("
        </select>
        </td>
        ");
    } else {
    	print("<td>&nbsp;</td>");
    }
}



function output_account_nums($db, $perms, $dis, $show_accounts) {
	if (strlen($perms) > 0) {
		if ($show_accounts) {
			print("
			<td>
			<select name='account_nums' onChange='anum_selected();'>
			<option>Select Account</option>
    		");

    		$Q = "select	number, business_name
    				from	accounts
    				where	category <> 'Retail'
    				order	by business_name";
    		if (!($ares = mysql_query($Q, $db))) {
				report_error($db, "trade.5", $Q);
			} else {
				// Fetch all the trade accounts
				while($row = mysql_fetch_array($ares, MYSQL_ASSOC)) {
					print("
					<option value='".$row['number']."'>".$row['business_name']." - ".$row['number']."</option>
					");
				}
			}

			print("
			<option value=''>-----------------RETAIL BELOW THIS POINT---------------</option>
			");

    		$Q = "select	number, name, business_name
    				from	accounts
    				where	category = 'Retail'
    				order	by name";
    		if (!($ares = mysql_query($Q, $db))) {
				report_error($db, "trade.5", $Q);
			} else {
				// Fetch all the retail accounts
				while($row = mysql_fetch_array($ares)) {
					if ($row['business_name'] == 'Blackburn Pickup' ||
						$row['business_name'] == 'Blackburn Workshop') {
						$name = $row['business_name'];
					} else {
						$name = $row['name'];
					}

					print("
					<option value='".$row['number']."'>".$name." - ".$row['number']."</option>
					");
				}
			}

    		print("
    		</select>
    		</td>
    		");
    	} else {
 			print("
			<td>
			<input type='button' name='sa' value='Show Accounts' onClick='show_accountsf();'>
    		</td>
    		");
   		}
    }
}



function output_accounts($db, $perms, $dis, $show_accounts) {
	if (strlen($perms) > 0 && $show_accounts) {
		print("
		<td align='center'>
		<select name='accounts' onChange='run_function(this);' style='font-weight: bold'>
    	<option value=0>Accounts</option>
    	");
		if (preg_match("/.*Aa.*/", $perms)) { print("<option value='add_account'>Setup New Account</option>	");	}
		if (preg_match("/.*Am.*/", $perms)) { print("<option value='modify_account'>Modify Account</option>	");	}
		if (preg_match("/.*Ad.*/", $perms))	{ print("<option value='delete_accountf'>Delete Account</option>");	}
		if (preg_match("/.*Ac.*/", $perms))	{ print("<option value='view_accountf'>View Account</option>	");	}
		print("
		</select>
		</td>
		");
	} else {
		print("
		<td>&nbsp;</td>
		");
	}
}



function output_printers($db) {
	print("
	<select name='default_printer'>
	<option value=''>Default Printer</option>
	");

    //foreach (printer_list(PRINTER_ENUM_LOCAL | PRINTER_ENUM_SHARED) as $printer) {
    //    print("<option value='".addslashes(strtoupper($printer["NAME"]))."'>".strtoupper($printer["NAME"])."</option>");
    //}
    print("</select>");
}


print("
<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Frameset//EN' 'http://www.w3.org/TR/html4/frameset.dtd'>
<html>
<head>
<title>Nationwide Autoparts - Administration</title>
<meta http-equiv='Content-Type'	 content='text/html; charset=iso-8859-1'>
<link REL='SHORTCUT ICON' HREF='../favicon.ico'>
<link rel='stylesheet' type='text/css' href='../nrstyle.css'>

<script type='text/JavaScript' language='JavaScript'>
<!--

var tries;

function start() {
	//alert('Entering start();');
	if (check_tries()) {
");

////////////////////////////////////////////////////
// Check if they pushed the Delete Account button //
////////////////////////////////////////////////////
if (isset($_POST['DeleteAccnt']) && $_POST['DeleteAccnt'] > 0) {
	$anum = $_POST['DeleteAccnt'];
	// Regardless of what happens here, delete the cookies and reset the delete button
	print("
	document.cookie = 'pwd=';
	document.order.DeleteAccnt.value 	= -1;
	document.order.DeleteInvoices.value = -1;
	");
	$Q = "delete from accounts
			where number = ".$anum;
	if (!($dres = mysql_query($Q, $db))) {
		report_error($db, "trade.1", $Q);
	} else if (($nrows = mysql_affected_rows($db)) == 0) {
		print("alert('ERROR: The account number ".$anum." was not found in the accounts table when attempting to delete it!');
		");
	} else if ($nrows == 1) {
		// Delete the invoices associated with that account
		if (isset($_POST['DeleteInvoices']) && $_POST['DeleteInvoices'] == 1) {
			$Q = "delete from invoices where account_num = ".$anum;
			if (!($dres = mysql_query($Q, $db))) {
				report_error($db, "trade.2", $Q);
			} else {
				print("
				alert('The account number ".$anum." and ".mysql_affected_rows($db)." invoices have been deleted.');
				");
			}
		} else {
			print("
			alert('The account number ".$anum." has been deleted.');
			");
		}
	}


//////////////////////////////////////////////////////////
// Check if we're coming back into here with a password //
//////////////////////////////////////////////////////////
} else if (isset($_POST['account_num']) && strlen($_POST['account_num']) > 0 &&
		   isset($_POST['passwd']) 		&& strlen($_POST['passwd']) > 0) {

	$anum 	= $_POST['account_num'];
	$pwd	= $_POST['passwd'];

	// Release the cookies
	print("
	ReleaseCookies();
	");

	if (is_numeric($anum)) {
		$Q = "select aid, status from accounts where number = ".$anum." and password = '".$pwd."'";
	} else {
		$Q = "select * from users where username = '".$anum."' and password = '".$pwd."'";
	}
	//print($Q);

	if (!($sres = mysql_query($Q, $db))) {
		report_error($db, "trade.3", $Q);
	} else if (mysql_num_rows($sres) == 0) {
		print("
		tries++;
		document.cookie = 'tries='+tries;
		alert('Sorry, no match found for that account number and password.');
		");
	} else if (mysql_num_rows($sres) > 1) {
		print("
		alert('ERROR: More than one row returned when fetching the account number ".$anum."');
		");
	} else if (mysql_num_rows($sres) == 1) {
		if (is_numeric($anum)) {
			// Get the aid
			$row = mysql_fetch_row($sres);
			$aid = $row[0];
			$status = $row[1];

			if ($status != "Active") {
				print("alert('Sorry, that account is not active at the moment. Please contact Nationwide Auto Parts for more details');
				");
			} else {
				// Increment the log in count
				$Q = "update accounts set logins = (logins + 1) where aid = ".$aid;
				if (!mysql_query($Q, $db)) {
					// Report the update accounts error
					report_error($db, "trade.4", $Q);
				} else {
					// Insert an entry into the logins table
					$Q = "insert into logins set account_num = ".$anum. ", date = ".time();
					if (!mysql_query($Q, $db)) {
						// Report the insert into logins error
						report_error($db, "trade.5", $Q);
					} else {
						$expireseconds = 1000 * 60 * 60 * 24 * 3650;
						print("SetCookiesTrade(".$anum.", ".$expireseconds.");
						");
					}
				}
			}
		} else {
			$perms = GetPerms($db, $anum);
			print("
			SetCookiesSu('".$anum."');
			");

			// If the 'tester' has logged on reload this page so the nationwi_autocopy database is selected
			$dbname = rexecute($db, "select database()", "admin.check_tries.6");
			if ($anum == 'tester' && $dbname == 'nationwi_autoparts') {
				print("
				window.location = window.location;
				");
			}
		}
	} else {
		print("
		alert('SERIOUS ERROR: ".mysql_num_rows($sres)." rows returned when fetching the account number ".$anum."');
		");
	}
}

// Check if a super user has logged on and get their permissions
if ((isset($_COOKIE['su']) && strlen($_COOKIE['su']) > 0) || strlen($perms) > 0) {
	if (strlen($perms) > 0) {
		//print("alert('perms set to ".$perms."');");
	} else {
		//print("alert('COOKIE[su] set to ".$_COOKIE['su']."');");
		$perms 				= GetPerms($db, $_COOKIE['su']);
	}
} else {
	//print("alert('COOKIE[su] not set');");
	$perms				= "";
}

print("
// Finish off check_tries()
}

// Check if a superuser has logged on
var su  = GetCookie('su');
var pwd = GetCookie('pwd');
");

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Crazy Domains don't allow cron jobs anymore, so short of going to a virtual server, we do cron jobs this way!      //
// Whenever a super user logs on to the admin page we just check if it is time to run any of the scheduled cron jobs! //
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_COOKIE['su'])) {
	check_cron_jobs($db, $_COOKIE['su']);
}

// Check if a 'tester' has logged on and the correct database has been chosen
$dbname = rexecute($db, "select database()", "admin.check_tries.6");
if (isset($_COOKIE['su']) && $_COOKIE['su'] == 'tester' && $dbname == 'nationwi_autocopy') {
	print("
	alert('NOTE: A COPY OF THE DATABASE IS BEING USED!!!');
	");
//} else {
//	print("
//	alert('Database: ".$dbname."');
//	");
}


print("
// Finish off the start() function
}

function show_accountsf() {
	document.order.show_accounts.value = 1;
	document.order.submit();
}

");

require("../MM_funcs.txt");
require("admin.js");

print("
//-->
</script>
</head>
");


print("
<body onLoad='start();'>
<form name='order' method='post' action=''>
<div align='center'>
<a href='http://www.nationwideautoparts.com.au'><img src='../images/top2.jpg' style='border-style: none'></a>
<h1><strong id='heading'>Administration</strong></h1>
<hr>
</div>

<!--div id='Site Down' style='position:relative; height:0px; top: 0px; z-index:1;'>
	<img src='../images/SiteDown.jpg'>
</div-->
");
//print_r($_COOKIE);
print("
<table border='0' align='center' cellspacing='5'>
<tr>
	<td align='right'>Account #:</td>
	<td><input name='account_num' id='account_num' type='text' size='15' value='".$account_num."'></td>
	<td>
		<input type='button' name='login'	value=' Login '			id='login'		onclick='loginf();'>
		<input type='button' name='logout'	value=' Logout '		id='logout' 	onClick='flogout();' title=\"When you press Logout you will remove this computer's memory of your account number and password.\">
		<input type='button' name='oc' 		value='Open Accounts'	id='OpenAcc'	onClick=\"output_accountsf();\">
	</td>
</tr>
<tr>
	<td align='right'>Password:</td>
	<td><input name='passwd' type='password' size='15' value='".$pword."' title='The number of dots shown here does not reflect the length of your password'></td>");
	output_account_nums($db, $perms, $dis, $show_accounts);
	output_accounts($db, $perms, $dis, $show_accounts);
print("
</tr>
</table>

<div align='center'>
<table border='0'>
<tr>
");


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

output_table_select($db, $perms, $dis);

output_reports($db, $perms, $dis);

output_suppliers($db, $perms, $dis);

output_import_select($db, $perms, $dis);

output_other($db, $perms, $dis);

if (strpos(curPageURL(), "localhost") > 0) {
	output_database_select($db, $perms, $dis);
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
print("
</tr>
<tr><td align='center' colspan='5'>
");


if (preg_match("/.*E.*/", $perms)) {
	print("
	<input type		='button'
			name	='modify_data'
			value	='Modify Data'
			onClick	=\"window.open('modify_data.php?run_ic=1', 'ModifyData', 'scrollbars=yes,width=1300,height=1000,left=0,top=0');\"
			>");
}

if (preg_match("/.*C.*/", $perms)) {
	print("
	<input type		='button'
			name	='view_invoices'
			value	='View Invoices'
			onClick	=\"window.open('old_invoices.php', 'OldInvoices', 'scrollbars=yes,width=1100,height=1100,left=0,top=0');\"
			>");
}

//<input name='import_websites' type='button' onClick='import_websitef();'	value=' Import Website  '>

print("
</td>
</tr>
<input type='hidden' name='DeleteInvoices'	value='0'>
<input type='hidden' name='DeleteAccnt' 	value='-1'>
<input type='hidden' name='acc_num'			value='0'>
<input type='hidden' name='show_accounts'	value=".$show_accounts.">
</table>
</div>
</form>
<br>
");

require('footer.php');

print("
</body>
</html>
");

?>
