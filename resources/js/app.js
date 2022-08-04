import './bootstrap';
import { createApp } from "vue"
import Course from "./components/Course/Course.vue"

const h1 = document.querySelector("#text-auto-typing span");

// let wordIndex = 0;
// let letterIndex = 0;


// const array = ["FACILEMENT", "RAPIDEMENT", "ET GRATUITEMENT"];

// const createLetter = () => {
//     const letter = document.createElement("span");
//     h1.appendChild(letter);

//     letter.textContent = array[wordIndex][letterIndex];

//     setTimeout(() => {
//         letter.remove();
//     }, 2800);
// };

// const loop = () => {
//     setTimeout(() => {
//         if (wordIndex >= array.length) {
//             wordIndex = 0;
//             letterIndex = 0;
//             loop();
//         } else if (letterIndex < array[wordIndex].length) {
//             createLetter();
//             letterIndex++;
//             loop();
//         } else {
//             wordIndex++;
//             letterIndex = 0;
//             setTimeout(() => {
//                 loop();
//             }, 2800);
//         }
//     }, 50);
// };

// loop()

const app = createApp({
    methods: {
        showMenu: function () {
            document.getElementById("navbar-sticky").classList.toggle("hidden")
        },
        userDropDownMenu: function () {
            document.getElementById("user-dropdown").classList.toggle("hidden")
        },
        showAccordion: function(){
            alert(0)
        }

    }
})
app.component("course", Course)
app.mount("#app")


