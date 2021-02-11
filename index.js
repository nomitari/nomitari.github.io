

var modal = document.getElementById("modal");
var page = document.getElementById("contact-body");

// Get the button that opens the modal
var btn = document.getElementById("email-button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
	modal.style.display = "block";
}

$("#email-button").click(function(){
	$('#contact-page').css("filter","blur(3px)");
});

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
	modal.style.display = "none";
}

$("#close-btn").click(function(){
	$('#contact-page').css("filter","");
});

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
  	}
}




