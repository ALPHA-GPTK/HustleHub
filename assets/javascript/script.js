//Login Page
//Email
const emailInput = document.getElementById("email");
const emailLogo = document.getElementById("email-logo");

emailInput.addEventListener('focusin', (event) => {
    emailLogo.src = "./assets/img/mail-in.svg";
});

emailInput.addEventListener('focusout', (event) => {
    emailLogo.src = "./assets/img/mail-out.svg";
});

// Password
const passwordIcon = document.getElementById("password-show");
const passwordInput = document.getElementById("password");

passwordIcon.addEventListener('mousedown', (event) => {
    passwordIcon.src = "./assets/img/show.svg";
    passwordInput.type = "text";
});

passwordIcon.addEventListener('mouseup', (event) => {
    passwordIcon.src = "./assets/img/hide.svg";
    passwordInput.type = "password";
});