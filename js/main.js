const prev = document.querySelector(".prev");
const next = document.querySelector(".next");
const first = document.querySelector(".first");
const last = document.getElementById("last");
const maxItem = 6;
let index = 1;
const page = document.querySelector(".page-num");
let contents = document.querySelector(".vk-portfolio-list").children;

const showContent = () => {
  for (let i = 0; i < contents.length; i++) {
    contents[i].classList.remove("show");
    contents[i].classList.add("hide");

    if (i >= index * maxItem - maxItem && i < index * maxItem) {
      // if i greater than and equal to (index*maxItem)-maxItem;
      // means  (1*8)-8=0 if index=2 then (2*8)-8=8
      contents[i].classList.remove("hide");
      contents[i].classList.add("show");
    }
    page.innerHTML = "page " + "  " + index;
  }
};

const pagination = Math.ceil(contents.length / maxItem);

window.onload = showContent();

function nextPage() {
  index++;
  check();
  showContent();
}

function prevPage() {
  index--;
  check();
  showContent();
}

function check() {
  if (index === pagination) {
    next.classList.add("disabled");
  } else {
    next.classList.remove("disabled");
  }

  if (index === 1) {
    prev.classList.add("disabled");
  } else {
    prev.classList.remove("disabled");
  }
}
