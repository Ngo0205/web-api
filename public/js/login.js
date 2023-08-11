const loginToggle = document.getElementById("loginToggle");
const registerToggle = document.getElementById("registerToggle");
const loginForm = document.getElementById("loginForm");
const registerForm = document.getElementById("registerForm");

loginToggle.addEventListener("click", () => {
    loginForm.style.display = "block";
    registerForm.style.display = "none";
});

registerToggle.addEventListener("click", () => {
    loginForm.style.display = "none";
    registerForm.style.display = "block";
});

loginForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const username = document.getElementById("loginUsername").value;
    const password = document.getElementById("loginPassword").value;
    // Implement login logic here
    console.log("Login submitted:", username, password);
});

registerForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const username = document.getElementById("registerUsername").value;
    const password = document.getElementById("registerPassword").value;
    // Implement registration logic here
    console.log("Registration submitted:", username, password);
});
