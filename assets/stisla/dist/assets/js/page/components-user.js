"use strict";

$("#users-carousel").owlCarousel({
  items: 3,
  margin: 20,
  autoplay: true,
  autoplayTimeout: 4000,
  loop: true,
  responsive: {
    0: {
      items: 2
    },
    578: {
      items: 3
    },
    768: {
      items: 3
    }
  }
});
