let modalLogin = document.getElementById('loginModal');
let modalAdmin = document.getElementById('loginAdmin');



window.onclick = function(event) {
    if (event.target === modalLogin) {
        modalLogin.style.display = "none";
    }
    if (event.target === modalAdmin) {
        modalAdmin.style.display = "none";
    }
}
