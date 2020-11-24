var $ = function(id) {
	return document.getElementById(id);
}

var checkCredentials = function() {
	var fund = $("fund").value;
	
	var noError = true;
	
	var error2 = "*";

	if (isNaN(fund) || fund === "" || fund <= 0) {
		error2 = "Fund must be numeric, not empty, and be greater than zero.";
		noError = false;	
	}
	if (noError == true) {
		error2 = "*";
		document.addFundForm.submit();
	}

	$("error2").firstChild.nodeValue = error2;
}
	
window.onload = function() {
	$("addFundButton").onclick = checkCredentials;
}