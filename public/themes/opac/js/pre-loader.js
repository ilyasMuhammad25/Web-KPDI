(function ($) {
  "use strict";

  /*============= preloader js css =============*/
  var cites = [];
  cites[0] =
    "INLIS dibangun dan dikembangkan secara resmi oleh Perpustakaan Nasional RI";
  cites[1] = "INLIS dibangun dalam rangka menghimpun koleksi nasional dalam jejaring Perpustakaan Digital Nasional Indonesia";
  cites[2] = "INLIS membantu upaya pengembangan pengelolaan dan pelayanan perpustakaan berbasis teknologi informasi dan komunikasi di seluruh Indonesia";
  var cite = cites[Math.floor(Math.random() * cites.length)];
  $("#preloader p").text(cite);
  $("#preloader").addClass("loading");

  $(window).on("load", function () {
    setTimeout(function () {
      $("#preloader").fadeOut(500, function () {
        $("#preloader").removeClass("loading");
      });
    }, 500);
  });
})(jQuery);
