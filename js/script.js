import scrollTopButton from "./boton_scroll.js";
import menu from "./menu.js";
import contactFormValidations from "./validacion_formulario.js";
import userDeviceInfo from "./deteccion_dispositivos.js";
import slider from "./carrusel.js";

const d = document;

d.addEventListener("DOMContentLoaded", (e) => {
  menu();
  contactFormValidations();
  scrollTopButton(".scroll-top-btn");
  userDeviceInfo("user-device");
  slider;
});
