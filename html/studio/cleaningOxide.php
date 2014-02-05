<?php
	// edit these values
	$postTitle		= "cleaning oxidation";
	$images_folder	= "images";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<script src="/mint/?js" type="text/javascript"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script language="JavaScript" type="text/javascript" src="http://www.interrobangletterpress.com/scripts/all.js"></script>
<link href="../../css/popups.css" rel="stylesheet" type="text/css">
</head>

<body>
<h3><?php echo $postTitle ?></h3>

<?php
$Open = opendir($images_folder);
while($Files = readdir($Open)) {
	$Filename = $images_folder . "/" . $Files;
	if(is_file($Filename)) {
		print "<div class=\"thumbnail\">\n";
		print "<h4>$Files</h4>\n";
		print "<div class=\"tn_img\"><a href=\"javascript:;\" onClick=\"popImage('" . $images_folder . "/" . $Files . "','". $Files ."')\" title=\"Click to enlarge.\"><img src=\"" . $Filename ."\" border=\"0\" width=\"150\"></a></div>";
		print "</div>\n\n";
	}
}
closedir($Open);
?>
</body>
</html>
