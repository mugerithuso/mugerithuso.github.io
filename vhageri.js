function openManu() {

    document.getElementById("manu").classList.toggle("show");

}


/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
var prevScrollpos = window.scrollY;
window.onscroll = function () {
  var currentScrollPos = window.scrollY;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("manu").classList.remove("miniHide");
  } else {
    document.getElementById("manu").classList.add("miniHide");
  }
  prevScrollpos = currentScrollPos;
};

function gotoHome() {
  const element = document.getElementById("Home");
  element.scrollIntoView({ behavior: "smooth" });
}
function gotoBlog() {
  const element = document.getElementById("Blog");
  element.scrollIntoView({ behavior: "smooth" });
}
function gotoProjects() {
  const element = document.getElementById("projects");
  element.scrollIntoView({ behavior: "smooth" });
}
function gotoSkills() {
  const element = document.getElementById("Skills");
  element.scrollIntoView({ behavior: "smooth" });
}
function gotoReply() {
  const element = document.getElementById("reply");
  element.scrollIntoView({ behavior: "smooth" });
}

// clock functions

setInterval(function () {
  var d = new Date(); // Get the local time using JS
  var seconds = d.getSeconds() * 6;
  var minutes = d.getMinutes() * 6;
  var hour = d.getHours() * 30;

  // rotate clock hands to the right current time.
  document.getElementById("seconds-hand").style.transform =
    "rotate(" + seconds + "deg)";
  document.getElementById("minutes-hand").style.transform =
    "rotate(" + minutes + "deg)";
  document.getElementById("hours-hand").style.transform =
    "rotate(" + hour + "deg)";
}, 1000);

function VewOthers(){
  document.getElementById("project-box").style.display = "none";
  document.getElementById("display").classList.toggle("display2");
}
function projectProV(){
  document.getElementById("display").classList.toggle("display2");
  document.getElementById("project-box").style.display = "grid";

 }
