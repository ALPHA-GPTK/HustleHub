//Login Page
//Email

var urlCheck = (window.location.href).split("/");
var lastUrlElement = urlCheck[urlCheck.length - 1]

if ((lastUrlElement.includes("login.php"))) {

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

    passwordIcon.addEventListener('click', (event) => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordIcon.src = "./assets/img/show.svg";
        } else if (passwordInput.type === "text") {
            passwordInput.type = "password";
            passwordIcon.src = "./assets/img/hide.svg";
        }
    });
} else if ((lastUrlElement.includes("signup.php"))) { //Sign up Page

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

    passwordIcon.addEventListener('click', (event) => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordIcon.src = "./assets/img/show.svg";
        } else if (passwordInput.type === "text") {
            passwordInput.type = "password";
            passwordIcon.src = "./assets/img/hide.svg";
        }
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
            confirmIcon.src = "./assets/img/check-not.svg";
        }
    });

    confirmInput.addEventListener('input', (event) => {
        if (passwordInput.value == confirmInput.value) {
            confirmIcon.src = "./assets/img/check-same.svg";
        } else {
            confirmIcon.src = "./assets/img/check-not.svg";
        }
    });

    passwordInput.addEventListener('input', (event) => {
        if (((passwordInput.value).trim() == null || (passwordInput.value).trim() == "") && ((confirmInput.value).trim() == null || (confirmInput.value).trim() == "")) {
            confirmIcon.src = "./assets/img/check-not.svg";
        } else {
            if (passwordInput.value == confirmInput.value) {
                confirmIcon.src = "./assets/img/check-same.svg";
            } else {
                confirmIcon.src = "./assets/img/check-not.svg";
            }
        }
    });
} else if ((lastUrlElement.includes("forgot.php"))) {

    //Email
    const emailInput = document.getElementById('email');
    const emailIcon = document.getElementById('email-icon');

    emailInput.addEventListener('focusin', (event) => {
        emailIcon.src = "./assets/img/mail-in.svg";
    });

    emailInput.addEventListener('focusout', (event) => {
        emailIcon.src = "./assets/img/mail-out.svg";
    });
} else if ((lastUrlElement.includes("vericode.php"))) {

    //Code Verification
    const codeInput = document.getElementById('code');
    const codeIcon = document.getElementById('code-icon');

    codeInput.addEventListener('focusin', (event) => {
        codeIcon.src = "./assets/img/code-in.svg";
    });

    codeInput.addEventListener('focusout', (event) => {
        codeIcon.src = "./assets/img/code-out.svg";
    });
} else if ((lastUrlElement.includes("changepass.php"))) {

    //Password
    const passwordInput = document.getElementById('newpassword');
    const passwordIcon = document.getElementById('newpassword-icon');

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

    passwordInput.addEventListener('input', (event) => {
        if (((passwordInput.value).trim() == null || (passwordInput.value).trim() == "") && ((confirmInput.value).trim() == null || (confirmInput.value).trim() == "")) {
            confirmIcon.src = "./assets/img/check-not.svg";
        } else {
            if (passwordInput.value == confirmInput.value) {
                confirmIcon.src = "./assets/img/check-same.svg";
            } else {
                confirmIcon.src = "./assets/img/check-not.svg";
            }
        }
    });
} else if ((lastUrlElement.includes("settings.php"))) {

    const btnBasic = document.getElementById("btn-basic");
    const btnSecurity = document.getElementById("btn-security");
    const btnDeletion = document.getElementById("btn-deletion");

    var conBasic = document.getElementById("con-basicinfo");
    var conSecurity = document.getElementById("con-security");
    var conAccount = document.getElementById("con-account");

    const btnSideBar = document.getElementsByClassName("btn-sidebar");

    for (var a = 0; a < btnSideBar.length; a++) {
        btnSideBar[a].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

    btnBasic.addEventListener("click", function () {
        if (conBasic.classList.contains("hidden")) {
            conBasic.classList.remove("hidden");
            conSecurity.classList.add("md:grid");
        }

        if ((conSecurity.classList.contains("md:grid"))) {
            conSecurity.classList.remove("md:grid");
            conSecurity.classList.add("hidden");
        }

        if ((conAccount.classList.contains("md:grid"))) {
            conAccount.classList.remove("md:grid");
            conAccount.classList.add("hidden");
        }
    });

    btnSecurity.addEventListener("click", function () {
        if (conSecurity.classList.contains("hidden")) {
            conSecurity.classList.remove("hidden");
            conSecurity.classList.add("md:grid");
        }

        if (!(conBasic.classList.contains("hidden"))) {
            conBasic.classList.add("hidden");
            conBasic.classList.remove("md:grid");
        }

        if (!(conAccount.classList.contains("hidden"))) {
            conAccount.classList.remove("md:grid");
            conAccount.classList.add("hidden");
        }
    });

    btnDeletion.addEventListener("click", function () {
        if (conAccount.classList.contains("hidden")) {
            conAccount.classList.remove("hidden");
            conAccount.classList.add("md:grid");
        }

        if (!(conBasic.classList.contains("hidden"))) {
            conBasic.classList.add("hidden");
            conBasic.classList.remove("md:grid");
        }

        if (!(conSecurity.classList.contains("hidden"))) {
            conSecurity.classList.add("hidden");
            conSecurity.classList.remove("md:grid");
        }
    });

    //Current Password
    const currentPasswordInput = document.getElementById('current-password');
    const currentPasswordIcon = document.getElementById('current-password-icon');

    currentPasswordIcon.addEventListener('click', (event) => {
        if (currentPasswordInput.type === "password") {
            currentPasswordInput.type = "text";
            currentPasswordIcon.src = "./assets/img/show.svg";
        } else if (currentPasswordInput.type === "text") {
            currentPasswordInput.type = "password";
            currentPasswordIcon.src = "./assets/img/hide.svg";
        }
    });

    //New Password
    const newPasswordInput = document.getElementById('new-password');
    const newPasswordIcon = document.getElementById('new-password-icon');

    newPasswordIcon.addEventListener('click', (event) => {
        if (newPasswordInput.type === "password") {
            newPasswordInput.type = "text";
            newPasswordIcon.src = "./assets/img/show.svg";
        } else if (newPasswordInput.type === "text") {
            newPasswordInput.type = "password";
            newPasswordIcon.src = "./assets/img/hide.svg";
        }
    });

    //Confirm Password
    const confirmInput = document.getElementById("confirm-password");
    const confirmIcon = document.getElementById("confirm-password-check");

    newPasswordInput.addEventListener('input', (event) => {
        if (newPasswordInput.value == null) {
            confirmInput.disabled;
        } else {
            confirmInput.disabled = false;
        }

        if (newPasswordInput.value == confirmInput.value) {
            confirmIcon.src = "./assets/img/check-same.svg";
        } else if (newPasswordInput.value != confirmInput.value) {
            confirmIcon.src = "./assets/img/check-not.svg";
        } else if ((newPasswordInput.value == '' || newPasswordInput.value == null) && (confirmInput.value == '' || confirmInput.value == null)) {
            confirmIcon.src = "./assets/img/check-not.svg";
        }
    });

    newPasswordInput.addEventListener('focusout', (event) => {
        if ((newPasswordInput.value).trim() == null || (newPasswordInput.value).trim() == "") {
            if (confirmInput.value != null) {
                confirmInput.value = "";
            }

            confirmInput.disabled = true;
        } else {
            confirmInput.disabled = false;
        }
    });

    confirmInput.addEventListener('input', (event) => {
        if (newPasswordInput.value == confirmInput.value) {
            confirmIcon.src = "./assets/img/check-same.svg";
        } else {
            confirmIcon.src = "./assets/img/check-not.svg";
        }
    });

    newPasswordInput.addEventListener('input', (event) => {
        if (((newPasswordInput.value).trim() == null || (newPasswordInput.value).trim() == "") && ((confirmInput.value).trim() == null || (confirmInput.value).trim() == "")) {
            confirmIcon.src = "./assets/img/check-not.svg";
        } else {
            if (newPasswordInput.value == confirmInput.value) {
                confirmIcon.src = "./assets/img/check-same.svg";
            } else {
                confirmIcon.src = "./assets/img/check-not.svg";
            }
        }
    });

    //Basic Information
    const btnEdit = document.getElementById("edit");
    const firstNameInput = document.getElementById("fName");
    const lastNameInput = document.getElementById("lName");
    const usernameInput = document.getElementById("username");
    const emailInput = document.getElementById("email");
    const aboutInput = document.getElementById("about");
    const conInfoBtn = document.getElementById("btnCS");

    btnEdit.addEventListener("click", function () {
        firstNameInput.removeAttribute("disabled");
        lastNameInput.removeAttribute("disabled");
        usernameInput.removeAttribute("disabled");
        emailInput.removeAttribute("disabled");
        aboutInput.removeAttribute("disabled");

        if (conInfoBtn.classList.contains("hidden")) {
            conInfoBtn.classList.remove("hidden");
        }
    })
} else if ((lastUrlElement.includes("add_gigs.php"))) {

    //Upload file
    const btnFile = document.getElementById("banner");
    const dspFilename = document.getElementById("filename");

    btnFile.addEventListener("change", function () {
        var filePath = btnFile.value;
        var fileSplit = filePath.split("\\");
        var filename = fileSplit[fileSplit.length - 1];

        dspFilename.innerHTML = filename;
    });
} else if ((lastUrlElement.includes("update_card.php"))) {

    //Upload file
    const btnFile = document.getElementById("banner");
    const dspFilename = document.getElementById("filename");

    btnFile.addEventListener("change", function () {
        var filePath = btnFile.value;
        var fileSplit = filePath.split("\\");
        var filename = fileSplit[fileSplit.length - 1];

        dspFilename.innerHTML = filename;
    });
}

if ((lastUrlElement.includes("index.php")) || (lastUrlElement.includes("login.php")) || (lastUrlElement.includes("singup.php")) || (lastUrlElement.includes("forgot.php")) || (lastUrlElement.includes("vericode.php")) || (lastUrlElement.includes("changepass.php")) || (lastUrlElement.includes("mygigs.php")) || (lastUrlElement.includes("gigs.php")) || (lastUrlElement.includes("settings.php")) || (lastUrlElement.includes("signup.php"))) {
    headerToggleMobile();
    console.log("here");
}

function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;

    return true;
}

function headerToggleMobile() {
    // For Navigation Bar
    const btn = document.querySelector("button.mobile-menu-button");
    const menu = document.querySelector(".mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
}