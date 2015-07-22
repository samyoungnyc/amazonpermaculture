<?php

class Connect_ {
  function doConnect () {
    $connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_HOST) or die (mysql_error());
    $db = mysql_select_db(DB_DATABASE, $connect) or die (mysql_error());
  }
}

class Delete_ extends Connect_{
    function doDelete ($id) {
		$result = mysql_query("DELETE FROM Locations where id = $id LIMIT 1");
	}
}

/* *************** start here  ************* */
require_once ('startup.php');

$id = $_GET["id"];

$obj = new Delete_;

// connect
$obj->doConnect();
$obj->doDelete($id);

header("Location:/list/index.php");

exit;

?>



