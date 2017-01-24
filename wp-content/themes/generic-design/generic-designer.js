var w3c = false;
var ie = false;
var ns = false;
var sa = false;
if (document.getElementById) {
	var w3c = true;
}
if (document.all) {
	var ie = true;
}
if (document.layers) {
	var ns = true;
}
if ((navigator.userAgent).indexOf("Safari")!=-1) {
	var sa = true;
}

//self-submitting select
function selectBrowse(frameName,formName,selectName) {
	var temp = "document." + formName + "." + selectName + ".options[document." + formName + "." + selectName + ".options.selectedIndex].value";
	if (eval (temp) != "do_nothing") {
		if (frameName=="") {
			location.href = eval (temp);
		} else if (frameName=="new") {
			window.open(eval (temp))
		} else {
			temp = frameName + ".location.href = " + temp;
			eval (temp);
		}
	}
}