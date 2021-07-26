/**
 * main nav menu helper
 */
var mainMenuDropdownList = [].slice.call(document.querySelectorAll('li.menu-item.menu-item-has-children'));

mainMenuDropdownList.forEach((el) => {
  el.addEventListener("click", (e) => {
    // get relevant elements and note if menu is already shown
    var thisMenuLink = el.querySelector('a.top-navbar-grid-main-menu-item-link');
    var thisSubMenu = el.querySelector('ul.sub-menu');
    var thisElShown = thisSubMenu.classList.contains('show');

    // un-show all menus
    document.querySelectorAll('li.menu-item.menu-item-has-children').forEach((otherEl) => {
      var otherMenuLink = otherEl.querySelector('a.top-navbar-grid-main-menu-item-link');
      var otherSubMenu = otherEl.querySelector('ul.sub-menu');
      if (otherMenuLink) { otherMenuLink.classList.remove('shown'); }
      if (otherSubMenu) { otherSubMenu.classList.remove('show'); }
    });

    // finally, if menu was not shown, show it
    if (!thisElShown) {
      thisMenuLink.classList.add('shown');
      thisSubMenu.classList.add('show');
    }
  });
});
