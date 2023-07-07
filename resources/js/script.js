const forms = document.querySelector(".forms"),
pwShowHidden = document.querySelectorAll(".eye-icon");


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
