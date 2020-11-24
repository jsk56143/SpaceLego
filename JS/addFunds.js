var $ = function(id) {
	return document.getElementById(id);
}

var checkCredentials = function() {
	var username = $("username").value;
	
	var fund = $("fund").value;
	
	var noError = true;
	
	var error1 = "*";
	var error2 = "*";
	
	if (username === "") {
		error1 = "Username must NOT be empty.";
		noError = false;
	}
	if (isNaN(fund) || fund === "" || fund <= 0) {
		error2 = "Fund must be numeric, not empty, and be greater than zero.";
		noError = false;	
	}
	if (noError == true) {
		error1 = "*";
		error2 = "*";
		document.addFundForm.submit();
	}
	$("error1").firstChild.nodeValue = error1;
	$("error2").firstChild.nodeValue = error2;
}
	
window.onload = function() {
	$("addFundButton").onclick = checkCredentials;
}