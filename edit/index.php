<?php

class Connect_ {
  function doConnect () {
    $connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_PORT) or die (mysql_error());
    $db = mysql_select_db(DB_DATABASE, $connect) or die (mysql_error());
  }
}

class Edit_ extends Connect_{
	
   function doEdit($id) {
	
		if ($id) {
			
			$sql = "SELECT * FROM Locations WHERE id = $id";
			$result = mysql_query($sql);
			$row = mysql_fetch_object($result);
			
			$location = htmlentities(stripslashes($row->location), ENT_QUOTES);
			$category = htmlentities(stripslashes($row->category), ENT_QUOTES);
			$address = htmlentities(stripslashes($row->address), ENT_QUOTES);
			$city = htmlentities(stripslashes($row->city), ENT_QUOTES);
			$state = htmlentities(stripslashes($row->state), ENT_QUOTES);
			$zipCode = htmlentities(stripslashes($row->zipCode), ENT_QUOTES);
			$country = htmlentities(stripslashes($row->country), ENT_QUOTES);
			$daysAndHours = htmlentities(stripslashes($row->daysAndHours), ENT_QUOTES);
			$contact = htmlentities(stripslashes($row->contact), ENT_QUOTES);
			$phone = htmlentities(stripslashes($row->phone), ENT_QUOTES);
			$email = htmlentities(stripslashes($row->email), ENT_QUOTES);
			$site = htmlentities(stripslashes($row->site), ENT_QUOTES);
			$facebook = htmlentities(stripslashes($row->facebook), ENT_QUOTES);
			$twitter = htmlentities(stripslashes($row->twitter), ENT_QUOTES);
			$instagram = htmlentities(stripslashes($row->instagram), ENT_QUOTES);
			$notes = htmlentities(stripslashes($row->notes), ENT_QUOTES); 
		} else {
				
			$created =  date("Y-m-d H:i:s");
			$modified =  date("Y-m-d H:i:s");
			
		}
			include('body.php');
	}
}

/* *************** main()  ************* */
require_once ('startup.php');

$id = $_GET["id"];
$obj = new Edit_;

// connect
$obj->doConnect();
$obj->doEdit($id);

exit;
