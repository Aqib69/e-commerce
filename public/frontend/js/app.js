// hamBurgur Menu
const bar = document.getElementById("bar");
const close = document.getElementById("close");
const nav = document.getElementById("navBar");

if (bar) {
  bar.addEventListener("click", () => {
    nav.classList.add("active");
  });
}

if (close) {
  close.addEventListener("click", () => {
    nav.classList.remove("active");
  });
}

// prodetails section

var MainImage = document.getElementById("mainImage");
var smalling = document.getElementsByClassName("small-image");

smalling[0].onclick = function () {
  MainImage.src = smalling[0].src;
};
smalling[1].onclick = function () {
  MainImage.src = smalling[1].src;
};
smalling[2].onclick = function () {
  MainImage.src = smalling[2].src;
};
smalling[3].onclick = function () {
  MainImage.src = smalling[3].src;
};

const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});
