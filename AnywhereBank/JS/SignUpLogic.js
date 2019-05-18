// Authors: Charlette, Glen, Jay, Luke

function ValidateLogin() {
	var user = document.getElementById("usr").value;
	var pass = document.getElementById("pwd").value;

	var isvalid = checkLogin( user, pass );

	var remember = document.getElementById("remember");

	// So we need to write a cookie to implement the remember me function apparently
	// I'll need to look into it more if we want it. It shouldn't be very difficult tho

	return isvalid;
}

function ValidateSignUp() {
	var firstname = document.getElementById("first-name").value;
	var lastname = document.getElementById("last-name").value;
	var accountnumber = document.getElementById("account-number").value;
	var phonenumber = document.getElementById("phoneNumber").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	var birthdate = document.getElementById("birthDate").value;

	if(firstname.length==0 || lastname.length==0 || accountnumber.length==0 || 
	phonenumber.length==0 || email.length==0 || password.length==0 || birthdate.length==0){
		document.getElementById("empty-entry").style.display='block';
	}

	//Store Account information to profile

	var contact = document.getElementById("contact-method")
	var contactmethod = contact.options[contact.selectedIndex].value;

	var privacypolicy = document.getElementById("privacy-policy").checked;
	var termsofagreement = document.getElementById("terms-of-agreement").checked;

	//flags
	var u = checkUsername( email );
	var p = checkPassword( password );

	var pt = checkPrivacyAndTerms( privacypolicy, termsofagreement );
	var an = checkAccountNumber( accountnumber );
	var ev = checkEmail( email );
/*
	console.log(u);
	console.log(p);
	console.log(pt);
	console.log(an);
	console.log(ev);
	*/
	if(u&&p&&pt&&an&&ev){
		return true;
	}
	return false;
}

function checkLogin( user, pass ){
	var validate = true;

	// Check for username and password match in database
	if(!user.length){ 
		document.getElementById("usr-empty").style.display='block';
		validate = false; 
	} 
	if(!pass.length){ 
		document.getElementById("pwd-empty").style.display='block';
		validate = false; 
	}

	return validate;
}

function checkUsername( user ) {

	// If user is already tied to an account error

	return true;
}

function checkPassword( pwd ) {
	//var strength = document.getElementById(‘strength’);
	var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W).*$", "g");
	var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
	var enoughRegex = new RegExp("(?=.{6,}).*", "g");

	if (!pwd.length) {
		//no password entered
		var pe = document.getElementById("pwd-error");
		pe.style.display = 'block';
	} else if (!enoughRegex.test(pwd)) {
		//password not long enough
		var pe = document.getElementById("pwd-error");
		pe.style.display = 'block';
	}
	
	//Check for lowercase, uppercase, special, and numerical characters.
	if (strongRegex.test(pwd)) {
		//strong password
		return true;

	} else if (mediumRegex.test(pwd)) {
		//medium password
		return false;
	} else {
		//weak password
		return false;
	}
}

function checkEmail( email ) {

	return true;
}

function checkAccountNumber( number ) {
	var validate = true;
	if( number.length < 10 ){
		var ae = document.getElementById("account-error");
		ae.style.display = 'block';
		validation = false;
	}

	// Check input
	var flag = true; // true if input was all numbers false if invalid characters are foun
	for(var i=0;i<number.length;i++){
		if(number.charCodeAt(i)<48||number.charCodeAt(i)>57){
			flag = false;
		}
	}
	//console.log(number.length);

	if(flag){
		//console.log("Number is Valid");
	}
	else{ 
		//console.log("INVALID ACCOUNT NUMBER"); 
		var ae = document.getElementById("account-error");
		ae.style.display = 'block';
		validate = false;
	}

	// Check if account exists

	return validate;
}

function checkPrivacyAndTerms( privacy, terms ) {
	var validate = true;
	console.log(privacy);
	console.log(terms);
	if(!privacy) {
		// Add Error to HTML
		var pp = document.getElementById("pp-error");
		pp.style.display = 'block';
		validate = false;
	}
	if(!terms) {
		// Add Error to HTML
		var toa = document.getElementById("toa-error");
		toa.style.display = 'block';
		validate = false;
	}

	return validate;
}

function ValidateContactUs(){
	var emptyflag = true;
	var firstname = document.getElementById("first-name").value;
	var lastname = document.getElementById("last-name").value;
	var accountnumber = document.getElementById("account-number").value;
	var phonenumber = document.getElementById("phone-number").value;
	var email = document.getElementById("email").value;
	var comment = document.getElementById("comment").value;

	if(firstname.length==0 || lastname.length==0 || accountnumber.length==0 || 
	phonenumber.length==0 || email.length==0 ){
		document.getElementById("empty-entry").style.display='block';
		emptyflag = false;
	}

	var an = checkAccountNumber(accountnumber);
	var e = checkEmail(email);

	if(an&&e&&emptyflag){
		return true;
	}
	return false;
}