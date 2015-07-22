<?php
// setup connection to database
class Connect_ {
  function doConnect () {
    $connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_PORT) or die (mysql_error());
    $db = mysql_select_db(DB_DATABASE, $connect) or die (mysql_error());
  }
}

class Post_ extends Connect_{ 	
	
	function doPost($id) { 

		if ($id) {
			$sql = "UPDATE Locations SET 
					location = '$this->location',
					category = '$this->category',
					address = '$this->address',
					city = '$this->city',
					state = '$this->state',
					zipCode = '$this->zipCode',
					country = '$this->country',
					daysAndHours = '$this->daysAndHours',
					contact = '$this->contact',
					phone = '$this->phone',
					email = '$this->email',
					site = '$this->site',
					facebook = '$this->facebook',
					twitter = '$this->twitter',
					instagram = '$this->instagram',
					notes = '$this->notes'
					WHERE id = $id";
		} else {

			$sql = "INSERT INTO Locations 
					 (	location,
						category,
						address,
						city,
						state,
						zipCode,
						country,
						daysAndHours,
						contact,
						phone,
						email,
						site,
						facebook,
						twitter,
						instagram,
						notes,
						created,
						modified,
						rowimage)
					VALUES
					 (	'$this->location',
						'$this->category',
						'$this->address',
						'$this->city',
						'$this->state',
						'$this->zipCode',
						'$this->country',
						'$this->daysAndHours',
						'$this->contact',
						'$this->phone',
						'$this->email',
						'$this->site',
						'$this->facebook',
						'$this->twitter',
						'$this->instagram',
						'$this->notes',
						'$this->created',
						'$this->modified',
						'$this->rowimage')";
			
			$lastId = mysql_insert_id();
		}
		print($sql);
		$result = mysql_query($sql);
	
		if ($lastId == 0) {
			// do nothing means we have an id
		} else {
			$id = $lastId;
		}
		
		if ($this->rowimagebutton) {
			print "IGH";
			header("Location:upload/row/index.php?id=$id");
			exit;
		}
		
		if ($this->detailimagebutton) {
			header("Location:/edit/upload/detail/index.php?id=$id");
			exit;
		}


	}
}

/* *************** main()  ************* */ 

require_once ('startup.php'); 
$obj = new Post_; 

$id = mysql_escape_string($_REQUEST['id']);

$obj->location = mysql_escape_string($_REQUEST['location']);
$obj->category = mysql_escape_string($_REQUEST['category']);

$obj->address = mysql_escape_string($_REQUEST['address']);
$obj->city = mysql_escape_string($_REQUEST['city']);
$obj->state = mysql_escape_string($_REQUEST['state']);
$obj->zipCode = mysql_escape_string($_REQUEST['zipCode']);
$obj->country = mysql_escape_string($_REQUEST['country']);

$obj->daysAndHours = mysql_escape_string($_REQUEST['daysAndHours']);
$obj->contact = mysql_escape_string($_REQUEST['contact']);
$obj->phone = mysql_escape_string($_REQUEST['phone']);
$obj->email = mysql_escape_string($_REQUEST['email']);

$obj->site = mysql_escape_string($_REQUEST['site']);
$obj->facebook = mysql_escape_string($_REQUEST['facebook']);
$obj->twitter = mysql_escape_string($_REQUEST['twitter']);
$obj->instagram = mysql_escape_string($_REQUEST['instagram']);
$obj->notes = mysql_escape_string($_REQUEST['notes']);

$obj->created = mysql_escape_string($_REQUEST['created']);
$obj->modified = mysql_escape_string($_REQUEST['modified']);
$obj->rowimagebutton = mysql_escape_string($_REQUEST['rowimagebutton']);

// connect
$obj->doConnect();
$obj->doPost($id);

header("Location:../list/index.php");

exit; 

?> 
