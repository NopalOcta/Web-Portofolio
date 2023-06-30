let languageButton = document.getElementById("language-menu");
let toolsButton = document.getElementById("tools-menu");

let languageButtonText = document.getElementById("language-text-button");
let toolsButtonText = document.getElementById("tools-text-button");

let languageSkill = document.getElementById("language");
let toolsSkill = document.getElementById("tools");

languageButton.addEventListener("click", showLanguageSkill);
toolsButton.addEventListener("click", showToolsSkill);

function showLanguageSkill() {
    languageSkill.classList.add("d-flex");
    languageSkill.classList.remove("d-none");
    toolsSkill.classList.remove("d-flex");
    toolsSkill.classList.add("d-none");

    languageButtonText.classList.add("skill-button-style-2");
    languageButtonText.classList.remove("skill-button-style-1");
    toolsButtonText.classList.add("skill-button-style-1");
    toolsButtonText.classList.remove("skill-button-style-2");
}

function showToolsSkill() {
    toolsSkill.classList.add("d-flex");
    toolsSkill.classList.remove("d-none");
    languageSkill.classList.remove("d-flex");
    languageSkill.classList.add("d-none");

    toolsButtonText.classList.add("skill-button-style-2");
    toolsButtonText.classList.remove("skill-button-style-1");
    languageButtonText.classList.add("skill-button-style-1");
    languageButtonText.classList.remove("skill-button-style-2");
}
