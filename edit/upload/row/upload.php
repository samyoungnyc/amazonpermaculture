<?php
//phpinfo();

$id = $_REQUEST['id'];
print "id: $id";
require('startup.php');

$connect = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die (mysql_error());
print "db: $db)";
$db = mysql_select_db(DB_DATABASE, $connect) or die (mysql_error());
define("FS_PATH", "/var/www/html/edit/upload/row/images");
print "db: $db)";
//$userfile = sizeof($_FILES['userfile'];
//print "FILEs $userfiles\n";
##
print_r(array_values($_FILES));
if (move_uploaded_file($_FILES['userfile']['tmp_name'], FS_PATH.$_FILES['userfile']['name'])) {
	print "File is valid, and was successfully uploaded.  Here's some more debugging info:\n";

} else {
    print "Possible file upload attack!  Here's some debugging info:\n";
    print_r($_FILES);
}
exit;
##	
##$pos = strpos($_FILES['userfile']['name'], ".");
##$ext = strtolower(substr($_FILES['userfile']['name'], $pos + 1));
##
##switch ($ext) {
##	case ("gif") 	: $type = "gif"; break;
##	case ("jpg") 	: $type = "jpg"; break;
##	case ("jpeg")   : $type = "jpg"; break;
##	case ("qt") 	: $type = "mov"; break;
##	case ("mov") 	: $type = "mov"; break;
##	case ("mp3") 	: $type = "mp3"; break;
##	case ("mp4") 	: $type = "mp4"; break;
##	case ("pdf") 	: $type = "pdf"; break;
##	case ("png")	: $type = "png"; break;
##	default         : $type = "error"; 
##}
##
##if ($type == "error") {
##	echo "Unrecognized file type. Valid file types: gif, jpg, jpeg, qt, mov, pdf, mp3, mp4. <br> Please convert any word processing files to a PDF file which is supported as a valid file type";
##	exit;
##}
##
##// remove spaces from filename and rename
##$new_file = preg_replace('/\s+/', '', $_FILES['userfile']['name']);
##
##system("convert -geometry 50x50 /var/www/html/images/$new_file /var/www/html/images/$new_file"); 
##
##$large = "/var/www/html/images/$new_file";  
##
##$sql = "UPDATE Locations SET rowimage ='$large' WHERE id = $id"; 
##
##$result = mysql_query($sql);
##print $result;
##
##header("Location:/list/index.php);
?>
