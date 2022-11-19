function getxhr(){
    try{
        xhr = new XMLHttpRequest();
    }catch (e){
        try{
            xhr= new ActiveXObject('mecrosoft.XMLHTTP');
        }catch (e1){
            alert('Error is occurred ');
        }
    }
    return xhr;
}
function deleteBook(isbn){
    xhr = getxhr();

    xhr.open('GET', 'http://localhost:8080/admin/scripts.php?d_isbn='+isbn, true);
    xhr.send();
    window.location.href = "http://localhost:8080/pages/overview-book.php";

}

const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');


function setError(element, message){
    const inputControl = element;
    const errorDisplay = element.parentElement.querySelector('.error');
    errorDisplay.innerText = message;
    inputControl.classList.add('border-danger');
    inputControl.classList.remove('border-success')
}

function setSuccess(element){
    const inputControl = element;
    const errorDisplay = element.parentElement.querySelector('.error');
    errorDisplay.innerText = '';
    inputControl.classList.add('border-success');
    inputControl.classList.remove('border-danger');
}

function isValidEmail(email){
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function emailValidate() {
    const emailValue = email.value.trim();

    if (emailValue === '') {
        setError(email, 'L\'e-mail est requis');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Donnez une adresse e-mail valide\n');
    } else {
        setSuccess(email);
    }
}

function passwordValidate() {
    const passwordValue = password.value.trim();

    if(passwordValue === '') {
        setError(password, 'Mot de passe requis');
    } else if (passwordValue.length < 5 ) {
        setError(password, 'Le mot de passe doit comporter au moins 5 caractères.')
    } else {
        setSuccess(password);
    }

};
