/*

CUSTOM FORM ELEMENTS

Created by Ryan Fait
www.ryanfait.com

The only things you may need to change in this file are the following
variables: checkboxHeight, radioHeight and selectWidth (lines 24, 25, 26)

The numbers you set for checkboxHeight and radioHeight should be one quarter
of the total height of the image want to use for checkboxes and radio
buttons. Both images should contain the four stages of both inputs stacked
on top of each other in this order: unchecked, unchecked-clicked, checked,
checked-clicked.

You may need to adjust your images a bit if there is a slight vertical
movement during the different stages of the button activation.

The value of selectWidth should be the width of your select list image.

Visit http://ryanfait.com/ for more information.

*/

var checkboxHeight = "40";
var radioHeight = "40";
var selectWidth = "190";


/* No need to change anything after this */



var Custom = {
	init: function() {
		var inputs = document.getElementsByTagName("input"), span = Array(), textnode, option, active;
		for(a = 0; a < inputs.length; a++) {
			if((inputs[a].type == "checkbox" || inputs[a].type == "radio") && inputs[a].className == "styled") {
				span[a] = document.createElement("span");
				span[a].className = inputs[a].type;

				if(inputs[a].checked == true) {
                    $(span[a]).addClass('checked');
				}
				inputs[a].parentNode.insertBefore(span[a], inputs[a].nextSibling);
				inputs[a].onchange = Custom.clear;
				if(!inputs[a].getAttribute("disabled")) {
					span[a].onmousedown = Custom.pushed;
					span[a].onmouseup = Custom.check;
				} else {
					span[a].className = span[a].className += " disabled";
				}
			}
		}
		$('input + span + label').click(function(){
		    $(this).prev().prev().focus();
		});
		inputs = document.getElementsByTagName("select");
		for(a = 0; a < inputs.length; a++) {
			if(inputs[a].className == "styled") {
				option = inputs[a].getElementsByTagName("option");
				active = option[0].childNodes[0].nodeValue;
				textnode = document.createTextNode(active);
				for(b = 0; b < option.length; b++) {
					if(option[b].selected == true) {
						textnode = document.createTextNode(option[b].childNodes[0].nodeValue);
					}
				}
				span[a] = document.createElement("span");
				span[a].className = "select";
				span[a].id = "select" + inputs[a].name;
				span[a].appendChild(textnode);
				inputs[a].parentNode.insertBefore(span[a], inputs[a].nextSibling);
				if(!inputs[a].getAttribute("disabled")) {
					inputs[a].onchange = Custom.choose;
				} else {
					inputs[a].previousSibling.className = inputs[a].previousSibling.className += " disabled";
				}
			}
		}
		document.onmouseup = Custom.clear;
	},
	pushed: function() {
	    /*
		element = this.nextSibling;
		if(element.checked == true && element.type == "checkbox") {
			//this.style.backgroundPosition = "0 -" + checkboxHeight + "px";
			$(this).addClass('checked');
		} else if(element.checked == true && element.type == "radio") {
			//this.style.backgroundPosition = "0 -" + radioHeight + "px";
			$(this).addClass('checked');
		} else if(element.checked != true && element.type == "checkbox") {
			//this.style.backgroundPosition = "0 -" + checkboxHeight + "px";
			$(this).addClass('checked');
		} else {
			//this.style.backgroundPosition = "0 -" + radioHeight + "px";
			$(this).addClass('checked');
		}
		*/
	},
	check: function() {
		element = this.previousSibling;
		if(element.checked == true && element.type == "checkbox") {
			//this.style.backgroundPosition = "0 0";
			$(this).removeClass('checked');
			element.checked = false;
		} else {
			if(element.type == "checkbox") {
				//this.style.backgroundPosition = "0 -" + checkboxHeight + "px";
				$(this).addClass('checked');
			} else {
				//this.style.backgroundPosition = "0 -" + radioHeight + "px";
				$(this).addClass('checked');
				group = this.nextSibling.name;
				inputs = document.getElementsByTagName("input");
				for(a = 0; a < inputs.length; a++) {
					if(inputs[a].name == group && inputs[a] != this.previousSibling) {
						//inputs[a].nextSibling.style.backgroundPosition = "0 0";
						$(this).next().removeClass('checked');
					}
				}
			}
			element.checked = true;
			$(element).focus();
		}
	},
	clear: function() {
		inputs = document.getElementsByTagName("input");
		for(var b = 0; b < inputs.length; b++) {
			if(inputs[b].type == "checkbox" && inputs[b].checked == true && inputs[b].className == "styled") {
				//inputs[b].nextSibling.style.backgroundPosition = "0 -" + checkboxHeight + "px";
				$(inputs[b]).next().addClass('checked');
			} else if(inputs[b].type == "checkbox" && inputs[b].className == "styled") {
				//inputs[b].nextSibling.style.backgroundPosition = "0 0";
				$(inputs[b]).next().removeClass('checked');
			} else if(inputs[b].type == "radio" && inputs[b].checked == true && inputs[b].className == "styled") {
				//inputs[b].nextSibling.style.backgroundPosition = "0 -" + radioHeight + "px";
				$(inputs[b]).next().addClass('checked');
			} else if(inputs[b].type == "radio" && inputs[b].className == "styled") {
				//inputs[b].nextSibling.style.backgroundPosition = "0 0";
				$(inputs[b]).next().removeClass('checked');
			}
		}
	},
	choose: function() {
		option = this.getElementsByTagName("option");
		for(d = 0; d < option.length; d++) {
			if(option[d].selected == true) {
				document.getElementById("select" + this.name).childNodes[0].nodeValue = option[d].childNodes[0].nodeValue;
			}
		}
	}
}

$(document).ready(function(){
    Custom.init();
});