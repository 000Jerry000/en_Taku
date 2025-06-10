const btn = document.getElementById("toggleBtn");
const body = document.getElementsByTagName("body")[0];

btn.addEventListener("click", () => {
  if (body.classList.contains("open")) {
    body.classList.remove("open");
    body.classList.add("close");
  } else {
    body.classList.remove("close");
    body.classList.add("open");
  }
});
