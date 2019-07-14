var myForm = document.getElementById("myForm");
var reg = document.getElementById("register");

function openForm() {
	myForm.style.display = "block";
	reg.style.display = "none";
}

function closeForm() {
	myForm.style.display = "none";
}

function openRegister() {
	reg.style.display = "block";
	myForm.style.display = "none";
}

function closeRegister() {
	reg.style.display = "none";
}