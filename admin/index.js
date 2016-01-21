// Validating Empty Field
function check_empty() {
	if (document.getElementById('username').value === "" || document.getElementById('password').value === "") {
		alert("Please give a username and password.");
		return false;
	}
	return true;
}