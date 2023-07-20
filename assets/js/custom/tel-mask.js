$(function () {
  $('[name="your-tel"]').attr(
    "pattern",
    "(s*)?(+)?([- _():=+]?d[- _():=+]?){10,14}(s*)?"
  );
  $('[name="your-tel"]').mask("+9 999 999 99 99");
});
