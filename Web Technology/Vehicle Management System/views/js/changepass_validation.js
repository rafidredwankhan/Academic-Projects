function validate(pForm) {
	let flag = "";

	if (pForm.username.value === "") {
		document.getElementById('usernameErrMsg').innerHTML = "Please fill up the username";
		flag = "Empty";
	}

	if (pForm.oldpass.value === "") {
		document.getElementById('oldpassErrMsg').innerHTML = "Please fill up the Old password";
		flag = "Empty";
	}

	if (pForm.newPassword.value === "") {
		document.getElementById('newpassErrMsg').innerHTML = "Please fill up the New password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}