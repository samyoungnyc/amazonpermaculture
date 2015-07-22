<?php 
$id = $_REQUEST['id']; ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sample Sales</title>

<link rel="stylesheet" href="../../../css/reset.css" type="text/css" />
<link rel="stylesheet" href="../../../css/style.css" type="text/css" />
<link rel="stylesheet" href="../../../css/navigation.css" type="text/css" />

</head>
 
<body style="background:#fff url(../../../../images/bg.png) repeat-x left top;">

<ul id="nav">
<li><a href="/list/index.php">Image Upload</a></li>
</ul>

<div id="upload">
Upload image . . . Will be sized to 72x72px<p style="height:10px;">
<form method="post" enctype="multipart/form-data" action="upload.php">
<input type="file" name="userfile" size:"250"><p>
<input type="submit" style="margin-top:10px;">
<input type="hidden" name="id" value="<?php echo $id; ?>">
</form>

</body>
</html>
