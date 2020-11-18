var $ = function(id) {
	return document.getElementById(id);
}

var checkCredentials = function() {
	var username = $("username").value;
	
	var passwd = $("passwd").value;

	var email = $("email").value;
	
	var creditcardno = parseInt($("creditcardno").value);
	
	var error1 = "*";
	var error2 = "*";
	var error3 = "*";
	var error4 = "*";	
	
	if (username === "") {
		error1 = "Username must NOT be empty.";
	}
	if (passwd === "") {
		error2 = "Password must NOT be empty.";
	}
	if (email === "") {
		error3 = "Email must NOT be empty.";
	}	
	if (isNaN(creditcardno) || creditcardno === "" || creditcardno.toString().length != 16) {
		error4 = "Credit Card Number must be numeric, not empty, and have a length of 16 characters.";
	}
	if (username != "" && passwd != "" && email != "" && !isNaN(creditcardno) && creditcardno != "" && creditcardno.toString().length == 16) {
		error1 = "";
		error2 = "";
		error3 = "";
		error4 = "";
	}
	
	$("error1").firstChild.nodeValue = error1;
	$("error2").firstChild.nodeValue = error2;
	$("error3").firstChild.nodeValue = error3;
	$("error4").firstChild.nodeValue = error4;
}

var clear = function() {
	var error1 = "*";
	var error2 = "*";
	var error3 = "*";
	var error4 = "*";
	$("error1").firstChild.nodeValue = error1;
	$("error2").firstChild.nodeValue = error2;
	$("error3").firstChild.nodeValue = error3;
	$("error4").firstChild.nodeValue = error4;
}
	
window.onload = function() {
	$("add").onclick = checkCredentials;
	$("clearEntries").onclick = clear;
}
