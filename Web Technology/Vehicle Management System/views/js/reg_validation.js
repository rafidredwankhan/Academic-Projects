function validate(pForm) {
	let flag = "";

	if (pForm.fname.value === "") {
		document.getElementById("fnameErrMsg").innerHTML = "Please fill up the firstname";
		flag = "Empty";
	}

	if (pForm.lname.value === "") {
		document.getElementById("lnameErrMsg").innerHTML = "Please fill up the lastname";
		flag = "Empty";
	}

	if (pForm.nid.value === "") {
		document.getElementById("nidErrMsg").innerHTML = "Please fill up the nid";
		flag = "Empty";
	}

	if (pForm.age.value === "") {
		document.getElementById("ageErrMsg").innerHTML = "Please fill up the age";
		flag = "Empty";
	}

	if (pForm.dob.value === "") {
		document.getElementById("dobErrMsg").innerHTML = "Please fill up the date of birth";
		flag = "Empty";
	}

	//if (pForm.fow.value === "") {
		//document.getElementById("fowErrMsg").innerHTML = "Please fill up the field of work";
		//flag = "Empty";
	//}

	if (pForm.email.value === "") {
		document.getElementById("emailErrMsg").innerHTML = "Please fill up the email";
		flag = "Empty";
	}

	if (pForm.mobileno.value === "") {
		document.getElementById("mobilenoErrMsg").innerHTML = "Please fill up the mobileno";
		flag = "Empty";
	}

	if (pForm.address.value === "") {
		document.getElementById("addressErrMsg").innerHTML = "Please fill up the address";
		flag = "Empty";
	}

	if (pForm.country.value === "") {
		document.getElementById("countryErrMsg").innerHTML = "Please fill up the country";
		flag = "Empty";
	}

	if (pForm.username.value === "") {
		document.getElementById("usernameErrMsg").innerHTML = "Please fill up the username";
		flag = "Empty";
	}

	if (pForm.password.value === "") {
		document.getElementById("passwordErrMsg").innerHTML = "Please fill up the password";
		flag = "Empty";
	}

	if (flag === "") {
		return true;
	}
	return false;

}