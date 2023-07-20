"use strict";

AOS.init();
window.addEventListener("load", function () {
  var parallax = document.querySelector("body");
  if (parallax) {
    var setMouseParallaxStyle = function setMouseParallaxStyle() {
      var distX = coordXprocent - positionX;
      var distY = coordYprocent - positionY;
      positionX = positionX + distX * speed;
      positionY = positionY + distY * speed;
      wrapper.style.cssText = "transform: translate(".concat(positionX / coeff, "%, ").concat(positionY / coeff, "%);");
      requestAnimationFrame(setMouseParallaxStyle);
    };
    var wrapper = document.querySelector(".hero__image-box");
    var coeff = 25;
    var speed = 0.05;
    var positionX = 0;
    var positionY = 0;
    var coordXprocent = 0;
    var coordYprocent = 0;
    setMouseParallaxStyle();
    parallax.addEventListener("mousemove", function (e) {
      var parallaxWidth = parallax.offsetWidth;
      var parallaxHeight = parallax.offsetHeight;
      var coordX = e.pageX - parallaxWidth / 2;
      var coordY = e.pageY - parallaxHeight / 2;
      coordXprocent = coordX / parallaxWidth * 100;
      coordYprocent = coordY / parallaxHeight * 100;
    });
  }
});
"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
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
window.addEventListener("load", function () {
  // getting all buttons
  var buttons = [].concat(_toConsumableArray(document.querySelectorAll(".hero__button")), _toConsumableArray(document.querySelectorAll(".about__button")), _toConsumableArray(document.querySelectorAll(".services__button")), _toConsumableArray(document.querySelectorAll(".services-card__button")), _toConsumableArray(document.querySelectorAll(".footer__button")));

  // adding listeners for opening form popup
  buttons.forEach(function (button) {
    button.addEventListener("click", openFormPopup);
  });

  // for opening mobile menu
  document.querySelector(".header__menu-icon").addEventListener("click", openMobileMenu);

  // closing popups
  var closeFormElems = [document.querySelector("#close-form-popup img"), document.querySelector("#popup-form")];
  var closeMobileMenuElems = [document.querySelector("#close-menu-popup"), document.querySelector("#popup-menu")];
  [].concat(closeFormElems).forEach(function (el) {
    return el.addEventListener("click", closeFormPopup);
  });
  [].concat(closeMobileMenuElems).forEach(function (el) {
    return el.addEventListener("click", closeMobileMenu);
  });
});
"use strict";

function _typeof(obj) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (obj) { return typeof obj; } : function (obj) { return obj && "function" == typeof Symbol && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }, _typeof(obj); }
function _defineProperty(obj, key, value) { key = _toPropertyKey(key); if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }
function _toPropertyKey(arg) { var key = _toPrimitive(arg, "string"); return _typeof(key) === "symbol" ? key : String(key); }
function _toPrimitive(input, hint) { if (_typeof(input) !== "object" || input === null) return input; var prim = input[Symbol.toPrimitive]; if (prim !== undefined) { var res = prim.call(input, hint || "default"); if (_typeof(res) !== "object") return res; throw new TypeError("@@toPrimitive must return a primitive value."); } return (hint === "string" ? String : Number)(input); }
$(".reviews__list").slick({
  infinite: true,
  autoplay: true,
  arrows: false,
  responsive: [{
    breakpoint: 3000,
    settings: "unslick"
  }, {
    breakpoint: 767.98,
    settings: _defineProperty({
      slidesToShow: 1
    }, "slidesToShow", 1)
  }]
});
"use strict";

$(function () {
  $('[name="your-tel"]').attr("pattern", "(s*)?(+)?([- _():=+]?d[- _():=+]?){10,14}(s*)?");
  $('[name="your-tel"]').mask("+9 999 999 99 99");
});