const togglerBtn = document.getElementById("btn-burger");
const navbarContent = document.getElementById("nt-mainmenu");

navbarContent.addEventListener("show.bs.collapse", () => {
  togglerBtn.classList.toggle("is-active");
});

navbarContent.addEventListener("hide.bs.collapse", () => {
  togglerBtn.classList.toggle("is-active");
});
