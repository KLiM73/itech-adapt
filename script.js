function buttonAndChecks() {
    var submitButton;
    var checkbox;
    var label;

    submitButton = document.querySelector("#submit-desktop");
    checkbox = document.querySelector("#checkbox-desk");
    label = document.querySelector("#checkbox-desk-label");

    if (checkbox.checked) {
        submitButton.disabled = false;
        label.className += "--checked";
    } else {
        submitButton.disabled = true;
        label.className = label.className.replace("--checked", "");
    }
}

document.querySelector("#checkbox-desk").addEventListener("change", buttonAndChecks);

buttonAndChecks();