<?php
	// edit these values
	$postTitle		= "ISIS Box Set";
	$images_folder	= "images";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15561326-1");
pageTracker._trackPageview();
} catch(err) {}</script>
<script src="../../../../mint/?js" type="text/javascript"></script>
<script src="../../../../scripts/all.js" type="text/javascript"></script>

<link rel="stylesheet" href="../../../../css/style.css">

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="../../../../css/popup_noBkgd.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php
$Open = opendir($images_folder);
while($Files = readdir($Open)) {
	$Filename = $images_folder . "/" . $Files;
	if(is_file($Filename)) {
		print "<div class=\"thumbnail\">\n";
		print "<div class=\"tn_img\"><a href=\"javascript:;\" onClick=\"popImage('" . $images_folder . "/" . $Files . "','". $Files ."')\" title=\"Click to enlarge.\"><img src=\"" . $Filename ."\" border=\"0\" width=\"150\"></a></div>";
		print "</div>\n\n";
	}
}
closedir($Open);
?>
</body>
</html>
