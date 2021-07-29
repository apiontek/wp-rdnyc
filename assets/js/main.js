// Import SCSS
import '../css/app.scss'

// Import svg files for webpack handling
import '../raw/rdnyc-logo.svg'; // rdnyc logo
// other:
import '../../node_modules/bootstrap-icons/icons/chevron-down.svg';
import '../../node_modules/bootstrap-icons/icons/chevron-left.svg';
import '../../node_modules/bootstrap-icons/icons/chevron-right.svg';
import '../../node_modules/bootstrap-icons/icons/search.svg';

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