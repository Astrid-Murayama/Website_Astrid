var Menu = {
  el: {
    menu: $(".menu"),
    menuTop: $(".menu-top"),
    menuSecond: $(".menu-second"),
    menuThird: $(".menu-third"),
    menuFourth: $(".menu-fourth"),
    menuBottom: $(".menu-bottom"),
    menuClose: $(".menu-close"),
    menuText: $(".menu-text"),
  },

  init: function () {
    Menu.bindUIactions();
  },

  bindUIactions: function () {
    Menu.el.menu.on("click", function (event) {
      Menu.activateMenu(event);
      event.preventDefault();
    });
  },

  activateMenu: function () {
    Menu.el.menuTop.toggleClass("menu-top-expand expand");
    Menu.el.menuSecond.toggleClass("menu-second-expand expand");
    Menu.el.menuThird.toggleClass("menu-third-expand expand");
    Menu.el.menuFourth.toggleClass("menu-fourth-expand expand");
    Menu.el.menuBottom.toggleClass("menu-bottom-expand expand");
    Menu.el.menuText.toggleClass("menu-text-expand");
    Menu.el.menuClose.toggleClass("menu-close-visible");
  },
};

// Stop menu item click from closing the menu
$(".menu .menu-global").click(function (e) {
  e.stopPropagation();
});

Menu.init();
