// JavaScript Document


function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}



function back() {
    history.go(-1);
}

function closeWin() {
	window.close();
}

function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}

function generateImages(postTitle, imageArray, thumbnailDirectory, largeImageDirectory) {
  document.write("<h3>" + postTitle + "</h3>");

  for (i=0; i<imageArray.length; i++) {
	if (i<9) {
	  var imageNumber	= "0" + (i+1);
	} else {
	  var imageNumber = i+1;
	}
	document.write(
	  "<div class=\"thumbnail\">" +
	  "<h4>" + imageArray[i] + "</h4>" +
	  "<div class=\"tn_img\"><a href=\"javascript:;\" onClick=\"popImage('" + largeImageDirectory + imageNumber + ".jpg','" + imageArray[i] + "')\" title=\"Click to enlarge.\"><img src=\"" + thumbnailDirectory + imageNumber + ".jpg\" border=\"0\"></a></div>" +
	  "</div>"
	);
  }
document.write("<br><br><br>");
}


//really not important (the first two should be small for Opera's sake)
PositionX = 10;
PositionY = 10;
defaultWidth  = 600;
defaultHeight = 450;

//kinda important
var AutoClose = false;

//don't touch
function popImage(imageURL,imageTitle){
	var imgWin = window.open('','_blank','scrollbars=yes,resizable=1,width='+defaultWidth+',height='+defaultHeight+',left='+PositionX+',top='+PositionY);
	if( !imgWin ) { return true; } //popup blockers should not cause errors
	imgWin.document.write('<html><head><title>'+imageTitle+'<\/title><script type="text\/javascript">\n'+
		'function resizeWinTo() {\n'+
		'if( !document.images.length ) { document.images[0] = document.layers[0].images[0]; }'+
		'var oH = document.images[0].height, oW = document.images[0].width;\n'+
		'if( !oH || window.doneAlready ) { return; }\n'+ //in case images are disabled
		'window.doneAlready = true;\n'+ //for Safari and Opera
		'var x = window; x.resizeTo( oW + 200, oH + 200 );\n'+
		'var myW = 0, myH = 0, d = x.document.documentElement, b = x.document.body;\n'+
		'if( x.innerWidth ) { myW = x.innerWidth; myH = x.innerHeight; }\n'+
		'else if( d && d.clientWidth ) { myW = d.clientWidth; myH = d.clientHeight; }\n'+
		'else if( b && b.clientWidth ) { myW = b.clientWidth; myH = b.clientHeight; }\n'+
		'if( window.opera && !document.childNodes ) { myW += 16; }\n'+
		'x.resizeTo( oW = oW + ( ( oW + 200 ) - myW ), oH = oH + ( (oH + 200 ) - myH ) );\n'+
		'var scW = screen.availWidth ? screen.availWidth : screen.width;\n'+
		'var scH = screen.availHeight ? screen.availHeight : screen.height;\n'+
		'if( !window.opera ) { x.moveTo(Math.round((scW-oW)/2),Math.round((scH-oH)/2)); }\n'+
		'}\n'+
		'<\/script>'+
		'<\/head><body onload="resizeWinTo();"'+(AutoClose?' onblur="self.close();"':'')+'>'+
		(document.layers?('<layer left="0" top="0">'):('<div style="position:absolute;left:0px;top:0px;">'))+
		'<img src='+imageURL+' alt="Loading image ..." title="" onload="resizeWinTo();" border="0" onClick="javascript:window.close()" title="Click image to close.">'+
		(document.layers?'<\/layer>':'<\/div>')+'<\/body><\/html>');
	imgWin.document.close();
	if( imgWin.focus ) { imgWin.focus(); }
	return false;
}