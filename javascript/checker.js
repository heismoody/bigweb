let pass = document.querySelector("#pass");
let confirmpass = document.querySelector("#confirmpass");
let passerror = document.querySelector("#passerror");
let passlist = document.querySelectorAll(".tipslist li");
const regexexp = /^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)(?=.*?[^\w\s]).{10,}$/;

const requirement = [{
    regex: /.{10,}/,
    index: 0
}, {
    regex: /[0-9]/,
    index: 1
}, {
    regex: /[a-z]/,
    index: 2
}, {
    regex: /[A-Z]/,

    index: 3
}, {
    regex: /[^A-Za-z0-9]/,
    index: 4
}, ]

function checkpassword(event) {
    if (pass.value !== confirmpass.value) {
        event.preventDefault();
        passerror.innerHTML = "Password didn't match.";
    } else if (!regexexp.test(pass.value)) {
        event.preventDefault();
        passerror.innerHTML = "Meet password requirement";
    } else {
        return true;
    }
}


pass.addEventListener("keyup", (e) => {
    requirement.forEach(item => {
        const isvalid = item.regex.test(e.target.value);
        const requirementitem = passlist[item.index];
        if (isvalid) {
            requirementitem.firstElementChild.className = "fa-solid fa-check";
        } else {
            requirementitem.firstElementChild.className = "fa-solid fa-circle-small";
        }
    });
});