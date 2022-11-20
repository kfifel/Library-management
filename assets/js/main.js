const submit = document.querySelector("input[type='submit']");
const email = document.getElementById('email');
const password = document.getElementById('password');
let emailCheck = false;
let passwordCheck = false;

function emailValidate() {
    const emailValue = email.value.trim();

    if (emailValue === '') {
        emailCheck = false;
        setError(email, 'L\'e-mail est requis');
    } else if (!isValidEmail(emailValue)) {
        emailCheck = false;
        setError(email, 'Donnez une adresse e-mail valide\n');
    } else {
        emailCheck = true;
        setSuccess(email);
    }
}

function passwordValidate() {
    const passwordValue = password.value.trim();

    if(passwordValue === '') {
        passwordCheck = false;
        setError(password, 'Mot de passe requis');
    } else if (passwordValue.length < 5 ) {
        passwordCheck = false;
        setError(password, 'Le mot de passe doit comporter au moins 5 caractères.');
    } else {
        passwordCheck = true;
        setSuccess(password);
    }

}

function setError(element, message){
    checkValidation();
    const inputControl = element;
    const errorDisplay = element.parentElement.querySelector('.invalid-feedback');
    errorDisplay.innerText = message;
    inputControl.classList.add('is-invalid');
    inputControl.classList.remove('is-valid');
}

function setSuccess(element){
    checkValidation();
    const inputControl = element;
    const errorDisplay = element.parentElement.querySelector('.invalid-feedback');
    errorDisplay.innerText = '';
    inputControl.classList.add('is-valid');
    inputControl.classList.remove('is-invalid');
}

function isValidEmail(email){
    const reg = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return reg.test(String(email).toLowerCase());
}

function checkValidation() {
    if(emailCheck && passwordCheck){
        submit.removeAttribute("disabled");
        submit.classList.remove('disabled');
    }else{
        submit.setAttribute("disabled","disabled");
        submit.classList.add('disabled');
    }
}

