/**** Animations on scrolling ****/
new WOW().init();

/**** Header burger menu ****/
$(document).ready(function () {
  let menuStatus = 0;
  $(".header__burger").click(function () {
    if (menuStatus != 1) {
      $(".header__list").slideDown(500);
      document.querySelector(".header__list").style.display = "flex";

      document.querySelector(".header__burger").innerHTML = "+";
      document.querySelector(".header__burger").style.transform =
        "rotate(45deg) translateY(-26px)";

      menuStatus = 1;
    } else {
      $(".header__list").slideUp(500);
      document.querySelector(".header__burger").innerHTML =
        "<div class='header__burger-line'></div> <div class='header__burger-line'></div> <div class='header__burger-line'></div>";
      document.querySelector(".header__burger").style.transform =
        "rotate(0deg) translateY(0px)";
      menuStatus = 0;
    }
  });
});

/**** Header soldier movement ****/
document.addEventListener("mousemove", parallax);
function parallax(event) {
  this.querySelectorAll(".header__soldier").forEach((shift) => {
    const position = shift.getAttribute("value");
    const x = (window.innerWidth - event.pageX * position) / 90;
    const y = (window.innerHeight - event.pageY * position) / 90;
    shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
  });
}

/**** About Swiper settings ****/
var swiper = new Swiper(".about__swiper", {
  slidesPerView: 1,
  spaceBetween: 30,
  loop: true,
  pagination: {
    el: ".about__swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".about__swiper-button-next",
    prevEl: ".about__swiper-button-prev",
  },
});

/**** Videoplayer settings ****/
const play = `<img src="./images/about-play.png" alt="Play">`;
const pause = `<div style="width: 350px; height: 350px"></div>`;

const playButton = document.querySelector(".about__video-play-button");
const video = document.querySelector(".about__videoplayer");
const videoContainer = document.querySelector(".about__video");

playButton.addEventListener("click", function () {
  if (video.paused) {
    video.play();
    videoContainer.classList.add("playing");
    playButton.style.width = "100%";
    playButton.style.heigh = "100%";
    playButton.innerHTML = pause;
  } else {
    video.pause();
    videoContainer.classList.remove("playing");
    playButton.innerHTML = play;
  }
});
video.onended = function () {
  playButton.innerHTML = play;
};
