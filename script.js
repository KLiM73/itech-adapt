function mobileForm() {
    var formDesk = document.querySelector("#form-desktop");
    var formMob = document.querySelector("#form-mobile");
    if (document.body.clientWidth < 641) {
        if (formDesk.className == "vacancy-form") {
            formDesk.classList.add("hidden");
            formMob.classList.remove("hidden");
        }
    } else {
        formDesk.classList.remove("hidden");
        if (formMob.className == "vacancy-form") {
            formMob.classList.add("hidden");
        }
    }
}

function mobileSidemenu() {
    var sideDesk = document.querySelector("#sidemenu-desktop");
    var sideMob = document.querySelector("#sidemenu-mobile");
    if (document.body.clientWidth < 1261) {
        sideDesk.classList.add("hidden");
        sideMob.classList.remove("hidden");
    } else {
        sideDesk.classList.remove("hidden");
        if (sideMob.className == "sidemenu") {
            sideMob.classList.add("hidden");
        }
    }
}

function run() {
    mobileForm();
    mobileSidemenu();
}

mobileForm();
mobileSidemenu();