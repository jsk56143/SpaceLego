var $ = function(id) {
	return document.getElementById(id);
}

var checkCredentials = function() {
    var username = $("username").value;
    var passwd = $("passwd").value;
	
	var error1 = "*";
	var error2 = "*";
	
	if (username === "") {
		error1 = "Username must NOT be empty.";
	}
	if (passwd === "") {
		error2 = "Password must NOT be empty.";
	}
	if (username != "" && passwd != "") {
		error1 = "";
		error2 = "";
		document.loginForm.submit();
	}
	
	$("error1").firstChild.nodeValue = error1;
    $("error2").firstChild.nodeValue = error2;
}

var clear = function() {
	var error1 = "*";
	var error2 = "*";
	$("error1").firstChild.nodeValue = error1;
	$("error2").firstChild.nodeValue = error2;
}
	
window.onload = function() {
	$("loginButton").onclick = checkCredentials;
	$("clearEntries").onclick = clear;
}
