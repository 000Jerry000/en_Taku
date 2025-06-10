// When width is smart phone screen, sp menu appears
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
// When scroll move, Fade in effect
const sections = document.querySelectorAll("section");

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
        observer.unobserve(entry.target); // Animate only once
      }
    });
  },
  {
    threshold: 0.1,
  }
);

sections.forEach((section) => {
  observer.observe(section);
});
