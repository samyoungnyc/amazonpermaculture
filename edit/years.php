<?php

$sql = "SELECT * FROM years";
$result = mysql_query($sql);

echo '<select class="iselect" name="startYear" id="startYear" style="width:60px;">';
while ($row = mysql_fetch_object($result)) {	
	echo "<option value=$row->year";	
	 if ($row->year == $startYear) {
		 echo " selected";
	 }
	echo ">$row->year";
}
echo "</select>";
?>
