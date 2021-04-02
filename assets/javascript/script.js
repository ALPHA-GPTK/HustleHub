//Login Page
//Email

var urlCheck = (window.location.href).split("/");
var lastUrlElement = urlCheck[urlCheck.length - 1]

if (lastUrlElement == 'login.php') {
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
} else if (lastUrlElement == 'signup.php') { //Sign up Page
    //Username
    const userNameInput = document.getElementById('username');
    const userNameIcon = document.getElementById('username-icon');

    userNameInput.addEventListener('focusin', (event) => {
        userNameIcon.src = "./assets/img/user-in.svg";
    });

    userNameInput.addEventListener('focusout', (event) => {
        userNameIcon.src = "./assets/img/user-out.svg";
    });

    //Email
    const emailInput = document.getElementById('email-signup');
    const emailIcon = document.getElementById('signup-email-logo');

    emailInput.addEventListener('focusin', (event) => {
        emailIcon.src = "./assets/img/mail-in.svg";
    });

    emailInput.addEventListener('focusout', (event) => {
        emailIcon.src = "./assets/img/mail-out.svg";
    });

    //Password
    const passwordInput = document.getElementById('password');
    const passwordIcon = document.getElementById('password-icon');

    passwordIcon.addEventListener('mousedown', (event) => {
        passwordIcon.src = "./assets/img/show.svg";
        passwordInput.type = "text";
    });

    passwordIcon.addEventListener('mouseup', (event) => {
        passwordIcon.src = "./assets/img/hide.svg";
        passwordInput.type = "password";
    });

    //Confirm Password
    const confirmInput = document.getElementById("confirm_password");
    const confirmIcon = document.getElementById("confirm-password-check");

    passwordInput.addEventListener('input', (event) => {
        if (passwordInput.value == null) {
            confirmInput.disabled;
        } else {
            confirmInput.disabled = false;
        }

        if (passwordInput.value == confirmInput.value) {
            confirmIcon.src = "./assets/img/check-same.svg";
        } else if (passwordInput.value != confirmInput.value) {
            confirmIcon.src = "./assets/img/check-not.svg";
        } else if ((passwordInput.value == '' || passwordInput.value == null) && (confirmInput.value == '' || confirmInput.value == null)) {
            confirmIcon.src = "./assets/img/check-not.svg";
        }
    });

    passwordInput.addEventListener('focusout', (event) => {
        if ((passwordInput.value).trim() == null || (passwordInput.value).trim() == "") {
            if (confirmInput.value != null) {
                confirmInput.value = "";
            }

            confirmInput.disabled = true;
        } else {
            confirmInput.disabled = false;
        }
    });

    confirmInput.addEventListener('input', (event) => {
        if (passwordInput.value == confirmInput.value) {
            confirmIcon.src = "./assets/img/check-same.svg";
        } else {
            confirmIcon.src = "./assets/img/check-not.svg";
        }
    });
}