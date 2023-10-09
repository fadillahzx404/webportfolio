import "./bootstrap";
import "laravel-datatables-vite";
import "flowbite/dist/flowbite";
import "flowbite/dist/datepicker";
import "datatables.net";
import "toastify-js";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import { Splide } from "@splidejs/splide";

var splide = new Splide(".splide", {
    type: "loop",
    perPage: 1,
    autoplay: true,
    mediaQuery: "max",
    breakpoints: {
        1440: {
            width: 1200,
        },
        1024: { width: 900, height: 300 },
        768: { width: 650 },
        640: { width: 380 },
    },
});
splide.mount();

import "tw-elements";
