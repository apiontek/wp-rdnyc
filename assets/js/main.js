// Import SCSS
import '../css/app.scss'

// Import svg files for webpack handling
import "../raw/rdnyc-logo.svg"; // rdnyc logo
// other:
// import "../../node_modules/@mdi/svg/svg/magnify.svg"; // search form button icon
// import "../../node_modules/@mdi/svg/svg/home.svg";
// import "../../node_modules/@mdi/svg/svg/information.svg";
// import "../../node_modules/@mdi/svg/svg/account.svg";
// import "../../node_modules/@mdi/svg/svg/calendar-clock.svg";
// import "../../node_modules/@mdi/svg/svg/tag-multiple.svg";
// import "../../node_modules/@mdi/svg/svg/rss.svg";

// Import Bootstrap JS
import 'bootstrap/js/dist/collapse';
// import 'bootstrap/js/dist/alert';
import 'bootstrap/js/dist/button';
import 'bootstrap/js/dist/dropdown';

// import navbar burger code
import "./_hamburger-helper";

// highlight any code blocks tagged with class 'to-highlight'
document.addEventListener('DOMContentLoaded', (event) => {
  document.querySelectorAll('code.to-highlight').forEach((el) => {
    hljs.highlightElement(el);
  });
});