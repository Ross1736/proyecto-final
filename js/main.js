// ingresar

const forms = document.querySelector(".forms"),
  pwShowHide = document.querySelectorAll(".eye-icon"),
  links = document.querySelectorAll(".link");

pwShowHide.forEach((eyeIcon) => {
  eyeIcon.addEventListener("click", () => {
    let pwFields =
      eyeIcon.parentElement.parentElement.querySelectorAll(".password");

    pwFields.forEach((password) => {
      if (password.type === "password") {
        password.type = "text";
        eyeIcon.classList.replace("bx-hide", "bx-show");
        return;
      }
      password.type = "password";
      eyeIcon.classList.replace("bx-show", "bx-hide");
    });
  });
});

links.forEach((link) => {
  link.addEventListener("click", (e) => {
    // e.preventDefault(); //preventing form submit
    forms.classList.toggle("show-signup");
  });
});

//Menu de navegación
const burger = document.getElementById("btn-menu");
const ul = document.querySelector("header ul");

burger.addEventListener("click", () => {
  burger.classList.toggle("show-x");
  ul.classList.toggle("show");
});

// Carousel

$(".carousel").owlCarousel({
  margin: 10,
  loop: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 3,
      nav: false,
    },
    500: {
      items: 3,
      nav: false,
    },
    750: {
      items: 3,
      nav: false,
    },
    1200: {
      items: 3,
      nav: false,
    },
    1400: {
      items: 3,
      nav: false,
    },
  },
});
