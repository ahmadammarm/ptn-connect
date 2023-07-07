const forms = document.querySelector(".forms"),
form = document.querySelector("form"),
emailField = form.querySelector(".email-field"),
emailInput = emailField.querySelector(".email"),
passField = form.querySelector(".create-password"),
passInput = passField.querySelector(".password1"),
cPassField = form.querySelector(".confirm-password"),
cPassInput = cPassField.querySelector(".password2"),

pwShowHidden = document.querySelectorAll(".show-icon");

// Email Function
function checkEmail() {
    const emailpattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!emailInput.value.match(emailpattern)) {
        return emailField.classList.add("invalid");
    }
    emailField.classList.remove("invalid");
}

// Password Validation
function createPass(){
    const passpattern =
    /^(?=.*[a-z])(?=.*[0-9])[a-z0-9]{8,}$/;
    if(!passInput.value.match(passpattern)){
        return passField.classList.add("invalid");
    }
    passField.classList.remove("invalid");
}

// Confirm Password Validation
function confirmPass(){
    if(passInput.value !== cPassInput.value || cPassInput.value === ""){
        return cPassField.classList.add("invalid");
    }
    cPassField.classList.remove("invalid");
}

// Calling function on form submitting
form.addEventListener("submit", (e) => {
    e.preventDefault();
    checkEmail();
    createPass();
    confirmPass();

    // calling function on key up
    emailInput.addEventListener("keyup", checkEmail);
    passInput.addEventListener("keyup", createPass);
    cPassInput.addEventListener("keyup", confirmPass);

    if(!emailField.classList.contains("invalid") &&
    !passField.classList.contains("invalid") &&
    !cPassField.classList.contains("invalid")) {
        location.href = form.getAttribute("action");
    }
});



// Hide and Show Password
pwShowHidden.forEach((eyeIcon) => {
    eyeIcon.addEventListener("click", () => {
        const pInput = eyeIcon.parentElement.querySelector("input");
        if(pInput.type === "password") {
            eyeIcon.classList.replace("bx-hide", "bx-show");
            return (pInput.type = "text");
        }
        eyeIcon.classList.replace("bx-show", "bx-hide");
            return (pInput.type = "password");
    })
})
