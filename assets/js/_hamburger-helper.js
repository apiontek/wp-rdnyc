const togglerBtn = document.getElementById("btn-burger");
const navbarContent = document.getElementById("nt-mainmenu");

navbarContent.addEventListener("show.bs.collapse", () => {
  console.log("opening navbar content");
  togglerBtn.classList.toggle("is-active");
});

navbarContent.addEventListener("hide.bs.collapse", () => {
  console.log("closing navbar content");
  togglerBtn.classList.toggle("is-active");
});
