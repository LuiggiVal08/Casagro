export const regExp = {
    name: /^[A-Za-zÁÉÍÓÚÑáéíóúñ\s]{3,}$/,
    dni: /^[\d\s]{6,13}$/,
    username: /^[A-Za-z0-9_.\-]{4,16}$/,
    email: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
    // date: /^\d{4}[-\/]\d{2}[-\/]\d{2}$/,
    password: /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d_.-]{8,}$/,
    phone: /^(\(\d{3,4}\)\s)?(\d{3}-\d{4})$/,
    text: /^[A-Za-z0-9\s.,!?¡¿()-_&$%#@+:;'"]{1,}$/,
}

export class Format {
    static formatInput = (input, methodName, callback) => {
        if (typeof this[methodName] === 'function') {
            input.target.value = this[methodName](input.target.value);

            const isValid = regExp[methodName].test(input.target.value);

            // callback(isValid, input);

            if (!isValid) {
                input.target.classList.add('errorInput');
            } else {
                input.target.classList.remove('errorInput');
            }
        } else {
            console.error(`Método no reconocido: ${methodName}`);
            return input.target.value;
        }
    }
    static name = (value) => {
        return value.replace(/[^\p{L}\s]/gu, '').replace(/\d+/g, ' ').replace(/\s+/g, ' ');
    }
    static dni = (value) => {
        if (/^\d*$/.test(value) && value != '') {
            const valueWithoutSpaces = value.replace(/ /g, '');
            const reversedValue = valueWithoutSpaces.split('').reverse().join('');
            const formattedValue = reversedValue.match(/.{1,3}/g).join(' ');
            const finalValue = formattedValue.split('').reverse().join('');
            return finalValue;
        } else {
            let valueInputReplace = value.replace(/[^\d]/g, '');
            return valueInputReplace;
        }
    }
    static username = (value) => {
        return value.replace(/[^A-Za-z0-9_.-]/g, '');
    }
    static email = (value) => {
        return value.replace(/[^a-zA-Z0-9@._-]/g, '');

    }
    static password = (value) => {
        // Reemplazar caracteres no válidos para el password
        return value.replace(/[^A-Za-z0-9_.-]/g, '');
    }
    static phone = (value) => {
        let numeroLimpio = value.replace(/\D/g, '');
        if (numeroLimpio.length >= 11) {
            numeroLimpio = numeroLimpio.substring(0, 11);
            const formato = /^(\d{3,4})(\d{3})(\d{4})$/;

            const numeroFormateado = numeroLimpio.replace(formato, '($1) $2-$3');
            return numeroFormateado;
        }
        const formato = /^(\d{3,4})(\d{3})(\d{4})$/;
        const numeroFormateado = numeroLimpio.replace(formato, '($1) $2-$3');
        return numeroFormateado;
    }
    static text = (value) => {

        return value.replace(/[^a-zA-Z0-9áéíóúñü-\s]/g, '');
    }

    //static  date = (value) => {
    //     // Reemplazar caracteres no válidos para la fecha
    //     var valueInputReplace = value.replace(/[^0-9/-]/g, '');
    //     return valueInputReplace;
    // }

}
