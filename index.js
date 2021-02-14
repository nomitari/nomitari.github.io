
function hamburger() 
{
	var x = document.getElementById("myLinks");
	if (x.style.display === "flex") 
	{
		x.style.display = "none";
	} 
	else 
	{
		x.style.display = "flex";
	}
}

function resizeHamburger() 
{
	var x = screen.width;
	if (x >= 992) 
	{
		console.log(x);
		document.getElementById("myLinks").style.display = "none";
	}
}

window.onresize = resizeHamburger;

