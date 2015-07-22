<?php

function pageBrowser($totalrows,$mLimit,$amm,$queryStr,$nb,$b,$m) {

	$larrow = "&laquo; Previous &nbsp;"; //You can either have an image or text, eg. Previous
	$rarrow = "&nbsp; Next &raquo;"; //You can either have an image or text, eg. Next
	$wholePiece = ""; //This appears in front of your page numbers

	if ($totalrows > 0) {
		$mSoFar = 1;
		$cycle = ceil($totalrows/$amm);
		if (!isset($nb) || $nb < 1) {
			$nb = 1;
			$m = 1;
		}
		$minus = $nb-1;
		$start = $minus*$amm;
		if (!isset($b)) {
			$b = $start;
		}
		$preBegin = $nb-$mLimit;
		$preStart = $amm*$mLimit;
		$preStart = $start-$preStart;
		$preVBegin = $start-$amm;
		$preRedBegin = $nb-1;
		if ($start > 0 || $nb > 1) {
			$wholePiece .= "<a href='?m=".$preRedBegin
					."&nb=".$preBegin
					."&b=".$preVBegin
					.$queryStr."'>"
					.$larrow."</a>\n";
		}
		for ($i=$nb;$i<=$cycle;$i++) {
			if ($mSoFar == $mLimit+1) {
				$piece = "<a href='?nb=".$i
					."&m=".$i
					."&b=".$start
					.$queryStr."'>"
					.$rarrow."</a>\n";
				$wholePiece .= $piece;
				break;
			}
			$piece = "<a href='?b=".$start
				."&m=".$i
				."&nb=".$nb
				.$queryStr
				."'>";
			if ($m == $i) {
				$piece .= "</a><span class='current'>$i</span><a>";
			} else {
				$piece .= "<span class='links'>$i</span>";
			}
			$piece .= "</a>\n";
			$start = $start+$amm;
			$mSoFar++;
			$wholePiece .= $piece;
		}
		$wholePiece .= "\n";
		$wheBeg = $b+1;
		$wheEnd = $b+$amm;
		$wheToWhe = "<b>".$wheBeg."</b> - <b>";
		if ($totalrows <= $wheEnd) {
			$wheToWhe .= $totalrows."</b>";
		} else {
			$wheToWhe .= $wheEnd."</b>";
		}
		$sqlprod = " LIMIT ".$b.", ".$amm;
	} else {
		$wholePiece = "Sorry, no records to display.
		<br><a href='javascript:history.back()'>Return to previous page.</a>";
		$wheToWhe = "<b>0</b> - <b>0</b>";
	}

	return array($sqlprod,$wheToWhe,$wholePiece);
} 

?>
