function loginfnc() {
	var email = document.getElementById("mail").value;
	var password = document.getElementById("passwrd").value;
	var dataString = '&email1=' + email + '&password1=' + password;
	if (email == '' || password == '') {
		alert("Please Fill All Fields");
	}
	else
	{
		$.ajax({
		   	type: "POST",
		   	url: "user_login.php",
			data: dataString,
	   		cache: false,
	   		success: function(html) {
	     		window.location.replace('home.php');
	     	}
		});
	}
}