// JavaScript source code
/*var emailArray = [];
var passwordArray = [];

var loginBox = document.getElementById("login");
var registerBox = document.getElementById("register");
var forgotBox = document.getElementById("forgot");

var loginTab = document.getElementById("lg");
var registerTab = document.getElementById("rt");

function registerTabFun() {
    event.preventDefault();

    registerBox.style.visibility = "visible";
    loginBox.style.visibility = "hidden";
    forgotBox.style.visibility = "hidden";

    registerTab.style.backgroundColor = "rgb(12, 132, 189)";
    loginTab.style.backgroundColor = "rgba(11, 177, 224, 0.82)";
}

function loginTabFun() {
    event.preventDefault();

    registerBox.style.visibility = "hidden";
    loginBox.style.visibility = "visible";
    forgotBox.style.visibility = "hidden";

    loginTab.style.backgroundColor = "rgb(12, 132, 189)";
    registerTab.style.backgroundColor = "rgba(11, 177, 224, 0.82)";
}
function forgetPass() {
    event.preventDefault();

    registerBox.style.visibility = "hidden";
    loginBox.style.visibility = "hidden";
    forgotBox.style.visibility = "visible";

    registerTab.style.backgroundColor = "rgba(11, 177, 224, 0.82)";
    loginTab.style.backgroundColor = "rgba(11, 177, 224, 0.82)";

}*/
function changeForm(form) {
    console.log(1)
    let forms = document.querySelectorAll("form>div");
    if (form == 0) {
        forms[0].classList.remove("hidden");
        forms[0].classList.add("form-style");
        forms[1].classList.add("hidden");
        forms[1].classList.remove("form-style");
    } else {
        forms[1].classList.remove("hidden");
        forms[1].classList.add("form-style");
        forms[0].classList.add("hidden");
        forms[0].classList.remove("form-style");
    }
}

const usernameReg = /^[a-zA-Z0-9]{3,}$/; // new RegExp('')
const passwordReg = /^[A-Z]+$/; // new RegExp('')

function validate() {
    // let inputs = document.querySelectorAll("input");
    // usrname = inputs[0].value;
    // password = inputs[1].value;
    // if (usernameReg.test(usrname) && password != "") {
    //     return true;
    // }
    // return false;
    return true;
}
