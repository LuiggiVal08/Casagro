import { Format } from "./helpers/Format";
import { submitLogin } from "./login";
// import alpine from './libraries/alpinejs.min.js'
document.getElementById('formLogin').addEventListener('submit', submitLogin)

window.submitLogin = submitLogin

document.getElementById('user').addEventListener('input', (e) => Format.formatInput(e, 'username'))
document.getElementById('pass').addEventListener('input', (e) => Format.formatInput(e, 'password'))
// import { clickMeButton } from "./test";
// // document.
// const $btn = document.getElementById('btn');


// $btn.addEventListener('click', clickMeButton);

// export const submitLogin = (e) => {
//     e.preventDefault();
//     const form = e.target
//     const formData = {
//         user: document.getElementsByName('user')[0].value,
//         pass: document.getElementsByName('pass')[0].value
//     }
//     console.log(document)
// }
