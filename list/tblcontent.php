<?php

if ($row->samplesale == 1) $samplesale = "Sample Sale";
if ($row->inhouse == 1) $inhouse = "In House";
if ($row->unconfirmed == 1) $unconfirmed = "Unconfirmed";

print <<<_EOT_
<tr>
<td align="left" style="vertical-align:middle;" nowrap><a href=/edit/index.php?id=$row->id>$row->id</a></td>
_EOT_;

if ($row->location != "show") {
	echo "<td align='left' style='vertical-align:middle;font-weight:600;color:green;' nowrap>$row->location</td>";
} else {
	echo "<td align='left' style='vertical-align:middle;font-weight:600;color:red;' nowrap>$row->location</td>";
}

print <<<_EOT_
<td align="left" style="vertical-align:middle;" nowrap><a href=/sales/edit/index.php?id=$row->id>$row->category</a></td>
<td align="left" style="vertical-align:middle;" nowrap>$row->address</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->city</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->state</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->zipCode</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->country</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->daysAndHours</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->contact</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->phone</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->email</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->site</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->facebook</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->twitter</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->instagram</td>
<td align="left" style="vertical-align:middle;" nowrap>$row->notes</td>
<td><a href="delete.php?id=$row->id" onclick="return confirmDelete();"><img src="../images/delete.png"></td>
</tr>
_EOT_;

?>



