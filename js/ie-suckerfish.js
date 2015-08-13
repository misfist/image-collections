// Son of Suckerfish JavaScript to assist IE
// Thanks and credit goes to Patrick Griffiths and Dan Webb www.htmldog.com/articles/suckerfish/dropdowns

sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("li")
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
