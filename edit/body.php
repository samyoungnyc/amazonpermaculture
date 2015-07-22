<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Permaculture</title>

<link rel="stylesheet" href="../css/reset.css" type="text/css" />
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link rel="stylesheet" href="../css/navigation.css" type="text/css" />

<script language ="JavaScript">   
function confirmDelete() {
	return confirm("Are you sure you wish to delete this entry?");  
}   
</script>

<script type="text/javascript">
  
function sendForm() {
	document.myform.submit();
}

function back() {
	history.go(-1);
}

</script>

</head>

<body>

<h1>Permaculture</h1>

<div id="shell">

<div id="row-box">
	<img src=<?php echo $rowimage; ?>>
</div>

<div id="detail-box">
	<img src=<?php echo $detailimage; ?>>
</div>

<form name="myform" method="post" id="myform" action="post.php" onsubmit="return:false" class="iform" enctype="multipart/form-data">
<div id="imessageOK">Thank you! Message Sent!</div>
<div id="imessageERROR">Error: Message Not Sent!</div>

<div style="float:left;background-color:#fff;">

<ul>
<li><label for="Name">Location</label><input class="itext" type="text" name="location" id="location" value="<?php echo $location; ?>"/></li>
<li><label for="Category">Category</label><input class="itext" type="text" name="category" id="category" value="<?php echo $category; ?>"/></li>

<li class="iseparator">&nbsp;</li>

<li><label for="Address">Address</label><input class="itext" type="text" name="address" id="address" value="<?php echo $address; ?>"/></li>
<li><label for="City">City</label><input class="itext" type="text" name="city" id="city" value="<?php echo $city; ?>"/></li>
<li><label for="State">State</label><input class="itext" type="text" name="state" id="state" value="<?php echo $state; ?>"/></li>
<li><label for="ZipCode">Zip Code</label><input class="itext" type="text" name="zipCode" id="zipCode" value="<?php echo $zipCode; ?>"/></li>
<li><label for="country">Country</label><input class="itext" type="text" name="country" id="country" value="<?php echo $country; ?>"/></li>

<li class="iseparator">&nbsp;</li>

<li><label for="DaysAndHours">Days And Hours</label><input class="itext" type="text" name="daysAndHours" id="daysAndHours" value="<?php echo $daysAndHours; ?>"/></li>
<li><label for="Contact">Contact</label><input class="itext" type="text" name="contact" id="contact" value="<?php echo $contact; ?>"/></li>
<li><label for="Phone">Phone</label><input class="itext" type="text" name="phone" id="phone" value="<?php echo $phone; ?>"/></li>
<li><label for="Email">Email</label><input class="itext" type="text" name="email" id="email" value="<?php echo $email; ?>"/></li>

<li class="iseparator">&nbsp;</li>

<li><label for="Site">Site</label><input class="itext" type="text" name="site" id="site" value="<?php echo $site; ?>"/></li>
<li><label for="Facebook">Facebook</label><input class="itext" type="text" name="facebook" id="facebook" value="<?php echo $facebook; ?>"/></li>
<li><label for="Twitter">Twitter</label><input class="itext" type="text" name="twitter" id="twitter" value="<?php echo $twitter; ?>"/></li>
<li><label for="Instagram">Instagram</label><input class="itext" type="text" name="instagram" id="instagram" value="<?php echo $instagram; ?>"/></li>

<li class="iseparator">&nbsp;</li>


<li><label for="Notes">Notes</label><input class="itext" type="text" name="notes" id="notes" value="<?php echo $notes; ?>"/></li>
<li><label for="Created">Created Date</label><input class="itext" type="text" name="created" id="created" value="<?php echo "$created"; ?>"></li>
<li><label for="Modified">Modified Date</label><input class="itext" type="text" name="modified" id="modified" value="<?php echo "$modified"; ?>"></li>

<li class="iseparator">&nbsp;</li>
	


<li><label for="RowImage"><input type="submit" class="ibutton" name="rowimagebutton" id="rowimagebutton" value="Upload List Img" style="width:125px;">&nbsp;</label>
<li class="iseparator">&nbsp;</li>

<input type="button" class="ibutton" onclick="back()" name="Cancel" id="Cancel" value="Cancel">
<input type="button" class="ibutton" onclick="sendForm()" name="Save" id="Save" value="Save">
</li>
</ul>
<input type="hidden" name="id" value="<?php echo $id; ?>">

</form>
</div>
</body>
<html>
