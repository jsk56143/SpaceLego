var $ = function(id) {
	return document.getElementById(id);
}
var validateEmail = function(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

var checkCredentials = function() {
	var username = $("username").value;
	
	var passwd = $("passwd").value;

	var email = $("email").value;
	
	var creditcardno = parseInt($("creditcardno").value);

	var creditCardAmount = document.getElementById("creditcardamount").value;
	
	var noError = true;

	var error1 = "*";
	var error2 = "*";
	var error3 = "*";
	var error4 = "*";	
	var error5 = "*";
	
	if (username === "") {
		error1 = "Username must NOT be empty.";
		noError = false;
	}
	if (passwd === "") {
		error2 = "Password must NOT be empty.";
		noError = false;	
	}
	if (email === "" || validateEmail(email) == false) {
		error3 = "Email must NOT be empty or a valid Email.";
		noError = false;
	}	
	if (isNaN(creditcardno) || creditcardno === "" || creditcardno.toString().length != 16) {
		error4 = "Credit Card Number must be numeric, not empty, and have a length of 16 characters.";
		noError = false;
	}
	if (isNaN(creditCardAmount) || creditCardAmount === "" || creditCardAmount <= 0) {
		error5 = "Amount must be numeric, not empty, and be greater than zero."
		noError = false;
	}
	if (noError == true) {
		error1 = "";
		error2 = "";
		error3 = "";
		error4 = "";
		error5 = "";
		document.accountCreationForm.submit();
	}
	
	$("error1").firstChild.nodeValue = error1;
	$("error2").firstChild.nodeValue = error2;
	$("error3").firstChild.nodeValue = error3;
	$("error4").firstChild.nodeValue = error4;
	$("error5").firstChild.nodeValue = error5;
}

var clear = function() {
	var error1 = "*";
	var error2 = "*";
	var error3 = "*";
	var error4 = "*";
	var error5 = "*";
	$("error1").firstChild.nodeValue = error1;
	$("error2").firstChild.nodeValue = error2;
	$("error3").firstChild.nodeValue = error3;
	$("error4").firstChild.nodeValue = error4;
	$("error5").firstChild.nodeValue = error5;
	noError = true;
}
	
window.onload = function() {
	$("add").onclick = checkCredentials;
	$("clearEntries").onclick = clear;
}
