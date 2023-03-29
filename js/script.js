$(document).ready(function () {
	let menuStatus = 0;
	$(".header__burger").click(function () {
		if (menuStatus != 1) {
			$(".header__list").slideDown(500);
			document.querySelector(".header__list").style.display = "flex";

			document.querySelector(".header__burger").innerHTML = "+";
			document.querySelector(".header__burger").style.transform = "rotate(45deg) translateY(-26px)";

			menuStatus = 1;
		} else {
			$(".header__list").slideUp(500);
			document.querySelector(".header__burger").innerHTML = "<div class='header__burger-line'></div> <div class='header__burger-line'></div> <div class='header__burger-line'></div>";
			document.querySelector(".header__burger").style.transform = "rotate(0deg) translateY(0px)";
			menuStatus = 0;
		}
	});
});

document.addEventListener("mousemove", parallax);
function parallax(event) {
	this.querySelectorAll(".header__soldier").forEach((shift) => {
		const position = shift.getAttribute("value");
		const x = (window.innerWidth - event.pageX * position) / 90;
		const y = (window.innerHeight - event.pageY * position) / 90;
		shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
	});
}
