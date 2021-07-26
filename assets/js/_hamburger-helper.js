const togglerBtn = document.getElementById("top-navbar-grid-toggle-button");
const navbarContent = document.getElementById("top-navbar-grid-main-menu-outer");

navbarContent.addEventListener("show.bs.collapse", () => {
  console.log("opening navbar content");
  togglerBtn.classList.toggle("is-active");
});

navbarContent.addEventListener("hide.bs.collapse", () => {
  console.log("closing navbar content");
  togglerBtn.classList.toggle("is-active");
});
