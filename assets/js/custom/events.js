// FORM POPUP
function openFormPopup() {
  document.querySelector("#popup-form").classList.add("popup--open");
}

function closeFormPopup(e) {
  if (e.target != e.currentTarget) return;
  document.querySelector("#popup-form").classList.remove("popup--open");
}

// MENU POPUP
function openMobileMenu() {
  document.querySelector("#popup-menu").classList.add("popup--open");
}

function closeMobileMenu() {
  document.querySelector("#popup-menu").classList.remove("popup--open");
}

// WHEN PAGE IS LOADED
window.addEventListener("load", () => {
  // getting all buttons
  const buttons = [
    ...document.querySelectorAll(".hero__button"),
    ...document.querySelectorAll(".about__button"),
    ...document.querySelectorAll(".services__button"),
    ...document.querySelectorAll(".services-card__button"),
    ...document.querySelectorAll(".footer__button"),
  ];

  // adding listeners for opening form popup
  buttons.forEach((button) => {
    button.addEventListener("click", openFormPopup);
  });

  // for opening mobile menu
  document
    .querySelector(".header__menu-icon")
    .addEventListener("click", openMobileMenu);

  // closing popups
  const closeFormElems = [
    document.querySelector("#close-form-popup img"),
    document.querySelector("#popup-form"),
  ];

  const closeMobileMenuElems = [
    document.querySelector("#close-menu-popup"),
    document.querySelector("#popup-menu"),
  ];

  [...closeFormElems].forEach((el) =>
    el.addEventListener("click", closeFormPopup)
  );

  [...closeMobileMenuElems].forEach((el) =>
    el.addEventListener("click", closeMobileMenu)
  );
});
