// var username ="Admin";
// var password ="Admin";

// var usr = document.getElementById("usr");
// var psd = document.getElementById("psd");

// if(usr === username && psd === password){
// 	document.open("project/complaint_register.html");
// }
// else{
// 	alert("invalid user");
// }

var username ="Admin";
var password ="Admin";

var usr = document.getElementById("usr");
var pswrd = document.getElementById("psd");
var button = document.getElementById("but");

button.addEventListener("click", function(){
	if(usr.value === username && pswrd.value === password){
		window.open("complaint_register.html");
	}
	else{
		alert("invalid user");
	}
})