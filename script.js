$(document).ready(function () {
  $(".contact-fields").click(function () {
    $("#contact-section-1")
      .addClass("contact-section-1")
      .removeClass("contact-section");
  });
});

// For contact form validaion

$(document).ready(function () {
  $("#basic-form").validate();
});
