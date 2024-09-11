import { regExp } from "./helpers/Format";

const validForm = (elements) => {
    const formData = {};
    let isValid = true;

    Array.from(elements).forEach(element => {
        if (element.type === 'submit' || element.type === 'button') {
            return;
        }

        const name = element.name;
        const regex = element.getAttribute('data-regex') ? new RegExp(element.getAttribute('data-regex')) : regExp[name];
        element.classList.remove('errorInput')
        if (regex) {
            if (!regex.test(element.value)) {
                isValid = false;
                element.classList.add('errorInput')
                console.error(`El campo ${name} no es válido.`);
            }
        } else {
            if (!element.value) {
                isValid = false;
                element.classList.add('errorInput')
                console.error(`El campo ${name} no debe estar vacío.`);
            }
        }

        formData[name] = element.value;
    });

    return { isValid, formData };
}


export const submitLogin = (e) => {
    e.preventDefault();
    const form = e.target;
    const { isValid, formData } = validForm(form.elements)
    if (isValid) {
        console.log(formData)
    }
}
