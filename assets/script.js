const login = document.getElementById("login-btn");
const signup = document.getElementById("signup-btn");
const container = document.querySelector(".container-forms");
document.querySelector(".left-tab").style.pointerEvents="none";

signup.addEventListener('click', function() {
    container.classList.add('signup-mode');
    console.log(" hello from sign up");
    document.querySelector(".left-tab").style.pointerEvents="auto"




});
login.addEventListener('click', function() {
    container.classList.remove('signup-mode');
    console.log(" hello from login");
    document.querySelector(".left-tab").style.pointerEvents="none";
});