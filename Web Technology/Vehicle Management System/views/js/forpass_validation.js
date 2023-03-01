function validate(pForm) {
	let flag = "";

	if (pForm.email.value === "") {
		document.getElementById("emailErrMsg").innerHTML = "Please fill up the email";
		flag = "Empty";
	}

	if (pForm.newPassword.value === "") {
		document.getElementById("newpassErrMsg").innerHTML = "Please fill up the New password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;
}