const btnMenu = document.querySelector("#btn-menu");
const btnClose = document.querySelector("#btn-close");
const linkWrapper = document.querySelector(".link-wrapper");

function openSidebar() {
  linkWrapper.classList.add("open-sidebar");
}

function closeSidebar() {
  linkWrapper.classList.remove("open-sidebar");
}

btnMenu.addEventListener("click", openSidebar);
btnClose.addEventListener("click", closeSidebar);
