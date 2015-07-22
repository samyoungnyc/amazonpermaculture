<?php

class Connect_ {
  function doConnect () {
    $connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die (mysql_error());
    $db = mysql_select_db(DB_DATABASE, $connect) or die (mysql_error());
  }
}

class Edit_ extends Connect_{
	
   function doList() {

			$sql = "SELECT * FROM months";
			
			$result = mysql_query($sql);
			$n = mysql_num_rows($sql);
			print"N $n";
	}
}

/* *************** main()  ************* */
require_once ('startup.php');

$obj = new Edit_;

// connect
$obj->doConnect();
$obj->doList();

exit;

?>
