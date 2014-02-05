<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php

//////// Revolver - Main Page Version 1.4 ( 	 )
//////// By Tubatomic Studio, llc ( www.tubatomic.com )
include 'config.php'; /// Your Settings File
////////
include 'code.php'; /// The Important Stuff
////////
echo $jscript_slideshow; // Adds the slide show javascript
?>
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x=icon"/>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="css/sitewide.css" />
<link rel="alternate" type="application/rss+xml" title="RSS" href="rss.php" />
<title><?php echo $sitetitle ?></title>

<script type="text/javascript">
	if((navigator.userAgent.match(/iPhone/i)) ||
		(navigator.userAgent.match(/iPod/i)) ||
		(navigator.userAgent.match(/iPad/i))) {
			window.onload = function() {
			setTimeout(function(){window.scrollTo(0, 1);}, 100);
	   }
	}
</script>
        
</head>

<body>	
<div class="nav">
	<a href="<?php echo $thisfilename ?>?pg=<?php echo $prevpage; ?>" class="prev"></a>
	<a href="<?php echo $thisfilename ?>?pg=<?php echo $nextpage; ?>" class="next"></a>
</div>

<?php $class = ($pg != $imgcount) ? 'class="noLinks"' : 'class="addLinks"'; ?>

<div id="coastline" <?php echo $class; ?>>
<a href="<?php echo $thisfilename ?>?pg=<?php echo $nextpage; ?>"><img src="<?php echo $imagesource; ?>" alt="<?php echo $sitetitle . " - " . $month."/".$day."/".$year; ?>" height="<?php echo $imageheight; ?>" width="<?php echo $imagewidth; ?>" border="0" /></a>
        <a href="assets/HG_Sitemap.pdf" class="hg_link1"></a>
        <a href="assets/OGI_Screens.zip" class="hg_link2"></a>
</div>

<!--<div class="nav bottom">
	<a href="http://huntandgather.com" target="_blank"><img src="img/logo.png" width="113" height="24" border="0" class="logo" /></a>
    <a href="http://huntandgather.com" target="_blank"><img src="img/url.png" width="129" height="8" border="0" class="url" /></a>
</div>-->
</body>
</html>