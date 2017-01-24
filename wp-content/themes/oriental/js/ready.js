// fix the left menu being position absolute UI bug

function fixRightContentContainer() {

	var leftContainer = document.getElementById('sidebar');

	var rightContainer = document.getElementById('content');



	if(leftContainer && rightContainer) {

		var leftContainerHeight = leftContainer.offsetHeight;

		var rightContainerHeight = rightContainer.offsetHeight;

		if(leftContainerHeight > rightContainerHeight) {

			if(jQuery.browser.msie && jQuery.browser.version == '6.0') {

				$("div#content").height(leftContainerHeight);

			} else {

				$("div#content").attr("style", "min-height: "+leftContainerHeight+"px");

			}

		}

	}

}



// prepare the form when the DOM is ready 

$(document).ready(function() {

	fixRightContentContainer();

}); // end of DOM ready