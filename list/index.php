<?php
// setup connection to database
class Connect_ {
  function doConnect () {
    $connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD, DB_PORT) or die (mysql_error());
    $db = mysql_select_db(DB_DATABASE, $connect) or die (mysql_error());
  }
}

// contains startup values
class List_ extends Connect_{

    function doList ($search_text) {

			// just get count
			if ($search_text) {
				$sql = "SELECT * FROM Locations WHERE location LIKE '%$search_text%' ORDER BY id DESC";
			} else {
				$sql = "SELECT * FROM Locations ORDER BY id DESC";
			}
			
			$result = mysql_query($sql);
			$n = mysql_num_rows($result);

			$navigate = pageBrowser($n,8,25,"$string",$_GET[nb],$_GET[b],$_GET[m]);

			$result = mysql_query($sql);
			
			$page = $_GET[m];
			$page--;
			$counter = ($page * 25) +1;
			
			include('tblheader.php');
	
			while ($row = mysql_fetch_object($result)) {
				include('tblcontent.php');
				$counter++;
			}
	
			include('tblfooter.php');
	}
}  
 
/* *************** main  ************* */
require_once('startup.php');
require_once('Pager/pager.php');

$search_text = $_REQUEST['search_text']; 

$obj = new List_; 
$obj->doConnect();
$obj->doList($search_text);

?>
