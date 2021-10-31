// Import SCSS
import '../css/app.scss'

// Import svg files for webpack handling
import '../raw/rdnyc-logo.svg';           // rdnyc logo
import '../raw/roll-mandala.svg';         // rolling mandala decoration
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

// adjust some content
document.addEventListener('DOMContentLoaded', (event) => {
  let tsmlwidget_morelink = document.querySelector('.tsml-widget-upcoming.widget_tsml_widget_upcoming.widget p a');
  tsmlwidget_morelink.innerHTML = 'View More Meetings'
});
